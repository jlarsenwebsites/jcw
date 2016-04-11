<?php
/* **********************************************************
 * VIDEO
 * **********************************************************/
function oscitas_ebs_video( $params, $content = null) {
    extract( shortcode_atts( array(
        'type' => '',
        'link' => '',
        'width' => '',
        'height' => '',
        'border' => '',
        'dimensions' => '',
        'class'=>''
    ), $params ) );

    if($link == "") { return ""; }



    if($border != ""){
        $borderStyle = ' border';
    } else {
        $borderStyle = "";
    }

    if($type == "youtube"){

        $vidparser = parse_url($link);
        parse_str($vidparser['query'], $query);
        $clip_id = ($query['v']);
        $video_url='http://www.youtube.com/embed/'.$clip_id.'?wmode=opaque';
        $frameAttr=' frameborder="0" allowfullscreen';
    } elseif ($type == "vimeo"){

        $clip_id = str_replace("http","",$link);
        $clip_id = str_replace(":","",$clip_id);
        $clip_id = str_replace("/","",$clip_id);
        $clip_id = trim(str_replace("vimeo.com","",$clip_id));
        sscanf(parse_url($link, PHP_URL_PATH), '/%d', $clip_id);
        $result = preg_match('/(\d+)/', $link, $matches);
        if ($result) {
            $clip_id=$matches[0];
        }
        $video_url='http://player.vimeo.com/video/'.$clip_id.'?title=0&amp;byline=0&amp;portrait=0';
        $frameAttr=' frameborder="0"';
    }

    if($dimensions=='' || $dimensions=='custom'){
        if($width == "") { $width = 600; }

        if($height == "") { $height = 370; }
        $result='<div class="sc-video'.$borderStyle.EBS_CONTAINER_CLASS.' osc-video '.$class.'" style="max-width:'.$width.';max-height:'.$height.'"><div class="ebs-wrap"><iframe  style="width:'.$width.'; height:'.$height.';" src="'.$video_url.'"'.$frameAttr.'></iframe></div></div>';
    } else{

        $result='<div class="embed-responsive'.EBS_CONTAINER_CLASS.' embed-responsive-'.$dimensions.'">
                <iframe class="embed-responsive-item'.EBS_CONTAINER_CLASS.'"  src="'.$video_url.'"'.$frameAttr.'></iframe>
                </div>';
    }

    return $result;
}
ebs_backward_compatibility_callback( 'video', 'oscitas_ebs_video' );
ebs_backward_compatibility_callback( 'oscvideo', 'oscitas_ebs_video' );