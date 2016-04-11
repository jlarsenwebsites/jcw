<?php

/*
  Plugin Name: Easy Bootstrap Shortcode Pro
  Plugin URI: http://www.oscitasthemes.com
  Description: Add bootstrap 3.0 styles to your theme by wordpress editor shortcode buttons.
  Version: 3.9
  Author: oscitas
  Author URI: http://www.oscitasthemes.com
  License: Under the GPL v2 or later
*/
/*
 * on template
 */
function osc_ebs_pro_plugin_exists( $prevent ) {
    return 'ebsp';
}
add_filter( 'osc_ebs_pro_plugin_exists', 'osc_ebs_pro_plugin_exists' );

$checkplugin=apply_filters('osc_ebs_plugin_exists',false);
if(isset($checkplugin) && $checkplugin=='ebs'):
    add_action('admin_notices', 'ebsp_showAdminMessages');

    function ebsp_showMessage($message, $errormsg = false)
    {
        if ($errormsg) {
            echo '<div id="message" class="error ebs_notification">';
        }
        else {
            echo '<div id="message" class="update-nag ebs_notification">';
        }
        echo '<p><strong>' . $message . '</strong></p></div>';
    }

    function ebsp_showAdminMessages()
    {
        ebsp_showMessage("Easy Bootstrap Shortcode Pro activated, deactivate Easy Bootstrap Shortcode free version", false);
    }
