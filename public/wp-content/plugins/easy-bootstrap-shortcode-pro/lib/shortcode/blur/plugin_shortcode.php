<?php

/* * *********************************************************
 * BUTTONS
 * ********************************************************* */

$osc_ebs_blur_array=array('count'=>0);
function osc_theme_blur($params, $content = '') {
    global $osc_ebs_blur_array;
    extract(shortcode_atts(array(
        'id'=> count($osc_ebs_blur_array),
                'deviation' => 10,
                'class' => ''
                    ), $params));
    $osc_ebs_blur_array[$id]=array();
    $out = '';
    $content = str_replace('<br class="osc" />', '', $content);
    $content = str_replace('<br class="osc" />\n', '', $content);
    wp_enqueue_script('ebs_blur_effect',EBS_ASSET_URL.'js/ebs_blur.js');
    $out = '<div class="osc_image_blur ' . $class .EBS_CONTAINER_CLASS. '" style=" -webkit-filter:blur('.$deviation.'px);
        filter:url(#osc-ebs-svg-filter-'.$id.');">' . do_shortcode($content) . '</div>';
    $svgEle='<svg class="ebs-oblurlay-svg"><filter id="osc-ebs-svg-filter-'.$id.'"><feGaussianBlur stdDeviation="'.$deviation.'" /></filter></svg>';
    $out.=$svgEle;
    return $out;
}

ebs_backward_compatibility_callback('blur', 'osc_theme_blur');

