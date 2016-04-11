var labels={
    title:"Label Shortcode",
    id :'oscitas-form-label',
    pluginName: 'labels'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(labels);
})();
}
function labels_generate_shortcode(pluginObj,form,table){
    var cusclass='';
    if(table.find('#oscitas-label-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-label-class').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'label type="'+jQuery('#oscitas-label-type').val()+'"'+cusclass+']<br/>';
    shortcode += jQuery('#oscitas-label-content').val()+'<br/>';
    shortcode += '[/'+$ebs_prefix+'label]';
    return shortcode;
}
function create_oscitas_labels(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
}

