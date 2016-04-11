var boxesframes={
    title:"Boxframe Shortcode",
    id :'oscitas-form-boxesframes',
    pluginName: 'boxesframes',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(boxesframes,800);
    })();
}
function boxesframes_generate_shortcode(pluginObj,form,table){
    // but well, this gets the job done nonetheless
    var options = {
        'bgcolor'     : '',
        'fgcolor'     : '',
        'shadow'     : ''
    };
    var cusclass='',shadclass='';
    if(table.find('#oscitas-boxframe-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-boxframe-class').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'frame';

    for( var index in options) {
        var value = table.find('#gallery-' + index).val();

        // attaches the attribute to the shortcode only if it's different from the default value
        //if ( value !== options[index] )
        if(value!=''){
            if(index=='shadow'){
                shadclass='ebs_shadow shadow';
            } else{
                shadclass='';
            }
            shortcode += ' ' + index + '="' +shadclass+' ' + value + '"';
        }
    }
    if(window.mce_selection=='')
        window.mce_selection = 'Your Content';
    shortcode += cusclass+']'+window.mce_selection+'[/'+$ebs_prefix+'frame]';
    window.mce_selection='';
    return shortcode;
}

function create_oscitas_boxesframes(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');


    ebs_color_picker('.gallerycolor');
}


