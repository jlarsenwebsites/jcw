var btngrptool={
    title:"Button Group Toolbar Shortcode",
    id :'oscitas-form-btngrptool',
    pluginName: 'btngrptool',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(btngrptool);
})();
}

function btngrptool_generate_shortcode(pluginObj,form,table){
var shortcode=jQuery('#oscitas-direct-insert-shortcode').val();
    return shortcode;
}

function create_oscitas_btngrptool(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

}
