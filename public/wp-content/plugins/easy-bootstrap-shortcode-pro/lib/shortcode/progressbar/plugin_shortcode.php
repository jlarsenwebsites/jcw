<?php

/* * *********************************************************
 * progress bar
 * ********************************************************* */
$_oscitas_progressbar = array();
function osc_theme_progressbar($params, $content = null) {
    global $_oscitas_progressbar;
    extract(shortcode_atts(array(
        'id'=>count($_oscitas_progressbar),
        'value' => '50',
        'barstyle' => '',
        'bartype' => '',
        'class' => '',
        'label' => '',
        'label_style' => 'outside',
        'icon'=>'',
        'iconsize'=>'',
        'iconcolor'=>'',
        'type'=>"default" ,
        'barcolor'=>"",
        'bgcolor'=>"",
        'fillcolor'=>"",
        'fontcolor'=>"",
        'size'=>100,
        'pbwidth'=>40,
        'fontsize'=>15,
        'border'=>'',
        'circletype'=>'',
        'animation'=>'',
        'percent'=>'false',
        'offset'=>'false',
        'max'=>'100',
        'fillcolor1'=>'',
        'fillcolor2'=>'',
        'remaincolor'=>'',
        'increment'=>1,
        'offsetcolor'=>'#D8D8D8',

    ), $params));
    $subtype='circular';
    $_oscitas_progressbar[$id]=array();
    if($type=='custom'){
        wp_enqueue_script('ebs_inview_js',EBS_ASSET_URL.'js/jquery.inview.js');


        if($animation!=''){
            $animation_step=1;
        } else{
            $animation_step=0;
        }
        wp_enqueue_style('jquery.circliful',EBS_ASSET_URL.'styles/jquery.circliful.css');
        $out='<div id="osc_progress_'.$id.'" class="osc_progress_bar osc_progress_bar_rendar" data-dimension="'.$size.'" data-border="'.$border.'" data-text="'.$value.'%" data-info="'.$label.'" data-width="'.$pbwidth.'" data-fill="'.$fillcolor.'" data-fontsize="'.$fontsize.'" data-percent="'.$value.'" data-fgcolor="'.$barcolor.'" data-bgcolor="'.$bgcolor.'" data-animation-step="'.$animation_step.'" data-type="'.$circletype.'" data-icon="'.$icon.'" data-icon-size="'.$iconsize.'" data-icon-color="'.$iconcolor.'"></div>';
        $lighercolor=EBScolorBrightness($fontcolor,0.50);
        $out.="<style>
                #osc_progress_{$id} .circle-text{
                color:{$fontcolor};
                }
                #osc_progress_{$id} .circle-info{
                color:{$lighercolor};
                }
}
            </style>";

        wp_enqueue_script('jquery.circliful',EBS_ASSET_URL.'js/jquery.circliful.js');

    }
    elseif($type=='custom_linear'){
        $bartype=empty($bartype)?'type_1':$bartype;
        $gradient_clsses=array('type_1'=>
            array('class'=>'nu-darkgreener nu-covered',
            'css'=>" #osc_progress_{$id} .numbars-num{
                   color:{$fontcolor};
                    }
                    #osc_progress_{$id} .numbars-progress{
                        background:  linear-gradient(to right, {$fillcolor1} 0%, {$fillcolor2} 100%);
                    }"),
        'type_2'=>array('class'=>'nu-purple nu-covered',
            'css'=>" #osc_progress_{$id} .numbars-num{
                   color:{$fontcolor};
                    }
                    #osc_progress_{$id} .numbars-progress{
                        background:  linear-gradient(to right, {$fillcolor1} 0%, {$fillcolor2} 100%);
                    }"),
            'type_3'=>array('class'=>'nu-lightorange',
                'css'=>" #osc_progress_{$id} .numbars-num{
                   color:{$fontcolor};
                     background: {$fillcolor1} !important;
                    }
                    #osc_progress_{$id} .numbars-progress{
                       background:  {$fillcolor1};
                    }"),
            'type_4'=>array('class'=>'nu-green',
            'css'=>" #osc_progress_{$id} .numbars-num{
                   color:{$fontcolor};
                     background: {$fillcolor1} !important;
                    }
                    #osc_progress_{$id} .numbars-progress{
                       background:  {$fillcolor1};
                    }"),
            'type_5'=>array('class'=>'nu-gamebar nu-right-to-left',
            'css'=>" #osc_progress_{$id} .numbars-num{
                   color:{$fontcolor};

                    }
                    #osc_progress_{$id} .numbars-progress{
                       background:  {$fillcolor1};
                    }"));
        wp_enqueue_script('ebs_inview_js',EBS_ASSET_URL.'js/jquery.inview.js');
        wp_enqueue_style('ebs_numbar',EBS_ASSET_URL.'styles/numbars.css');
        $out='<span id="osc_progress_'.$id.'"  class="ebs_numbars numbars '.$gradient_clsses[$bartype]['class'].' '.$class.' '.$bartype.'" data-max="'.$max.'" data-value="'.$value.'" data-increment="'.$increment.'" data-num="0" data-percent="'.$percent.'">0</span>';
        $css_offset='';
        if($offset=='true'){
           $css_offset="#osc_progress_{$id}:before{
           content:'0';
           color:{$offsetcolor}
           }
           #osc_progress_{$id}:after{
           content:attr(data-max);
           color:{$offsetcolor}
           }";
        } else{
            $css_offset="#osc_progress_{$id}:before{
           content:'';
           }
           #osc_progress_{$id}:after{
           content:'';
           }";
        }
        $out.="<style>
                #osc_progress_{$id} {
                background:{$remaincolor};
                }
                {$gradient_clsses[$bartype]['css']}
                {$css_offset}
            </style>";
        wp_enqueue_script('ebs_numbar',EBS_ASSET_URL.'js/numbars.js');

    } else{
        $out = $label != '' && $label_style=='outside' ? '<div class="osc_bar_outer"><label class="osc-progressbar-label'.EBS_CONTAINER_CLASS.'">' . $label . '</label>' : '';
        $out.='<div class="progress ' . $barstyle . ' ' . $class . ' osc-progressbar'.EBS_CONTAINER_CLASS.'">
  <div class="progress-bar ' . $bartype .EBS_CONTAINER_CLASS. '"  role="progressbar" aria-valuenow="' . $value . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $value . '%">'.($label != '' && $label_style=='inside' ? $label  : '').'
    <span class="sr-only'.EBS_CONTAINER_CLASS.'">' . $value . '% Complete</span>
  </div>
</div>';
        $out .= $label  != '' && $label_style=='outside' ?'</div>':'';
    }


    return $out;
}

ebs_backward_compatibility_callback('progressbar', 'osc_theme_progressbar');