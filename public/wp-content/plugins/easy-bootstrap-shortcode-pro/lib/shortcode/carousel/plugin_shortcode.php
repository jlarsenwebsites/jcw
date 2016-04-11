<?php
function shuffle_assoc($list) {
    if (!is_array($list)) return $list;

    $keys = array_keys($list);
    shuffle($keys);
    $random = array();
    foreach ($keys as $key)
        $random[$key] = $list[$key];

    return $random;
}

$_oscitas_carousel = array();
function getInbetweenStrings($start, $end, $str){
    $matches = array();
    $regex = "/$start([a-zA-Z0-9_]*)$end/";
    preg_match_all($regex, $str, $matches);
    return $matches[1];
}
function osc_theme_carousels($params, $content = null) {
    global $_oscitas_carousel;
    if(!isset($_SESSION['ebs_carousel_css'])){
        $_SESSION['ebs_carousel_css']=array();
    }
    extract(shortcode_atts(array(
        'id' => count($_oscitas_carousel),
        'class' => '',
        'style'=>'multiitem',
        'order'=>'ASC',
        'orderby'=>'rand',
        'itemnum'=>3,
        'interval'=>'false',
        'navigation'=>'false',
        'bullets'=>'false',
        'pause'=>'false',
        'play_pause'=>'false',
        'transition'=>'false',
        'navcolor'=>'',
        'posts'=>'',
        'type'=>'',
        'slideineffect'=>'',
        'slideouteffect'=>''
    ), $params));
    $_oscitas_carousel[$id]=array();
    $posts =explode(',',$posts);
    $post_arr=array();
    foreach($posts as $p){
        $p=explode(':',$p);
//
        if(strpos($p[1],';')===false){
            $post_arr[$p[0]]=$p[1];
        } else{
            $post_arr[$p[0]]=array();
            $valArr=explode(';',$p[1]);
            foreach($valArr as $arr){
                if(!empty($arr)){
                    $taxArr= explode('(',$arr);
                    $post_arr[$p[0]][$taxArr[0]]=array();
                    $termVal=explode(')',$taxArr[1]);
                    if(is_array($termVal)){
                        foreach($termVal as $dataArr){
                            if(!empty($dataArr)){
                                $termArr=explode('|',$dataArr);
                                if(is_array($termArr)){
                                    foreach($termArr as $terms){
                                        if(!empty($terms)){
                                            $postFinal= explode('-#-',$terms);
                                            $post_arr[$p[0]][$taxArr[0]][$postFinal[0]]=$postFinal[1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    wp_enqueue_script('carousel_js',EBS_ASSET_URL.'js/owl.carousel.js');
    wp_enqueue_style('carousel_css',EBS_ASSET_URL.'styles/owl.carousel.css');
    wp_enqueue_style('carousel_theme_css',EBS_ASSET_URL.'styles/owl.theme.css');
    wp_enqueue_style('carousel_transitions_css',EBS_ASSET_URL.'styles/owl.transitions.css');
    $galleryclass='';
    $gallery_opt='gallery:false';
    if($type=='gallery'){
        wp_enqueue_script('carousel_gallery_js',EBS_ASSET_URL.'js/magnific-popup.js',array('carousel_js'));
        wp_enqueue_style('carousel_gallery_css',EBS_ASSET_URL.'styles/magnific-popup.css');
        $gallery_opt='gallery:true';
    }

    $output='<div id="ebs-carousel-'.$id.'" class="owl-carousel">';

    global $post;
//    $post_arr=shuffle_assoc($post_arr);
    $postArrList=array();
    foreach($post_arr as $kpost => $getpost){
        $wp_query = null;
        $wp_query = new WP_Query();
        if($orderby=='rand'){
            remove_all_filters('posts_orderby');
        }

        if(is_array($getpost)){
            foreach($getpost as $taxonomyName => $taxes){
                foreach($taxes as $term =>$tPageNum){
                    $args = array(
                        'orderby' => $orderby,
                        'order'=>$order,
                        'post_type' => $kpost,
                        'posts_per_page' => $tPageNum,
                        'tax_query' => array(

                            array(
                                'taxonomy' => $taxonomyName,
                                'field'    => 'id',
                                'terms'    => array( $term ),
                                'include_children'=> false

                            ),
                        ),
                        'meta_query' => array(array('key' => '_thumbnail_id'))
                    );
                    $wp_query->query($args);

                    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                        $outputclose='';
                        $postArrList[]=get_the_ID();

                    endwhile;
                    endif;
                    wp_reset_query();
                    wp_reset_postdata();
                }
            }
        } else{
            $args = array(

                'post_type' => $kpost,
                'posts_per_page' => $getpost,
                'orderby' => $orderby,
                'order'=>$order,
                'meta_query' => array(array('key' => '_thumbnail_id'))
            );
            $wp_query->query($args);

            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                $outputclose='';

                $postArrList[]=get_the_ID();
            endwhile;
            endif;
            wp_reset_query();
            wp_reset_postdata();
        }

    }
    $postArrList=array_unique($postArrList);
    if(!empty($postArrList)){
        foreach($postArrList as $pList){
            if($type=='gallery'){
                $output.='<div class="item ebs_carousel_gallery_'.$id.'">';
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($pList), 'full');
                $output.='<a href="'.$image[0].'" class="ebs-carousel-gallery">';
                $outputclose='</a>';
            } elseif($type=='link'){
                $output.='<div class="item ">';
                $output.='<a href="'.get_permalink($pList).'">';
                $outputclose='</a>';
            } else{
                $output.='<div class="item">';
                $outputclose='';
            }
            $imgsize=($style=="singleitem")?'full':'thumbnail';
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($pList), $imgsize);
            $output.=' <img src="'.$image[0].'" />';
            $output.=$outputclose;
            $output.='</div>';
        }
    }
    $output.='</div>';

    if($style=='singleitem'){
        $optstyle=' singleItem : true,';
    } else{
        $optstyle=' items : '.$itemnum.',';
    }
    $navopt='';
    if($navigation=='side'){
        $navopt=' navigationCustom : true,';
    } elseif($navigation=='bottom'){
        $navopt=' navigation: true,';
    }


    $textcolr=EBScolorBrightness($navcolor,0.10);

    $_SESSION['ebs_carousel_css'][$id]=$id;
    $_SESSION['ebs_carousel_each_'.$id]="

    #ebs-carousel-{$id} .item{
        margin: 3px;
    }
    #ebs-carousel-{$id} .item img{
        display: block;
        width: 100%;
        height: auto;
    }

    #ebs-carousel-{$id} a.carousel-control span{
        color:{$navcolor};
    }
    #ebs-carousel-{$id} .owl-controls .owl-page span,#ebs-carousel-{$id} .owl-controls .owl-buttons div{
    background-color:{$navcolor};
    }
    #ebs-carousel-{$id} .owl-controls .owl-buttons div{
    color:{$textcolr};
    }
    #ebs-carousel-{$id} .carousel-inner > .item > img,  #ebs-carousel-{$id} .carousel-inner > .item > a > img{
        width:100%;
    }";
    if(!empty($transition) && $transition!='false'){
        $trst='transitionStyle:"'.$transition.'",';
    } else{
        $trst='';
    }
    $_SESSION['ebs_carousel_each_js_'.$id]='
    jQuery(document).ready(function() {

      jQuery("#ebs-carousel-'.$id.'").owlCarousel({
        '.$optstyle.'
        autoPlay : '.$interval.',
        stopOnHover : '.$pause.',
        '.$navopt.'
        navigationText : ["Prev", "Next"],
          rewindNav : true,
        scrollPerPage : false,
            paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        pagination : '.$bullets.',
'.$trst.'
        slideInEffect:"'.$slideineffect.'",
        slideOutEffect:"'.$slideouteffect.'",
        play_pause:'.$play_pause.',
         autoHeight : true,
        '.$gallery_opt.'
      });';
    if($slideineffect!='' && $slideineffect!='none'){

        for($i=1;$i<=$itemnum;$i++){
            $_SESSION['ebs_carousel_each_js_'.$id].= "jQuery('#ebs-carousel-$id .owl-item:nth-child({$i})').addClass('{$slideineffect}'); ";
        }
    }


    if($type=='gallery'){
        $_SESSION['ebs_carousel_each_js_'.$id].=" jQuery('.ebs_carousel_gallery_{$id}').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
        enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
        tError: ''
        }

    });";
    }
    $_SESSION['ebs_carousel_each_js_'.$id].=' });';

    wp_enqueue_style('ebs_animation_css',EBS_ASSET_URL.'styles/animate_carousel.css');
    wp_enqueue_script('carousel-dynamic',EBS_ASSET_URL.'js/carousel-dynamic.php');

    return $output;
}

ebs_backward_compatibility_callback('carousel', 'osc_theme_carousels');