else:
    $ebsp_domain_name='osc_ebs_pro';
    function ebs_pro_language_support()
    {
        // Localization
        load_plugin_textdomain('osc_ebs_pro', false, dirname(plugin_basename(__FILE__)).'/languages/');
    }

    // Add actions
    add_action('plugins_loaded', 'ebs_pro_language_support');
    /**************************************
     * EBS-Pro license management code
     *************************************/


    define( 'EDD_EBS_PRO_STORE_URL', 'http://oscitasthemes.com?t='.time() );

    define( 'EDD_EBS_PRO_ITEM_NAME', 'Easy Bootstrap Shortcodes Pro' );

    if( !class_exists( 'EDD_SL_Plugin_Updater' ) ) {

        include plugin_dir_path( __FILE__ )."lib/EDD_SL_Plugin_Updater.php";
    }

    $license_key = trim( get_option( 'edd_osc_ebs_pro_license_key' ) );


    $edd_updater = new EDD_SL_Plugin_Updater( EDD_EBS_PRO_STORE_URL, __FILE__, array(
            'version' 	=> '3.9', 				// current version number
            'license' 	=> $license_key, 		// license key (used get_option above to retrieve from DB)
            'item_name' => EDD_EBS_PRO_ITEM_NAME, 	// name of this plugin
            'author' 	=> 'oscitas'  // author of this plugin
        )
    );


    function edd_osc_ebs_pro_license_page() {
        global $ebsp_domain_name;
        $license 	= get_option( 'edd_osc_ebs_pro_license_key' );
        $status 	= get_option( 'edd_osc_ebs_pro_license_status' );
        $valid_licence=edd_osc_ebs_pro_check_license();
        ?>
        <div class="wrap ebs_licence_page">
        <h2><?php _e('Easy Bootstrap Shortcode Pro License Options',$ebsp_domain_name); ?></h2>
        <div class="license-cell-outer">
            <form method="post" action="options.php">

                <?php settings_fields('edd_osc_ebs_pro_license'); ?>

                <table class="form-table">
                    <tbody>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('License Key',$ebsp_domain_name); ?>
                        </th>
                        <td>
                            <input id="edd_osc_ebs_pro_license_key" name="edd_osc_ebs_pro_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $license ); ?>" />
                            <label class="description" for="edd_osc_ebs_pro_license_key"><?php _e('Enter your license key',$ebsp_domain_name); ?></label>

                            <?php if( false !== $license && $license!='') {
                            if($valid_licence=='valid' || $valid_licence=='site_inactive'){
                            ?></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('Activate License',$ebsp_domain_name); ?>
                        </th>
                        <td>
                            <?php if( $status !== false && $status == 'valid' ) { ?>
                                <span style="color:green;"><?php _e('active',$ebsp_domain_name); ?></span>
                                <?php wp_nonce_field( 'edd_osc_ebs_pro_nonce', 'edd_osc_ebs_pro_nonce' ); ?>
                                <input type="submit" class="button-secondary" name="edd_osc_ebsp_license_deactivate" value="<?php _e('Deactivate License',$ebsp_domain_name); ?>"/>
                            <?php } else {
                                wp_nonce_field( 'edd_osc_ebs_pro_nonce', 'edd_osc_ebs_pro_nonce' ); ?>
                                <input type="submit" class="button-secondary" name="edd_osc_ebsp_license_activate" value="<?php _e('Activate License',$ebsp_domain_name); ?>"/>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } else{
                        echo '<p class="error" style="color: #FF0000; font-size: 12px;">Invalid licence key</p></td></tr>';
                    }} else{
                        echo '</td></tr>';
                    } ?>
                    </tbody>
                </table>
                <?php submit_button(); ?>

            </form>
        </div>
    <?php
    }

    function edd_osc_ebs_pro_register_option() {
        register_setting('edd_osc_ebs_pro_license', 'edd_osc_ebs_pro_license_key', 'edd_osc_ebs_pro_sanitize_license' );
    }
    add_action('admin_init', 'edd_osc_ebs_pro_register_option');

    function edd_osc_ebs_pro_sanitize_license( $new ) {
        $old = get_option( 'edd_osc_ebs_pro_license_key' );
        if( $old && $old != $new ) {
            delete_option( 'edd_osc_ebs_pro_license_status' );
        }
        return $new;
    }


    function edd_osc_ebs_pro_activate_license() {
        if(!is_admin())
            return;
        if( isset( $_POST['edd_osc_ebsp_license_activate'] ) ) {

            if( ! check_admin_referer( 'edd_osc_ebs_pro_nonce', 'edd_osc_ebs_pro_nonce' ) )
                return;

            $license = trim( get_option( 'edd_osc_ebs_pro_license_key' ) );


            $api_params = array(
                'edd_action'=> 'activate_license',
                'license' 	=> $license,
                'item_name' => urlencode( EDD_EBS_PRO_ITEM_NAME )
            );

            $response = wp_remote_get( add_query_arg( $api_params, EDD_EBS_PRO_STORE_URL ), array( 'timeout' => 15, 'sslverify' => false ) );


            if ( is_wp_error( $response ) )
                return false;

            $license_data = json_decode( wp_remote_retrieve_body( $response ) );

            update_option( 'edd_osc_ebs_pro_license_status', $license_data->license );


        }
    }
    add_action('init', 'edd_osc_ebs_pro_activate_license');


    function edd_osc_ebs_pro_deactivate_license() {
        if(!is_admin())
            return;
        if( isset( $_POST['edd_osc_ebsp_license_deactivate'] ) ) {

            if( ! check_admin_referer( 'edd_osc_ebs_pro_nonce', 'edd_osc_ebs_pro_nonce' ) )
                return;

            $license = trim( get_option( 'edd_osc_ebs_pro_license_key' ) );


            $api_params = array(
                'edd_action'=> 'deactivate_license',
                'license' 	=> $license,
                'item_name' => urlencode( EDD_EBS_PRO_ITEM_NAME ) // the name of our product in EDD
            );

            $response = wp_remote_get( add_query_arg( $api_params, EDD_EBS_PRO_STORE_URL ), array( 'timeout' => 15, 'sslverify' => false ) );

            if ( is_wp_error( $response ) )
                return false;

            $license_data = json_decode( wp_remote_retrieve_body( $response ) );


            // $license_data->license will be either "deactivated" or "failed"
            if( $license_data->license == 'deactivated' )
                delete_option( 'edd_osc_ebs_pro_license_status' );

        }
    }
    add_action('init', 'edd_osc_ebs_pro_deactivate_license');

    function edd_osc_ebs_pro_check_license() {

        global $wp_version;

        $license = trim( get_option( 'edd_osc_ebs_pro_license_key' ) );

        $api_params = array(
            'edd_action' => 'check_license',
            'license' => $license,
            'item_name' => urlencode( EDD_EBS_PRO_ITEM_NAME )
        );

        // Call the custom API.
        $response = wp_remote_get( add_query_arg( $api_params, EDD_EBS_PRO_STORE_URL ), array( 'timeout' => 15, 'sslverify' => false ) );

        if ( is_wp_error( $response ) )
            return false;

        $license_data = json_decode( wp_remote_retrieve_body( $response ) );


        return isset($license_data->license)?$license_data->license:'';
    }
    add_action('admin_init','check_ebsp_status');

    function check_ebsp_status(){

        $file   = basename( __FILE__ );
        $folder = basename( dirname( __FILE__ ) );
        $hook = "after_plugin_row_{$folder}/{$file}";

        $license 	= get_option( 'edd_osc_ebs_pro_license_key' );

        $valid_licence=edd_osc_ebs_pro_check_license();

        if( false === $license || $license=='') {
            add_action( $hook, 'ebsp_register_licence_key');
        }else if($valid_licence!='valid' && $valid_licence!='site_inactive'){
            add_action( $hook, 'ebsp_register_licence_key');
        }
        //
    }
    function ebsp_register_licence_key( $plugin_name )
    {
        $ebsprefix='ebsp';
        $plugin_name='easy-bootstrap-shortcode-pro/osc_bootstrap_shortcode.php ';
        echo '</tr><tr class="plugin-update-tr"><td colspan="3" class="plugin-update"><div class="update-message">';
        echo sprintf( __('Click here to %sRegister%s your copy of EBS PRO to receive access to automatic upgrades and support. Need a license key? %sPurchase one now%s.',$ebsprefix),'<a href="' . admin_url() . 'admin.php?page=ebs-license">','</a>','<a href="http://oscitasthemes.com/products/easy-bootstrap-shortcodes-pro/">','</a>') ;
        echo '</div></td>';
    }

    /**************************************
     * EBS-Pro Actual Code starts Here
     *************************************/


    define('EBS_ASSET_URL',plugins_url('/assets/',__FILE__));
    define('EBS_PLUGIN_URL',plugins_url('',__FILE__));
    define('EBS_PLUGIN_PATH',dirname(__FILE__));
    define('EBS_PREVIEW_PAGE','oscitas_ebs_preview');
    define('EBS_RESPONSIVE_PREVIEW_PAGE','oscitas_ebs_res_preview');
    define('EBS_HELP_PAGE','oscitas_ebs_help');

    define('EBS_JS_CDN','http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js');
    define('EBS_RESPOND_CDN','http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js');
    add_action('admin_enqueue_scripts', 'osc_add_admin_ebs_scripts');
    add_filter('mce_external_plugins', 'osc_editor_enable_mce',99.124);
    add_action('wp_enqueue_scripts', 'osc_add_essential_scripts',99);
    add_action('init','ebs_check_oscitas_theme');
    add_action('admin_menu', 'osc_ebs_add_admin_menu');
    add_action('wp_head', 'define_ebs_global_vars');
    add_action('wp_enqueue_scripts', 'osc_add_dynamic_css',100);
    add_filter( 'the_content', 'ebsp_preview_page_content_change' );
    add_filter( 'admin_init', 'ebsp_create_preview_page' );

    add_action( 'pre_get_posts' ,'ebsp_exclude_preview_page' );


    /*
     * define global variable in wp_head for container class
     */
    function define_ebs_global_vars(){
        ?>
        <script type="text/javascript">
            var ebs_container_class ='<?php echo EBS_CONTAINER_CLASS; ?>';

        </script>
    <?php
    }

    /*
     * Exclude preview and help page to appear in post listing and navigation menus
     */
    function ebsp_exclude_preview_page( $query ) {
        if( !is_admin() )
            return $query;

        global $pagenow;


        $preview_page=get_page_by_path(EBS_PREVIEW_PAGE, OBJECT, 'osc_ebsp');

        $help_page= get_page_by_path(EBS_HELP_PAGE, OBJECT, 'osc_ebsp');
        $res_preview= get_page_by_path(EBS_RESPONSIVE_PREVIEW_PAGE, OBJECT, 'osc_ebsp');
        if( 'edit.php' == $pagenow && ( get_query_var('post_type') && 'osc_ebsp' == get_query_var('post_type') ) )
            $query->set( 'post__not_in', array($preview_page->ID,$help_page->ID,$res_preview->ID) );


        if( 'nav-menus.php' == $pagenow &&  'osc_ebsp' == $query->get('post_type')  )
            $query->set( 'post__not_in', array($preview_page->ID,$help_page->ID,$res_preview->ID) );

        return $query;
    }

    /*
     * add custom template to EBS Help page, if Easy responsive Test plugin enabled it will open EBS Preview page with Easy responsive Test
     */
    add_filter( 'template_include', 'ebs_help_temp_call',20 );
    function ebs_help_temp_call( $original_template ) {
        global $wp_query;
        $post_types = array( 'osc_ebsp' );
        if(is_singular( $post_types ) && $wp_query->post->post_name == EBS_HELP_PAGE){
            add_filter( 'show_admin_bar', '__return_false');
            $path=dirname(__FILE__);
            return $path . '/lib/ebs_help_template.php';
        } elseif(is_singular( $post_types ) && $wp_query->post->post_name == EBS_RESPONSIVE_PREVIEW_PAGE){
            if(class_exists('easyResponsiveTestPlugin')){
                add_filter('ert_change_iframe_url', 'ebs_change_iframe_url');
                return ERTP_BASE_DIR_LONG . '/lib/erp_template.php';
            } else{
                return $original_template;
            }
        } else {
            return $original_template;
        }
    }

    /*
     * Changes the Easy responsive test iframe url, by default ERT open Home page bt now when seeing EBS preview page ERT will open EBS Preview
     */
    function ebs_change_iframe_url($url){
        return get_permalink(get_page_by_path(EBS_PREVIEW_PAGE, OBJECT, 'osc_ebsp'));
    }
    function ebsp_preview_page_content_change($content) {
        global $wp_query;
        if ($wp_query->post->post_type=='osc_ebsp' && ($wp_query->post->post_name == EBS_PREVIEW_PAGE || $wp_query->post->post_name == EBS_RESPONSIVE_PREVIEW_PAGE )) {
            if(isset($_SESSION['ebs_shortcode_preview'])){
                return stripslashes($_SESSION['ebs_shortcode_preview']) ;
            }
        }

        // otherwise returns the database content
        return $content;
    }

    /*
     * Create EBS Preview and Help Page
     */
    function ebsp_create_preview_page() {
        $page_array=array('EBSP Preview'=>EBS_PREVIEW_PAGE,'EBSP Help'=>EBS_HELP_PAGE,'EBS Preview'=>EBS_RESPONSIVE_PREVIEW_PAGE);
        foreach($page_array as $key =>$val){
            $new_page_title = $key;
            $new_page_content = 'This is the page content';
            $page_check = get_page_by_path($val, OBJECT, 'osc_ebsp');
            $new_page = array(
                'post_type' => 'osc_ebsp',
                'post_title' => $new_page_title,
                'post_content' => $new_page_content,
                'post_name' => $val,
                'post_status' => 'publish',
                'post_author' => 1,
                'comment_status'=> 'closed'
            );
            $previous_page_check=get_page_by_path($val);
            if (isset($previous_page_check->ID)) {
                wp_delete_post( $previous_page_check->ID, true );
            }
            if (!isset($page_check->ID)) {
                $new_page_id = wp_insert_post($new_page);
            } elseif($page_check->post_status !='publish'){
                $id=$page_check->ID;
                $new_page['ID']=$page_check->ID;

                wp_update_post($new_page);
            }
        }



    }

    /*
     * Called on init, check if current theme is oscitas product and create table for EBS Pro Presets
     */
    function ebs_check_oscitas_theme(){
        global $wpdb;
        $sqlebs = "CREATE TABLE IF NOT EXISTS " . $wpdb->prefix . "ebs_shortcode_preset (
				id int(10) unsigned NOT NULL AUTO_INCREMENT,
			  	shortcode varchar(250) NOT NULL,
			  	name varchar(250),
			  	preset longtext,
                PRIMARY KEY (id)
                )";
        $wpdb->query($sqlebs);
        if(!apply_filters('plugin_oscitas_theme_check',false)){
            add_action('wp_enqueue_scripts', 'osc_add_frontend_ebs_scripts',-99);
        }
    }
    /*
     * Plugin activation hook set default settings on plugin activation
     */
    register_activation_hook(__FILE__, 'osc_ebs_activate_plugin');
    function osc_ebs_activate_plugin() {
        $isSet=apply_filters('ebs_custom_option',false);
        if (!$isSet) {

            // EBS_BOOTSTRAP_JS_LOCATION   '1' - for plugin file, '2' - don't user EBS files but use from other plugin or theme, '3' - to user CDN path
            update_option( 'EBS_BOOTSTRAP_JS_LOCATION', 1 );
            update_option( 'EBS_COLUMN_NUM', 12 );

            update_option( 'EBS_BOOTSTRAP_JS_CDN_PATH', EBS_JS_CDN);
            update_option( 'EBS_BOOTSTRAP_RESPOND_CDN_PATH', EBS_RESPOND_CDN );
            update_option('EBS_BOOTSTRAP_RESPOND_LOCATION',2);


            // EBS_BOOTSTRAP_CSS_LOCATION   '1' - for plugin file, '2' - don't user EBS files but use from other plugin or theme
            update_option( 'EBS_BOOTSTRAP_CSS_LOCATION', 1 );
            update_option( 'EBS_INCLUDE_FA',1);
            update_option( 'EBS_EDITOR_OPT','media');
            if(get_option('EBS_CUSTOM_CSS')==''){
                update_option('EBS_CUSTOM_CSS','');
            }
            if(get_option('EBS_SHORTCODE_ARRAY')==''){
                update_option( 'EBS_SHORTCODE_ARRAY',array(''));
            }
            if(get_option('EBS_SHORTCODE_PREFIX')==false){
                update_option( 'EBS_SHORTCODE_PREFIX', 'ebs_' );
            }
        }



    }
    /*
     * Plugin deactivation hook called on plugin deactivation
     */
    register_deactivation_hook(__FILE__, 'osc_ebs_deactivate_plugin');
    function osc_ebs_deactivate_plugin() {
        $isSet=apply_filters('ebs_custom_option',false);
        if (!$isSet) {
            delete_option( 'EBS_BOOTSTRAP_JS_LOCATION' );
            delete_option( 'EBS_COLUMN_NUM' );
            delete_option( 'EBS_SHORTCODE_PREFIX' );
            delete_option( 'EBS_BOOTSTRAP_JS_CDN_PATH' );
            delete_option( 'EBS_BOOTSTRAP_RESPOND_LOCATION' );
            delete_option( 'EBS_BOOTSTRAP_RESPOND_CDN_PATH' );
            delete_option( 'EBS_BOOTSTRAP_CSS_LOCATION');
            delete_option('EBS_INCLUDE_FA');
            delete_option('EBS_EDITOR_OPT');
        }
    }

    /*
     * Add global javascript variables to admin head
     */
    add_action('admin_head', 'osc_ebs_ajax_ul');
    function osc_ebs_ajax_ul(){
        $ebsp_editor_opt=get_option('EBS_EDITOR_OPT','media');
        $projects=get_posts(array('post_type' => 'our_projects'));

        $testimonial=get_posts(array('post_type' => 'testimonials'));
        if(osc_get_current_post_type()!='post'){
            $post_include=1;
        } else{
            $post_include=0;
        }
        if(count($projects)>0 && osc_get_current_post_type()!='our_projects'){
            $project_include=1;
        } else{
            $project_include=0;
        }

        if(count($testimonial)>0 && osc_get_current_post_type()!='testimonials'){
            $test_include=1;
        } else{
            $test_include=0;
        }
        $array_shoercode=ebs_shortcodes();
        $array_shoercode=array_merge($array_shoercode['primary'],$array_shoercode['secondary']);
        ?>
        <script type="text/javascript">

            var ebs_ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
            var ebs_asseturl='<?php echo EBS_ASSET_URL;?>';
            var ebs_url='<?php echo EBS_PLUGIN_URL;?>';
            var ebs_editor_opt='<?php echo $ebsp_editor_opt; ?>';
            var ebs_post_inc='<?php echo $post_include; ?>';
            var ebs_project_inc='<?php echo $project_include; ?>';
            var ebs_test_inc='<?php echo $test_include; ?>';
            var ebs_dropdown_obj='<?php echo json_encode($array_shoercode); ?>';
            var ebs_dropdown_grp='<?php echo json_encode(ebs_groups()); ?>';
            var ebs_preview_page_path='<?php echo class_exists('easyResponsiveTestPlugin')?get_permalink( get_page_by_path( EBS_RESPONSIVE_PREVIEW_PAGE, OBJECT, 'osc_ebsp' )):get_permalink( get_page_by_path( EBS_PREVIEW_PAGE, OBJECT, 'osc_ebsp' ) ); ?>';
        </script>

    <?php

    }

    /*
     * Add addition css to tinymce editor this is used to apply css to EBS dropdown button
     */
    add_action('admin_print_styles','ebsp_tinymce_button_css');
    function ebsp_tinymce_button_css() {
        wp_register_style('ebsp_tinymce_button_css', EBS_ASSET_URL.'styles/editor.css', array());
        wp_enqueue_style('ebsp_tinymce_button_css');
        wp_enqueue_style('dashicons');
    }

    /*
     * Add plugin setting page link on plugin listing after plugin activation
     */
    add_filter( "plugin_action_links_".plugin_basename( __FILE__ ), 'osc_ebs_settings_link' );
    function osc_ebs_settings_link( $links ) {
        $isSet=apply_filters('ebs_custom_option',false);
        if (!$isSet) {
            $settings_link = '<a href="admin.php?page=ebs/ebs-settings.php">Settings</a>';
            array_push( $links, $settings_link );
        }
        return $links;
    }


    /*
     * Add Setting page and licence page menus
     */
    function osc_ebs_add_admin_menu() {
        $isSet=apply_filters('ebs_custom_option',false);
        if (!$isSet) {
            $ebsSettingPage= add_menu_page('EBS-Pro Settings', ' EBS-Pro Settings', 'manage_options', 'ebs/ebs-settings.php', 'osc_ebs_setting_page', plugins_url('assets/images/icon.png', __FILE__));
            $ebshelp=add_submenu_page( 'ebs/ebs-settings.php','EBS Help', 'EBS Help', 'manage_options', 'ebs-Help', 'osc_ebs_pro_help_page' );
            add_submenu_page( 'ebs/ebs-settings.php','EBS License', 'EBS License', 'manage_options', 'ebs-license', 'edd_osc_ebs_pro_license_page' );
            add_action('admin_print_scripts-' . $ebsSettingPage, 'ebsSettingPage_register_admin_scripts');
            add_action('admin_print_styles-' . $ebsSettingPage, 'ebsSettingPage_register_admin_styles');add_action('admin_print_scripts-' . $ebshelp, 'ebsHelpPage_register_admin_scripts');
            add_action('admin_print_styles-' . $ebshelp, 'ebsHelpPage_register_admin_styles');
        }
    }

    /*
     * Add Scripts to EBS setting page
     */
    function ebsSettingPage_register_admin_scripts(){
        wp_enqueue_script('ebs-tootltip-js', EBS_ASSET_URL.'js/bootstrap-tooltip.js');
        wp_enqueue_script('jquery-ui-accordion');
        wp_enqueue_script('wp-color-picker');
        wp_enqueue_script('ebs_setting_js',EBS_ASSET_URL.'js/ebs_setting.js');
    }
    /*
    * Add Styles to EBS setting page
    */
    function ebsSettingPage_register_admin_styles(){

        wp_enqueue_style('ebs_accordion', EBS_ASSET_URL.'styles/accordion.css');
        wp_enqueue_style('ebs-setting', EBS_ASSET_URL.'styles/ebs-setting.min.css');
        wp_enqueue_style('ebs-tootltip', EBS_ASSET_URL.'styles/bootstrap-tooltip.css');
        wp_enqueue_style('bootstrap-fa-icon',  EBS_ASSET_URL.'styles/font-awesome.min.css');
        wp_enqueue_style('wp-color-picker');
    }

    /*
     * This function render EBS setting page and update options
     */
    function osc_ebs_setting_page() {
        if (isset($_POST['ebs_submit'])) {
            if(!apply_filters('plugin_oscitas_theme_check',false)){
                update_option( 'EBS_BOOTSTRAP_JS_LOCATION', isset($_POST['b_js'])?$_POST['b_js']:1 );

                update_option( 'EBS_BOOTSTRAP_JS_CDN_PATH',isset($_POST['cdn_path'])? $_POST['cdn_path']:EBS_JS_CDN);
                update_option( 'EBS_BOOTSTRAP_CSS_LOCATION', isset($_POST['b_css'])?$_POST['b_css']:1 );
                update_option( 'EBS_BOOTSTRAP_RESPOND_LOCATION', isset($_POST['respond_js'])?$_POST['respond_js']:2 );
                update_option( 'EBS_BOOTSTRAP_RESPOND_CDN_PATH', isset($_POST['respond_cdn_path'])?$_POST['respond_cdn_path']:EBS_RESPOND_CDN);

                $js = $_POST['b_js'];
                $cdn = $_POST['cdn_path'];
                $css = $_POST['b_css'];
                $respond = $_POST['respond_js'];
                $respondcdn = $_POST['respond_cdn_path'];

            }
            update_option( 'EBS_INCLUDE_FA', isset($_POST['fa_icon'])?$_POST['fa_icon']:'' );
            update_option( 'EBS_EDITOR_OPT', isset($_POST['ebsp_editor_opt'])?$_POST['ebsp_editor_opt']:'icon' );
            update_option( 'EBS_CUSTOM_CSS', isset($_POST['ebs_custom_css'])?$_POST['ebs_custom_css']:'' );
            update_option( 'EBS_COLUMN_NUM', isset($_POST['column_number'])?$_POST['column_number']:12 );
            update_option( 'EBS_SHORTCODE_PREFIX', isset($_POST['shortcode_prefix'])?$_POST['shortcode_prefix']:'ebs_' );
            update_option( 'ebs_paginition', isset($_POST['ebs_paginition'])?$_POST['ebs_paginition']:'' );
            $shortcode_array=get_option('EBS_SHORTCODE_ARRAY',array(''));

            array_push($shortcode_array,$_POST['shortcode_prefix']);
            array_unique($shortcode_array);
            update_option('EBS_SHORTCODE_ARRAY',$shortcode_array);
            update_option('EBS_SHORTCODE_BACKWARD',(isset($_POST['shortcode_backward_arr'])?$_POST['shortcode_backward_arr']:array()));

            $_SESSION['ebsp_dynamic_css'] =$_POST['ebs_custom_css'];

            $fa_icon=isset($_POST['fa_icon'])?$_POST['fa_icon']:'' ;
            $ebsp_editor_opt=isset($_POST['ebsp_editor_opt'])?$_POST['ebsp_editor_opt']:'icon' ;
            $ebs_custom_css=isset($_POST['ebs_custom_css'])?$_POST['ebs_custom_css']:'' ;
            $column_number = $_POST['column_number'];
            $shortcode_prefix = $_POST['shortcode_prefix'];
            $shortcode_backward_arr=(isset($_POST['shortcode_backward_arr'])?$_POST['shortcode_backward_arr']:array());

        }
        else {
            $js = get_option( 'EBS_BOOTSTRAP_JS_LOCATION', 1 );
            $cdn = get_option( 'EBS_BOOTSTRAP_JS_CDN_PATH', EBS_JS_CDN );
            $css = get_option( 'EBS_BOOTSTRAP_CSS_LOCATION', 1 );
            $respond = get_option( 'EBS_BOOTSTRAP_RESPOND_LOCATION', 2 );
            $respondcdn = get_option( 'EBS_BOOTSTRAP_RESPOND_CDN_PATH', EBS_RESPOND_CDN);
            $fa_icon=get_option('EBS_INCLUDE_FA',1);
            $ebsp_editor_opt=get_option('EBS_EDITOR_OPT','media');
            $ebs_custom_css=get_option('EBS_CUSTOM_CSS','');
            $column_number=get_option('EBS_COLUMN_NUM',12);
            $shortcode_prefix=get_option('EBS_SHORTCODE_PREFIX','ebs_');
            $shortcode_backward_arr=get_option('EBS_SHORTCODE_BACKWARD',array(''));
            $_SESSION['ebsp_dynamic_css'] = $ebs_custom_css;
        }
        $shortcode_backward_arr=is_array($shortcode_backward_arr)?$shortcode_backward_arr:array();
        $shortcode_backward=array_unique(array_diff(get_option('EBS_SHORTCODE_ARRAY',array('')),array(get_option('EBS_SHORTCODE_PREFIX','ebs_'))));
        include 'lib/ebs_settings.php';
    }

    /*
     * Add Scripts to EBS Pro Help Menu Page
     */
    function ebsHelpPage_register_admin_scripts(){
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-ui-tabs');
        wp_enqueue_script('ebs_scroll',EBS_ASSET_URL.'js/jquery.scrollTo.min.js');
        wp_enqueue_script('ebs_magnific-popup.js',EBS_ASSET_URL.'js/magnific-popup.js');
        wp_enqueue_script('ebs_script',EBS_ASSET_URL.'js/ebs_help_script.js');

    }

    /*
     * Add Styles to EBS Pro Help Menu Page
     */
    function ebsHelpPage_register_admin_styles(){
        wp_enqueue_style('ebs_tabs', EBS_ASSET_URL.'styles/tabs.css');
        wp_enqueue_style('ebs_magnific-popup.css',EBS_ASSET_URL.'styles/magnific-popup.css');
        wp_enqueue_style('ebs_help_layout',EBS_ASSET_URL.'styles/ebs_help_style.css');
        wp_enqueue_style('shortcode_layout',EBS_ASSET_URL.'styles/shortcode-help.css');

    }
    /*
     * Render EBS Pro Help Page
     */
    function osc_ebs_pro_help_page(){

        include 'lib/ebs_help.php';
    }

    /*
     * Add External scripts to tinymce editor
     */
    function osc_editor_enable_mce($plugin_array){
        $fa_icon=get_option('EBS_INCLUDE_FA',1);
        wp_enqueue_script('jquery');
        wp_enqueue_style('thickbox');

        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');

        wp_enqueue_style("wp-jquery-ui-dialog");
        wp_enqueue_script('jquery-ui-dialog');
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker');
        wp_enqueue_script('jquery-ui-slider');
        wp_enqueue_script('jquery-ui-tabs');
        wp_enqueue_script('jquery-ui-accordion');
        wp_enqueue_style('ebs_tabs', EBS_ASSET_URL.'styles/tabs.css');
        wp_enqueue_style('ebs_accordion', EBS_ASSET_URL.'styles/accordion.css');
        wp_enqueue_script('ebs_admin_script', plugins_url('/assets/js/admin_script.js', __FILE__));
        wp_enqueue_script('ebs_mixitup', plugins_url('/assets/js/jquery.mixitup.js', __FILE__));
        wp_enqueue_script('ebs_magnific-popup.js',EBS_ASSET_URL.'js/magnific-popup.js');
        wp_enqueue_style('ebs_magnific-popup.css',EBS_ASSET_URL.'styles/magnific-popup.css');
        wp_enqueue_style('EBS_jquery-ui-slider-css', plugins_url('/assets/styles/slider.css', __FILE__));
        wp_enqueue_style('ebs-tootltip', EBS_ASSET_URL.'styles/bootstrap-tooltip.css');
        wp_enqueue_script('ebs-tootltip-js', EBS_ASSET_URL.'js/bootstrap-tooltip.js');
        wp_enqueue_style('media_style',EBS_ASSET_URL.'styles/media_button.css');
        //        wp_enqueue_style('animate_carousel.css',EBS_ASSET_URL.'styles/animate_carousel.css');
        if($fa_icon==1){
            if (!apply_filters('ebs_bootstrap_fa_icon_css_url',false)) {
                wp_enqueue_style('bootstrap-fa-icon', plugins_url('/assets/styles/font-awesome.min.css', __FILE__));
            } else{
                wp_enqueue_style('bootstrap-fa-icon', apply_filters('ebs_bootstrap_fa_icon_css_url',false));
            }
        }
        if (!apply_filters('ebs_bootstrap_icon_css_url',false)) {
            wp_enqueue_style('bootstrap-icon', plugins_url('/assets/styles/bootstrap-icon.min.css', __FILE__));
        } else{
            wp_enqueue_style('bootstrap-icon', apply_filters('ebs_bootstrap_icon_css_url',false));
        }
        if (!apply_filters('ebs_custom_bootstrap_admin_css',false)) {
            wp_enqueue_style('ebs_bootstrap_admin', plugins_url('/assets/styles/bootstrap_admin.min.css', __FILE__));
        }
        return $plugin_array;

    }
    /*
     * Add Scripts to admin panel
     */
    function osc_add_admin_ebs_scripts() {
        global $pagenow,$ebsp_domain_name,$wp_customize;
        $screen = get_current_screen();

        $fa_icon=get_option('EBS_INCLUDE_FA',1);
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker');
        wp_enqueue_script('underscore');
        if (!is_object($wp_customize) || !$wp_customize->is_preview()) {
            wp_enqueue_script('ebs_template', plugins_url('/assets/js/ebs_template.js', __FILE__));
        }
        wp_enqueue_script('ebs_main', plugins_url('/assets/js/ebs_main.js', __FILE__));

        $column_number=get_option('EBS_COLUMN_NUM',12);
        $shortcode_prefix=get_option('EBS_SHORTCODE_PREFIX','ebs_');
        $column_number=intval($column_number)>0?$column_number:12;
        $column_screen_type=array(
            'lg'=>'Large Screen',
            'md'=> 'Medium Screen',
            'sm'=> 'Small Screen',
            'xs'=>'X-small Screen',
            'am'=>'Animation Effect',
            'at'=>'Animation Time',
            'cl'=>'Class'
        );
        $column_screen_type= array(
            'lg'=>__('Large Screen',$ebsp_domain_name),
            'md'=> __('Medium Screen',$ebsp_domain_name),
            'sm'=> __('Small Screen',$ebsp_domain_name),
            'xs'=>__('X-small Screen',$ebsp_domain_name),
            'am'=>__('Animation Effect',$ebsp_domain_name),
            'at'=>__('Animation Time',$ebsp_domain_name),
            'cl'=>__('Class',$ebsp_domain_name)
        );
        $cant_chnage=__('Can\'t Change, exceeds the limit');
        //        print_r($column_screen_type);
        $pt_labels=array('bg'=> 'BG',
            'type'=>'Type',
            'text'=>'Text',
            'link'=>'Link',
            'linkbg'=>'Link BG',
            'default'=>'Default',
            'hover'=>'Hover',
            'fet'=>'Features',
            'color'=>'Color',
            'layout'=>'Layout',
            'premium'=>'Premium',
            'heading'=>'Heading',
            'price'=>'Price',
        );
        wp_localize_script( 'ebs_main', 'ebs', array(
            'ebs_column_num'=>$column_number,
            'ebs_prefix'=>$shortcode_prefix,
            'screen_type'=>json_encode($column_screen_type),
            'pt_labels'=>json_encode($pt_labels),
            'cant_change'=>$cant_chnage,
            'everytime'=>__('Every Time',$ebsp_domain_name),
            'onetime'=>__('One Time',$ebsp_domain_name),
            'presets_prompt_msg'   => __( 'Please enter a name for new template', $ebsp_domain_name ),
            'presets_prompt_value' => __( 'New template', $ebsp_domain_name ),
            'confirm_preset' => __( 'Are you sure you want to delete this template', $ebsp_domain_name ),

        ));
    }
    /*
     * Set page/post/custom post excerpt limit call this function instead of the_excerpt
     */
    function ebs_excerpt($limit) {
        if($limit!=''){
            $excerpt = explode(' ', get_the_content(), $limit);
            if (count($excerpt) >= $limit) {
                array_pop($excerpt);
                $excerpt = implode(" ", $excerpt) . '...';
            } else {
                $excerpt = implode(" ", $excerpt);
            }
            $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
        } else{
            $excerpt=get_the_content();
        }
        return $excerpt;
    }


    /*
    * Add essential scripts to frontend
    */
    function osc_add_essential_scripts(){
        $fa_icon=get_option('EBS_INCLUDE_FA',1);
        wp_enqueue_script('jquery');
        wp_enqueue_style('bootstrap-frontend', plugins_url('/assets/styles/ebs-frontend.css', __FILE__));
        wp_enqueue_style('bootstrap-pricingtable', plugins_url('/assets/styles/bootstrap_pricingtable.css', __FILE__));
        wp_enqueue_script('ebs-tabdropjs',EBS_ASSET_URL.'js/tabdrop.js');

        if($fa_icon==1){
            if(!apply_filters('ebs_bootstrap_fa_icon_include_from_theme_or_plugin',false)){
                if (!apply_filters('ebs_bootstrap_fa_icon_frontend_css_url',false)) {
                    wp_enqueue_style('bootstrap-fa-icon', plugins_url('/assets/styles/font-awesome.min.css', __FILE__));
                } else {
                    wp_enqueue_style('bootstrap-fa-icon', apply_filters('ebs_bootstrap_fa_icon_frontend_css_url',false));
                }
            }
        }

    }
    /*
     * Add dynamic css to front end
     */
    function osc_add_dynamic_css(){
        wp_enqueue_style('ebs_dynamic_css', EBS_ASSET_URL.'styles/ebs_dynamic_css.php');
    }
    /*
     * Add bootstrap css/js to front end  based on css and js inclusion option
     */
    function osc_add_frontend_ebs_scripts() {
        wp_enqueue_script('jquery');
        $isSet=apply_filters('ebs_custom_option',false);
        if (!$isSet) {
            $js = get_option( 'EBS_BOOTSTRAP_JS_LOCATION', 1 );
            $respond = get_option( 'EBS_BOOTSTRAP_RESPOND_LOCATION', 2 );
            $cdn = get_option( 'EBS_BOOTSTRAP_JS_CDN_PATH', EBS_JS_CDN );
            $respondcdn = get_option( 'EBS_BOOTSTRAP_RESPOND_CDN_PATH', EBS_RESPOND_CDN );
            $css = get_option( 'EBS_BOOTSTRAP_CSS_LOCATION', 1 );

            //			http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js


            if ($js == 1) {
                if (!apply_filters('ebs_bootstrap_js_url',false)) {
                    wp_enqueue_script('bootstrap', plugins_url('/assets/js/bootstrap.min.js', __FILE__));
                } else {
                    wp_enqueue_script('bootstrap', apply_filters('ebs_bootstrap_js_url',false));
                }
            } elseif ($js == 3) {
                if (!apply_filters('ebs_bootstrap_js_cdn',false)) {
                    wp_enqueue_script('bootstrap', $cdn);
                } else{
                    wp_enqueue_script('bootstrap', apply_filters('ebs_bootstrap_js_cdn',false));
                }
            }

            if(preg_match('/(?i)msie [1-8]/',$_SERVER['HTTP_USER_AGENT'])){

                if ($respond == 1) {
                    if (!apply_filters('ebs_bootstrap_respond_url',false)) {
                        wp_enqueue_script('bootstrap_respond', plugins_url('/assets/js/respond.min.js', __FILE__));
                    } else{
                        wp_enqueue_script('bootstrap_respond', apply_filters('ebs_bootstrap_respond_url',false));
                    }
                } elseif ($respond == 3) {
                    if (!apply_filters('ebs_bootstrap_respond_cdn',false)) {
                        wp_enqueue_script('bootstrap_respond', $respondcdn);
                    } else{
                        wp_enqueue_script('bootstrap_respond', apply_filters('ebs_bootstrap_respond_cdn',false));
                    }
                }
            }
            if ($css == 1) {
                if (!apply_filters('ebs_bootstrap_css_url',false)) {
                    wp_enqueue_style('bootstrap', plugins_url('/assets/styles/bootstrap.min.css', __FILE__));
                } else {
                    wp_enqueue_style('bootstrap', apply_filters('ebs_bootstrap_css_url',false));
                }
            } elseif($css==3){
                if (!apply_filters('ebs_no_bootstrap_theme_css_url',false)) {
                    wp_enqueue_style('bootstrap', plugins_url('/assets/styles/bootstrap-oscitas.css', __FILE__));
                } else {
                    wp_enqueue_style('bootstrap', apply_filters('ebs_no_bootstrap_theme_css_url',false));
                }

            }
            else {
                if (!apply_filters('ebs_bootstrap_icon_css_url',false)) {
                    wp_enqueue_style('bootstrap-icon', plugins_url('/assets/styles/bootstrap-icon.min.css', __FILE__));
                } else{
                    wp_enqueue_style('bootstrap-icon', apply_filters('ebs_bootstrap_icon_css_url',false));
                }
            }

        }
    }

    /*
     * Filter to be checked in theme for plugin activation
     */
    function ebs_pro_activated_callback( $prevent ) {
        return true;
    }
    add_filter( 'ebs_pro_activated', 'ebs_pro_activated_callback' );


    /*
     * Function to check possible two column division and column value based on number of columns available in a row
     */
    function checkpossible_two_column_division($num,$value=''){

        $output=false;
        $col2arr=array(array('1/2','1/2'),array('1/3','2/3'),array('2/3','1/3'),array('1/4','3/4'),array('3/4','1/4'));
        $num=floatval($num);
        foreach($col2arr as $arr){

            $val1=explode('/',$arr[0]);
            $val1=$val1[0]/$val1[1];
            $val2=explode('/',$arr[1]);
            $val2=$val2[0]/$val2[1];
            if(((int)($num*$val1)+(int)($num*$val2))==$num){
                $selected= $value==$num*$val1.'$'.$num*$val2?' selected="selected"':'';
                $output.=' <option value="'.$num*$val1.'$'.$num*$val2.'" '.$selected.'>'.$arr[0].'-'.$arr[1].'</option>';
            }
        }
        return $output;

    }
    /*
    * Function to check possible three column division and column value based on number of columns available in a row
    */
    function checkpossible_three_column_division($num,$value=''){

        $output=false;
        $col2arr=array(array('1/3','1/3','1/3'),array('1/4','2/4','1/4'),array('1/4','1/4','2/4'),array('2/4','1/4','1/4'));
        $num=floatval($num);
        foreach($col2arr as $arr){

            $val1=explode('/',$arr[0]);
            $val1=$val1[0]/$val1[1];
            $val2=explode('/',$arr[1]);
            $val2=$val2[0]/$val2[1];
            $val3=explode('/',$arr[2]);
            $val3=$val3[0]/$val3[1];
            if(((int)($num*$val1)+(int)($num*$val2)+(int)($num*$val3))==$num){
                $selected= $value==$num*$val1.'$'.$num*$val2.'$'.$num*$val3?' selected="selected"':'';
                $output.=' <option value="'.$num*$val1.'$'.$num*$val2.'$'.$num*$val3.'" '.$selected.'>'.$arr[0].'-'.$arr[1].'-'.$arr[2].'</option>';
            }
        }
        return $output;

    }
    /*
     * EBS convert number to words
     */
    function ebs_convert_number_to_words($number) {
        $space=' ';
        $hyphen      = '-';
        $conjunction = ' and ';
        $separator   = ', ';
        $negative    = 'negative ';
        $decimal     = ' point ';
        $dictionary  = array(
            0                   => 'zero',
            1                   => 'one',
            2                   => 'two',
            3                   => 'three',
            4                   => 'four',
            5                   => 'five',
            6                   => 'six',
            7                   => 'seven',
            8                   => 'eight',
            9                   => 'nine',
            10                  => 'ten',
            11                  => 'eleven',
            12                  => 'twelve',
            13                  => 'thirteen',
            14                  => 'fourteen',
            15                  => 'fifteen',
            16                  => 'sixteen',
            17                  => 'seventeen',
            18                  => 'eighteen',
            19                  => 'nineteen',
            20                  => 'twenty',
            30                  => 'thirty',
            40                  => 'fourty',
            50                  => 'fifty',
            60                  => 'sixty',
            70                  => 'seventy',
            80                  => 'eighty',
            90                  => 'ninety',
            100                 => 'hundred',
            1000                => 'thousand',
            1000000             => 'million',
            1000000000          => 'billion',
            1000000000000       => 'trillion',
            1000000000000000    => 'quadrillion',
            1000000000000000000 => 'quintillion'
        );

        if (!is_numeric($number)) {
            return false;
        }

        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
                E_USER_WARNING
            );
            return false;
        }

        if ($number < 0) {
            return $negative . convert_number_to_words(abs($number));
        }

        $string = $fraction = null;

        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10;
                $units  = $number % 10;
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $space . $dictionary[$units];
                }
                break;

            case $number < 1000:
                $hundreds  = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . convert_number_to_words($remainder);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= convert_number_to_words($remainder);
                }
                break;
        }

        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }

        return $string;
    }


    /*
     * Function to get pagination option if no pagination options set under setting section default values will be returned
     */
    function ebs_get_pagination_opt($name,$default=''){
        $def_pag=array(
            'paginition_style'=>'pagination',
            'default_color'=>'#FFFFFF',
            'default_text_color'=>'#DDDDDD',
            'hover_color'=>'#EEEEEE',
            'hover_text_color'=>'#DDDDDD',
            'current_color'=>'#428BCA',
            'current_text_color'=>'#FFFFFF',
        );
        $pagiination=get_option('ebs_paginition',true);
        if(is_array($pagiination) && isset($pagiination[$name])){
            return $pagiination[$name];
        } else{

            return isset($def_pag[$name])?$def_pag[$name]:'';
        }

    }

    /*
     * start session and register ebs custom post type under which EBS help and preview post/pages will b created
     */
    function ebs_session_start() {
        global $ebsp_domain_name;
        if(!session_id()){
            @session_start();
        }
        $labels_portfolio = array(
            'name' => _x('EBS', 'post type general name', $ebsp_domain_name),
            'singular_name' => _x('EBS', 'post type singular name', $ebsp_domain_name),
            'add_new' => _x('Add New', 'EBS', $ebsp_domain_name),
            'add_new_item' => __('Add New EBS', $ebsp_domain_name),
            'edit_item' => __('Edit EBS', $ebsp_domain_name),
            'new_item' => __('New EBS', $ebsp_domain_name),
            'all_items' => __('All EBS', $ebsp_domain_name),
            'view_item' => __('View EBS', $ebsp_domain_name),
            'search_items' => __('Search EBS', $ebsp_domain_name),
            'not_found' => __('No EBSs found', $ebsp_domain_name),
            'not_found_in_trash' => __('No EBS found in the Trash', $ebsp_domain_name),
            'parent_item_colon' => '',
            'menu_name' => 'EBS'
        );

        $test_args = array(
            'labels' => $labels_portfolio,
            'query_var' => false,
            'rewrite' => false,
            'public'=>true,
            'show_in_menu'       => false,
            'show_in_nav_menus'=> false,
            'exclude_from_search'=>true,
            'show_ui'=>false
        );
        register_post_type('osc_ebsp', $test_args);
    }
    add_action('init','ebs_session_start');

    /*
     * Include essential files
     */
    include('lib/ebs_ajax.php');
    include('lib/ebs_default_values.php');
    include('lib/widget.php');
    include('lib/shortcode/functions.php');
    include('lib/osc-nested-shortcode.php');
endif;

