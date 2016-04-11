<?php ob_start();?>
    <div class="shortcode-help-outer">
        <h3 id="s1"><span>EBS Pro Admin</span></h3>
        <div class="shrt-content">

            <div class="shortcode_desc">Welcome to EBS Pro Admin help, here we will explain the three different type of visual options provided by plugin, that how plugin will look in tinyMCE editor. You can choose/change any of these setting at any time from EBS Pro setting pag. Here the different visual options <!--When you want to add a EBS pro shortcode to your Page/post content, edit or add new Post/Page. In wordpress tinymce editor content section you can add shortcode EBS pro provides three type of tinymce editor icons to access its shortcode. You can choose any one of them from EBS Pro setting page.-->
                <ul>
                    <li><a href="#separate-icon">Separate icon for each shortcode</a></li>
                    <li><a href="#icon-dropdown">Icon dropdown Button</a></li>
                    <li><a href="#media-icon">Media Icon for shortcode</a></li>
                </ul>
                <div class="shortcode_child">
                <h2 class="ebsp_sub_head" id="separate-icon">Separate icon for each shortcode</h2>
                <div class="ebsp_desc">
                     <a href="<?php echo EBS_ASSET_URL.'images/ebspro-button-style1.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/ebspro-button-style1.png'?>"></a>
                    In this option, plugin will add icons for all the shortcodes to 3rd and 4th row of wordpress tinyMCE editor toolbar. To insert any shortcode you just have to click the required icon, and a popup will there to withh all settings/options provided by shortcode. One thing we would like to mention here is, that this option can insert shortcode only to visual editor
                </div>
                <h2 class="ebsp_sub_head" id="icon-dropdown">Icon dropdown Button</h2>
                <div class="ebsp_desc">
                    <a href="<?php echo EBS_ASSET_URL.'images/ebspro-button-style2.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/ebspro-button-style2.png'?>"></a>
                    In this option, plugin will add a split dropdown button to first row of wordpress tinyMCE editor toolbar. In this, shortcodes are categorized under different groups. You can open shortcode setting by navigating to parent group and then shortcode. With this type of icon you can insert shortcode only to visual editor
                </div>
                <h2 class="ebsp_sub_head" id="media-icon">Media Icon for shortcode</h2>
                <div class="ebsp_desc">
                     <a href="<?php echo EBS_ASSET_URL.'images/ebs-button-perview.png'?>" class="ebs_help_popup"> <img src="<?php echo EBS_ASSET_URL.'images/ebs-button-perview.png'?>"></a>

                    As with both above options, user can add shortcode to visual editor, so we provided third option to add EBS Pro button at top of wordpress tinyMCE editor. As soon as you click on this icon a popup will open, which contains list of all shortcodes. You can also see shortcode groups and shortcode associated with these groups. You can open a specific shortcode settings by clicking on that shortcode.
                    <div class="ebs_link_section-full-width">
                        <a href="<?php echo EBS_ASSET_URL.'images/ebspro-button-style3.png'?>" class="ebs_help_popup clearfix<?php echo EBS_CONTAINER_CLASS;?>"> <img src="<?php echo EBS_ASSET_URL.'images/ebspro-button-style3.png'?>"></a>
                    </div>

                </div>

            </div>
            </div>
        </div>

    </div>
<?php $ebs_help_content=ob_get_clean();?>