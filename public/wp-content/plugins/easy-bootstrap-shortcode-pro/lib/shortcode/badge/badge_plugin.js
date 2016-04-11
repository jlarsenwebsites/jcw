var badge={
    title:"Badge Shortcode",
    id :'oscitas-form-badge',
    pluginName: 'badge'
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(badge);
    })();
}

function badge_generate_shortcode(pluginObj,form,table){
    var cusclass='';
    if(table.find('#oscitas-badge-class').val()!=''){
        cusclass+= ' class="'+table.find('#oscitas-badge-class').val()+'"';
    }
    if(table.find('#oscitas-badge-color').val()!=''){
        cusclass+= ' color="'+table.find('#oscitas-badge-color').val()+'"';
    } if(table.find('#oscitas-badge-bgcolor').val()!=''){
        cusclass+= ' bgcolor="'+table.find('#oscitas-badge-bgcolor').val()+'"';
    }if(table.find('#oscitas-badge-value').val()!=''){
        cusclass+= ' value="'+table.find('#oscitas-badge-value').val()+'"';
    }  if(table.find('#oscitas-badge-float_right').prop('checked')){
        cusclass+= ' float_right="true"';
    }
    var shortcode = '['+$ebs_prefix+'badge'+cusclass+']';

    return shortcode;
}
function create_oscitas_badge(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

    ebs_color_picker(form.find('.color'));
}

