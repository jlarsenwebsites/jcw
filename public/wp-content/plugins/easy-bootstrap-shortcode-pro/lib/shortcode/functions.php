<?php
/*
 * Define EBS container class and some js object template
 */
$css = get_option( 'EBS_BOOTSTRAP_CSS_LOCATION', 1 );
if($css==3){
    define('EBS_CONTAINER_CLASS',' oscitas-bootstrap-container');
    define('EBS_POPOVER_TEMPLATE','<div class="popover'.EBS_CONTAINER_CLASS.'"><div class="arrow'.EBS_CONTAINER_CLASS.'"></div><h3 class="popover-title'.EBS_CONTAINER_CLASS.'"></h3><div class="popover-content'.EBS_CONTAINER_CLASS.' "></div></div>');
    define('EBS_TOOLTIP_TEMPLATE','<div class="tooltip'.EBS_CONTAINER_CLASS.'"><div class="tooltip-arrow'.EBS_CONTAINER_CLASS.'"></div><div class="tooltip-inner'.EBS_CONTAINER_CLASS.'"></div></div>');
} else{
    define('EBS_CONTAINER_CLASS','');
    define('EBS_POPOVER_TEMPLATE','');
    define('EBS_TOOLTIP_TEMPLATE','');
}
/*
 * Get current post type
 */
function osc_get_current_post_type() {
    global $post, $typenow, $current_screen, $pagenow;

//we have a post so we can just get the post type from that
    if ($post && $post->post_type)
        return $post->post_type;
//check the global $typenow - set in admin.php
    elseif ($typenow)
        return $typenow;
//check the global $current_screen object - set in sceen.php
    elseif ($current_screen && $current_screen->post_type)
        return $current_screen->post_type;
//lastly check the post_type querystring
    elseif (isset($_REQUEST['post_type']))
        return sanitize_key($_REQUEST['post_type']);
//on post edit screen
    elseif (isset($_REQUEST['post']))
        return get_post_type($_REQUEST['post']);
// adding new post
    elseif (in_array($pagenow, array('post-new.php')) && isset($_REQUEST['post_type']) && $_REQUEST['post_type']== '')
        return 'post';
    return null;
}


// Add Shortcode buttons in TinyMCE

$version=floatval(get_bloginfo('version'));
    if($version<3.8){
        add_action('plugins_loaded','add_custom_opt',99);
    } else{
        add_action('init','add_custom_opt',99);
    }
function add_custom_opt(){
    global $elementsnew, $elements;
//    $projects=get_posts(array('post_type' => 'our_projects'));
//    $testimonial=get_posts(array('post_type' => 'testimonials'));
//
//    if(get_current_post_type()!='post'){
//        array_push($elementsnew,'recentpost');
//    }
//
//    if(count($projects)>0){
//
//        if(get_current_post_type()!='our_projects'){
//            array_push($elementsnew,'recentwork');
//        }
//    }
//
//
//    if(count($testimonial)>0){
//        if(get_current_post_type()!='testimonials'){
//            array_push($elementsnew,'wptestimonial');
//        }
//    }

    $ebs_array=ebs_shortcodes();

    $elementsnew=$ebs_array['secondary'];
    $elements=$ebs_array['primary'];

    if(count($elements)>0){
        foreach ($elements as $element => $val) {
            $path=ebs_get_shortcode_path($val);
            include( $path.'/shortcode/'.$element . '/plugin_shortcode.php');
        }
    }
    if(count($elementsnew)>0){
        foreach ($elementsnew as $element => $val) {
            $path=ebs_get_shortcode_path($val);
            include( $path.'/shortcode/'.$element . '/plugin_shortcode.php');
        }
    }
}
if(is_admin()){
    add_action('init', 'osc_add_ebs_buttons_to_tinymce');
}
function osc_add_ebs_buttons_to_tinymce() {
    add_action( 'admin_footer','ebsp_media_popup' );
    $ebsp_editor_opt=get_option('EBS_EDITOR_OPT','media');
    add_image_size('ebs-portfolio-two', 569, 372, true);
    add_image_size('ebs-portfolio-three', 369, 241, true);
    add_image_size('ebs-portfolio-four', 269, 176, true);
    if (!current_user_can('edit_posts') && !current_user_can('edit_pages'))
        return;

    if (get_user_option('rich_editing') == 'true') {

        if($ebsp_editor_opt=='icon'){
            add_filter("mce_external_plugins", "osc_add_ebs_plugin",1354.12);
            add_filter('mce_buttons_3', 'osc_register_ebs_button',1354.12);
            add_filter('mce_buttons_4', 'osc_register_ebs_button_newline',1354.18);

        } elseif($ebsp_editor_opt=='dropdown'){
            add_filter('mce_buttons', 'osc_register_ebs_dropdown',1276.98);
            add_filter("mce_external_plugins", "osc_add_ebs_plugin_dropdown",1276.17);
        } else{
            add_action( 'media_buttons', 'ebsp_add_media_button',1393.17 );
            add_filter("mce_external_plugins", "osc_add_ebs_plugin_extended",1393.85);
        }
    }
}

