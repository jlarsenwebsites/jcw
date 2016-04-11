<?php ob_start();?>
    <div class="shortcode-help-outer">
        <h3 id="s1"><span>Pagination</span></h3>
        <div class="shrt-content">
            <div class="shrt-detail">
                <img src="<?php echo EBS_ASSET_URL.'images/1.png'?>">
                <img src="<?php echo EBS_ASSET_URL.'images/2.png'?>">
            </div>
            <div class="shortcode_desc">Paginition shortcode is used to add custom pagination in post/page content. You can style pagination in EBS setting page for whole site and can overwrite it for specific pages. It gives you rid from wordpress default ugly pagination.</div>
        </div>
        <div class="shortcode-text">
            <pre>
             <h3>In Visual Editor</h3>
<?php echo htmlentities('<img class="mce-wp-custompagination mceItemNoResize" title="OscNextPage" src="http://localhost/ebs-pro/wp-content/plugins/easy-bootstrap-shortcode-pro/lib/shortcode/pagination/trans.gif">'); ?>
                <br>
              <h3>In Text Editor</h3>
<?php echo htmlentities('<!--custompagination-->'); ?>
</pre>
        </div>
        <div class="shortcode-parameter">Pagination doesn't accept any parameters and it is non editable.</div>
    </div>
<?php $ebs_help_content=ob_get_clean();?>