var dropdown={
    title:"Button Dropdown Shortcode",
    id :'oscitas-form-dropdown',
    pluginName: 'dropdown'
};

if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(dropdown);
})();
}

function dropdown_generate_shortcode(pluginObj,form,table){
    var split,dropup;
    var type,link,title,disabled;
    var heading= jQuery('#oscitas-dropdown-heading').val();

    if(jQuery('#oscitas-dropdown-split').is(":checked")==true){
        split= jQuery('#oscitas-dropdown-split').val();
    } else{
        split='';
    }
    var size= jQuery('#oscitas-dropdown-size').val();
    var style= jQuery('#oscitas-dropdown-style').val();
    dropup= 'dropup="'+jQuery('#oscitas-dropdown-dropup').val()+'"';

    var cusclass;
    if(table.find('#oscitas-dropdown-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-dropdown-class').val()+'"';
    }
    else{
        cusclass='';
    }
    var shortcode='';
    shortcode ='['+$ebs_prefix+'dropdown '+dropup+cusclass+']<br/>';
    shortcode +='['+$ebs_prefix+'dropdownhead style="'+style+'" size="'+size+'" split="'+split+'"]<br/>';
    shortcode += heading+'<br/>';
    shortcode +='[/'+$ebs_prefix+'dropdownhead]<br/>';
    shortcode +='['+$ebs_prefix+'dropdownbody]<br/>';

    jQuery('tr.osc_dropdown_list_item').each(function(index){

        type = jQuery(this).find('.oscitas-dropdownitem-type').val();
        link = jQuery(this).find('.oscitas-dropdownitem-link').val();
        title = jQuery(this).find('.oscitas-dropdownitem-title').val();

        if(jQuery(this).find('.oscitas-dropdownitem-disabled').is(":checked")==true){
            disabled='disabled="'+jQuery(this).find('.oscitas-dropdownitem-disabled').val()+'"';
        } else{
            disabled='';
        }
        if(type=='divider'){
            shortcode +='['+$ebs_prefix+'dropdownitem type="'+type+'"][/'+$ebs_prefix+'dropdownitem]<br/>';
        } else if(type=='menuitem'){
            shortcode +='['+$ebs_prefix+'dropdownitem type="'+type+'" link="'+link+'" '+disabled+']'+title+'[/'+$ebs_prefix+'dropdownitem]<br/>';
        }

    });

    shortcode +='[/'+$ebs_prefix+'dropdownbody]<br/>';
    shortcode +='[/'+$ebs_prefix+'dropdown]';
    return shortcode;
}
function create_oscitas_dropdown(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
    var key=parseInt(jQuery('.osc_dropdown_list_item').length);
    var btnDropdown={
        key:key
    }

    form.find('#osc_add_new_dditem').click(function(){
        var item=_.template(ebsDropdownTmp, btnDropdown)
        form.find('#oscitas-append-dropdownitem').append(item);
        btnDropdown.key=parseInt(btnDropdown.key)+1;

    });
    jQuery('.osc_remove_dditem').live('click',function(){
        jQuery(this).parent().parent().remove();
    })
    jQuery('.osc_type_change').live('change',function(){
        var par=jQuery(this).parent();
        var item=jQuery(this);
        var val=item.find('.oscitas-dropdownitem-type').val();
        if(val=='divider'){
            jQuery(par).find('.osc_hide').hide();
            item.attr('colspan',4);
        } else{
            jQuery(par).find('.osc_hide').show();
            item.attr('colspan',0);
        }
    })

}

