<?php

/* * *********************************************************
 * Row
 * ********************************************************* */

function osc_theme_row($params, $content = null) {
    extract(shortcode_atts(array(
        'class' => '',
        'wrap' => '',
        'wrap_class' => '',

    ), $params));
    $start='';$end='';
    if($wrap=='true'){
        $wrapclass=trim($wrap_class)!=''?' class="'.$wrap_class.'"':'';
        $start='<div'.$wrapclass.'>';
        $end='</div>';
    }
    $result = $start.'<div class="row ' . $class .EBS_CONTAINER_CLASS. '">';
    //echo '<textarea>'.$content.'</textarea>';
    $content = str_replace("]<br />", ']', $content);
    $content = str_replace("<br />\n[", '[', $content);
    $result .= do_shortcode($content);
    $result .= '</div>'.$end;

    return $result;
}

ebs_backward_compatibility_callback('row', 'osc_theme_row');
/* * *********************************************************
 * TWO
 * ********************************************************* */

function osc_theme_column_shortcode($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'lg' => '',
        'mdoff' => '',
        'smoff' => '',
        'xsoff' => '',
        'lgoff' => '',
        'mdhide' => '',
        'smhide' => '',
        'xshide' => '',
        'lghide' => '',
        'mdclear' => '',
        'smclear' => '',
        'xsclear' => '',
        'lgclear' => '',
        'off'=>'',
        'animation'=>'',
        'animationtime'=>'everytime',
        'class'=>''
    ), $params));
    $column_number=get_option('EBS_COLUMN_NUM',12);

    $arr = array('lg','md', 'xs', 'sm');
    $classes = array();

    foreach ($arr as $k => $aa) {
        if (${$aa} == '') {

            $classes[] =$aa!='lg'? 'col-' . $aa . '-'.$column_number:'';
        } else {
            $classes[] = 'col-' . $aa . '-' . ${$aa};
        }
        if(!empty($class)){
            $classes[]=$aa.'-'.$class;
        }
    }
    $arr2 = array('mdoff', 'smoff', 'xsoff', 'lgoff');
    foreach ($arr2 as $k => $aa) {
        $nn = str_replace('off', '', $aa);
        if (${$aa} == 0 || ${$aa} == '') {
            //$classes[] = '';
        } else {
            $classes[] = 'col-' . $nn . '-offset-' . ${$aa};
        }
    }
    $arr2 = array('mdhide', 'smhide', 'xshide', 'lghide');
    foreach ($arr2 as $k => $aa) {
        $nn = str_replace('hide', '', $aa);
        if (${$aa} == 'yes') {
            $classes[] = 'hidden-' . $nn;
        }
    }

    if ($off != '') {
        $classes[] = 'col-lg-offset-'.$off;
    }

    $arr2 = array('mdclear', 'smclear', 'xsclear', 'lgclear');
    foreach ($arr2 as $k => $aa) {
        $nn = str_replace('clear', '', $aa);
        if (${$aa} == 'yes') {
            $classes[] = 'clear-' . $nn;
        }
    }

    $data_animation_class='';

    if(trim($animation)!=''){
        $classes[]='osc-have-animation';
        $data_animation_class='data-animation="animated '.$animation.'" data-animatetime="'.$animationtime.'"';
        wp_enqueue_script('ebs_inview_js',EBS_ASSET_URL.'js/jquery.inview.js');
        wp_enqueue_script('ebs_animation_js',EBS_ASSET_URL.'js/animation.js');
    }

    $result = '<div class="' . implode(' ', $classes) .EBS_CONTAINER_CLASS. '" '.$data_animation_class.'>';
    $result .= do_shortcode($content);
    $result .= '</div>';
    wp_enqueue_style('ebs_animation_css',EBS_ASSET_URL.'styles/animate.css');
    return $result;
}

ebs_backward_compatibility_callback('column', 'osc_theme_column_shortcode');


function osc_theme_one_half($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-6 ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . '  one-half">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_half', 'osc_theme_one_half');

function osc_theme_one_half_last($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-6 ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' one-half-last">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_half_last', 'osc_theme_one_half_last');

/* * *********************************************************
 * THIRD
 * ********************************************************* */

function osc_theme_one_third($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="sc-column col-lg-4 ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' ">'; //one-third
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_third', 'osc_theme_one_third');

function osc_theme_one_third_last($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-4 ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . '  column-last">'; // one-third-last
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_third_last', 'osc_theme_one_third_last');

function osc_theme_two_third($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class=" col-lg-8 ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' ">'; //two-third
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('two_third', 'osc_theme_two_third');

function osc_theme_two_third_last($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-8 ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . '  column-last ">'; //two-third-last
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('two_third_last', 'osc_theme_two_third_last');

/* * *********************************************************
 * FOURTH
 * ********************************************************* */

function osc_theme_one_fourth($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-3 ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' one-fourth">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_fourth', 'osc_theme_one_fourth');

function osc_theme_one_fourth_last($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-3 ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' column-last one-fourth-last">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_fourth_last', 'osc_theme_one_fourth_last');

function osc_theme_three_fourth($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-3 ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . '  three-fourth">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('three_fourth', 'osc_theme_three_fourth');

function osc_theme_three_fourth_last($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-6  ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' column-last three-fourth-last">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('three_fourth_last', 'osc_theme_three_fourth_last');

function osc_theme_one_fourth_second($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-3  ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' one-fourth-second">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_fourth_second', 'osc_theme_one_fourth_second');

function osc_theme_one_fourth_third($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }

    $result = '<div class="col-lg-3  ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' one-fourth-third">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_fourth_third', 'osc_theme_one_fourth_third');

function osc_theme_one_half_second($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-6  ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' one-half-second">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_half_second', 'osc_theme_one_half_second');

function osc_theme_one_third_second($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-4  ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' one-third-second">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_third_second', 'osc_theme_one_third_second');

function osc_theme_one_column($params, $content = null) {
    extract(shortcode_atts(array(
        'md' => '',
        'sm' => '',
        'xs' => '',
        'off' => ''
    ), $params));
    if ($md == 12) {
        $mds = '';
    } else {
        $mds = 'col-md-' . $md;
    }
    if ($sm == 12) {
        $sms = '';
    } else {
        $sms = 'col-sm-' . $sm;
    }
    if ($xs == 12) {
        $xss = '';
    } else {
        $xss = 'col-xs-' . $xs;
    }
    $result = '<div class="col-lg-12  ' . $mds . ' ' . $sms . ' ' . $xss . ' col-lg-offset-' . $off.EBS_CONTAINER_CLASS . ' one-column">';
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('one_column', 'osc_theme_one_column');