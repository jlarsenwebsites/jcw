var servicebox={
    title:"Service Box Shortcode",
    id :'oscitas-form-servicebox',
    pluginName: 'servicebox',
    setRowColors:true
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(servicebox,800);
})();
}
function slider_render(ele,val,mini,max){
    jQuery('#slider_rander_'+ele).slider({

        range:'min',
        min: mini,
        max: max,
        value: val,
        animate: true,
        slide: function( event, ui ) {
            jQuery(this).parent('td').find('input[type="text"]').val( ui.value );
            if(ele=='icon_bg'){
                jQuery('#icon_bg_preview').css({
                    'height':ui.value+'px',
                    'width':ui.value+'px',
                    'line-height':parseInt(ui.value)-8+'px'
                });
            } else if(ele=='icon'){
                jQuery('#icon_bg_preview').css({
                    'font-size':ui.value+'px'
                });
            }else if(ele=='icon_bg_radius'){
                jQuery('#icon_bg_preview').css({
                    'border-radius':ui.value+'%'
                });
            }
        }
    });
}

function show_inline_border(){
    if(jQuery('#oscitas-servicebox-iconstyle').val()=='onborder'){
        jQuery('.icon_circle_inline').hide();
        jQuery('.icon_circle_onborder').show();
    } else{
        jQuery('.icon_circle_inline').show();
        jQuery('.icon_circle_onborder').hide();
    }
}
function __check_servicebox_iconbg(ele){
    var val=jQuery(ele).val();
    if(val=='iconcircle'){
        jQuery('.show_iconcircle_icon').show();
        show_inline_border();
    } else if(val=='iconbox'){
        jQuery('.show_iconcircle_icon').show();
        jQuery('#iconcircle_border_radius').hide();
        show_inline_border();
    } else{
        jQuery('.show_iconcircle_icon').hide();
    }
    jQuery('#oscitas-form-servicebox table tr:visible:even').css('background', '#EFEFEF');
    jQuery('#oscitas-form-servicebox table tr:visible:odd').css('background', '#FFFFFF');
}
function show_sbox_type(){
    var type=''
    if(jQuery('#oscitas-servicebox-boxtype-image').prop('checked')){
        jQuery('.show_boxtype_image').show();
        jQuery('.show_boxtype_icon').hide();
        type= 'image';
    } else if(jQuery('#oscitas-servicebox-boxtype-icon').prop('checked')) {

        jQuery('.show_boxtype_icon').show();
        jQuery('.show_boxtype_image').hide();
        __check_servicebox_iconbg('#oscitas-servicebox-iconbg');
        type= 'icon';
    }
    jQuery('#oscitas-form-servicebox table tr:visible:even').css('background', '#EFEFEF');
    jQuery('#oscitas-form-servicebox table tr:visible:odd').css('background', '#FFFFFF');
    return type;

}

