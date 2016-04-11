var recentwork={
    title:"Recent Work Shortcode",
    id :'oscitas-form-recentwork',
    pluginName: 'recentwork',
    setRowColors:false
};

function recentwork_generate_shortcode(pluginObj,form,table){
    var cusclass='',excerpt='',layout='';
    if(table.find('#oscitas-recentwork-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-recentwork-class').val()+'"';
    }
    if(table.find('#oscitas-recentwork-layout').val()!=''){
        layout= ' layout="'+table.find('#oscitas-recentwork-layout').val()+'"';
    }
    if(table.find('#oscitas-recentwork-excerpt').val()!=''){
        excerpt= ' length="'+table.find('#oscitas-recentwork-excerpt').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'recentwork'+cusclass+excerpt+layout;

    shortcode += ' projects="' + table.find('#oscitas-recentwork-project').val();

    shortcode += '" ';
    //shortcode += ' btntag="'+table.find('#oscitas-button-type').val()+'" ';



    shortcode += ']';
    return shortcode;
}
function create_oscitas_recentwork(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

}

