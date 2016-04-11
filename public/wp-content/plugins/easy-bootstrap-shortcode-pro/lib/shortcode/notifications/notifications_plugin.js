var notifications={
    title:"Notifications Shortcode",
    id :'oscitas-form-notifications',
    pluginName: 'notifications'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(notifications);
})();
}

function notifications_generate_shortcode(pluginObj,form,table){
    var options = {
        'type'       : 'error'
    };
    var cusclass='';
    if(table.find('#oscitas-note-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-note-class').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'notification';

    for( var index in options) {
        var value = table.find('#oscitas-' + index).val();

        // attaches the attribute to the shortcode only if it's different from the default value
        //if ( value !== options[index] )
        shortcode += ' ' + index + '="' + value + '"';
    }
    var selected_content = tinyMCE.activeEditor.selection.getContent();
    if(!selected_content)
        var selected_content = 'Your notification';
    shortcode += ' close="'+(table.find('#oscitas-close').prop('checked')? 'true': 'false')+ '" ';

    shortcode += cusclass+']'+window.mce_selection+'[/'+$ebs_prefix+'notification]';

    return shortcode;
}
function create_oscitas_notifications(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
}

