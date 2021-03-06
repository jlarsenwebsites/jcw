<?php

/* * *********************************************************
 * BUTTONS
 * ********************************************************* */

function osc_theme_icon($params, $content = null) {
    extract(shortcode_atts(array(
        'type' => '',
        'icontype'=>'glyphicon',
        'color'=>'',
        'class' => '',
        'fontsize'=>''
    ), $params));
    if($color!=''){
        $color='color:'.$color.';';
    }
    if($fontsize!=''){
        $fontsize=' font-size:'.$fontsize.'px;';
    }
    $out = '<i class="'.$icontype.' ' . $type . ' ' . $class . '" style="'.$color.$fontsize.'"></i>';
    return $out;
}

ebs_backward_compatibility_callback('icon', 'osc_theme_icon');