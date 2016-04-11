<?php

/* * *********************************************************
 * BUTTONS
 * ********************************************************* */
$_ebsp_animate=array('currentid'=>1);
function osc_animation_shortcode($params, $content = 'Label') {
    global $_ebsp_animate;
    global $post;
    $slug = get_post( $post )->post_name;
    extract(shortcode_atts(array(
        'ids'=>count($_ebsp_animate),
        'id' => count($_ebsp_animate).'-'.$slug.'-'.rand(11111,99999),
        'effect' => '',
        'class' => '',
        'time' => 'everytime',
        'duration'=>1,
        'delay'=>0
    ), $params));
    $out = '';
    $_ebsp_animate[$ids] = array();

    $data_animation_class='';

    if(trim($effect)!=''){

        $classes[]='osc-have-animation';
        $classes[]=$class;
        $data_animation_class='data-animation="animated '.$effect.'" data-animatetime="'.$time.'" data-delay="'.$delay.'" data-duration="'.$duration.'"';
        wp_enqueue_script('ebs_inview_js',EBS_ASSET_URL.'js/jquery.inview.js');
        wp_enqueue_script('ebs_animation_js',EBS_ASSET_URL.'js/animation.js');
    }

    $result = '<div id="'.$id.'"  class="' . implode(' ', $classes) .EBS_CONTAINER_CLASS. '" '.$data_animation_class.'>';
    $result .= do_shortcode($content);
    $result .= '</div>';
    wp_enqueue_style('ebs_animation_css',EBS_ASSET_URL.'styles/animate.css');

    return $result;
}

ebs_backward_compatibility_callback('animation', 'osc_animation_shortcode');