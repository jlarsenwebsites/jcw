var recentpost={
    title:"Recent Post Shortcode",
    id :'oscitas-form-recentpost',
    pluginName: 'recentpost',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(recentpost);
})();
}
function recentpost_generate_shortcode(pluginObj,form,table){
    var cusclass='',excerpt='',layout='';
    if(table.find('#oscitas-recentpost-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-recentpost-class').val()+'"';
    }
    if(table.find('#oscitas-recentpost-excerpt').val()!=''){
        excerpt= ' length="'+table.find('#oscitas-recentpost-excerpt').val()+'"';
    }
    if(table.find('#oscitas-recentpost-layout').val()!=''){
        layout= ' layout="'+table.find('#oscitas-recentpost-layout').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'oscrecentpost'+cusclass+excerpt+layout;

    shortcode += ' posts="' + table.find('#oscitas-recentpost-post').val();

    shortcode += '" ';
    //shortcode += ' btntag="'+table.find('#oscitas-button-type').val()+'" ';



    shortcode += ']';
    return shortcode;
}
function create_oscitas_recentpost(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
}

