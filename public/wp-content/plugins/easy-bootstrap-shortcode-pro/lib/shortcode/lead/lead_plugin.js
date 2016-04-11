var lead={
    title:"Lead Shortcode",
    id :'oscitas-form-lead',
    pluginName: 'lead',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(lead);
})();
}
function lead_generate_shortcode(pluginObj,form,table){
    var shortcode='';
    var cusclass='';
    if(table.find('#oscitas-lead-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-lead-class').val()+'"';
    }
    if(form.find('#oscitas-lead-content').val()!=''){
        shortcode = '['+$ebs_prefix+'lead'+cusclass+' align="'+form.find('#oscitas-lead-alignment').val()+'"]'+form.find('#oscitas-lead-content').val()+'[/'+$ebs_prefix+'lead]';
    }
    return shortcode;
}
function create_oscitas_lead(pluginObj){
    var form = jQuery(pluginObj.hashId);
    var table = form.find('table');
}