/*
 * Make shortcode dropdown
 */
function osc_register_ebs_dropdown($buttons){
    $buttons[] = 'oscitas_main_dropdown_button';
    return $buttons;
}

/*
 * Make individual button on editor
 */
function osc_register_ebs_button($buttons) {
    $ebs_array=ebs_shortcodes();
    $elements=$ebs_array['primary'];
    foreach ($elements as $element => $val) {
        $buttons[] = 'oscitas' . $element;
    }
    return $buttons;
}

function osc_register_ebs_button_newline($buttons) {
    $ebs_array=ebs_shortcodes();
    $elementsnew=$ebs_array['secondary'];
    foreach ($elementsnew as $element => $val) {
        $buttons[] = 'oscitas' . $element;
    }
    return $buttons;
}

/*
 * Get shortcode url if shortcode is in add on plugin or in EBS pro
 */
function ebs_get_shortcode_url($val){
    if(isset($val['url']) && $val['url']!=''){
        $path=$val['url'].'/lib/';
    } else{
        $path=EBS_PLUGIN_URL.'/lib/';
    }
    return $path;
}

/*
 * Get shortcode path if shortcode is in add on plugin or in EBS pro
 */
function ebs_get_shortcode_path($val){
    if(isset($val['path']) && $val['path']!=''){
        $path=$val['path'].'/lib/';
    } else{
        $path=EBS_PLUGIN_PATH.'/lib/';
    }
    return $path;
}

/*
 * Load shortcode js in tinymce editor
 */
function osc_add_ebs_plugin($plugin_array) {
    $ebs_array=ebs_shortcodes();
    $elements=$ebs_array['primary'];
    $elementsnew=$ebs_array['secondary'];
    echo '<script>window.ebsp_style="icon";</script>';
    foreach ($elements as $element => $val) {
        $path= ebs_get_shortcode_url($val);
        $plugin_array['oscitas' . $element] = $path . '/shortcode/' . $element . '/' . $element . '_plugin.js';

    }

    foreach ($elementsnew as $element => $val) {
        $path= ebs_get_shortcode_url($val);
        $plugin_array['oscitas' . $element] =$path . '/shortcode/' . $element . '/' . $element . '_plugin.js';

    }

    return $plugin_array;
}

function osc_add_ebs_plugin_extended($plugin_array) {
    $ebs_array=ebs_shortcodes();
    $elements=$ebs_array['primary'];
    $elementsnew=$ebs_array['secondary'];
    echo '<script>window.ebsp_style="media";</script>';
    foreach ($elements as $element => $val) {
        $path= ebs_get_shortcode_url($val);
        wp_enqueue_script('oscitas' . $element,$path . '/shortcode/' . $element . '/' . $element . '_plugin.js');
    }

    foreach ($elementsnew as $element => $val) {
        $path= ebs_get_shortcode_url($val);
        if($element!='pagination'){
            wp_enqueue_script('oscitas' . $element,$path . '/shortcode/' . $element . '/' . $element . '_plugin.js');
        }
    }
    $plugin_array['oscitaspagination'] =plugins_url('', __FILE__) . '/pagination/pagination_plugin.js';
    return $plugin_array;
}
/*
 * Add EBS dropdown js in tinymce editor
 */
