<?php

/* * *********************************************************
 * BUTTONS
 * ********************************************************* */
$_ebsp_button=array();

$_SESSION['EBS_BUTTON']='';
function osc_theme_button($params, $content = null) {
    global $_ebsp_button;
    extract(shortcode_atts(array(
        'id' => count($_ebsp_button),
        'title' => 'osCitas',
        'link' => '',
        'type' => 'link',
        'style' => '',
        'bgcolor'=>'',
        'fgcolor'=>'',
        'hoverbgcolor'=>'',
        'hoverfgcolor'=>'',
        'align' => '',
        'target' => '',
        'icon' => '',
        'iconcolor'=>'',
        'icontype'=>'glyphicon',
        'class' => '',
        'modal' => '',
        'modal_size' => '',
    ), $params));
    $out = '';
    $_ebsp_button[$id]=array();
    $content = str_replace('<br class="osc" />', '', $content);
    $content = str_replace('<br class="osc" />\n', '', $content);
    if($icon!=''){
        if($iconcolor!=''){
            $iconcolor='style="color:'.$iconcolor.';"';
        }
        if($align=='right'){
            $value=$title.' <i class="'.$icontype.' '.$icon.'" '.$iconcolor.'></i>';
        } else{
            $value='<i class="'.$icontype.' '.$icon.'" '.$iconcolor.'></i> '.$title;
        }
    }else{
        $value=$title;
    }
    $target = ' target="'.($target != 'false' ? '_blank':'_self').'"';
    if(strpos($style,'custom')!==false){
        $css="
#ebs-button-{$id}{
background:{$bgcolor};
color:{$fgcolor};
}
#ebs-button-{$id}:hover{
background:{$hoverbgcolor};
color:{$hoverfgcolor};
}";

        $_SESSION['EBS_BUTTON'].=$css;
        str_replace('custom','',$style);
    }
    $buttonattr='';$modalattr='';
    if($modal=='initializer'){
        $buttonattr=' data-toggle="modal" data-target="#osc-render-modal-'.$id.'"';
        $modalattr='<div class="modal fade'.EBS_CONTAINER_CLASS .'" id="osc-render-modal-'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog '.$modal_size.EBS_CONTAINER_CLASS. '">
    <div class="modal-content'  .EBS_CONTAINER_CLASS. '">'.
do_shortcode($content)
    .'</div>
  </div>
</div>';
    } elseif($modal=='closer'){
        $buttonattr=' data-dismiss="modal"';
    }
    if ($type == 'link') {
        $out = '<a id="ebs-button-'.$id.'" class="btn ' . $style . ' ' . $class.EBS_CONTAINER_CLASS . '" href="' . $link . '" ' . ($target) .$buttonattr.'>' . $value . '</a>';
    } elseif ($type == 'button') {
        $out = '<button id="ebs-button-'.$id.'" class="btn ' . $style . ' ' . $class.EBS_CONTAINER_CLASS . '" '.$buttonattr.' >' . $value . '</button>';
    }
    $out.=$modalattr;
    wp_enqueue_style('ebsp-dstyle',EBS_ASSET_URL.'styles/ebsp-dstyle.php');
    return $out;
}

function osc_theme_modal_header($params, $content = null){
    $out='<div class="modal-header'  .EBS_CONTAINER_CLASS. '"><button type="button" class="close'  .EBS_CONTAINER_CLASS. '" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only'  .EBS_CONTAINER_CLASS. '">Close</span></button>'.do_shortcode($content).'</div>';
    return $out;
}

function osc_theme_modal_body($params, $content = null){
    $out='<div class="modal-body'  .EBS_CONTAINER_CLASS. '">'.do_shortcode($content).'</div>';
    return $out;
}

function osc_theme_modal_footer($params, $content = null){
$out='<div class="modal-footer'  .EBS_CONTAINER_CLASS. '">'.do_shortcode($content).'</div>';
    return $out;
}

ebs_backward_compatibility_callback('button', 'osc_theme_button');
ebs_backward_compatibility_callback('modal_header', 'osc_theme_modal_header');
ebs_backward_compatibility_callback('modal_body', 'osc_theme_modal_body');
ebs_backward_compatibility_callback('modal_footer', 'osc_theme_modal_footer');