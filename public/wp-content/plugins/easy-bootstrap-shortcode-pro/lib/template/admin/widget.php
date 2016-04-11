
<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>EBS Pro Widget</span></h3>
    <div class="shrt-content">

        <div class="shortcode_desc">EBS Pro adds a widget to wdget section. to access widget navigate to <a target="_blank" href="<?php echo admin_url('/widgets.php')?>">Appearance -> Widgets</a>
            <div class="shortcode_child">
            <h2 class="ebsp_sub_head">EBS Shortcode Compiler</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/widget-test.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/widget-test.png'?>"></a>
               If you want to add a shortcode to sidebar, EBS provide a widget named 'EBS Shortcode Compiler. It contains a textarea section in which you can paste any shortcode and in front end you will get a cmplied shortcode in sidebar. This widget complies all EBS shortcode and all other available shortcode. Thus by using this widget you can add almost every shortcode into sidebar.

            </div>
            </div>


        </div>

    </div>
</div>
<?php $ebs_help_content=ob_get_clean();?>