var highlights={
    title:"Highlight Contant",
    id :'oscitas-form-highlights',
    pluginName: 'highlights',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(highlights);
})();
}
function osc_visible_highlights(){
    var hlval=jQuery('#oscitas-highlights-type').val();
    jQuery('.osc-hl-class').hide();
    jQuery('.osc-hl-'+hlval).show();
    jQuery('#oscitas-form-highlights table tr:visible:even').css('background', '#EFEFEF');
    jQuery('#oscitas-form-highlights table tr:visible:odd').css('background', '#FFFFFF');

}
function highlights_generate_shortcode(pluginObj,form,table){
    var cusclass='';
    if(table.find('#oscitas-highlights-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-highlights-class').val()+'"';
    }
    shortcode='';
    var code ='', htype=form.find('#oscitas-highlights-type').val();

    if(htype=='existing'){
        code = ' highlight="'+form.find('#oscitas-highlights-hightlight').val()+'"';
    }
    else if(htype=='custom'){
        code=' bg="'+form.find('#oscitas-highlights-bg').val()+'" color="'+jQuery('#oscitas-highlights-color').val()+'"'
    }
    if(window.mce_selection=='')
        window.mce_selection = 'Your Content';
    var shortcode = '['+$ebs_prefix+'highlights type="'+htype+'"'+code+cusclass+']';
    shortcode +=  window.mce_selection;
    shortcode += '[/'+$ebs_prefix+'highlights]';
    return shortcode;
}
function create_oscitas_highlights(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

    ebs_color_picker(form.find('.color'));
    osc_visible_highlights();
    form.find('#oscitas-highlights-type').change(function(){
        osc_visible_highlights();

    })

}

