jQuery(document).ready(function(){
    jQuery('.ebs_metabox .wp_colorpicker').each(function(){
        var $val=jQuery(this).val();
        var $default=jQuery(this).attr('data-default-color');
        if($val==''){
            jQuery(this).val($default);
        }
    })
    ebs_color_picker('.ebs_metabox .wp_colorpicker');

})