/*
 Serialize anything
 */

(function($) {

    $.fn.serializeAnything = function() {

        var toReturn	= [];
        var els 		= $(this).find(':input').get();

        $.each(els, function() {
            if (this.name && !this.disabled && (this.checked || /select|textarea/i.test(this.nodeName) || /text|hidden|password/i.test(this.type))) {
                var val = $(this).val();
                toReturn.push( encodeURIComponent(this.name) + "=" + encodeURIComponent( val ) );
            }
        });

        return toReturn.join("&").replace(/%20/g, "+");

    }

})(jQuery);

/*
Add mixit up to BES shortcode n groups
 */
function apply_ebs_mixit_up(id){
    if (jQuery('#'+id).length){
        jQuery('#'+id).mixItUp({
            selectors:{
                target: '.ebsp_mixit_up_item',
                filter: '.filter_ebsp'
            },
            callbacks:{
                onMixEnd:function(state){
                    if(state.activeFilter!='.ebs_item_search'){
                        jQuery('#no_search_found').hide();
                    }
                },
                onMixStart:function(state){
                    if(state.activeFilter!='.ebs_item_search'){
                        jQuery('#no_search_found').hide();
                    }
                },onMixLoad:function(state){
                    if(state.activeFilter!='.ebs_item_search'){
                        jQuery('#no_search_found').hide();
                    }
                },onMixBusy:function(state){
                    if(state.activeFilter!='.ebs_item_search'){
                        jQuery('#no_search_found').hide();
                    }
                }

            }
        });
    }
}
/*
Destroy mixit up
 */
function ebs_mixit_up_destroy(id){
    if (jQuery('#'+id).length && jQuery('#'+id).mixItUp('isLoaded')){
        jQuery('#'+id).mixItUp('destroy',true);
    }
}
/*
Add color picker
 */
function ebs_color_picker($ele){
    jQuery($ele).wpColorPicker({
        clear: function(){
            jQuery(this).parents('.wp-picker-container').find('.wp-color-result').addClass('ebs-picked-cleared');
        },
        change: function(){
            jQuery(this).parents('.wp-picker-container').find('.wp-color-result').removeClass('ebs-picked-cleared');
        }
    }).each(function(){
            if(jQuery(this).wpColorPicker('color') == '')
                jQuery(this).parents('.wp-picker-container').find('.wp-color-result').addClass('ebs-picked-cleared');
        });
}

/*
open magnific popup
 */
