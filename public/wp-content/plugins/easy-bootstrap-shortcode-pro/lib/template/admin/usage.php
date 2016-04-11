
<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>EBS Pro Admin</span></h3>
    <div class="shrt-content">

        <div class="shortcode_desc">This section is to explain few common tools/options provided in the shortcode setting popup to make its use and access super easy. Here are the tools:
            <div class="shortcode_child">
            <h2 class="ebsp_sub_head">Help Tab</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/help-img.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/help-img.png'?>"></a>
                You will find an help tab with shortcode tab. In this tab you can see the shortcode live example, shortcode description, shortcode parameter explanation and their usage, for selected shortcode. By using this help even a naive user can understand the shortcode setting option and its usage easily.
            </div>
            <h2 class="ebsp_sub_head">Navigation Tab</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/navigation.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/navigation.png'?>"></a>
                After 'Help Tab' tab there is a <b>Navigation Tab</b>. If you want to switch to any other shortcode, go to navigation tab and select desired shortcode. Here you can also access EBS pro demo Page and EBS Pro help page.
            </div>
            <h2 class="ebsp_sub_head">Icon Tooltip</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/tooltip.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/tooltip.png'?>"></a>
                On shortcode setting screen we have provided the help icon with almost every setting to give quick look about the usage. So if you are not sure about the usage of any settings, just move your mouse over the icon and you will see the small description about the setting.
            </div>
            <h2 class="ebsp_sub_head">Add New Item Button</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/add-newbutton.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/add-newbutton.png'?>"></a>
                You will find the 'Add New Item' button on some of the shortcode such as  accordion, tabs, button dropdown, slider etc. This button is used to add new item with default values for options, which can be edited as per requirement.
            </div>

            <h2 class="ebsp_sub_head">Insert Button</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/insert.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/insert.png'?>"></a>
                Insert button is visible on every shortcode setting popup, when you click on this button the shortcode will be inserted to the editor.
            </div>
            <h2 class="ebsp_sub_head">Preview Button</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/preview.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/preview.png'?>"></a>
                Preview button is visible on every shortcode setting popup. This works in the same manner as wordpress default preview button on create page/post pages. On shortcode setting screen, when user click on this button, user will see the preview of complied shortcode with current settings in a new tab. So that user can see how it will look on the frontend.
            </div>
            <h2 class="ebsp_sub_head">Cancel Button</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/cancel.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/cancel.png'?>"></a>
                Cancel button is visible on every shortcode setting popup, when user click this button the popup will be closed.
            </div>
            </div>

        </div>

    </div>
</div>
<?php $ebs_help_content=ob_get_clean();?>