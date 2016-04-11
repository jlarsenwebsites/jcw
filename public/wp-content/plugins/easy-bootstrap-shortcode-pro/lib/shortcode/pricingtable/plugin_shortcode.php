<?php
function EBScolorBrightness($hex='', $percent) {
    if(empty($hex)){
        return '';
    }
    $hash = '';
    if (stristr($hex,'#')) {
        $hex = str_replace('#','',$hex);
        $hash = '#';
    }
    $rgb = array(hexdec(substr($hex,0,2)), hexdec(substr($hex,2,2)), hexdec(substr($hex,4,2)));
    for ($i=0; $i<3; $i++) {
        // See if brighter or darker
        if ($percent > 0) {
            $rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1-$percent));
        } else {
            // Darker
            $positivePercent = $percent - ($percent*2);
            $rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1-$positivePercent));
        }
        if ($rgb[$i] > 255) {
            $rgb[$i] = 255;
        }
    }
    $hex = '';
    for($i=0; $i < 3; $i++) {
        $hexDigit = dechex($rgb[$i]);
        if(strlen($hexDigit) == 1) {
            $hexDigit = "0" . $hexDigit;
        }
        $hex .= $hexDigit;
    }
    return $hash.$hex;
}

$_oscitas_ptcol_signup = array();
function pricing_table_row($params, $content = null) {
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br/>", '', $content);
    if(!isset($_SESSION['ebs_pricing_table'])){
        $_SESSION['ebs_pricing_table']=array();
    }
    extract(shortcode_atts(array(
        'class' => '',
        'col_type'=>'',
    ), $params));
    $column_number=get_option('EBS_COLUMN_NUM',12);
    $result = '<div class="row ' . $class .EBS_CONTAINER_CLASS. '">';
    $result .=$col_type=='singlecol'?'<div class="col-lg-'.$column_number.EBS_CONTAINER_CLASS.'">':'';
    $content = str_replace("]<br />", ']', $content);
    $result .= do_shortcode($content);
    $result .=$col_type=='singlecol'?'</div>':'';
    $result .= '</div>';
    wp_enqueue_script('ebs_fit_text',EBS_ASSET_URL.'js/jquery.fittext.js');
    return $result;
}

ebs_backward_compatibility_callback('pt_row', 'pricing_table_row');