function osc_add_ebs_plugin_dropdown($plugin_array) {
    $ebs_array=ebs_shortcodes();
    $elements=$ebs_array['primary'];
    $elementsnew=$ebs_array['secondary'];
    echo '<script>window.ebsp_style="dropdown";</script>';
    foreach ($elements as $element => $val) {
        $path= ebs_get_shortcode_url($val);

        wp_enqueue_script('oscitas' . $element,$path . '/shortcode/' . $element . '/' . $element . '_plugin.js');
    }

    foreach ($elementsnew as $element => $val) {
        $path= ebs_get_shortcode_url($val);
        if($element!='pagination'){
            wp_enqueue_script('oscitas' . $element,$path . '/shortcode/' . $element . '/' . $element . '_plugin.js');
        }
    }
    $plugin_array['oscitaspagination'] =plugins_url('', __FILE__) . '/pagination/pagination_plugin.js';

    $version=floatval(get_bloginfo('version'));
    if($version<3.9){
        $plugin_array['oscitas_main_dropdown']=EBS_ASSET_URL.'js/oscitas_main_dropdown.js';
    } else{
        $plugin_array['oscitas_main_dropdown']=EBS_ASSET_URL.'js/oscitas_dropdown_3_9.js';
    }

    return $plugin_array;
}
if ( ! function_exists('ebs_tinymce_editor_css') ) {
    function ebs_tinymce_editor_css($wp) {
        $wp .= ',' . EBS_ASSET_URL.'styles/tinymce.css';
        return $wp;
    }
}

add_filter( 'mce_css', 'ebs_tinymce_editor_css' );
/*
 * add EBS metabox
 */
add_action("add_meta_boxes", "ebs_add_custom_metabox");
function ebs_add_custom_metabox() {
    $post_array=get_post_types();
    foreach($post_array as $post_type){
        add_meta_box('custom_ebs_meta', 'Pagination Specifications', 'ebs_osc_add_custom_field', $post_type, 'normal', 'high');
    }

}

/*
 * Add custom fields under post/customposts/ pages to over write global pagination
 */
function ebs_osc_add_custom_field($post_id) {
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    $custom = get_post_custom($post->ID);
    ?>
    <style type="text/css" xmlns="http://www.w3.org/1999/html">
        .ebs_metabox {
            display: inline-block;
        }
        p.details {
            float: left;
            margin: 0;
            width: 150px;
        }
        p.content {
            float: left;
            margin: 0;
            width: 580px;
        }
        p.content > input {
            float: left;
            position: relative;
            top: 14px;
        }
        p.details label { float: left; width: 150px; line-height: 26px; font-weight: bold}
        label.color_label {
            float: left;
            vertical-align: top;
            width: 80px;

        }

        .ebs_metabox .wp-picker-container, .ebs_metabox .wp-picker-container:active {
            float: left;
            margin-right: 20px;
        }
        p.details input[type=text] { width: 400px; }
    </style>
    <div class="ebs_metabox">
        <p class="details">
            <label >Overwrite Global</label>
        </p>
        <p class="content"> <input type="checkbox" name="overwrite_global_pagination" id="overwrite_global_pagination" value="yes" <?php echo get_post_meta($post->ID, 'overwrite_global_pagination', true)=='yes' ?'checked="checked"':''; ?>><label for="overwrite_global_pagination">Overwrite Global Pagination Settings</label>
        </p>
    </div>
    <div class="ebs_metabox" id="ebs_global_overwritten">
        <p class="details">
            <label >Pagination Style</label>
        </p>
        <p class="content"> <input type="radio" name="paginition_style" id="pagi_pagination" value="pagination" <?php echo get_post_meta($post->ID, 'paginition_style', true)=='' || get_post_meta($post->ID, 'paginition_style', true)=='pagination'?'checked="checked"':''; ?>><label class="img_select" for="pagi_pagination"><?php echo '<img src="'.EBS_ASSET_URL.'images/1.png" />'?></label>
            <br/>
            <input type="radio" name="paginition_style" id="pagi_box" value="pagination_box" <?php echo get_post_meta($post->ID, 'paginition_style', true)=='pagination_box'?'checked="checked"':''; ?>><label class="img_select" for="pagi_box"><?php echo '<img src="'.EBS_ASSET_URL.'images/2.png" />'?></label>
            <br/>
            <input type="radio" name="paginition_style" id="pagi_circle" value="pagination_circle" <?php echo  get_post_meta($post->ID, 'paginition_style', true)=='pagination_circle'?'checked="checked"':''; ?>><label class="img_select" for="pagi_circle"><?php echo '<img src="'.EBS_ASSET_URL.'images/3.png" />'?></label>
            <br/>
            <input type="radio" name="paginition_style" id="pagi_rounded_corner" value="pagination_rounded_corner" <?php echo get_post_meta($post->ID, 'paginition_style', true)=='pagination_rounded_corner'?'checked="checked"':''; ?>><label class="img_select" for="pagi_rounded_corner"><?php echo '<img src="'.EBS_ASSET_URL.'images/4.png" />'?></label>
            <br/>
        </p>
        <p class="details"> <label class="color_label">Default color</label></p>
        <p class="content">
            <label class="color_label">BG Color</label> <input type="text" name="default_color" id="default_color" value="<?php echo get_post_meta($post->ID, 'default_color', true); ?>" class="wp_colorpicker" data-default-color="#FFFFFF">
            <label class="color_label">Text Color</label> <input type="text" name="default_text_color" id="default_text_color" data-default-color="#DDDDDD" value="<?php echo get_post_meta($post->ID, 'default_text_color', true); ?>" class="wp_colorpicker">
        </p>
        <p class="details"> <label class="color_label">Hover Color</label></p>
        <p class="content">
            <label class="color_label">BG Color</label> <input type="text" name="hover_color" id="hover_color" value="<?php echo get_post_meta($post->ID, 'hover_color', true); ?>" class="wp_colorpicker" data-default-color="#EEEEEE">
            <label class="color_label">Text Color</label> <input type="text" name="hover_text_color" id="hover_text_color" value="<?php echo get_post_meta($post->ID, 'hover_text_color', true); ?>" class="wp_colorpicker" data-default-color="#DDDDDD">
        </p>
        <p class="details"> <label>Current Color</label></p>
        <p class="content">
            <label class="color_label">BG Color</label> <input type="text" name="current_color" id="current_color" value="<?php echo get_post_meta($post->ID, 'current_color', true); ?>" class="wp_colorpicker" data-default-color="#428BCA">
            <label class="color_label">Text Color</label> <input type="text" name="current_text_color" id="current_text_color" value="<?php echo get_post_meta($post->ID, 'current_text_color', true); ?>" class="wp_colorpicker" data-default-color="#FFFFFF">
        </p>
    </div>
<?php
}
/*
 * Save post meta box
 */
