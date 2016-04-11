<?php
/*
 * Provide support for nested shortcode remove filter 'do_shortcode' and add filetr 'shortcode_inception'
 * 'shortcode_inception' will provide nested shortcode support, you can use 'shortcode_inception' instead of 'do_shortcode' in php files
 */
$tags_array=array();


function parsenestedshortcode($input='',$tag='',$counter=0){
    global $tags_array;
    $counter++;
    $withtag='';
    if(($pos = strpos($input,'['.$tag.' '))!==false){
        $withtag=' ';
    }else if(($pos = strpos($input,'['.$tag.']'))!==false){
        $withtag=']';
    }
    if($pos!==false){
        $input = preg_replace('/\['.$tag.$withtag.'/','['.$counter.'_'.$tag.$withtag,$input,1);
        $temp_str =  substr($input,0, $pos+strlen('['.$counter.'_'.$tag));
        $input = substr($input,$pos+strlen('['.$counter.'_'.$tag));
        $input = parsenestedshortcode($input,$tag,$counter);
        $input = preg_replace('/\[\/'.$tag.'\]/','[/'.$counter.'_'.$tag.']',$input,1);
        $temp_str .= $input;
        $tags_array[$counter.'_'.$tag]=$tag;
    } else {
        $temp_str = $input;
    }

    return $temp_str;
}

if(!function_exists('shortcode_inception')){
function shortcode_inception($content) {
    global $shortcode_tags,$tags_array;

    $ebs_tags_array_old=array('toggles','toggle','tabs','tab','list','li','notification','row','column','table','table_head','th_column','table_body','table_row','row_column','tooltip','iconheading','panel','panel-header','panel-content','panel-footer','oscpopover','dropdown','dropdownhead','dropdownbody','dropdownitem','label','well','buttongroup','btngrptoolbar','dl','dlitem','frame','pt_row','pt_column','pt_column_head','pt_column_features','feature','pt_button','testimonial','sectionheading','dropcaps','separator','lead','pageheader','servicebox','highlights','animation','oscwidget');
    $ebs_tags_array=array();

    $ebs_tags_array_pre=apply_filters( 'ebs_nested_shortcode_array',$ebs_tags_array_old);

    global $compatibility_shortcode_array;
//var_dump($compatibility_shortcode_array);
    foreach($ebs_tags_array_pre as $val1){
        foreach ($compatibility_shortcode_array as $val2){
            array_push($ebs_tags_array,$val2.$val1);
        }
    }
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;

    foreach($shortcode_tags as $tag=>$method){
        if(in_array($tag,$ebs_tags_array)){
            $content=parsenestedshortcode($content,$tag);
        }
    }
    if(count($tags_array)){
        foreach($tags_array as $func=>$t){
            $shortcode_tags[$func]=$shortcode_tags[$t];
        }
    }

    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );

}
}


// remove the native do_shortcode filter
remove_filter('the_content', 'do_shortcode', 11);
// replace the filter with the shortcode_inception function
add_filter('the_content', 'shortcode_inception', 11);