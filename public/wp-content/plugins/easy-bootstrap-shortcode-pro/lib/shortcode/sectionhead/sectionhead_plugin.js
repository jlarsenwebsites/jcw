var sectionhead={
    title:"Section Heading Shortcode",
    id :'oscitas-form-sectionhead',
    pluginName: 'sectionhead',
    setRowColors:false
};

if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(sectionhead);
})();
}


function sectionhead_generate_shortcode(pluginObj,form,table){
    var shortcode=jQuery('#oscitas-direct-insert-shortcode').val();
    return shortcode;
}

function create_oscitas_sectionhead(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

}
