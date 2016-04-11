var separator={
    title:"Separator Shortcode",
    id :'oscitas-form-separator',
    pluginName: 'separator',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(separator);
})();
}
function separator_generate_shortcode(pluginObj,form,table){
    var cusclass='',style='',margin='';
    if(table.find('#oscitas-separator-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-separator-class').val()+'"';
    }
    if(table.find('#oscitas-separator-style').val()!=''){
        style= ' style="'+table.find('#oscitas-separator-style').val()+'"';
    }
    if(table.find('#oscitas-separator-margin').val()!=''){
        margin= ' margin="'+table.find('#oscitas-separator-margin').val()+'"';
    }
    shortcode='';

    var shortcode = '['+$ebs_prefix+'separator'+cusclass+style+margin+']';
    shortcode += jQuery('#oscitas-separator-content').val();
    shortcode += '[/'+$ebs_prefix+'separator]';

    return shortcode;
}

function create_oscitas_separator(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
}

