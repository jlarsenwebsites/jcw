<!--Template for Shortcode help section in shortcode popup-->
<html>
<head>
    <link rel="stylesheet" href="<?php echo EBS_ASSET_URL.'styles/shortcode-help.css'?>" type="text/css">
    <?php wp_head();?>
</head>
<body>
<?php


$bs_sorted_shortcode_array=ebs_shortcodes();
$element=isset($bs_sorted_shortcode_array['primary'][$_GET['element']])?$bs_sorted_shortcode_array['primary'][$_GET['element']]:$bs_sorted_shortcode_array['secondary'][$_GET['element']];
$path=ebs_get_shortcode_path($element);
$ebs_prefix=get_option('EBS_SHORTCODE_PREFIX','ebs_');
include $path.'/template/'.$_GET['element'].'/help.php';
echo $ebs_help_content;
?>
</body>
<?php wp_footer();?>
</html>