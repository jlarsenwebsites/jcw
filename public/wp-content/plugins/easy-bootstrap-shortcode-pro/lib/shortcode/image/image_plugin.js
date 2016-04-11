var image={
    title:"Image Effects Shortcode",
    id :'oscitas-form-image',
    pluginName: 'image'
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(image,800);
    })();
}
function image_generate_shortcode(pluginObj,form,table){
    var shortcode='';
    var shape=form.find('#oscitas-image-shape').val();
    var cusclass='';
    if(table.find('#oscitas-image-class').val()!=''){
        cusclass+= ' class="'+table.find('#oscitas-image-class').val()+'"';
    }if(table.find('#oscitas-image-alt').val()!=''){
        cusclass+= ' alt="'+table.find('#oscitas-image-alt').val()+'"';
    } if(table.find('#oscitas-image-rainyeffect').prop('checked')){
        cusclass+= ' rainyeffect="true"';
        if(table.find('#oscitas-image-drops').val()!=''){
            cusclass+= ' drops="'+table.find('#oscitas-image-drops').val()+'"';
        }
    }
    if(form.find('#oscitas-image-src').val()!=''){
        shortcode = '['+$ebs_prefix+'image'+cusclass+' src="'+form.find('#oscitas-image-src').val()+'" shape="'+shape+'"]';
    }
    return shortcode;
}
function create_oscitas_image(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

    ebs_insert_media_content('.upload_image_button','#osc_image_upload',form);
    ebs_image_rainy_effect_check(table,'#oscitas-image-rainyeffect');
    table.find('#oscitas-image-rainyeffect').click(function(){
        ebs_image_rainy_effect_check(table,this);
    })
}