function open_dialogue(pluginObj,width,height){
    close_dialogue(pluginObj);
    var $width='';

    if(typeof(width)==='undefined' || width=='auto') {

    } else{
        $width='style="width:'+width+'px;"';
    }
    if(jQuery(pluginObj.hashId).length){
        jQuery(pluginObj.hashId).remove();
    }
    var ebspData='';
    var $template_markup='<div id="oscitas-easy-bootstrap-shortcode-pro-container" '+$width+' class="osc-dialog oscitas-easy-bootstrap-shortcode-pro mfp-ebsp"><div class="preset_outer"><div id="ebsp-preset-saving" class="preset_notificatons"><img class="loading-img" src="'+ebs_asseturl+'images/loading.gif"> <span>Saving...</span></div><div id="ebsp-preset-deleting" class="preset_notificatons"><img class="loading-img" src="'+ebs_asseturl+'images/loading.gif"> <span>Deleting...</span></div><div id="ebsp-preset-loading" class="preset_notificatons"><img class="loading-img" src="'+ebs_asseturl+'images/loading.gif"> <span>Loading...</span></div></div>' +
        '<div id="ebs_ui_tabs"> <ul>' +
        '<li><a href="#ebs_shortcode_container">Shortcode</a></li>' +
        '<li><a href="#ebs_help_container">Help</a></li>' +
        '<li><a href="#ebs_navigation_container">Navigation</a></li>' +
        '</ul>' +
        '<div id="ebs_shortcode_container"><div class="loading-img-outer"><img class="loading-img" src="'+ebs_asseturl+'images/ebs-loading.png"></div> </div>' +
        '<div id="ebs_help_container"><div class="loading-img-outer"><img class="loading-img" src="'+ebs_asseturl+'images/ebs-loading.png"></div></div>' +
        '<div id="ebs_navigation_container"><div id="ebsp_mixitup_setup_inner" class="ebsp_mixitup_setup">'+jQuery('.ebs_link_section').get(0).outerHTML+window.mix_filter_content+'</div></div>' +
        '</div>' +
        '</div>';
    if(typeof(height)==='undefined') height = 'auto';

    var ebs_ajax_data={
        id:pluginObj.id,
        title:pluginObj.title,
        name:pluginObj.pluginName
    }
    jQuery('body').addClass('ebsp-mf-shown');
    jQuery.magnificPopup.open({
        items: { src:$template_markup },
        type: "inline",
        mainClass:'ebs-inner-popup',
        callbacks: {
            open: function () {


                jQuery('#ebs_ui_tabs').tabs({
                    activate: function( event, ui ) {
                        ebs_mixit_up_destroy('ebsp_mixitup_setup')
                        ebs_mixit_up_destroy('ebsp_mixitup_setup_inner');
                        if (ui.newPanel.find('#ebsp_mixitup_setup_inner').length){
                            apply_ebs_mixit_up('ebsp_mixitup_setup_inner');
//                            jQuery('#ebs_ui_tabs').height((ui.newPanel).height()+380);
                        } else{
//                            jQuery('#ebs_ui_tabs').height((ui.newPanel).height()+83);
                        }
                        if(ui.newPanel.selector=="#ebs_help_container"){
                            if (ui.newPanel.find('iframe').length){

                                ui.newPanel.find('iframe').height(  ui.newPanel.find('iframe').contents().find("body > div").height()+170);
                                ui.newPanel.find('iframe').contents().find("html").css({'height':'auto',
                                    'overflow-y':'auto'});
                                ui.newPanel.find('iframe').contents().find("body").css('height','auto');
                            } else{
                                jQuery.ajax({
                                    url:ebs_ajaxurl,
                                    type:'post',
                                    data:{
                                        action:'fecth_template_help_data',
                                        data:ebs_ajax_data
                                    },
                                    success:function(res){

                                        jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #ebs_help_container').html(res);
                                        jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #ebs_help_container').find('iframe').load(function(){
                                            jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #ebs_help_container').find('iframe').height( jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #ebs_help_container').find('iframe').contents().find("body > div").height()+170);
                                            jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #ebs_help_container').find('iframe').contents().find("html").css({'height':'auto',
                                                'overflow-y':'auto'});
                                            jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #ebs_help_container').find('iframe').contents().find("body").css('height','auto');
                                        })
                                    }
                                });
                            }
                        }


                    }


                });
                jQuery('#dialog_link, ul#icons li').hover(
                    function() { jQuery(this).addClass('ui-state-hover'); },
                    function() { jQuery(this).removeClass('ui-state-hover'); }
                );
                jQuery.ajax({
                    url:ebs_ajaxurl,
                    type:'post',
                    data:{
                        action:'fecth_template_content',
                        data:ebs_ajax_data
                    },
                    success:function(res){
                        var shortcode_data= jQuery.parseJSON(res)
                        jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #ebs_shortcode_container').html(shortcode_data.markup);

                        ebspData=shortcode_data.ebsData;
                        after_template_markup_setup(pluginObj,ebs_ajax_data,shortcode_data.ebsData);
                    }
                })
            },
            close: function () {
                ebs_mixit_up_destroy('ebsp_mixitup_setup')
                ebs_mixit_up_destroy('ebsp_mixitup_setup_inner');
                jQuery('body').removeClass('ebsp-mf-shown');
            }
        }

    });

}

/*
Fetch ebs shortcode content
 */