function pricing_table_column($params, $content = null) {
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br/>", '', $content);
    global $_oscitas_ptcol_signup;
    extract(shortcode_atts(array(
        'id'=>count($_oscitas_ptcol_signup),
        'bgcolor'=>'',
        'textcolor'=>'',
        'lcolor'=>'',
        'lbgcolor'=>'',
        'premium'=>'',
        'col_type'=>'multicol',
        'col' => '',
        'lg'=>'',
        'md'=>'',
        'sm'=>'',
        'xs'=>'',
    ), $params));
    $_oscitas_ptcol_signup[$id]=array();
    $classes=array();
    $colstyle=($col_type=='singlecol')?'width:'.(100/intval($col)).'%;':'';
    $style=' style="'.$colstyle.'"';
    $classes[]=$col_type=='multicol'?' col-lg-' . $lg . '  col-md-' . $md .' col-sm-' . $sm .' col-xs-' . $xs .'':'pt_single_col';
    $classes[]=$premium!=''?'pt_premium_col':'';
    $result = '<div id="ebs_ptable_'.$id.'" class="osc-pricingtable '.implode(' ', $classes).EBS_CONTAINER_CLASS.'"'.$style.'><div class="pricing-table">';
    $result .= do_shortcode($content);
    $result .= '</div></div>';
    $_SESSION['ebs_pricing_table'][$id]=$id;
    $_SESSION['ebs_ptable_css_'.$id]="
#ebs_ptable_{$id} .pricing-table-sign-up a{
    color:{$lcolor};
    background:{$lbgcolor};
}
#ebs_ptable_{$id} .pricing-table{
    background-color: ".EBScolorBrightness($bgcolor,0.10).";
    border-color:$bgcolor;
}
#ebs_ptable_{$id} .pricing-table:hover {
    border-color:{$lbgcolor};
}
#ebs_ptable_{$id} .pricing-table-heading-outer span.heading{
    background-color:{$bgcolor};
    color:{$textcolor};
}
#ebs_ptable_{$id} .pricing-table:hover .pricing-table-heading-outer span.heading, #ebs_ptable_{$id} .pricing-table:hover .pricing-table-heading-outer span {
    background-color: {$lbgcolor};
    color:{$lcolor};
}
#ebs_ptable_{$id}.pt_single_col.pt_premium_col .pricing-table, #ebs_ptable_{$id}.pt_premium_col .pricing-table {
    border-color:{$lbgcolor};
}
#ebs_ptable_{$id}.pt_single_col.pt_premium_col .pricing-table-heading-outer span.heading, #ebs_ptable_{$id}.pt_premium_col .pricing-table-heading-outer span {
    background-color: {$lbgcolor};
    color:{$lcolor};
}
#ebs_ptable_{$id} .pricing-table .pricing-table-header span.price-curr,  #ebs_ptable_{$id} .pricing-table .pricing-table-header span.price-value,  #ebs_ptable_{$id} .pricing-table .pricing-table-header span.price-frac {
    background-color: ".EBScolorBrightness($bgcolor,0.10).";
    color:".EBScolorBrightness($textcolor,-0.90).";
}
#ebs_ptable_{$id} .pricing-table-features tr td{
    color:".EBScolorBrightness($textcolor,0.80).";
    border-color:".EBScolorBrightness($bgcolor,0.50).";
}
#ebs_ptable_{$id} .pricing-table-features tr:nth-child(2n+1) {
    background-color:".EBScolorBrightness($bgcolor,0.20).";
}
#ebs_ptable_{$id} .pricing-table-features tr:nth-child(2n) {
    background-color: ".EBScolorBrightness($bgcolor,0.10).";
}
#ebs_ptable_{$id} .pricing-table-sign-up{
    background-color:".EBScolorBrightness($bgcolor,-0.90).";
    border-top-color: ".EBScolorBrightness($bgcolor,-0.80).";
}
";
    return $result;
}

ebs_backward_compatibility_callback('pt_column', 'pricing_table_column');

function pricing_table_column_head($params, $content = null) {
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br/>", '', $content);
    extract(shortcode_atts(array(
        'price' => '',
        'currency' => '$',
    ), $params));
    $whole = floor($price);      // 1
    $fraction = $price - $whole;
    $fraction=substr($fraction,1,3);
    $result = '<div class="pricing-table-heading-outer"><span class="heading">' . do_shortcode($content) . '</span></div> <div class="pricing-table-header">';
    $result .= ' <span class="price-curr">'.$currency.'</span><span class="price-value">' . $whole . '</span><span class="price-frac">' . $fraction . '</span>';
    $result .= '</div><div class="pricing-table-space"></div>';

    return $result;
}

ebs_backward_compatibility_callback('pt_column_head', 'pricing_table_column_head');

function pricing_table_column_features($params, $content = null) {
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br/>", '', $content);
    $result = '<div class="pricing-table-features"><table class="'.EBS_CONTAINER_CLASS.'">';
    $result .=do_shortcode($content);
    $result .= '</table></div>';

    return $result;
}

ebs_backward_compatibility_callback('pt_column_features', 'pricing_table_column_features');

function pricing_table_ind_features($params, $content = null) {
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br/>", '', $content);
    extract(shortcode_atts(array(
        'heading' => '',
    ), $params));
    $result = '<tr><td>' . do_shortcode($content) . '</td>';

    return $result;
}

ebs_backward_compatibility_callback('feature', 'pricing_table_ind_features');

function pricing_table_signup_button($params, $content = null) {
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br/>", '', $content);
    extract(shortcode_atts(array(
        'link' => '',

    ), $params));




    $result = '<div class="pricing-table-sign-up">';
    $result .= '<a id="ebs_pt_signup" href="' . $link . '" class="'.EBS_CONTAINER_CLASS. '">' . do_shortcode($content) . '</a>';
    $result .= '</div>';

    return $result;
}

