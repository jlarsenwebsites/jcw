var thumbnail={
    title:"Responsive Image Shortcode",
    id :'oscitas-form-thumbnail',
    pluginName: 'thumbnail'
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(thumbnail,800);
    })();
}


function thumbnail_generate_shortcode(pluginObj,form,table){
    var shortcode='';
    var cusclass='',link='', border='';
    if(table.find('#oscitas-thumbnail-class').val()!=''){
        cusclass+= ' class="'+table.find('#oscitas-thumbnail-class').val()+'"';
    }
    if(table.find('#oscitas-thumbnail-alt').val()!=''){
        cusclass+= ' alt="'+table.find('#oscitas-thumbnail-alt').val()+'"';
    } if(table.find('#oscitas-thumbnail-rainyeffect').prop('checked')){
        cusclass+= ' rainyeffect="true"';
        if(table.find('#oscitas-thumbnail-drops').val()!=''){
            cusclass+= ' drops="'+table.find('#oscitas-thumbnail-drops').val()+'"';
        }
    }
    if(table.find('#oscitas-thumbnail-link').val()!=''){
        link= ' link="'+form.find('#oscitas-thumbnail-link').val()+'"';
    }

    if(table.find('#oscitas-thumbnail-border').is(':checked')){
        border= ' border="1"';
    }

    if(form.find('#oscitas-thumbnail-src').val()!=''){
        shortcode = '['+$ebs_prefix+'thumbnail'+link+cusclass+border+' src="'+form.find('#oscitas-thumbnail-src').val()+'"]';
    }
    return shortcode;
}

function create_oscitas_thumbnail(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
    ebs_insert_media_content('.upload_image_button','#osc_thumbnail_upload',form);

    ebs_image_rainy_effect_check(table,'#oscitas-thumbnail-rainyeffect');
    table.find('#oscitas-thumbnail-rainyeffect').click(function(){
        ebs_image_rainy_effect_check(table,this);
    })
}

