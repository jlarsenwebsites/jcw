<?php

/* * *********************************************************
 * HR Rule
 * ********************************************************* */

function theme_recentwork($params, $content = null) {
    extract(shortcode_atts(array(
        'projects' => '',
        'class' => '',
        'layout'=>'col-4',
        'length'=>''
    ), $params));
    $wp_query='';
    $temp = $wp_query;
    $out = '';

    $projects=intval($projects);
    if(!is_int($projects) || $projects<=0){
        $projects=2;
    }
    if($layout=='col-2'){
        $lg='col-lg-6';
        $md=' col-md-6';
        $sm=' col-sm-6';
        $image_size='ebs-portfolio-two';

    } elseif($layout=='col-3'){
        $lg='col-lg-4';
        $md=' col-md-4';
        $sm=' col-sm-6';
        $image_size='ebs-portfolio-three';
    } else{
        $lg='col-lg-3';
        $md=' col-md-3';
        $sm=' col-sm-6';
        $image_size='ebs-portfolio-four';
    }
    global $post;
    $wp_query = null;
    $wp_query = new WP_Query();
    $args = array('post_type' => 'our_projects',
        'posts_per_page' => $projects
    );
    $wp_query->query($args);

    $out .='<div class="osc-recent-work ' . $class . '">';
    $out.='<div class="row'.EBS_CONTAINER_CLASS.'">';
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        if (has_post_thumbnail($post->ID)):
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
        endif;
        $out .= '<div class="osc-prjct-block '.$lg.$md.$sm.EBS_CONTAINER_CLASS.' ">
                     <div class="thumbnail img-thumbnail'.EBS_CONTAINER_CLASS.'">'. get_the_post_thumbnail($post->ID, $image_size) .'</div>
                    <h3><a href = "' . get_permalink() . '" title = "' . get_the_title() . '">' . get_the_title() . '</a></h3>';
        $out.= '<p>' .do_shortcode(ebs_excerpt($length)) . '</p>';
        $out.='</div>';

    endwhile;
    else :
        $out .= '<h3>Not Found</h3>';

    endif;
    $out .='</div>';
    $out.='</div>';
    ?>
    <?php

    $wp_query = $temp;
    wp_reset_postdata();
    return $out;
}

ebs_backward_compatibility_callback('recentwork', 'theme_recentwork');