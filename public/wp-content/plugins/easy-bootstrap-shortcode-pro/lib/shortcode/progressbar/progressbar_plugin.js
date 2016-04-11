var progressbar={
    title:"Progressbar Shortcode",
    id :'oscitas-form-progressbar',
    pluginName: 'progressbar',
    setRowColors: true
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(progressbar, 800);
    })();
}
function progress_bar_render(ele,val,mini,max){
    jQuery('#progress_bar_render_'+ele).slider({

        range:'min',
        min: mini,
        max: max,
        value: val,
        animate: true,
        slide: function( event, ui ) {
            jQuery(this).parent('td').find('input[type="text"]').val( ui.value );
        }
    });
}
function show_pb_required_tr(){
    if(jQuery('#oscitas-progressbar-type-custom').prop('checked')){
        jQuery('.oscitas-progressbar-type-default').hide();
        jQuery('.oscitas-progressbar-type-linear').hide();
        jQuery('.oscitas-progressbar-type-custom').show();
    } else if(jQuery('#oscitas-progressbar-type-custom-linear').prop('checked')){
        jQuery('.oscitas-progressbar-type-default').hide();

        jQuery('.oscitas-progressbar-type-custom').hide();
        jQuery('.oscitas-progressbar-type-linear').show();
    } else
    {
        jQuery('.oscitas-progressbar-type-custom').hide();
        jQuery('.oscitas-progressbar-type-linear').hide();
        jQuery('.oscitas-progressbar-type-default').show();
    }
    pg_bar_stripped();
    ebs_pb_offset();
    ebs_pb_fillcolor();
}
function arrange_row(){
    jQuery(progressbar.hashId).find('table tr:visible:even').css('background', '#EFEFEF');
    jQuery(progressbar.hashId).find('table tr:visible:odd').css('background', '#FFFFFF');
}
function pg_bar_stripped(){
    if(jQuery('#oscitas-progressbar-stripped').prop('checked') && jQuery('#oscitas-progressbar-type-default').prop('checked')){
        jQuery('#osc_progress_animate').show();
    } else{
        jQuery('#osc_progress_animate').hide();
    }
    arrange_row();

}
function ebs_pb_offset(){
    if(jQuery('#oscitas-progressbar-lin_offset').prop('checked') && jQuery('#oscitas-progressbar-type-custom-linear').prop('checked')){
        jQuery('.lin_offset').show();
    } else{
        jQuery('.lin_offset').hide();
    }
    arrange_row();
}
function ebs_pb_fillcolor(){
    if((jQuery('#oscitas-progressbar-lin_bartype').val()=='type_1' || jQuery('#oscitas-progressbar-lin_bartype').val()=='type_2') && jQuery('#oscitas-progressbar-type-custom-linear').prop('checked')){
        jQuery('.fill_color_2').show();
    } else{
        jQuery('.fill_color_2').hide();
    }
    arrange_row();
}
function progressbar_generate_shortcode(pluginObj,form,table){
    if( jQuery('#oscitas-progressbar-type-default').prop('checked')){
        var cusclass='',type='',value='',stripped='',label='';
        if(jQuery('#oscitas-progressbar-stripped').prop('checked')){
            stripped=' barstyle="progress-striped';
            if(jQuery('#oscitas-progressbar-animated').prop('checked')){
                stripped +=' active';
            }
            stripped +='"';
        }
        if(table.find('#oscitas-progressbar-class').val()!=''){
            cusclass= ' class="'+table.find('#oscitas-progressbar-class').val()+'"';
        }
        if(table.find('#oscitas-progressbar-style').val()!=''){
            type= ' bartype="'+table.find('#oscitas-progressbar-style').val()+'"';
        }
        if(table.find('#oscitas-progressbar-value').val()!=''){
            value= ' value="'+table.find('#oscitas-progressbar-value').val()+'"';
        }
        if(table.find('#oscitas-progressbar-label').val()!=''){
            label= ' label="'+table.find('#oscitas-progressbar-label').val()+'"';
        } if(table.find('#oscitas-progressbar-label_style').val()!=''){
            label+= ' label_style="'+table.find('#oscitas-progressbar-label_style').val()+'"';
        }
        var shortcode = '['+$ebs_prefix+'progressbar type="default"'+value+cusclass+type+stripped+label;

        shortcode += ']';
    } else if(jQuery('#oscitas-progressbar-type-custom').prop('checked')){
        var custom={

            circular:{
                text:{
                    'circletype':'',
                    'barcolor':'',
                    'bgcolor':'',
                    'fillcolor':'',
                    'fontcolor':'',
                    'fontsize':'',
                    'size':'',
                    'pbwidth':'',
                    'border':'',
                    'label':'',
                    'icon':'',
                    'iconsize':'',
                    'iconcolor':'',
                    'value':'',
                    'class':''
                },
                checkbox:{
                    'animation-true':''
                }
            }
        }
        var attr='';
        jQuery.each(custom.circular.text,function(ind,val){
            if(jQuery('#oscitas-progressbar-'+ind).val()!=''){
                attr+=' '+ind+'="'+jQuery('#oscitas-progressbar-'+ind).val()+'"';
            }
        });
        jQuery.each(custom.circular.checkbox,function(ind,val){
            if(jQuery('#oscitas-progressbar-'+ind).prop('checked')){
                attr+=' '+jQuery('#oscitas-progressbar-'+ind).attr('data-attr')+'="'+jQuery('#oscitas-progressbar-'+ind).val()+'"';
            }
        });
        var shortcode = '['+$ebs_prefix+'progressbar type="custom"'+attr;

        shortcode += ']';
    }
    else if(jQuery('#oscitas-progressbar-type-custom-linear').prop('checked')){
        var custom={

            linear:{
                text:{
                    'bartype':'',
                    'max':'',
                    'increment':'',
                    'value':'',
                    'fillcolor1':'',
                    'fillcolor2':'',
                    'remaincolor':'',
                    'fontcolor':'',
                    'offsetcolor':''
                },
                checkbox:{
                    'percent':'',
                    'offset':''
                }
            }
        }
        var attr='';
        jQuery.each(custom.linear.text,function(ind,val){
            if(jQuery('#oscitas-progressbar-lin_'+ind).val()!='' && jQuery('#oscitas-progressbar-lin_'+ind).parents('tr').is(':visible')){
                attr+=' '+ind+'="'+jQuery('#oscitas-progressbar-lin_'+ind).val()+'"';
            }
        });
        jQuery.each(custom.linear.checkbox,function(ind,val){
            if(jQuery('#oscitas-progressbar-lin_'+ind).prop('checked')){
                attr+=' '+ind+'="true"';
            }
        });
        if(jQuery('#oscitas-progressbar-class').val()!=''){
            attr+=' class="'+jQuery('#oscitas-progressbar-class').val()+'"';
        }
        var shortcode = '['+$ebs_prefix+'progressbar type="custom_linear"'+attr;

        shortcode += ']';
    }
    return shortcode;
}
function create_oscitas_progressbar(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

    pg_bar_stripped();
    jQuery(pluginObj.hashId).find('table tr:visible:even').css('background', '#EFEFEF');
    jQuery(pluginObj.hashId).find('table tr:visible:odd').css('background', '#FFFFFF');
    table.find('#oscitas-progressbar-stripped').click(function(){
        pg_bar_stripped();
    })
    ebs_color_picker(form.find('.color'));
    var pgbar={
        value:[50,1,100],
        pbwidth:[40,1,50],
        size:[100,50,350],
        fontsize:[15,10,30],
        iconsize:[15,10,60]

    }
    show_pb_required_tr();
    jQuery('.define_pb_type').click(function(){
        show_pb_required_tr();
    })
    jQuery.each(pgbar,function(ind,val){
        progress_bar_render(ind,jQuery('#oscitas-progressbar-'+ind).val(),val[1],val[2])
    })
    table.find('#click_icon_list').click(function(){
        if(!jQuery(this).hasClass('osc_icon_showing')){
            jQuery(this).addClass('osc_icon_showing')
            table.find('#osc_show_iconlist').show();
        } else{
            jQuery(this).removeClass('osc_icon_showing')
            table.find('#osc_show_iconlist').hide();
        }
    });
    table.find('.oscitas-heading-icon_data li').click(function(){
        var val=jQuery(this).attr('data-value');
        var type=jQuery(this).attr('type');
        table.find('.oscitas-heading-icon_data li').removeClass('osc_icon_selected');
        jQuery(this).addClass('osc_icon_selected');
        table.find('#click_icon_list').removeClass('osc_icon_showing');
        table.find('#osc_show_iconlist').hide();
        table.find('#osc_show_icon').removeClass().addClass(type).addClass(val);
        table.find('#oscitas-progressbar-icon').val(type+' '+val);

    });
    table.find('#display_bar_type .dropdown').click(function(){
        table.find('#show_bar_list').toggle();
    })
    table.find('#ebs_progress_bar_list li').click(function(){
        var bar_type=jQuery(this).attr('data-val');
        jQuery('#oscitas-progressbar-lin_bartype').val(jQuery(this).attr('data-val'));
        jQuery('#display_bar_type .content').html(jQuery(this).html());
        table.find('#show_bar_list').toggle();
        if( bar_type=='type_1' || bar_type=='type_2'){
            jQuery('.fill_color_2').show();
        } else{
            jQuery('.fill_color_2').hide();
        }
    })
    ebs_pb_fillcolor();
    ebs_pb_offset();
    table.find('#oscitas-progressbar-lin_bartype').change(function(){
        ebs_pb_fillcolor();
    })
    table.find('#oscitas-progressbar-lin_offset').click(function(){
        ebs_pb_offset();
    })


    // handles the click event of the submit button

}

