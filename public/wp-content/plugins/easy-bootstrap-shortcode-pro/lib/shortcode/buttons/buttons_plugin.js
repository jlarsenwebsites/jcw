
var buttons={
    title:"Button Shortcode",
    id :'oscitas-form-button',
    pluginName: 'buttons'

};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(buttons, 800);
    })();
}
function buttons_generate_shortcode(pluginObj,form,table){
    // defines the options and their default values
    // again, this is not the most elegant way to do this
    // but well, this gets the job done nonetheless
    var options;
    var type = table.find('#oscitas-button-type').val();
    if(type=='button'){
        options = {
            'title'       : 'osCitas'
        };
    }
    else{
        options = {
            'title'       : 'osCitas',
            'link'        : ''
        };
    }
    var cusclass='',icon='';
    if(table.find('#oscitas-button-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-button-class').val()+'"';
    }
    if(table.find('#oscitas-button-icon').val()!=''){
        icon= ' icon="'+table.find('#oscitas-button-icon').val()+'" ';
        icon+= ' icontype="'+table.find('#oscitas-button-icontype').val()+'" ';
        icon += ' align="'+table.find('#oscitas-button-iconalign').val()+'" ';
        if(table.find('#oscitas-button-iconcolor').val()!=''){
            icon+= ' iconcolor="'+table.find('#oscitas-button-iconcolor').val()+'" ';
        }
    }
    var customattr=['bgcolor','fgcolor','hoverbgcolor','hoverfgcolor']
    var shortcode = '['+$ebs_prefix+'button'+cusclass;

    shortcode += ' style="'+table.find('#oscitas-button-style').val();

    shortcode += ' '+table.find('#oscitas-button-size').val();
    shortcode += table.find('#oscitas-button-block').prop('checked')? ' btn-block': '';
    shortcode += '" ';
    if(table.find('#oscitas-button-style').val()=='custom'){
        jQuery(customattr).each(function(ind,val){
            if(table.find('#oscitas-button-'+val).val()!=''){
                shortcode += ' '+val+'="'+table.find('#oscitas-button-'+val).val()+'"';
            }
        });
    }
    shortcode += icon;

    shortcode += ' type="'+type+'" ';
    if(type!='button'){
        shortcode += ' target="'+(table.find('#oscitas-button-block').prop('checked')? 'true': 'false')+ '" ';
    }
    for( var index in options) {
        var value = table.find('#oscitas-button-' + index).val();
        //            var value = table.find('#oscitas-button-' + index).val();
        shortcode += ' ' + index + '="' + value + '"';
    }
    var modal_attr=jQuery('#oscitas-button-modal').val();
if(modal_attr=='initializer'){
    shortcode += ' modal="initializer"';
    if(jQuery('#oscitas-button-modal_size').val()!=''){
        shortcode += ' modal_size="'+jQuery('#oscitas-button-modal_size').val()+'"';
    }
    shortcode += ']';
    if(jQuery('#oscitas-button-modal_header').prop('checked')){
        shortcode += '<br class="osc" />['+$ebs_prefix+'modal_header]Modal Header[/'+$ebs_prefix+'modal_header]';
    }
    shortcode += '<br class="osc" />['+$ebs_prefix+'modal_body]Modal Content[/'+$ebs_prefix+'modal_body]';
    if(jQuery('#oscitas-button-modal_footer').prop('checked')){
        shortcode += '<br class="osc" />['+$ebs_prefix+'modal_footer]Modal Footer[/'+$ebs_prefix+'modal_footer]';
    }
    shortcode += '<br class="osc" />[/'+$ebs_prefix+'button]';
}
else if(modal_attr=='closer' ){
    shortcode += ' modal="closer" ]';
} else {
    shortcode += ']';
}
    return shortcode;

}
function create_oscitas_buttons(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');



    ebs_color_picker(form.find('.color'))
    table.find('#click_icon_list_button').click(function(){
        if(!jQuery(this).hasClass('osc_icon_showing_button')){
            jQuery(this).addClass('osc_icon_showing_button')
            table.find('#osc_show_iconlist_data').show();
        } else{
            jQuery(this).removeClass('osc_icon_showing_button')
            table.find('#osc_show_iconlist_data').hide();
        }
    });
    table.find('.oscitas-heading-icon_data li').click(function(){
        var val=jQuery(this).attr('data-value');
        var type=jQuery(this).attr('type');
        table.find('.oscitas-heading-icon_data li').removeClass('osc_icon_selected');
        jQuery(this).addClass('osc_icon_selected');
        table.find('#click_icon_list_button').removeClass('osc_icon_showing_button');
        table.find('#osc_show_iconlist_data').hide();
        table.find('#osc_show_icon_button').removeClass().addClass(type).addClass(val);
        table.find('#oscitas-button-icon').val(val);
        table.find('#oscitas-button-icontype').val(type);

    })
    oscitas_button_type(table);
    table.find('#oscitas-button-type').change(function(){
        oscitas_button_type(table);
    });
    oscitas_button_style(table);
    table.find('#oscitas-button-style').change(function(){
        oscitas_button_style(table)
    });
    oscitas_button_modal_initialzer(table);
    table.find('#oscitas-button-modal').change(function(){
        oscitas_button_modal_initialzer(table)
    });

}

function oscitas_button_type(table){
    var abc = jQuery('#oscitas-button-type').val();
    if('link' == abc){
        jQuery("#tr-button-link").show();
        jQuery("#tr-button-newwindow").show();
    }else{
        jQuery("#tr-button-link").hide();
        jQuery("#tr-button-newwindow").hide();
    }
    table.find('tr:visible:even').css('background', '#EFEFEF');
    table.find('tr:visible:odd').css('background', '#FFFFFF');
}
function oscitas_button_style(table){
    var abc = jQuery('#oscitas-button-style').val();
    if('custom' == abc){
        table.find('.oscitas-custom-button-style').show();
    } else{
        table.find('.oscitas-custom-button-style').hide();
    }
    table.find('tr:visible:even').css('background', '#EFEFEF');
    table.find('tr:visible:odd').css('background', '#FFFFFF');
}

function oscitas_button_modal_initialzer(table){
    var modal=jQuery('#oscitas-button-modal').val();
    if(modal=='initializer'){
        jQuery('.show_modal_initializer').show();
    } else{
        jQuery('.show_modal_initializer').hide();
    }
    table.find('tr:visible:even').css('background', '#EFEFEF');
    table.find('tr:visible:odd').css('background', '#FFFFFF');
}