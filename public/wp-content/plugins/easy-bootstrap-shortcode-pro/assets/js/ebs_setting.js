/*
EBSP Settting page js
 */
function show_cdn(){
    if(jQuery('#b_js_cdn').prop('checked')){
        jQuery('.show_cdn').show();
    } else{
        jQuery('.show_cdn').hide();
    }
}
function show_respond_cdn(){
    if(jQuery('#respond_js_cdn').prop('checked')){
        jQuery('.respond_show_cdn').show();
    } else{
        jQuery('.respond_show_cdn').hide();
    }
}
jQuery(document).ready(function(){
    show_cdn();
    show_respond_cdn();
    jQuery('.check_cdn').click(function(){
        show_cdn();
    })
    jQuery('.respond_cdn').click(function(){
        show_respond_cdn();
    })

})

function show_editor_style(){
    jQuery('.ebs_editor_label').removeClass('val_selected');
    if(jQuery('#ebsp_icon').prop('checked')){
        jQuery('#ebsp_icon').parent().addClass('val_selected');
    } else if(jQuery('#ebsp_dropdown').prop('checked')){
        jQuery('#ebsp_dropdown').parent().addClass('val_selected');
    }else if(jQuery('#ebsp_media').prop('checked')){
        jQuery('#ebsp_media').parent().addClass('val_selected');
    }
}
jQuery(document).ready(function(){
    show_editor_style();
    jQuery('.ebs_editor_style').click(function(){
        show_editor_style();

    })
    ebs_color_picker('.wp_colorpicker');
    var icons = {
        header: "fa fa-caret-down",
        activeHeader: "fa fa-caret-up"
    };


    jQuery( "#ebs_accordion" ).accordion({
        icons:icons,
        collapsible: true,
        heightStyle: "content",
        active:false,
        beforeActivate:function(event,ui){
            jQuery('.osc_popover').popover('hide');
        }
    });

    jQuery('.osc_tootltip').tooltip();
    jQuery('.osc_popover').popover(
        {
            placement:'auto',
            container: 'body',
            html:true,
            content:function(){
                return jQuery(jQuery(this).data('contentwrapper')).html();
            }

        }
    );
});