function after_template_markup_setup(pluginObj,ebs_ajax_data,ebsData){
    if(pluginObj.pluginName=='pagination'){
        window.ebsp_wpActiveEditor = window.wpActiveEditor;
        // Set new active editor

        window.wpActiveEditor = window.ebsp_generator_target;

        if(window.is_tinyMCE_active==false){
            jQuery('#oscitas-direct-insert-shortcode').val('<!--custompagination-->');
        } else{

            jQuery('#oscitas-direct-insert-shortcode').val('<img src="' + ebs_url+'/lib/shortcode/'+pluginObj.pluginName+'/trans.gif" class="mce-wp-custompagination mceItemNoResize"  title="OscNextPage"/>');
        }
        window.wpActiveEditor = window.ebsp_wpActiveEditor;

    }
    if(  jQuery('#ebs_current_preset').val()!=''){
        jQuery('.ebs-gp-new_as').show();
    } else{
        jQuery('.ebs-gp-new_as').hide();
    }
    eval('create_oscitas_'+pluginObj.pluginName+'(pluginObj,ebsData);')

    jQuery('.osc_tootltip').tooltip();
    jQuery('.osc_popover').popover(
        {
            placement:'auto',
//                                container: 'body',
            trigger:'hover',
            html:true,
            content:function(){
                return jQuery(jQuery(this).data('contentwrapper')).html();
            }

        }
    );
    shake_shortcodes();
    setTimeout(function(){
        jQuery('#frame_'+ebs_ajax_data.name).load(function(){
            jQuery(this).height( jQuery(this).contents().find("body").height()+100);

        })
    },100);
    var form=jQuery(pluginObj.hashId);
    var table = form.find('table');

    jQuery('.ebsp-preview-button').click(function(){
        var $this=jQuery(this);
        $this.parent().find('.spinner').show();
        var shortcode=eval(pluginObj.pluginName+'_generate_shortcode(pluginObj,form,table)');
        jQuery.ajax({
            url:ebs_ajaxurl,
            type:'post',
            data:{
                action:'ebs_set_preview_content',
                shortcode:shortcode
            },
            success:function(res){
                $this.parent().find('.spinner').hide();
                var  win= window.open(ebs_preview_page_path,'osc_ebs_pro');
                if (win.focus)
                {
                    win.focus();
                }
            }
        });
    })
    jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .ebs-gp-new').click(function(){
        if(jQuery(this).hasClass('ebs-gp-new_as')){
            jQuery('#ebs_current_preset').val('');
        }
        var ebs_preset_data={
            action:'save_ebs_preset',
            preset:jQuery(pluginObj.hashId).serializeAnything(),
            shortcode:pluginObj.pluginName
        }
        var name;
        var presertid=jQuery('#ebs_current_preset').val();
        if(presertid!=''){
            name='true';
            ebs_preset_data['id']=presertid;
            ebs_preset_data['name']=jQuery('#ebs_preset_val_'+presertid).find('em').text();;
        } else{
            name = prompt(ebs.presets_prompt_msg, ebs.presets_prompt_value);
            ebs_preset_data['name']=name;
        }
        if (name !== '' && name !== null) {
            jQuery('#ebsp-preset-saving').show();
            jQuery.ajax({
                url:ebs_ajaxurl,
                type:'post',
                data:ebs_preset_data,
                success:function(res){

                    if(jQuery(res).length){
                        jQuery('.get_preset_data').removeClass('preset_selected');
                        jQuery('.ebsp-gp-list').find('.not_found').hide();
                        jQuery('.ebsp-gp-list').append(res);

                        jQuery('.get_preset_data').click(function(){
                            ebs_bind_preset_new_var(jQuery(res),pluginObj,ebs_ajax_data)
                        });

                        var id=jQuery(res).data('id');
                        jQuery('#ebs_current_preset').val(id);
                        jQuery(res).find('i').click(function(e){
                            e.stopPropagation();
                            var  $pare= jQuery(this).parent('.get_preset_data');
                            remove_existing_preset($pare,$pare.data('id'));

                            // Prevent default action
                            e.preventDefault();
                        })


                    }
                    jQuery('#ebsp-preset-saving').hide();
                }
            });
        }
    })
    jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .get_preset_data').click(function(){
        ebs_bind_preset_new_var(jQuery(this),pluginObj,ebs_ajax_data)
    });
    jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .get_preset_data i').click(function(e){
        e.stopPropagation();
        var  $pare= jQuery(this).parent('.get_preset_data');
        remove_existing_preset($pare,$pare.data('id'));

        // Prevent default action
        e.preventDefault();
    });
    jQuery('.ebs-insert-shortcode').click(function(){
        var shortcode=eval(pluginObj.pluginName+'_generate_shortcode(pluginObj,form,table)');
        ebs_insert_shortcode(shortcode);
        close_dialogue(pluginObj.hashId);
    });


}

/*
chECK IF PAGINATION OVERWRITTEN FOR current page
 */
function check_pagination_overwritten(){
    if(jQuery('#overwrite_global_pagination').prop('checked')){
        jQuery('#ebs_global_overwritten').show();
    } else{
        jQuery('#ebs_global_overwritten').hide();
    }
}

