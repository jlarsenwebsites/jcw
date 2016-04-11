var testimonial={
    title:"Testimonial Shortcode",
    id :'oscitas-form-testimonial',
    pluginName: 'testimonial',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(testimonial);
})();
}
function testimonial_generate_shortcode(pluginObj,form,table){
    var shortcode=jQuery('#oscitas-direct-insert-shortcode').val();
    return shortcode;
}

function create_oscitas_testimonial(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

}
