var jumbotron={
    title:"Jumbotron Shortcode",
    id :'oscitas-form-jumbotron',
    pluginName: 'jumbotron'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(jumbotron);
})();
}

function jumbotron_generate_shortcode(pluginObj,form,table){
    var cusclass='';
    if(table.find('#oscitas-jumbotron-class').val()!=''){
        cusclass+= ' class="'+table.find('#oscitas-jumbotron-class').val()+'"';
    }
    if(table.find('#oscitas-jumbotron-bgcolor').val()!=''){
        cusclass+= ' bgcolor="'+table.find('#oscitas-jumbotron-bgcolor').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'jumbotron'+cusclass+']<br class="osc"/>';
    shortcode += window.mce_selection+'<br class="osc"/>';
    shortcode += '[/'+$ebs_prefix+'jumbotron]';
    return shortcode;
}
function create_oscitas_jumbotron(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

    ebs_color_picker(form.find('.color'));
}

