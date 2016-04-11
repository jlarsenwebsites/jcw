<?php

/* * *********************************************************
 * BUTTONS
 * ********************************************************* */

function osc_theme_image($params, $content = 'Label') {
    extract(shortcode_atts(array(
        'src' => '',
        'class' => '',
        'shape' => '',
        'rainyeffect'=>'',
        'drops'=>500,

        'alt'=>''
    ), $params));
    $out = '';
    $rainyClass='';
    $initialzer='';
    $closer='';
    if($rainyeffect=='true'){
        $rainyClass=' osc_esb_rainy_image';
        $initialzer='<div style="position:relative;">';
        wp_enqueue_script('ebs_rainy_effect',EBS_ASSET_URL.'js/rainyday.js');
        $closer='</div>';
    }
    $out = $initialzer.'<img src="' . $src . '" class=" ' . $class .' '. $shape.EBS_CONTAINER_CLASS .$rainyClass. '" data-drops="'.$drops.'" alt="'.$alt.'">'.$closer;

    return $out;
}

ebs_backward_compatibility_callback('image', 'osc_theme_image');

