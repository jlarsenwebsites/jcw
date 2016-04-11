<?php

function ebs_boxframe_callback($params, $content = null) {
    extract(shortcode_atts(array(
        'bgcolor' => 'none',
        'fgcolor' => '#000000',
        'shadow' => '',
        'class' => '',
    ), $params));

    $result = "";
    $bg='';$fg='';
    if($bgcolor!=''){
        $bg = 'background: ' . $bgcolor . '; border: 1px solid ' . $bgcolor . ';';
    } if($fgcolor!=''){
        $fg = 'color: ' . $fgcolor . ';';
    }

    $result .= '<div class="osc-boxframe-parent"><div class="osc-boxframe frame ' . $class .EBS_CONTAINER_CLASS. ' ' . $shadow . '" style="' . $bg .$fg . '">';

    $result .= do_shortcode($content);
    $result .= '</div></div>';

    return $result;
}

ebs_backward_compatibility_callback("frame", "ebs_boxframe_callback");