function servicebox_generate_shortcode(pluginObj,form,table){
    var colorobj='', element='',data='',element2='', options='';
    if(window.boxtype=='icon'){
        colorobj={
            'iconhover-default':'',
            'iconhover-revert':'',
            'iconhover-custom':{
                'hover_iconbgcolor':'',
                'hover_iconcolor':''
            },
            'boxstyle-default':'',
            'boxstyle-custom':{
                'bgcolor':'',
                'fgcolor':''
            },
            'hover-default':'',
            'hover-custom':{
                'hover_bgcolor':'',
                'hover_fgcolor':''
            },
            'readmore':{
                'readmore_link':'',
                'readmore_text':'',
                'readmore_type':''
            },
            'readmorestyle-default':'',
            'readmorestyle-custom':{
                'readmore_bgcolor':'',
                'readmore_fgcolor':''
            }
        }
        options= ['icon','icontype','iconbg','iconbgcolor','iconcolor','headingtype','heading','class'];
    } else{
        colorobj={

            'boxstyle-default':'',
            'boxstyle-custom':{
                'bgcolor':'',
                'fgcolor':''
            },
            'hover-default':'',
            'hover-custom':{
                'hover_bgcolor':'',
                'hover_fgcolor':''
            },
            'readmore':{
                'readmore_link':'',
                'readmore_text':'',
                'readmore_type':''
            },
            'readmorestyle-default':'',
            'readmorestyle-custom':{
                'readmore_bgcolor':'',
                'readmore_fgcolor':''
            }
        }
        options= ['imgsrc','headingtype','heading','class'];
    }
    var shortcodeattr='';
    var extra=['icon_size','iconbg_size','iconbg_radius','margin_bottom','iconstyle'];
    var extrabox=['icon_size','iconbg_size','margin_bottom'];
    var extra_ano=['iconstyle','iconalign','margin_top','bordercolor','hbordercolor','borderwidth'];
    jQuery(options).each(function(ind,val){
        if(jQuery('#oscitas-servicebox-'+val).val()!=''){
            shortcodeattr+=' '+val+'="'+jQuery('#oscitas-servicebox-'+val).val()+'"';
            if(val=='iconbg'){
                if(jQuery('#oscitas-servicebox-'+val).val()=='iconcircle'){
                    jQuery(extra).each(function(ind1,val1){
                        if(jQuery('#oscitas-servicebox-'+val1).val()!=''){
                            shortcodeattr+=' '+val1+'="'+jQuery('#oscitas-servicebox-'+val1).val()+'"';
                        }
                    });
                    jQuery(extra_ano).each(function(ind1,val1){
                        if(jQuery('#oscitas-servicebox-'+val1).val()!='' && jQuery('#oscitas-servicebox-'+val1).parents('td').is(':visible')){
                            shortcodeattr+=' '+val1+'="'+jQuery('#oscitas-servicebox-'+val1).val()+'"';
                        }
                    });
                } else   if(jQuery('#oscitas-servicebox-'+val).val()=='iconbox'){
                    jQuery(extrabox).each(function(ind1,val1){
                        if(jQuery('#oscitas-servicebox-'+val1).val()!=''){
                            shortcodeattr+=' '+val1+'="'+jQuery('#oscitas-servicebox-'+val1).val()+'"';
                        }
                    });
                    jQuery(extra_ano).each(function(ind1,val1){
                        if(jQuery('#oscitas-servicebox-'+val1).val()!='' && jQuery('#oscitas-servicebox-'+val1).parents('td').is(':visible')){
                            shortcodeattr+=' '+val1+'="'+jQuery('#oscitas-servicebox-'+val1).val()+'"';
                        }
                    });
                }
            }
        }
    })

    jQuery.each(colorobj,function(ind,val){
        element=jQuery('#oscitas-servicebox-'+ind);
        if(element.prop('checked')){

            data=element.attr('data');
            shortcodeattr+=' '+data+'="'+element.val()+'"';
            if(typeof val=='object'){
                jQuery.each(val,function(ind1,val1){
                    if(jQuery('#oscitas-servicebox-'+ind1).val()!=''){
                        shortcodeattr+=' '+ind1+'="'+jQuery('#oscitas-servicebox-'+ind1).val()+'"';
                    }
                });
            }
        }
    });

    var shortcode = '['+$ebs_prefix+'servicebox type="'+window.boxtype+'"'+shortcodeattr+']'+window.mce_selection+'[/'+$ebs_prefix+'servicebox]';

    return shortcode;
}
function create_oscitas_servicebox(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');



    table.find('#click_icon_list_servicebox').click(function(){
        if(!jQuery(this).hasClass('osc_icon_showing_servicebox')){
            jQuery(this).addClass('osc_icon_showing_servicebox')
            table.find('#osc_show_iconlist_data').show();
        } else{
            jQuery(this).removeClass('osc_icon_showing_servicebox')
            table.find('#osc_show_iconlist_data').hide();
        }
    });
    window.boxtype=show_sbox_type();

    jQuery('.osc_check_boxtype').click(function(){
        window.boxtype=show_sbox_type();
    })

    ebs_insert_media_content('.upload_image_button','#osc_image_upload',form);

    table.find('#oscitas-servicebox-iconbg').change(function(){
        __check_servicebox_iconbg('#oscitas-servicebox-iconbg');
    });
    table.find('#oscitas-servicebox-iconstyle').change(function(){
        __check_servicebox_iconbg('#oscitas-servicebox-iconbg');
    });
    table.find('.oscitas-heading-icon_data li').click(function(){
        var val=jQuery(this).attr('data-value');
        var type=jQuery(this).attr('type');
        table.find('.oscitas-heading-icon_data li').removeClass('osc_icon_selected');
        jQuery(this).addClass('osc_icon_selected');
        table.find('#click_icon_list_servicebox').removeClass('osc_icon_showing_servicebox');
        table.find('#osc_show_iconlist_data').hide();
        table.find('#osc_show_icon_servicebox').removeClass().addClass(type).addClass(val);
        table.find('#oscitas-servicebox-icon').val(val);
        table.find('#oscitas-servicebox-icontype').val(type);

    })
    var slider={
        icon:[jQuery('#oscitas-servicebox-icon_size').val(),20,140],
        icon_bg:[jQuery('#oscitas-servicebox-iconbg_size').val(),50,150],
        icon_bg_radius:[jQuery('#oscitas-servicebox-iconbg_radius').val(),0,50],
        borderwidth:[jQuery('#oscitas-servicebox-borderwidth').val(),0,5]
    }
    jQuery.each(slider,function(ind,val){
        slider_render(ind,val[0],val[1],val[2])
    })

    ebs_color_picker(form.find('.color'));
    jQuery('.show_sub').click(function(){
        show_service_box_sub_meta(jQuery(this),table);
    });
    jQuery('.show_sub').each(function(){
        show_service_box_sub_meta(jQuery(this),table);
    })

}

function show_service_box_sub_meta($this,table){
    var name=$this.data('name');
    if($this.hasClass('has_sub') && $this.prop('checked')){
        jQuery('.'+name).show();
        if(name=='oscitas-servicebox-readmore'){

            if(!jQuery('.oscitas-servicebox-readmorestyle').hasClass(name)){
                jQuery('.oscitas-servicebox-readmorestyle').addClass(name)
            }
        }
    } else{
        jQuery('.'+name).hide();
    }
    table.find('tr:visible:even').css('background', '#EFEFEF');
    table.find('tr:visible:odd').css('background', '#FFFFFF');
}


