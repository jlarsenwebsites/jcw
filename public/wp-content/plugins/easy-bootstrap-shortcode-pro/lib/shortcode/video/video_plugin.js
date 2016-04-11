var video={
    title:"Video Shortcode",
    id :'oscitas-form-video',
    pluginName: 'video',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(video);
    })();
}


function video_generate_shortcode(pluginObj,form,table){
    var cusclass='';
    if(table.find('#oscitas-video-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-video-class').val()+'"';
    }
    var options = {
        'type'       : 'youtube',
        'link'       : '',
        'dimensions'       : ''

    };
    var dimensions={
        'width'      : '100%',
        'height'     : '350px'
    }
    var shortcode = '['+$ebs_prefix+'oscvideo'+cusclass;

    for( var index in options) {
        var value = table.find('#oscitas-' + index).val();

        // attaches the attribute to the shortcode only if it's different from the default value
        //if ( value !== options[index] )
        shortcode += ' ' + index + '="' + value + '"';
    }
    if( table.find('#oscitas-dimensions').val()=='custom'){
        for( var index in dimensions) {
            var value = table.find('#oscitas-' + index).val();

            shortcode += ' ' + index + '="' + value + '"';
        }
    }

    shortcode += ']';

    return shortcode;
}
function create_oscitas_video(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
    oscitas_video_dimensions(table);
    table.find('#oscitas-dimensions').change(function(){
        oscitas_video_dimensions(table)
    });

}

function oscitas_video_dimensions(table){
    var modal=jQuery('#oscitas-dimensions').val();
    if(modal=='custom'){
        jQuery('.video_custom_dimensions').show();
    } else{
        jQuery('.video_custom_dimensions').hide();
    }
    table.find('tr:visible:even').css('background', '#EFEFEF');
    table.find('tr:visible:odd').css('background', '#FFFFFF');
}

