var deslist={
    title:"List Group Shortcode",
    id :'oscitas-form-deslists',
    pluginName: 'deslist'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(deslist);
})();
}
function deslist_generate_shortcode(pluginObj,form,table){
    var options = {
        'type'       : 'arrow'
    },deslist=0,deslist_type;
    var cusclass='',style='';
    if(table.find('#oscitas-deslist-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-deslist-class').val()+'"';
    }
    if(table.find('#oscitas-deslist-style').val()!=''){
        style= ' style="'+table.find('#oscitas-deslist-style').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'dl'+cusclass+style;
    var deslist_item=jQuery('#oscitas-deslist-item').val();
    if(isNaN(deslist_item)==false){
        deslist=deslist_item;
    } else{
        deslist=3;
    }


    shortcode += ']<br/>';
    for(var i=1;i<=deslist;i++){
        shortcode +='['+$ebs_prefix+'dlitem heading="Heading '+i+'"]Description '+i+'[/'+$ebs_prefix+'dlitem]<br/>'
    }
    shortcode +='[/'+$ebs_prefix+'dl]';
    return shortcode;
}
function create_oscitas_deslist(pluginObj){
    var form = jQuery(pluginObj.hashId);
    var table = form.find('table');
}