/*
DELETE existing preset
 */
function remove_existing_preset($this,id){
    var confirmnew= confirm(ebs.confirm_preset);
    if(confirmnew){
        jQuery('#ebsp-preset-deleting').show();
        jQuery.ajax({
            url:ebs_ajaxurl,
            type:'post',
            data:{
                action:'remove_existing_preset',
                id:id
            },
            success:function(res){
                $this.remove();
                jQuery('#ebsp-preset-deleting').hide();
                if(jQuery('#ebs_current_preset').val()==id){
                    jQuery('#ebs_current_preset').val('');
                }
            }
        });
    }
}

/*
Get preset contenet
 */
function ebs_bind_preset_new_var($this,pluginObj,ebs_ajax_data){
    var id=$this.data('id');
    jQuery('#ebsp-preset-loading').show();
    var ebs_get_preset_data={
        action :'ebs_get_preset_data',
        id:id,
        data:ebs_ajax_data
    }
    jQuery.ajax({
        url:ebs_ajaxurl,
        type:'post',
        data:ebs_get_preset_data,
        success:function(res){
            var shortcode_data= jQuery.parseJSON(res)
            jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #ebs_shortcode_container').html(shortcode_data.markup);
            jQuery('#ebsp-preset-loading').hide();
            jQuery('#ebs_current_preset').val(id);
            jQuery('.get_preset_data').removeClass('preset_selected');
            jQuery('#ebs_preset_val_'+id).addClass('preset_selected');
            after_template_markup_setup(pluginObj,ebs_ajax_data,shortcode_data.ebsData);

        }
    });
}
//var send_attachment_bkp = wp.media.editor.send.attachment;
//var button = jQuery(this);
//var id_textbox = jQuery(this).prev();
//_custom_media = true;
//wp.media.editor.send.attachment = function(props, attachment){
//    if ( _custom_media ) {
//        jQuery(id_textbox).val(attachment.url);
//    } else {
//        return _orig_send_attachment.apply( this, [props, attachment] );
//    };
//}
//
//wp.media.editor.open(button);
//return false;


/*
upload image
 */
function ebs_insert_media_content(ele,container,parent){

    var ebs_media_uploader_frame;
    var   formfield =jQuery(ele).prev();
    jQuery(formfield).blur(function() {
        parent.find(container).find('img').remove();
        parent.find(container).find('.invalid_url').remove();
        var imgUrl=jQuery(formfield).val();
        if(imgUrl!=''){
            var img = new Image();
            img.onerror = function() {  parent.find(container).append('<span class="invalid_url">Invalid Image URL</span>'); }
            img.onload =  function() {  parent.find(container).append('<img src="' + imgUrl+ '" alt="" />');}
            img.src = imgUrl

        }
    })
    parent.find(ele).click(function(e) {
        e.preventDefault();


        // If the media frame already exists, reopen it.
        if ( ebs_media_uploader_frame ) {
            ebs_media_uploader_frame.open();
            return;
        }
        if (typeof (frame) !== 'undefined') frame.close();
        ebs_media_uploader_frame = wp.media.frames.ebs_media_uploader_frame = wp.media({
            title: 'Upload Image',
            library: {
                type: 'image'
            },
            button: {
                text: 'Add selected image'
            },
            multiple: false
        });
        ebs_media_uploader_frame.on('select', function () {
            var files = ebs_media_uploader_frame.state().get('selection').toJSON();
            parent.find(container).find('img').remove();
            jQuery.each(files, function (i) {
                jQuery(formfield).val(this.url);
                parent.find(container).append('<img src="' + this.url + '" alt="" />')
            });
        });
        ebs_media_uploader_frame.open();
    });


}

/*
Insert generated shortcode
 */

function ebs_insert_shortcode(shortcode){

    if(window.ebsp_style=='media'){
        if( window.is_tinyMCE_active  == true){
            tinyMCE.activeEditor.selection.setContent(shortcode);
        } else{
            window.ebsp_wpActiveEditor = window.wpActiveEditor;
            // Set new active editor
            window.wpActiveEditor = window.ebsp_generator_target;
            window.wp.media.editor.insert(shortcode);
            // Restore previous editor
            window.wpActiveEditor = window.ebsp_wpActiveEditor;
        }
    } else{
        if( tinyMCE.activeEditor!=null){
            tinyMCE.activeEditor.selection.setContent(shortcode);
        }
    }
}

