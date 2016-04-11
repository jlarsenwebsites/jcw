var animation={
    title:"Animation Shortcode",
    id :'oscitas-form-animation',
    pluginName: 'animation'
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(animation,800);
})();
}

function animateslider_render(ele,val,mini,max){
    jQuery('#slider_rander_'+ele).slider({

        range:'min',
        min: mini,
        max: max,
        value: val,
        animate: true,
        step:0.5,
        slide: function( event, ui ) {
            jQuery(this).parent('td').find('input[type="text"]').val( ui.value );
        }
    });
}
function animation_generate_shortcode(pluginObj,form,table){
    var shortcode='';
    var shape=form.find('#oscitas-animation-shape').val();
    var cusclass='';
    var animcon=['effect','time','duration','delay','class'];
//        var selected_content = tinyMCE.activeEditor.selection.getContent();
//        if(!selected_content)
//            var selected_content = 'Your Content';
    var attr='';
    jQuery(animcon).each(function(ind,val){
        if(jQuery('#oscitas-animation-'+val).val()!=''){
            attr+=' '+val+'="'+jQuery('#oscitas-animation-'+val).val()+'"';
        }

    });
    shortcode += '['+$ebs_prefix+'animation'+attr+']'+window.mce_selection+'[/'+$ebs_prefix+'animation]';
    return shortcode;
}
function create_oscitas_animation(pluginObj){
    var form=jQuery(pluginObj.hashId);
    var table = form.find('table');
    var anim={
        duration:[jQuery('#oscitas-animation-duration').val(),1,20],
        delay:[jQuery('#oscitas-animation-delay').val(),0,20]
    }
    jQuery.each(anim,function(ind,val){
        animateslider_render(ind,val[0],val[1],val[2])
    })
}

