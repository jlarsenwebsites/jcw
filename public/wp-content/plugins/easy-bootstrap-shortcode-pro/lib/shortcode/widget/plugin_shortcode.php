<?php

/* * *********************************************************
 * Widgets
 * ********************************************************* */

function osc_theme_oscwidget($params, $content = '') {
    extract(shortcode_atts(array(
        'type' => '',
        'class' => '',
        'attr'=>''
    ), $params));
    $arr=explode('|;osc;|',$attr);
    $instance=array();
   foreach($arr as $val){
       if($val!=''){
           $ival=explode("='",$val);

           $instance[$ival[0]]=isset($ival[1])?substr($ival[1], 0, -1):'';
       }
   }

   $obj= new $type;
    ob_start();
 $obj->widget( array(
        'before_widget' => '<div class="osc_widget '.$class.'" >',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ), $instance );
    $out = ob_get_contents();
    ob_end_clean();
    return $out;
}

ebs_backward_compatibility_callback('oscwidget', 'osc_theme_oscwidget');