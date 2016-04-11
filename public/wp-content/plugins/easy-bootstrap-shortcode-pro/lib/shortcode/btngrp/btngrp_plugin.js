var btngrp={
    title:"Button Group Shortcode",
    id :'oscitas-form-btngrp',
    pluginName: 'btngrp',
    setRowColors:false
};

if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(btngrp,1200);
    })();
}

function btngrp_generate_shortcode(pluginObj,form,table){
    var cusclass='',style='';
    if(table.find('#oscitas-btngrp-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-btngrp-class').val()+'"';
    }
    if(table.find('#oscitas-btngrp-style').val()!=''){
        style= ' style="'+table.find('#oscitas-btngrp-style').val()+'"';
    }
    var shortcode='['+$ebs_prefix+'buttongroup'+cusclass+style;
    shortcode+=']';
    var type='',title='',link='';
    jQuery('tr.osc_btngrp_list_item').each(function(){
        type = jQuery(this).find('.oscitas-btngrpitem-type').val();
        title = jQuery(this).find('.oscitas-btngrpitem-title').val();
        link = jQuery(this).find('.oscitas-btngrpitem-link').val();

        shortcode+='['+$ebs_prefix+'button';
        shortcode += ' style="'+jQuery(this).find('.oscitas-btngrpitem-style').val();
        shortcode += ' '+jQuery('#oscitas-btngrp-size').val();
        shortcode += '"';
        shortcode += ' type="'+type+'" ';
        if(type!='button'){
            shortcode += ' target="'+(jQuery(this).find('.oscitas-btngrpitem-target').prop('checked')? 'true': 'false')+ '" ';
            shortcode += ' link="'+link+'" ';
        }
        shortcode += ' title="'+title+'" ';
        shortcode+=']<br/>';
    });
    shortcode+='[/'+$ebs_prefix+'buttongroup]';
    return shortcode;
}
function create_oscitas_btngrp(pluginObj){

    var form = jQuery(pluginObj.hashId)

    var table = form.find('table');
    var key=parseInt(jQuery('.osc_btngrp_list_item').length);
    var btnGrp={
        key:key
    }
    form.find('#osc_add_new_dditem').click(function(){
//        var item=jQuery('.osc_btngrp_list_item:first-child').clone();
        var item=_.template(ebsBtnGrpTmp, btnGrp)
//        jQuery(item).find('td:last-child').html('<a class="osc_remove_element osc_remove_btgitem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a>')
        form.find('#oscitas-append-btngrpitem').append(item);
        btnGrp.key=parseInt(btnGrp.key)+1;

    });
    jQuery('.osc_remove_btgitem').live('click',function(){
        jQuery(this).parent().parent().remove();
    })
    jQuery('.oscitas-btngrpitem-type').live('change',function(){
        var $this=jQuery(this);
        var par=jQuery(this).parent().parent();
        var item=jQuery(this).parent();
        item.removeClass();
        var val=item.find('.oscitas-btngrpitem-type').val();
        if(val=='button'){
            item.addClass('width525')
            jQuery(par).find('.osc_btg_hide').hide();
            item.attr('colspan',3);
        } else{
            jQuery(par).find('.osc_btg_hide').show();
            item.attr('colspan',0);
            item.addClass('width175');

        }
    });
}