ebs_backward_compatibility_callback('pt_button', 'pricing_table_signup_button');

function pricing_table_column_circle($params, $content = null) {
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br/>", '', $content);
    extract(shortcode_atts(array(
        'bgcolor'=>'',
        'textcolor'=>'',
        'hbgcolor'=>'',
        'htextcolor'=>'',
        'premium'=>'',
        'price'=>'',
        'heading' => '',
        'currency' => '$',
        'link'=>'',
        'link_text'=>'Sign Up',
        'lcolor'=>'',
        'hlcolor'=>'',
        'col' => '',
        'lg'=>'',
        'md'=>'',
        'sm'=>'',
        'xs'=>'',
    ), $params));

        $classes=' col-lg-' . $lg . '  col-md-' . $md .' col-sm-' . $sm .' col-xs-' . $xs .'' ;


    $whole = floor($price);      // 1
    $fraction = $price - $whole;
    $fraction=substr($fraction,2,2);

    $extra_front=($premium!='')?' front-popular':'';
    $result = '<div class="'.$classes.' osc-pricingtable_circle'.EBS_CONTAINER_CLASS.'">';
    $style=trim($bgcolor)!=''?' background:'.$bgcolor.';':'';
    $style.=trim($textcolor)!=''?' color:'.$textcolor.';':'';
    $result .= '<div class="circle">
                <div class="front'.$extra_front.'" style="'.$style.'">
                    <div class="title color-1-font">'.$heading.'</div>
                    <div class="price color-1-font"><span class="currency">'.$currency.'</span><span class="total">'.$whole.'</span><span class="end">'.$fraction.'</span></div>';
    if(trim($link!='')){
        $style=trim($lcolor)!=''?' style="color:'.$lcolor.'"':'';
        $style.=(trim($hlcolor)!=''?' data-hover="'.$hlcolor.'"':'');
        $result .= '<span class="link_container link_small_screen"><a href="' . $link . '" class="check_hover pt_link"'.$style.'>' . $link_text . '</a><span>';
    }
    $result .= '</div>';
//    <div class="description">Great for small business</div>
    if($premium!=''){
        $style=trim($textcolor)!=''?' style="color:'.$textcolor.';"':'';
        $result.='<div class="popular color-1-font glyphicon glyphicon-star"'.$style.'></div>';
    }

    $style=trim($hbgcolor)!=''?' background:'.$hbgcolor.';':'';
    $style.=trim($htextcolor)!=''?' color:'.$htextcolor.';':'';

    $result.='<div class="back color-1-bg info" style="'.$style.'">
                    <div class="title">'.$heading.'</div>';
    $result .= do_shortcode($content);
    if(trim($link!='')){
        $style=trim($lcolor)!=''?' style="color:'.$lcolor.'"':'';
        $style.=(trim($hlcolor)!=''?' data-hover="'.$hlcolor.'"':'');
        $result .= '<span class="link_container link_large_screen"><a href="' . $link . '" class="check_hover pt_link"'.$style.'>' . $link_text . '</a><span>';
    }
    $result .= '</div>
            </div>';

    $result .= '</div>';

    return $result;

}
ebs_backward_compatibility_callback('pt_column_circle', 'pricing_table_column_circle');
function pricing_table_column_features_circle($params, $content = null) {
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br/>", '', $content);
    extract(shortcode_atts(array(

    ), $params));
    $result = '<div class="description"><ul>';
    $result .=do_shortcode($content);
    $result .= '</ul>';


    $result .= '</div>';


    return $result;
}
function pricing_table_ind_features_circle($params, $content = null) {
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br/>", '', $content);
    $result = '  <li><i class="glyphicon glyphicon-ok"></i> ' . do_shortcode($content) . '</li>';

    return $result;
}

ebs_backward_compatibility_callback('feature_circle', 'pricing_table_ind_features_circle');

ebs_backward_compatibility_callback('pt_column_features_circle', 'pricing_table_column_features_circle');