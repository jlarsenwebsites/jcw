var well={
    title:"Well Shortcode",
    id :'oscitas-form-well',
    pluginName: 'well'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(well);
})();
}

function well_generate_shortcode(pluginObj,form,table){
    var cusclass='';
    if(table.find('#oscitas-well-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-well-class').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'well type="'+jQuery('#oscitas-well-type').val()+'"'+cusclass+']<br class="osc"/>';
    shortcode += jQuery('#oscitas-well-content').val()+'<br class="osc"/>';
    shortcode += '[/'+$ebs_prefix+'well]';
    return shortcode;
}
function create_oscitas_well(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

}

