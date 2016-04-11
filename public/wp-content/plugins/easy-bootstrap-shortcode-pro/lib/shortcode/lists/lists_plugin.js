var lists={
    title:"List Group Shortcode",
    id :'oscitas-form-lists',
    pluginName: 'lists'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(lists,800);
})();
}
function lists_generate_shortcode(pluginObj,form,table){
    var options = {
        'type'       : 'arrow'
    },list=0,list_type;
    var cusclass='';
    if(table.find('#oscitas-list-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-list-class').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'list'+cusclass;
    var list_item=jQuery('#oscitas-list-item').val();
    if(isNaN(list_item)==false){
        list=list_item;
    } else{
        list=3;
    }


    shortcode += ']<br/>';
    if(table.find('#oscitas-list-type').val()!=''){
        list_type=' type="'+table.find('#oscitas-list-type').val()+'"';
        if(table.find('#oscitas-list-type').val()=='custom'){
            list_type+=' icon="'+table.find('#oscitas-icon-icon').val()+'"';
            list_type+=' icontype="'+table.find('#oscitas-icon-icontype').val()+'"';
            if(table.find('#oscitas-list-iconcolor').val()!=''){
                list_type+=' iconcolor="'+table.find('#oscitas-list-iconcolor').val()+'"';
            }
        }
    }
    else{
        list_type='';
    }
    for(var i=1;i<=list;i++){
        shortcode +='['+$ebs_prefix+'li'+list_type+']your list content[/'+$ebs_prefix+'li]<br/>'
    }
    shortcode +='[/'+$ebs_prefix+'list]';
    return shortcode;
}

function create_oscitas_lists(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

    ebs_color_picker(form.find('.color'));
    check_custom_list_style();
    jQuery('#oscitas-list-type').change(function(){
        check_custom_list_style();
    })
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

    })

}
function check_custom_list_style(){
    if(jQuery('#oscitas-list-type').val()=='custom'){
        jQuery('.osc_list_icon').show();
    }
    else{
        jQuery('.osc_list_icon').hide();
    }
}

