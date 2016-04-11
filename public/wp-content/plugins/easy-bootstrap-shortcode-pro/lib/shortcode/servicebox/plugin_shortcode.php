<?php

/* * *********************************************************
 * Servicebox
 * ********************************************************* */
$_ebsp_servicebox=array();

function osc_theme_servicebox($params, $content = null) {
    global $_ebsp_servicebox;
    if(!isset($_SESSION['ebs_servicebox_css'])){
        $_SESSION['ebs_servicebox_css']=array();
    }
    extract(shortcode_atts(array(
        'id' => count($_ebsp_servicebox),
        'icon' => '',
        'type'=>'icon',
        'icontype'=>'glyphicon',
        'iconbg' => '',
        'iconbgcolor'=>'#FFFFFF',
        'iconcolor'=>'#777777',
        'imgsrc'=>'',
        'headingtype' => 'h3',
        'heading' => '',
        'class' => '',
        'iconhover'=>'default',
        'boxstyle'=>'default',
        'hover'=>'default',
        'readmore'=>'',
        'hover_iconbgcolor'=>'',
        'hover_iconcolor'=>'',
        'bgcolor'=>'',
        'fgcolor'=>'',
        'hover_bgcolor'=>'',
        'hover_fgcolor'=>'',
        'readmore_link'=>'',
        'readmore_text'=>'',
        'readmore_type'=>'',
        'readmorestyle'=>'default',
        'readmore_bgcolor'=>'',
        'readmore_fgcolor'=>'',
        'icon_size'=>40,
        'iconbg_size'=>100,
        'iconbg_radius'=>50,
        'margin_bottom'=>30,
        'margin_top'=>30,
        'iconstyle'=>'inline',
        'iconalign'=>'center',
        'bordercolor'=>'',
        'hbordercolor'=>'',
        'borderwidth'=>0
    ), $params));
    $out = '';$style='';
    $_ebsp_servicebox[$id]=array();

    $out.='<div id="osc_servicebox_'.$id.'" class="osc_servicebox '.$class.'">';
    if($type=='icon'){
        if($iconbg=='iconcircle' || $iconbg=='iconbox'){
            if($icon!=''){
            $out.= '<span class="'.$icontype.' ' . $icon .' ' . $iconbg.' icon_bg"></span>';
            }
         }
        else{
            if($icon!=''){
                $out.='<div class="icon_bg '.$iconbg.'">';
                $out.= '<span class="'.$icontype.' ' . $icon . '"></span>';
                $out.='</div>';
            }
        }
    } elseif($type=='image'){
        $out .= '<div class="osc-sbox-img-container"><img src="' . $imgsrc . '" class="osc-sbox-image"></div>';
    }
    if($heading!=''){
        $out.='<'.$headingtype.' style="clear:both">'.$heading.'</'.$headingtype.'>';
    }
    $add_css='';
    if($iconstyle=='onborder'){

        $margin_top= $iconbg_size/2;
        $extramar=$margin_top+10;
        $margin_top=-1*$margin_top;
        $style.="#osc_servicebox_{$id}{
        margin-top:{$extramar}px;
        }
        #osc_servicebox_{$id},#osc_servicebox_{$id} span.iconbox,#osc_servicebox_{$id} span.iconcircle{
        border: {$borderwidth}px solid {$bordercolor};
        }
       #osc_servicebox_{$id}:hover, #osc_servicebox_{$id}:hover span.iconbox,#osc_servicebox_{$id}:hover span.iconcircle{
        border: {$borderwidth}px solid {$hbordercolor};
        }#osc_servicebox_{$id} span.iconbox,#osc_servicebox_{$id} span.iconcircle{
        float:{$iconalign};
        }";
    }
    $out.='<div class="osc_servicebox_content" style="clear:both">';
    $out.=do_shortcode($content);
    $out.='</div>';
    if($readmore=='true'){
        if($readmore_type!=''){
            $btnclass=' btn '.$readmore_type;
        } else{
            $btnclass=' osc_servicebox_readmore';
        }
        $out.='<a href="'.$readmore_link.'" class="osc_servicebox_readmore_css'.$btnclass.'">'.$readmore_text.'</a>';
    }
    $out.='</div>';
    if($iconhover=='revert'){
        $hover_iconbgcolor=$iconcolor;
        $hover_iconcolor=$iconbgcolor;
    }
    if($boxstyle=='custom'){
        $style.='
	#osc_servicebox_'.$id.'{
	color:'.$fgcolor.';
	background-color:'.$bgcolor.';
	}
	#osc_servicebox_'.$id.' '.$headingtype.' {
	color:'.$fgcolor.';
	}';
    }
    if($hover=='custom'){
        $style.='
	#osc_servicebox_'.$id.':hover{
	color:'.$hover_fgcolor.';
	background-color:'.$hover_bgcolor.';
	}
		#osc_servicebox_'.$id.':hover '.$headingtype.' {
	color:'.$hover_fgcolor.';
	}';
    }
    if($readmore=='true' && $readmorestyle=='custom' ){
        $style.='
	#osc_servicebox_'.$id.' .osc_servicebox_readmore_css{
	color:'.$readmore_fgcolor.';
	background-color:'.$readmore_bgcolor.';
	}';
    }
    if($type=='icon'){
        $lineheight=intval($iconbg_size);
    $style.='
	#osc_servicebox_'.$id.' .icon_bg span{
	color:'.$iconcolor.';
	}
     #osc_servicebox_'.$id.' .burst-12,
	#osc_servicebox_'.$id.' .burst-8,
	#osc_servicebox_'.$id.' .heart:before, #osc_servicebox_'.$id.' .heart:after, #osc_servicebox_'.$id.' .burst-12:before, #osc_servicebox_'.$id.' .burst-12:after, #osc_servicebox_'.$id.' .burst-8:before{
	    background-color:'.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' span.iconcircle {
color:'.$iconcolor.';
	    font-size:'.$icon_size.'px;
	    line-height:'.$lineheight.'px;
	   background-color:'.$iconbgcolor.';
	    height:'.$iconbg_size.'px;
	    width:'.$iconbg_size.'px;
	    margin-top:'.$margin_top.'px;
	    margin-bottom:'.$margin_bottom.'px;
	    border-radius:'.$iconbg_radius.'%;
        -moz-border-radius: '.$iconbg_radius.'%;
	    -webkit-border-radius: '.$iconbg_radius.'%;
	    -ms-border-radius: '.$iconbg_radius.'%;
        -o-border-radius: '.$iconbg_radius.'%;

	}
	#osc_servicebox_'.$id.' span.iconbox {
