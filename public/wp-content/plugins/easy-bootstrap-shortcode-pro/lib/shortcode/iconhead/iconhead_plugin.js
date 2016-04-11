var iconhead={
    title:"Icon Heading Shortcode",
    id :'oscitas-form-iconhead',
    pluginName: 'iconhead',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(iconhead,800);
})();
}
function iconhead_generate_shortcode(pluginObj,form,table){
    var type=jQuery('#oscitas-iconhead-headingtype').val();
    var cusclass='',style='';
    if(table.find('#oscitas-iconhead-icon').val()!=''){
        style=' style="' + table.find('#oscitas-iconhead-icon').val()+'"' ;
    }
    if(table.find('#oscitas-iconhead-icontype').val()!=''){
        style+=' icontype="' + table.find('#oscitas-iconhead-icontype').val()+'"' ;
    }
    if(table.find('#oscitas-iconhead-iconcolor').val()!=''){
        cusclass+= ' color="'+table.find('#oscitas-iconhead-iconcolor').val()+'"';
    }
    if(table.find('#oscitas-iconhead-class').val()!=''){
        cusclass+= ' class="'+table.find('#oscitas-iconhead-class').val()+'"';
    }

    var shortcode = '['+$ebs_prefix+'iconheading type="'+type+'"';

    shortcode += style+cusclass ;

    shortcode += ']'+table.find('#oscitas-iconhead-heading').val()+'[/'+$ebs_prefix+'iconheading]' ;

    return shortcode;
}

function create_oscitas_iconhead(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');


    ebs_color_picker(form.find('.color'));
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
        table.find('#oscitas-iconhead-icon').val(val);
        table.find('#oscitas-iconhead-icontype').val(type);

    });


}

