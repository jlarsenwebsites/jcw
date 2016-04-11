var wptestimonial={
    title:"Custom Post Testimonial Shortcode",
    id :'oscitas-form-wptestimonial',
    pluginName: 'wptestimonial',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(wptestimonial);
})();
}
function wptestimonial_generate_shortcode(pluginObj,form,table){
    var cusclass='',excerpt='';
    if(table.find('#oscitas-wptestimonial-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-wptestimonial-class').val()+'"';
    }
    if(table.find('#oscitas-wptestimonial-excerpt').val()!=''){
        excerpt= ' length="'+table.find('#oscitas-wptestimonial-excerpt').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'post_testimonials'+cusclass+excerpt;

    shortcode += ' testimonials="' + table.find('#oscitas-wptestimonial').val();

    shortcode += '" ';
    shortcode += ']';

    return shortcode;
}
function create_oscitas_wptestimonial(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
}

