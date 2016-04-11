var panel={
    title:"Panel Shortcode",
    id :'oscitas-form-panel',
    pluginName: 'panel'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(panel);
})();
}

function panel_generate_shortcode(pluginObj,form,table){
    var cusclass='';
    if(table.find('#oscitas-panel-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-panel-class').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'panel style="'+table.find('#oscitas-panel-type').val()+ '"'+cusclass+']';
    shortcode += '<br/>['+$ebs_prefix+'panel-header]<br/>Heading goes here<br/>[/'+$ebs_prefix+'panel-header]';
    //shortcode += (table.find('#oscitas-panel-header').prop('checked')? '[panel-header]<br/>Heading goes here<br/>[/panel-header]': '');
    shortcode += '<br/>['+$ebs_prefix+'panel-content]<br/>Content goes here<br/>[/'+$ebs_prefix+'panel-content]';
    shortcode += (table.find('#oscitas-panel-footer').prop('checked')? '<br/>['+$ebs_prefix+'panel-footer]<br/>Footer goes here<br/>[/'+$ebs_prefix+'panel-footer]': '');
    shortcode += '<br/>[/'+$ebs_prefix+'panel]';

    return shortcode;
}
function create_oscitas_panel(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
}

