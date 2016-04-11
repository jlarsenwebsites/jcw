var blur={
    title:"Blur Shortcode",
    id :'oscitas-form-blur',
    pluginName: 'blur'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(blur);
})();
}
function blur_render_slider(ele,val,mini,max){
    jQuery('#osc_blur_render_'+ele).slider({

        range:'min',
        min: mini,
        max: max,
        value: val,
        animate: true,
        slide: function( event, ui ) {
            jQuery(this).parent('td').find('input[type="text"]').val( ui.value );
        }
    });
}
function blur_generate_shortcode(pluginObj,form,table){
    var cusclass='';
    if(table.find('#oscitas-blur-class').val()!=''){
        cusclass+= ' class="'+table.find('#oscitas-blur-class').val()+'"';
    }
    if(table.find('#oscitas-blur-deviation').val()!=''){
        cusclass+= ' deviation="'+table.find('#oscitas-blur-deviation').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'blur'+cusclass+']<br class="osc"/>';
    shortcode += window.mce_selection+'<br class="osc"/>';
    shortcode += '[/'+$ebs_prefix+'blur]';
    return shortcode;
}
function create_oscitas_blur(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
    blur_render_slider('deviation',jQuery('#oscitas-blur-deviation').val(),1,10)
}