add_action('save_post', 'ebs_save_custom_metabox');
add_action('edit_post', 'ebs_save_custom_metabox');
function ebs_save_custom_metabox($post_id) {

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {

        return $post_id;
    } else {

        $opt=array('overwrite_global_pagination','paginition_style','default_color','default_text_color','hover_color','hover_text_color','current_color','current_text_color');
        foreach($opt as $option){
            if(isset($_POST[$option])){
                update_post_meta($post_id,$option, $_POST[$option]);
            } else{
                if($option=='overwrite_global_pagination'){
                    update_post_meta($post_id,$option, '');
                }
            }
        }

    }

}

/*
 * ENS shortcodes group based on it misit up categories are created
 */
function ebs_groups($grps=array()){
    $grps=array('basic'=>array(
        'name'=>'Basic Elements',
        'icon'=>'elements.png'
    ),'interactive'=>array('name'=>'Interactive', 'icon'=>'interaction.png'),'content'=>array('name'=>'Content', 'icon'=>'content.png'),
        'miscellaneous'=>array('name'=>'Miscellaneous', 'icon'=>'misc.png'),'columns'=>array('name'=>'Columns', 'icon'=>'column.png'),'social'=>array('name'=>'Social', 'icon'=>'social.png')
    );
    return $grps;
}

/*
 * List of all shortcodes this can b extended or overwrittren by using 'ebs_shortcodes_array_primary' and 'ebs_shortcodes_array_secondary' filters
 */
