var icon={
    title:"Icon Shortcode",
    id :'oscitas-form-icon',
    pluginName: 'icon',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(icon,800);
    })();
}
function icon_generate_shortcode(pluginObj,form,table){
    var  cusclass='';
    if(table.find('#oscitas-icon-class').val()!=''){
        cusclass+= ' class="'+table.find('#oscitas-icon-class').val()+'"';
    }
    if(table.find('#oscitas-icon-iconcolor').val()!=''){
        cusclass+= ' color="'+table.find('#oscitas-icon-iconcolor').val()+'"';
    }if(table.find('#oscitas-icon-fontsize').val()!=''){
        cusclass+= ' fontsize="'+table.find('#oscitas-icon-fontsize').val()+'"';
    }

    var ficon = ' type="' +table.find('#oscitas-icon-icon').val()+'"' ;
    ficon+=' icontype="' + table.find('#oscitas-icon-icontype').val()+'"' ;
    var  shortcode='';
    shortcode='['+$ebs_prefix+'icon'+ficon+cusclass+']'
    return shortcode;
}
function create_oscitas_icon(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');


    ebs_color_picker(form.find('.color'));
    table.find('#click_icon_list_icon').click(function(){
        if(!jQuery(this).hasClass('osc_icon_showing_icon')){
            jQuery(this).addClass('osc_icon_showing_icon')
            table.find('#osc_show_iconlist_data').show();
        } else{
            jQuery(this).removeClass('osc_icon_showing_icon')
            table.find('#osc_show_iconlist_data').hide();
        }
    });
    table.find('.oscitas-heading-icon_data li').click(function(){
        var val=jQuery(this).attr('data-value');
        var type=jQuery(this).attr('type');
        table.find('.oscitas-heading-icon_data li').removeClass('osc_icon_selected');
        jQuery(this).addClass('osc_icon_selected');
        table.find('#click_icon_list_icon').removeClass('osc_icon_showing_icon');
        table.find('#osc_show_iconlist_data').hide();
        table.find('#osc_show_icon_icon').removeClass().addClass(type).addClass(val);
        table.find('#oscitas-icon-icon').val(val);
        table.find('#oscitas-icon-icontype').val(type);
    });
}

