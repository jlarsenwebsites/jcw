var vertical_space={
    title:"Vertical Space",
    id :'oscitas-form-vertical_space',
    pluginName: 'vertical_space',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(vertical_space);
    })();
}

function vertical_space_generate_shortcode(pluginObj,form,table){
    var cusclass='',margin='';
    if(table.find('#oscitas-vertical_space-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-vertical_space-class').val()+'"';
    }
    if(table.find('#oscitas-vertical_space-height').val()!=''){
        margin= ' height="'+table.find('#oscitas-vertical_space-height').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'space'+cusclass+margin;
    shortcode += ']';

    return shortcode;
}
function create_oscitas_vertical_space(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
}