function ebs_shortcodes(){
    $shortcodes_primary=array(


        'toggles'=>array('group'=>'interactive',
            'name'=>'Accordion',
            'width'=>980,
            'height'=>'',
            'class'=>'ebs_pro_enhanced',
            'tags'=>array('toggles','toggle','accordion')
        ),
        'tabs'=>array('group'=>'interactive',
            'name'=>'Tabs',
            'width'=>1170,
            'height'=>'',
            'class'=>'ebs_pro_enhanced',
            'tags'=>array('tabs','tab')
        ),

        'lists'=>array('group'=>'content',
            'name'=>'List',
            'width'=>930,
            'height'=>'',
            'class'=>'',
            'tags'=>array('lists','list')
        ),
        'buttons'=>array('group'=>'basic',
            'name'=>'Button',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_enhanced',
            'tags'=>array('buttons','button')
        ),
        'notifications'=>array('group'=>'basic',
            'name'=>'Notifications',
            'width'=>'',
            'height'=>'',
            'class'=>'',
            'tags'=>array('notification','notifications','alert')
        ),
        'wpcolumns'=>array('group'=>'columns',
            'name'=>'Columns',
            'width'=>1094,
            'height'=>'',
            'class'=>'ebs_pro_enhanced',
            'tags'=>array('column','columns','row','rows','block')
        ),
        'tables'=>array('group'=>'interactive',
            'name'=>'Tables',
            'width'=>'',
            'height'=>'',
            'class'=>'',
            'tags'=>array('table','tables')
        ),
        'tooltip'=>array('group'=>'basic',
            'name'=>'Tooltip',
            'width'=>'',
            'height'=>'',
            'class'=>'',
            'tags'=>array('tooltip')
        ),

        'iconhead'=>array('group'=>'content',
            'name'=>'Icon Heading',
            'width'=>930,
            'height'=>'',
            'class'=>'',
            'tags'=>array('iconheading','icon heading','iconhead','icon head')
        ),
        'panel'=>array('group'=>'interactive',
            'name'=>'Panel',
            'width'=>'',
            'height'=>'',
            'class'=>'',
            'tags'=>array('panel')
        ),
        'oscpopover'=>array('group'=>'basic',
            'name'=>'Popover',
            'width'=>'',
            'height'=>'',
            'class'=>'',
            'tags'=>array('popover')
        ),
        'dropdown'=>array('group'=>'basic',
            'name'=>'Button Dropdown',
            'width'=>'',
            'height'=>'',
            'class'=>'',
            'tags'=>array('dropdown', 'button dropdown')
        ),
        'labels'=>array('group'=>'content',
            'name'=>'Label',
            'width'=>'',
            'height'=>'',
            'class'=>'',
            'tags'=>array('labels','label')
        ),
        'well'=>array('group'=>'content',
            'name'=>'Well',
            'width'=>'',
            'height'=>'',
            'class'=>'',
            'tags'=>array('well','box')
        ),
        'thumbnail'=>array('group'=>'miscellaneous',
            'name'=>'Responsive Image',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_enhanced',
            'tags'=>array('thumnbnail','image')
        ),
        'icon'=>array('group'=>'miscellaneous',
            'name'=>'Icon',
            'width'=>930,
            'height'=>'',
            'class'=>'',
            'tags'=>array('icon','icons')
        ),
        'image'=>array('group'=>'miscellaneous',
            'name'=>'Image Effects',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_enhanced',
            'tags'=>array('image')
        ),
        'progressbar'=>array('group'=>'basic',
            'name'=>'Progress Bar',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_enhanced',
            'tags'=>array('progressbar','progress bar','bar','bars')
        ),
        'btngrp'=>array('group'=>'basic',
            'name'=>'Button Group',
            'width'=>1200,
            'height'=>'',
            'class'=>'',
            'tags'=>array('button group','buttongroup')
        ),
        'btngrptool'=>array('group'=>'basic',
            'name'=>'Button Group Toolbar',
            'width'=>'',
            'height'=>'',
            'class'=>'',
            'tags'=>array('button group toolbar')
        ),
        'deslist'=>array('group'=>'content',
            'name'=>'Description List',
            'width'=>'',
            'height'=>'',
            'class'=>'',
            'tags'=>array('description list','list')
        ),
        'slider'=>array('group'=>'interactive',
            'name'=>'Slider',
            'width'=>1100,
            'height'=>'',
            'class'=>'',
            'tags'=>array('slider')
        ),
        'jumbotron'=>array('group'=>'content',
            'name'=>'Jumbotron',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('jumbotron')
        ), 'badge'=>array('group'=>'miscellaneous',
            'name'=>'Badge',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('badge')
        ),'blur'=>array('group'=>'miscellaneous',
            'name'=>'Blur',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('blur')
        ));


    $shortcodes_secondary=array(
        'video'=>array('group'=>'interactive',
            'name'=>'Video',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('video','videos')
        ),
        'gmaps'=>array('group'=>'interactive',
            'name'=>'Google Map',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('gmaps','gmap','google map')
        ),
        'boxesframes'=>array('group'=>'miscellaneous',
            'name'=>'Boxframe',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('box frames','boxesframes','box','container')
        ),
        'rule'=>array('group'=>'interactive',
            'name'=>'Horizontal Rule',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('rule','ruler','horizontal rule')
        ),
        'pricingtable'=>array('group'=>'interactive',
            'name'=>'Pricing Table',
            'width'=>1220,
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('pricing table','pricingtable')
        ),
        'testimonial'=>array('group'=>'basic',
            'name'=>'Testimonial',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('testimonial','testimonials')
        ),
        'sectionhead'=>array('group'=>'content',
            'name'=>'Section Heading',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('sectionhead','section head','sectionheading','section heading')
        ),
        'social'=>array('group'=>'social',
            'name'=>'Social',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('social','facebook','twitter')
        ),
        'dropcaps'=>array('group'=>'content',
            'name'=>'Dropcap',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('dropcaps','dropcap','drop cap','drop caps')
        ),
        'separator'=>array('group'=>'content',
            'name'=>'Separator',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('separator')
        ),
        'lead'=>array('group'=>'content',
            'name'=>'Lead',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('lead')
        ),
        'pageheader'=>array('group'=>'content',
            'name'=>'Page Header',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('pageheader','pageheading','page header','page heading')
        ),
        'servicebox'=>array('group'=>'content',
            'name'=>'Servicebox',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_enhanced',
            'tags'=>array('servicebox', 'box','container')
        ),
        'highlights'=>array('group'=>'content',
            'name'=>'Highlights',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('highlights','highlighter','highlight')
        ),
        'widget'=>array('group'=>'miscellaneous',
            'name'=>'Widget',
            'width'=>950,
            'height'=>400,
            'class'=>'ebs_pro_new',
            'tags'=>array('widget','widgets')
        ),
        'pagination'=>array('group'=>'miscellaneous',
            'name'=>'Pagination Shortcode',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('pagination','paginition')
        ),
        'carousel'=>array('group'=>'interactive',
            'name'=>'Carousel',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('carousel','slider')
        ),
        'animation'=>array('group'=>'miscellaneous',
            'name'=>'Animation Shortcode',
            'width'=>930,
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('animation','effect')
        ),
        'vertical_space'=>array('group'=>'miscellaneous',
            'name'=>'Vertical Space',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('space','vertical space')
        ));

    $projects=get_posts(array('post_type' => 'our_projects'));
    $testimonial=get_posts(array('post_type' => 'testimonials'));

    if(osc_get_current_post_type()!='post'){
        $shortcodes_secondary['recentpost']=array('group'=>'miscellaneous',
            'name'=>'Recent Post',
            'width'=>'',
            'height'=>'',
            'class'=>'ebs_pro_new',
            'tags'=>array('post','recent post')
        );
    }

    if(count($projects)>0){

        if(osc_get_current_post_type()!='our_projects'){
            $shortcodes_secondary['recentwork']=array('group'=>'miscellaneous',
                'name'=>'Recent Projects',
                'width'=>'',
                'height'=>'',
                'class'=>'ebs_pro_new',
                'tags'=>array('projects','work')
            );
        }
    }


    if(count($testimonial)>0){
        if(osc_get_current_post_type()!='testimonials'){
            $shortcodes_secondary['wptestimonial']=array('group'=>'miscellaneous',
                'name'=>'Custom Post Testimonial',
                'width'=>'',
                'height'=>'',
                'class'=>'ebs_pro_new',
                'tags'=>array('testimonial','testimonials')
            );
        }
    }
    $ebs_shortcodes=array(
        'primary'=> apply_filters( 'ebs_shortcodes_array_primary',$shortcodes_primary),
        'secondary'=> apply_filters( 'ebs_shortcodes_array_secondary',$shortcodes_secondary)
    );
    return $ebs_shortcodes;
}

