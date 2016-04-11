<?php

/* * *********************************************************
 * HR Rule
 * ********************************************************* */

function theme_wptestimonials($params, $content = null) {
    extract(shortcode_atts(array(
                'testimonials' => '',
			    'class' => '',
			    'length'=>''
                    ), $params));
	$wp_query='';
    $temp = $wp_query;
    $out = '';
    global $post;
    $wp_query = null;
    $wp_query = new WP_Query();
    $args = array('post_type' => 'testimonials',
        'posts_per_page' => $testimonials
    );
    $wp_query->query($args);
    $out .='<div class="osc-wp-testimonial ' . $class . '">';
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            if (has_post_thumbnail($post->ID)):
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
            endif;
            $author = get_post_meta($post->ID, 'author_name', true);
            $designation = get_post_meta($post->ID, 'author_designation', true);
            $out .= '<div class="osc_wp_testimonail" >
                <p>' . do_shortcode(ebs_excerpt($length)) . '</p>
                   <span class="osc_def_testimonail_author">' . $author . '</span>
   <span class="osc_def_testimonail_author_desig">' . $designation . '</span>
            </div>';
        endwhile;
    else :
        $out .= '<h3>Not Found</h3>';

    endif;
    $out .='</div>';
?>
    <?php

    $wp_query = $temp;

    return $out;
}

ebs_backward_compatibility_callback('post_testimonials', 'theme_wptestimonials');