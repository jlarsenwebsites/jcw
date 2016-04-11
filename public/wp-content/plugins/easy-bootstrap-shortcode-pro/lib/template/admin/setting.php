
<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>EBS Settings</span></h3>
    <div class="shrt-content">

        <div class="shortcode_desc"> <a target="_blank" href="<?php echo admin_url('/admin.php?page=ebs/ebs-settings.php')?>">EBS Settings</a> are grouped into four sections, using these settings administrator can customize the plugin. These sections are:
            <div class="shortcode_child">
            <h2 class="ebsp_sub_head">CSS/JS Settings</h2>
            <div class="ebsp_desc" style="width: 97%">
                <a href="<?php echo EBS_ASSET_URL.'images/css-setting.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/css-setting.png'?>"></a>
                All css/js settings are under this section. In this section,
                <ul>
                    <li>Option to set either to use css/js files from plugin itself or not.</li>
                    <li>Option to include files from CDN</li>
                    <li>Option to specify from where respond.js(for IE6+ compatibility) will be included.</li>
                    <li>Option to write custom css in css editor. It will be included into front end.</li>
                </ul>
            </div>
            <h2 class="ebsp_sub_head">Font Inclusion</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/font-setting.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/font-setting.png'?>"></a>
                Bootstrap font icons (Glyphicons) are included in plugin by default, along with these we have provided the option to add or remove font awesome icons from EBS Pro. For this user just have to select one option and fontawesome will be there<br/><br/>
                <i><b>More fonts are coming soon...</b></i>
            </div>
            <h2 class="ebsp_sub_head">User Interface</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/look&fell-setting.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/look&fell-setting.png'?>"></a>
                This section provides different options that how plugin will show up in tinyMCE editors. <br/>Other important setting is grid layout. By default layout is 12 columns, but admin can change it as per his requirements.
            </div>
            <h2 class="ebsp_sub_head">Pagination Setup</h2>
            <div class="ebsp_desc">
                <a href="<?php echo EBS_ASSET_URL.'images/pagination-setting.png'?>" class="ebs_help_popup"><img src="<?php echo EBS_ASSET_URL.'images/pagination-setting.png'?>"></a>
                EBS pro provide a shortcode which add custom pagination to page/post content. Administrator can style this pagination for whole site from this setting section. Here administrator can select design of pagination and can customize color setting for pagination. If administrator can overwrite pagination setting for specific page/post, edit page/ post click on 'Overwrite global Pagination' in post metabox section and overwrite pagination settings for specific page.
            </div>
            </div>

        </div>

    </div>
</div>
<?php $ebs_help_content=ob_get_clean();?>