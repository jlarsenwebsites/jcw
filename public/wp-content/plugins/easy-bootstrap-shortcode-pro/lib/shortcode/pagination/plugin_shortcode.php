<?php
add_filter('the_post', 'ebs_osc_setup_postdata', 11);
function ebs_osc_setup_postdata( $post ) {
    global $id, $page, $pages, $multipage, $more, $numpages;
    $id = (int) $post->ID;
    $numpages = 1;
    $multipage = 0;
    $page = get_query_var('page');
    if ( ! $page )
        $page = 1;
    $content = $post->post_content;
    if ( false !== strpos( $content, '<!--custompagination-->' ) ) {
        if ( $page > 1 )
            $more = 1;
        $content = str_replace( "\n<!--custompagination-->\n", '<!--custompagination-->', $content );
        $content = str_replace( "\n<!--custompagination-->", '<!--custompagination-->', $content );
        $content = str_replace( "<!--custompagination-->\n", '<!--custompagination-->', $content );
        // Ignore custompagination at the beginning of the content.
        if ( 0 === strpos( $content, '<!--custompagination-->' ) )
            $content = substr( $content, 15 );

        $pages = array_map('trim',explode('<!--custompagination-->', $content));
        foreach($pages as $key => $val){
            if(trim($val) == "") unset($pages[$key]);
        }
        $pages =  array_values($pages);
        	$numpages =count($pages);
        if ( $numpages > 1 )
            $multipage = 1;
    } else {
        $pages = array( $post->post_content );
    }
    add_filter('wp_link_pages','osc_ebs_custom_nextpage_links');
    wp_enqueue_style('ebs-pagination-css',EBS_ASSET_URL.'styles/page-nav.css');
    return $post;
}
function osc_ebs_custom_nextpage_links( $args='' ) {
    global $post;
    $overwritten_pagination=get_post_meta($post->ID,'overwrite_global_pagination',true);
    $pagination_style=($overwritten_pagination=='yes'?(trim(get_post_meta($post->ID, 'paginition_style', true))!=''?get_post_meta($post->ID, 'paginition_style', true):'pagination'):ebs_get_pagination_opt('paginition_style')).EBS_CONTAINER_CLASS;
    $defaults = array(
        'before' => '<div class="ebs-post-pagination"><p><strong class="pg_strong">' . __( 'Pages:' ).'</strong><ul class="'.$pagination_style  .EBS_CONTAINER_CLASS. '">',
        'after' => '</ul></p></div>',
        'text_before' => '',
        'text_after' => '',
        'link_before'      => '',
        'link_after'       => '',
        'next_or_number'   => 'number',
        'separator'        => ' ',
        'nextpagelink' => __( 'Next page' ),
        'previouspagelink' => __( 'Previous page' ),
        'pagelink' => '%',
        'echo' => 0
    );
    $r = wp_parse_args($args, $defaults);
    extract( $r,EXTR_SKIP);
    global $page, $numpages, $multipage, $more, $pagenow;
    $output = '';
    if ( $multipage ) {
        if ( 'number' == $next_or_number ) {
            $output .= $before;
            for ( $i = 1; $i < ( $numpages + 1 ); $i = $i + 1 ) {
                $j = str_replace( '%', $i, $pagelink );
                $output .= ' ';
                if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
                    $output .='<li class="'.EBS_CONTAINER_CLASS.'">'. _wp_link_page( $i );
                else
                    $output .= '<li class="active'.EBS_CONTAINER_CLASS.'"><span>';

                $output .= $text_before . $j . $text_after;
                if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
                    $output .= '</a></li>';
                else
                    $output .= '</span></li>';
            }
            $output .= $after;
        } else {
            if ( $more ) {
                $output .= $before;
                $i = $page - 1;
                if ( $i && $more ) {
                    $output .= _wp_link_page( $i );
                    $output .= $text_before . $previouspagelink . $text_after . '</a>';
                }
                $i = $page + 1;
                if ( $i <= $numpages && $more ) {
                    $output .= _wp_link_page( $i );
                    $output .= $text_before . $nextpagelink . $text_after . '</a>';
                }
                $output .= $after;
            }
        }
    }
    $opt=array('default_color','default_text_color','hover_color','hover_text_color','current_color','current_text_color');
    if($overwritten_pagination=='yes'){
    foreach($opt as $option){
            $$option=get_post_meta($post->ID,$option,true);
    }
    } else{
        foreach($opt as $option){
            $$option=ebs_get_pagination_opt($option);
        }
    }
$css="
.ebs-post-pagination ul li a{
color:{$default_text_color} !important;
background-color:{$default_color} !important;

}
.ebs-post-pagination ul li a:hover{
color:{$hover_text_color} !important;
background-color:{$hover_color} !important;

}
.ebs-post-pagination ul li.active span{
color:{$current_text_color} !important;
background-color:{$current_color} !important;
border:1px solid {$current_color} !important;
}";
    if($pagination_style!='pagination'){
        $css.=".ebs-post-pagination ul li a{
border:1px solid {$default_color} !important;
}
.ebs-post-pagination ul li a:hover{
border:1px solid {$hover_color} !important;
}";
    }
   $_SESSION['EBS_PAGINATION']=$css;
    if ( $echo )
        echo $output;
    return $output;
}