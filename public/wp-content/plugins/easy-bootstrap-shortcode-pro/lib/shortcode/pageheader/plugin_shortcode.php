<?php

function osc_theme_pageheader($params, $content = null) {
    extract(shortcode_atts(array(
        'class' => '',
        'headingtype'=>"h1",
        'headcolor'=>"",
        'fontsize'=>"",
        'margin'=>"",
        'padding'=>"",
        'border'=>"",
        'bordercolor'=>""
    ), $params));
    $style='';
if(!empty($border)){
$style.='border-bottom-width: 1px;';
$style.='border-bottom-style:  solid;';
    if(!empty($bordercolor)){
        $style.="border-bottom-color:{$bordercolor};";
    }
}
    $style.="color:{$headcolor};";
    $style.="font-size:{$fontsize}px;";
    $style.="margin:{$margin};";
    $style.="padding:{$padding};";
    if(!empty($style)){
        $style=' style="'.$style.'" ';
    }
    $output = '<'.$headingtype.$style.' class="osc-page-header ' . $class .EBS_CONTAINER_CLASS. '">'.  do_shortcode($content).'</'.$headingtype.'>';


    return $output;
}

ebs_backward_compatibility_callback('pageheader', 'osc_theme_pageheader');