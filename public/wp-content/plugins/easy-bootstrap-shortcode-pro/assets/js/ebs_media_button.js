/*
Add media button for EBS
 */
jQuery(document).ready(function(){

    jQuery('body').on('click', '.ebsp-media-button', function (e) {
        var mce_selection='';
        var $this=jQuery(this);
        var parent=$this.parents('.wp-editor-wrap');
        var editorid=parent.find('textarea').attr('id');
        jQuery('#ebsp_media_button_content').wrap('<div id="oscitas-easy-bootstrap-shortcode-pro-container" style="width: 900px; min-height: 300px" class="osc-dialog oscitas-easy-bootstrap-shortcode-pro mfp-ebsp"></div>');
        jQuery('body').addClass('ebsp-mf-shown');
        jQuery.magnificPopup.open({
            items: { src:'#oscitas-easy-bootstrap-shortcode-pro-container' },
            type: "inline",
            mainClass:'ebs-outer-popup',
            callbacks: {
                open: function () {
                    jQuery('#oscitas-easy-bootstrap-shortcode-pro-container').find('#ebsp_media_button_content').show();

                    window.is_tinyMCE_active = false;
                    if (typeof(tinyMCE) != "undefined") {
                        if (tinyMCE.activeEditor != null && tinyMCE.activeEditor.isHidden() == false) {
                            window.is_tinyMCE_active  = true;
                        } else{
                            window.is_tinyMCE_active=false;
                        }
                    }

//                window.ebsp_generator_target = $this.attr('data-target');
                    window.ebsp_generator_target = editorid;
                    if (jQuery('#wpb_visual_composer').is(':visible')) {
                        window.ebsp_generator_target = 'wpb_tinymce_content';
                    }
                    // Elegant Themes page builder
                    else if (jQuery('.et_pb_modal_settings_container').is(':visible')) {
                        window.ebsp_generator_target = 'et_pb_content_new';
                    }

                    window.mce_selection = (typeof tinyMCE !== 'undefined' && tinyMCE.activeEditor != null && tinyMCE.activeEditor.hasOwnProperty('selection')) ? tinyMCE.activeEditor.selection.getContent({
                        format: "text"
                    }) : '';
                    window.mce_selection=window.mce_selection!='' ? window.mce_selection:'Your Content';
                    apply_ebs_mixit_up('ebsp_mixitup_setup');
                },
                close: function () {
                    jQuery('#ebsp_media_button_content').unwrap();
                    jQuery('#ebsp_media_button_content').hide()
                    jQuery('body').removeClass('ebsp-mf-shown');
                    ebs_mixit_up_destroy('ebsp_mixitup_setup')
                    ebs_mixit_up_destroy('ebsp_mixitup_setup_inner');
                }
            },
            gallery: {
                enabled: true
            }
        });
    });

});