color:'.$iconcolor.';
	    font-size:'.$icon_size.'px;
	    line-height:'.$lineheight.'px;
	   background-color:'.$iconbgcolor.';
	    height:'.$iconbg_size.'px;
	    width:'.$iconbg_size.'px;
	    margin-top:'.$margin_top.'px;
	    margin-bottom:'.$margin_bottom.'px;

	}

	#osc_servicebox_'.$id.' .diamond{
        border-bottom-color: '.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .diamond:after{
        border-top-color: '.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .diamond-narrow{
        border-bottom: 70px solid '.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .diamond-narrow:after{
        border-top: 70px solid '.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .cut-diamond{
        border-color: rgba(255,255, 255, 0) rgba(255,255, 255, 0) '.$iconbgcolor.' rgba(255,255, 255, 0);
	}
	#osc_servicebox_'.$id.' .cut-diamond:after{
        border-color: '.$iconbgcolor.' rgba(255,255, 255, 0) rgba(255,255, 255, 0) rgba(255,255, 255, 0);
	}
	#osc_servicebox_'.$id.' .iconstar{
        border-bottom-color: '.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .iconstar:after{
        border-top-color: '.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .triangle-up{
	    border-bottom-color:'.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .triangle-down{
	    border-top-color:'.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .trapezoid{
	    border-bottom-color:'.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .hexagon{
	    background:'.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .hexagon:after{
	    border-top-color:'.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .hexagon:before{
	    border-bottom-color:'.$iconbgcolor.';
	}
	#osc_servicebox_'.$id.' .pentagon{
	    border-color: '.$iconbgcolor.' rgba(255,255, 255, 0);
	}
	#osc_servicebox_'.$id.' .pentagon:before{
	    border-color: rgba(255,255, 255, 0) rgba(255,255, 255, 0) '.$iconbgcolor.';
	}';
    if($iconhover=='revert' || $iconhover=='custom'){


        $style.='#osc_servicebox_'.$id.':hover span.iconcircle{
	color:'.$hover_iconcolor.';
	}
	#osc_servicebox_'.$id.':hover span.iconbox{
	color:'.$hover_iconcolor.';
	} #osc_servicebox_'.$id.':hover .icon_bg span{
	color:'.$hover_iconcolor.';
	}
	#osc_servicebox_'.$id.':hover .iconcircle, #osc_servicebox_'.$id.':hover .burst-12, #osc_servicebox_'.$id.':hover .burst-8, #osc_servicebox_'.$id.':hover .iconbox, #osc_servicebox_'.$id.':hover .heart:before, #osc_servicebox_'.$id.':hover .heart:after, #osc_servicebox_'.$id.':hover .burst-12:before, #osc_servicebox_'.$id.':hover .burst-12:after,
	#osc_servicebox_'.$id.':hover .burst-8:before{
	    background-color:'.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .iconstar{
        border-bottom-color: '.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .iconstar:after{
        border-top-color: '.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .triangle-up{
	    border-bottom-color:'.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .triangle-down{
	    border-top-color:'.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .diamond{
        border-bottom-color: '.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .diamond:after{
        border-top-color: '.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .diamond-narrow{
        border-bottom: 70px solid '.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .diamond-narrow:after{
        border-top: 70px solid '.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .cut-diamond{
        border-color: rgba(255,255, 255, 0) rgba(255,255, 255, 0) '.$hover_iconbgcolor.' rgba(255,255, 255, 0);
	}
	#osc_servicebox_'.$id.':hover .cut-diamond:after{
        border-color: '.$hover_iconbgcolor.' rgba(255,255, 255, 0) rgba(255,255, 255, 0) rgba(255,255, 255, 0);
	}
	#osc_servicebox_'.$id.':hover .trapezoid{
	    border-bottom-color:'.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .hexagon{
	    background:'.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .hexagon:after{
	    border-top-color:'.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .hexagon:before{
	    border-bottom-color:'.$hover_iconbgcolor.';
	}
	#osc_servicebox_'.$id.':hover .pentagon{
	    border-color: '.$hover_iconbgcolor.' rgba(255,255, 255, 0);
	}
	#osc_servicebox_'.$id.':hover .pentagon:before{
	    border-color: rgba(255,255, 255, 0) rgba(255,255, 255, 0) '.$hover_iconbgcolor.';
	}';
    }
    }
    $_SESSION['ebs_servicebox_css'][$id]=$style;
   wp_enqueue_style('ebsp-dstyle',EBS_ASSET_URL.'styles/ebsp-dstyle.php');
    return $out;

}

ebs_backward_compatibility_callback('servicebox', 'osc_theme_servicebox');