/*
 * Sort shortcode array according to name
 */
function ebs_array_sort($array=array()){
    $array=array_merge($array['primary'],$array['secondary']);
    $new_array=array();
    $sec_array=array();
    foreach($array as $key => $val){
        $new_array[$val['name']]=$key;
    }
    ksort($new_array);
    foreach($new_array as $k => $v){
        $sec_array[$v] = $array[$v];
    }
    return $sec_array;
}
/*
 * Add EBS media button
 */
function ebsp_add_media_button( $args = array() ) {
    // Check access

    // Prepare args
    $args = wp_parse_args( $args, array(
        'target'    => 'content',
        'text'      => __( '', 'su' ),
        'class'     => 'button',
        'icon'      =>EBS_ASSET_URL.'images/icon_button.png',
        'echo'      => true,
        'shortcode' => false
    ) );
    // Prepare icon
    if ( $args['icon'] ) $args['icon'] = '<img src="' . $args['icon'] . '" /> ';
    // Print button
    $button = '<a href="javascript:void(0);" class="ebsp-media-button ' . $args['class'] . '" title="' . $args['text'] . '" data-target="' . $args['target'] . '" data-mfp-src="#su-generator" data-shortcode="' . (string) $args['shortcode'] . '">' . $args['icon'] . $args['text'] . '</a>';
    wp_enqueue_media();

    wp_enqueue_script('media_script',EBS_ASSET_URL.'js/ebs_media_button.js');

    if ( $args['echo'] ) echo $button;
    return $button;
}