function close_dialogue(dialogueid){
    jQuery.magnificPopup.close();
    jQuery('body').removeClass('ebsp-mf-shown');

}

var plugininfo={
    longname : 'shortcodename',
    author : 'Oscitas Themes',
    authorurl : 'http://www.oscitasthemes.com/',
    infourl : 'http://www.oscitasthemes.com/',
    version : "1.0.0"
}

/*
Create tinymce shortcode icons
 */
function _create_tinyMCE_options(pluginObj, width,height) {
    if(typeof(width)==='undefined') width = 'auto';
    if(typeof(height)==='undefined') height = 'auto';
    var pluginName = 'oscitas'+pluginObj.pluginName.substr(0, 1).toUpperCase() + pluginObj.pluginName.substr(1);
    pluginObj.hashId = '#'+pluginObj.id;

    var options = {
        init : function(ed, url) {
            ed.addButton('oscitas'+pluginObj.pluginName, {
                title : pluginObj.title,
                image : url+'/icon.png',
                icon:'ebs_renu dfdf',
                class:'ebs_renu vdfgfd',
                onclick : function() {
                    if(typeof pluginObj.content!='undefined' && pluginObj.content!=false){
                        ebs_insert_shortcode(pluginObj.content);

                    }else{
                        window.mce_selection=(typeof tinyMCE !== 'undefined' && tinyMCE.activeEditor != null && tinyMCE.activeEditor.hasOwnProperty('selection')) ? tinyMCE.activeEditor.selection.getContent({
                            format: "text"
                        }) : '';
                        window.mce_selection=window.mce_selection!='' ? window.mce_selection:'Your Content';
                        eval('open_dialogue(pluginObj,"'+width+'","'+height+'")');
                        if (pluginObj.setRowColors) {
                            jQuery(pluginObj.hashId+' > table > tbody > tr:visible:even').css('background', '#EFEFEF');
                            jQuery(pluginObj.hashId+' > table > tbody > tr:visible:odd').css('background', '#FFFFFF');
                        }
                    }
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
        getInfo : function() {
            plugininfo.longname=pluginObj.title;
            return plugininfo;
        }
    };
    tinymce.create('tinymce.plugins.'+pluginName, options);
    options = eval('tinymce.plugins.'+pluginName);
    //return options;
    tinymce.PluginManager.add('oscitas'+pluginObj.pluginName, tinymce.plugins[pluginName]);
}

/*
Create tinymce dropdown
 */
function _create_tinyMCE_dropdown(pluginObj,width,height) {
    if(typeof(width)==='undefined') width = 'auto';
    if(typeof(height)==='undefined') height = 'auto';
    pluginObj.hashId = '#'+pluginObj.id;
    if(typeof pluginObj.content!='undefined' && pluginObj.content!=false){
        ebs_insert_shortcode(pluginObj.content);
    }else{
        eval('open_dialogue(pluginObj,"'+width+'","'+height+'")');
        if (pluginObj.setRowColors) {
            jQuery(pluginObj.hashId+' > table > tbody > tr:visible:even').css('background', '#EFEFEF');
            jQuery(pluginObj.hashId+' > table > tbody > tr:visible:odd').css('background', '#FFFFFF');
        }
    }
}
var $columnnum=ebs.ebs_column_num;
var $ebs_prefix=ebs.ebs_prefix;
var effects={
    none:'None',
    pulse:'Pulse',
    flipInX : 'flipInX',
    fadeIn :'fadeIn',
    fadeInUp:'fadeInUp',
    fadeInDown :'fadeInDown' ,
    fadeInLeft :'fadeInLeft' ,
    fadeInRight:'fadeInRight',
    fadeInUpBig :'fadeInUpBig' ,
    fadeInDownBig  :'fadeInDownBig',
    fadeInDownBig :'fadeInDownBig',
    fadeInRightBig:'fadeInRightBig',
    bounceIn:'bounceIn',
    bounceInDown :'bounceInDown',
    bounceInLeft:'bounceInLeft',
    bounceInRight :'bounceInRight',
    rotateInUpLeft :'rotateInUpLeft',
    rotateInDownLeft:'rotateInDownLeft',
    rotateInUpRight :'rotateInUpRight',
    rotateInDownRight  :'rotateInDownRight',
    lightSpeedRight :'lightSpeedRight',
    lightSpeedLeft   :'lightSpeedLeft',
    rollin:'rollin'
}


/*
Effect to b applied on mixit up shortcodes
 */
function shake_shortcodes(){
    jQuery('.ebsp_mixit_up span').hover(function(){
        jQuery(this).find('img').addClass('animated').addClass('shake');
    }, function(){
        jQuery(this).find('img').removeClass('animated').removeClass('shake');
    })
}

/*
Add rainy effect and set attribute accordingly in popup windiow
 */
function ebs_image_rainy_effect_check(table,ele){
    if(table.find(ele).prop('checked')){
        jQuery('.ebs_rainy_effect_dependent').show();
    } else{
        jQuery('.ebs_rainy_effect_dependent').hide();
    }
    table.find('tr:visible:even').css('background', '#EFEFEF');
    table.find('tr:visible:odd').css('background', '#FFFFFF');
}

jQuery(document).ready(function(){

    jQuery('.ebsp_mixit_up .ebsp-block').live('click',function(){
        jQuery.magnificPopup.close();
        jQuery('body').removeClass('ebsp-mf-shown');
        var name=jQuery(this).attr('attr-name');
        var width=jQuery(this).attr('attr-width');
        var height=jQuery(this).attr('attr-height');
        if(width==''){
            width='auto'
        }
        if(height==''){
            height='auto'
        }

        eval('_create_tinyMCE_dropdown('+name+',"'+width+'","'+height+'")');


    })

    check_pagination_overwritten();

    jQuery('#overwrite_global_pagination').click(function(){
        check_pagination_overwritten();
    })
    jQuery('.ebsp-cancel-button').live('click',function(){
        close_dialogue();
    });

    /*jQuery('#shake-img').shake(
     function(){ jQuery(this).addClass('hover') },
     function(){ jQuery(this).removeClass('hover') }
     )*/
    shake_shortcodes();


    jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .ebs_perform_search').live('click',function(){
        if(jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #ebsp_mixitup_setup').length){
            var id='ebsp_mixitup_setup';

        } else{
            var id='ebsp_mixitup_setup_inner';
        }

        jQuery('#no_search_found').remove();
        jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .ebsp_mixit_up_item').removeClass('ebs_item_search')
        var searchVal=jQuery.trim(jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .ebs_search_box').val().toLowerCase());
        if(searchVal!=''){
            jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .ebsp_mixit_up_item').each(function(){
                var $this=jQuery(this);
                var tags= jQuery(this).data('tag');
                if (tags.search(searchVal) != -1) {
                    $this.addClass('ebs_item_search');
                }

//            tags=tags.split(',');
//                var tagsArr=[];
//                jQuery.each(tags.split(","), function(){
//                    tagsArr.push(jQuery.trim(this));
//                });
//                if(jQuery.inArray( searchVal, tagsArr )>=0){
//                    $this.addClass('ebs_item_search');
//                }
            })
        }
        if(!jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .ebs_item_search').length){
            jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .ebsp_mixit_up').append('<div id="no_search_found" class="ebsp-block  ebsp_mixit_up_item ebs_item_search">No item match your search.</div>');
        }


        jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #'+id).mixItUp('filter', '.ebs_item_search');


    })


    jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .filter_ebsp').live('click',function(){
        if(jQuery('#oscitas-easy-bootstrap-shortcode-pro-container #ebsp_mixitup_setup').length){
            var id='ebsp_mixitup_setup';

        } else{
            var id='ebsp_mixitup_setup_inner';
        }
        var state = jQuery('#'+id).mixItUp('getState');
        if(state.activeFilter!='.ebs_item_search'){
            jQuery('#no_search_found').hide();
        }

    })

    var ebs_preset_hover_timer;

    // Presets manager - mouseenter
    jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .ebsp-generator-presets').live('mouseenter click', function () {
        clearTimeout(ebs_preset_hover_timer);
        jQuery('.ebsp-gp-popup').show();
    });
    // Presets manager - mouseleave
    jQuery('#oscitas-easy-bootstrap-shortcode-pro-container .ebsp-generator-presets').live('mouseleave', function () {
        ebs_preset_hover_timer = window.setTimeout(function () {
            jQuery('.ebsp-gp-popup').fadeOut(200);
        }, 600);
    });



});
