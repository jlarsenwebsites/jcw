<?php

/* * *********************************************************
 * HR Rule
 * ********************************************************* */
if(!function_exists('ebs_vertical_space')){
    function ebs_vertical_space($atts, $content = null){
        $attributes = extract(shortcode_atts(array('height' => '',
        'class'=>''), $atts));
        if($height != '') $height = ' style="height:'.$height.'px;"';
        $result= '<div class="ebs_vertical_space ' . $class .EBS_CONTAINER_CLASS. '"'.$height.'></div>';
        return $result;
    }
    ebs_backward_compatibility_callback('space', 'ebs_vertical_space');
}