/*
 * EBS popup markup
 */
function ebsp_media_popup(){
    $grp_html='';$shrt_html='';
    $grp=ebs_groups();
    foreach($grp as $k => $gp){
        $grp_html.= '<li class="filter_ebsp" data-filter=".ebsp-'.$k.'"><img src="'.EBS_ASSET_URL.'images/'.$gp['icon'].'">'.$gp['name'].'</li>';
    }
    $shortcodes=ebs_array_sort(ebs_shortcodes());
    foreach($shortcodes as $key =>$shrt){
        $path=ebs_get_shortcode_url($shrt);
        $imgsrc=$path.'/shortcode/'.$key.'/icon.png';
        $tags=implode(', ',$shrt['tags']);
        $shrt_html.= '<span class="ebsp-block  ebsp_mixit_up_item ebsp-'.$shrt['group'].'" attr-name="'.$key.'" data-cat="ebsp-'.$shrt['group'].'" data-tag="'.$tags.'" attr-width="'.$shrt['width'].'" attr-height="'.$shrt['height'].'"><img src="'.$imgsrc.'" >'.$shrt['name'].'</span>';
    }

    $mix_content='<ul class="ebsp_filters"><li class="filter_ebsp" data-filter="all">ALL</li>'.$grp_html.'<li class="filter_ebsp" data-filter=".ebs_item_search"><img src="'.EBS_ASSET_URL.'images/item_search.png">Search</li></ul><div  class="ebsp_mixit_up">'.$shrt_html.'<div id="no_search_found" class="ebsp-block  ebsp_mixit_up_item ebs_item_search">No item match your search.</div></div>';


    ob_start();
    ?>

    <div id="ebsp_media_button_content" style="display: none" title="EBS Shortcode">
        <h2 class="ebsp_heading"><?php _e('EBS Shortcode'); ?></h2>
        <div class="ebs_link_section"><a class="mix_demo" target="_blank" href="http://demo.oscitasthemes.com/easy-boostrap-shortcode-pro/"><?php _e('View Demo');?></a><a class="mix_help"target="_blank" href="<?php echo admin_url() . 'admin.php?page=ebs-Help'; ?>"><?php _e('EBS Help');?></a> <div class="ebs_search"><input type="text" class="ebs_search_box" placeholder="Search"><button class="ebs_perform_search"><i class="fa fa-search"></i></button></div></div>

        <div class="ebsp_mixitup_setup" id="ebsp_mixitup_setup">
            <?php echo $mix_content; ?>
        </div>

    </div>
    <script type="text/javascript">

        window.mix_filter_content='<?php echo  trim($mix_content,'\n') ?>';
    </script>
    <?php

    $output=ob_get_clean();
    echo $output;
}
/*
 * Get help file content
 */
function get_help_file_content($shortcode){
    $path=dirname(dirname(__FILE__));
    include $path.'/template/'.$shortcode.'/help.php';
    return $ebs_help_content;
}

$compatibility_shortcode_array=get_option('EBS_SHORTCODE_BACKWARD',array(''));
/*
 * Provide prefix backward compatibility support
 */
array_push($compatibility_shortcode_array,get_option('EBS_SHORTCODE_PREFIX','ebs_'));
array_unique($compatibility_shortcode_array);
function ebs_backward_compatibility_callback($shortcode,$callback){
    global $compatibility_shortcode_array;
    foreach($compatibility_shortcode_array as $val){
        add_shortcode($val.$shortcode, $callback);
    }
}