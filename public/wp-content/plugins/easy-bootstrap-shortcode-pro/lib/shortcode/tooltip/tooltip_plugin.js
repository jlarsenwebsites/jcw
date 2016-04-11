var tooltip={
    title:"Tooltip Image Shortcode",
    id :'oscitas-form-tooltip',
    pluginName: 'tooltip'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(tooltip);
})();
}

function tooltip_generate_shortcode(pluginObj,form,table){
    var cusclass='';
    if(table.find('#oscitas-tooltip-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-tooltip-class').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'tooltip';
    shortcode += ' type="' + table.find('#oscitas-tooltip-type').val();

    shortcode += '" ';

    shortcode += ' link="' + table.find('#oscitas-tooltip-link').val();

    shortcode += '" ';
    shortcode += ' tooltip="' + table.find('#oscitas-tooltip-text').val();

    shortcode += '" ';
    shortcode += ' style="' + table.find('#oscitas-tooltip-style').val();

    shortcode += '" ';

    shortcode += cusclass;

    shortcode += ']';
    shortcode+= table.find('#oscitas-tooltip-link-text').val();
    shortcode+='[/'+$ebs_prefix+'tooltip]';

    return shortcode;
}
function create_oscitas_tooltip(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
    ebs_tooltip_change_opt(table);

    form.find('#oscitas-tooltip-type').change(function(){
        ebs_tooltip_change_opt(table);
    })

    // handles the click event of the submit button

}

function ebs_tooltip_change_opt(table){
    if(jQuery('#oscitas-tooltip-type').val()=='link'){
        table.find('#oscitas-tooltip-link-tr').show();
        table.find('#oscitas-tooltip-link').val('#');
    } else{
        table.find('#oscitas-tooltip-link-tr').hide();
        table.find('#oscitas-tooltip-link').val('');
    }
    table.find('tr:visible:even').css('background', '#EFEFEF');
    table.find('tr:visible:odd').css('background', '#FFFFFF');
}