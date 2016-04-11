var oscpopover={
    title:"Popover Shortcode",
    id :'oscitas-form-popover',
    pluginName: 'oscpopover'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(oscpopover);
})();
}
function oscpopover_generate_shortcode(pluginObj,form,table){
    var cusclass='';
    if(table.find('#oscitas-popover-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-popover-class').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'popovernew'+cusclass;
    shortcode += ' title="' + table.find('#oscitas-popover-title').val();

    shortcode += '" ';

    shortcode += ' button_text="' + table.find('#oscitas-popover-button-text').val();

    shortcode += '" ';
    shortcode += ' trigger="' + table.find('#oscitas-pbutton-trigger').val();

    shortcode += '" ';
    shortcode += ' style="' + table.find('#oscitas-popover-style').val();

    shortcode += '" ';
    shortcode += ' size="' + table.find('#oscitas-pbutton-size').val();

    shortcode += '" ';
    shortcode += ' type="' + table.find('#oscitas-pbutton-type').val();

    shortcode += '" ';
    //shortcode += ' btntag="'+table.find('#oscitas-button-type').val()+'" ';



    shortcode += ']';
    shortcode+= table.find('#oscitas-popover-content').val();
    shortcode+='[/'+$ebs_prefix+'popovernew]';
    return shortcode;
}
function create_oscitas_oscpopover(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');


}

