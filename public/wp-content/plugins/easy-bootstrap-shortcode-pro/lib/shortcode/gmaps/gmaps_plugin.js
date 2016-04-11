var gmaps={
    title:"Google Map Shortcode",
    id :'oscitas-form-gmaps',
    pluginName: 'gmaps',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(gmaps);
    })();
}
function gmaps_generate_shortcode(pluginObj,form,table){
    // defines the options and their default values
    // again, this is not the most elegant way to do this
    // but well, this gets the job done nonetheless
    var options = {
        'width'       : 'false',
        'height'      : '400',
        'latitude'    : '0',
        'longitude'   : '0',
        'address'     : '',
        'zoom'        : '3',
        'type'        : 'ROADMAP'
    };
    var cusclass='';
    if(table.find('#oscitas-gmap-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-gmap-class').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'googlemap ';

    for( var index in options) {
        var value = table.find('#mygallery-' + index).val();

        // attaches the attribute to the shortcode only if it's different from the default value
        //if ( value !== options[index] )
        shortcode += ' ' + index + '="' + value + '"';
    }

    shortcode += cusclass+']';
    return shortcode;
}
function create_oscitas_gmaps(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
}

