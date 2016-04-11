<?php
/*
 * Ebs PRO Help page submenu under EBS Pro setting menu in admin panel
 */
global $ebsp_domain_name ;
$shortcodes=ebs_array_sort(ebs_shortcodes());
$narray=array(
    'type'=>array( 'name'=>'Type'),
    'usage'=>array( 'name'=>'Usage'),
    'setting'=>array( 'name'=>'Setting'),
    'widget'=>array( 'name'=>'Widget'),
);
//$shortcodes=array_merge($narray, $shortcodes);

$path=dirname(__FILE__);
$shortcode_list='';
$admin_list='';
$shortcode_content='';
$admin_content='';
$page_url=get_permalink(get_page_by_path(EBS_HELP_PAGE, OBJECT, 'osc_ebsp'));

foreach($shortcodes as $k => $val){
    $shortcode_list.='<li><a href="#'.$k.'" title="'.$val['name'].'">'.$val['name'].'</a></li>';
    $page_url=add_query_arg('element',$k,$page_url);
    $shortcode_content.='<div id="'.$k.'"></div>';
}
foreach($narray as $k => $val){
    $admin_list.='<li><a href="#'.$k.'" title="'.$val['name'].'">'.$val['name'].'</a></li>';
    include 'template/admin/'.$k.'.php';
    $admin_content.='<div id="'.$k.'">'.$ebs_help_content.'</div>';
}
?>

<div class="ebs_help_setting">
    <h1 id="ebs_help_heading"><?php _e('Easy Bootstrap Shortcode Pro Help',$ebsp_domain_name)?></h1>
    <div class="pull-right osc-logo-setting"><a target="_blank" href="http://oscitasthemes.com/"><img src="<?php echo EBS_ASSET_URL.'images/osc-logo.png'?>"></a></div>
    <div class="ebs_link_section"><a target="_blank" href="http://demo.oscitasthemes.com/easy-boostrap-shortcode-pro/"><?php _e('View Demo');?></a><a target="_blank" href="http://oscitasthemes.com/forums/forum/easy-bootstrap-shortcodes-pro/"><?php _e('EBS Support');?></a><a target="_blank" href="http://oscitasthemes.com/downloads/easy-bootstrap-shortcodes-pro/"><?php _e('EBS Plugin');?></a></div>
<div id="ebs_upper_help_tabs">
    <ul>
        <li><a href="#admin_interface">Admin Interface</a></li>
        <li><a href="#shortcode_help">Shortcode Help</a></li>
    </ul>

    <div id="admin_interface">
        <div id="admin_help_tabs">

            <ul>
                <?php echo $admin_list;?>
            </ul>

            <?php echo $admin_content;?>

        </div>
    </div>
    <div id="shortcode_help">
    <div id="shortcode_help_tabs">

        <ul>
            <?php echo $shortcode_list;?>
        </ul>

        <?php echo $shortcode_content;?>

</div>
    </div>
</div>

</div>