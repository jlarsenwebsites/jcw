<?php

/* * *********************************************************
 * BUTTONS
 * ********************************************************* */

function osc_theme_oscitasthumbnail($params, $content = 'Label') {
    extract(shortcode_atts(array(
        'src' => '',
        'class' => '',
        'link' => '',
        'border'=>'',
        'rainyeffect'=>'',
        'drops'=>500,

        'alt'=>''
    ), $params));
    $out = '';
    if ($border != '') {
        $borderClass = 'img-thumbnail ';
    } else {
        $borderClass = 'img-responsive';
    }
    $rainyClass='';$initialzer='';$closer='';
    if($rainyeffect=='true'){
        $rainyClass=' osc_esb_rainy_image';
        $initialzer='<div style="position:relative;">';
        wp_enqueue_script('ebs_rainy_effect',EBS_ASSET_URL.'js/rainyday.js');
        $closer='</div>';
    }

    //$out = ' <div class="img-thumbnail ' . $class . '">';
    $out.=$initialzer;
    if ($link != '') {
        $out .='<a href="' . $link . '">';
    }
    $out .= '<img src="' . $src . '" class="' . $borderClass .EBS_CONTAINER_CLASS. ' oscitas-res-image'.$rainyClass. '" data-drops="'.$drops.'" alt="'.$alt.'">';
    if ($link != '') {
        $out .='</a>';
    }
    $out.=$closer;
    return $out;
}

ebs_backward_compatibility_callback('thumbnail', 'osc_theme_oscitasthumbnail');