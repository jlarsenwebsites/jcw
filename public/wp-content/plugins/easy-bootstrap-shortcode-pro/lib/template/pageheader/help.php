<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Page Header</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail"><?php echo do_shortcode('['.$ebs_prefix.'pageheader headingtype="h1" headcolor="#333333" fontsize="26" margin="20" padding="10" border="true" bordercolor="#e0e0e0"]Example Page Header [/'.$ebs_prefix.'pageheader]'); ?></div>
        <div class="shortcode_desc">Used to show page heading in front end. To add Page Header to your Page/Post click on Page Header Shortcode icon  and provide value for  required and desired options.</div>
    </div>
    <div class="shortcode-text">
            <pre>[pageheader headingtype="h1" headcolor="#333333" fontsize="26" margin="20" padding="10" border="true" bordercolor="#e0e0e0"]Example Page Header [/pageheader]
</pre>
    </div>
    <div class="shortcode-parameter">[pageheader] Parameters are:</div>
    <table class="shortcode-table">
        <thead>
        <tr><th>Parameter</th>
            <th>Description</th>
            <th>Required</th>
            <th>Values</th>
            <th>Default</th>
        </tr></thead>
        <tbody>
        <tr>

            <td>headingtype</td>
            <td>Choose a heading type from default heading types</td>
            <td>required</td>
            <td>h1, h2, h3, h4, h5, h6</td>
            <td>h1</td>
        </tr><tr>
            <td>headcolor</td>
            <td>Color of page heading</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>fontsize</td>
            <td>Font size of heading</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>margin</td>
            <td>Provide margin for heading ex: '10px 5px 10px 6px' and this margin will be applied to page header</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>padding</td>
            <td>Provide padding for heading ex: '10px 5px 10px 6px' and this padding will be applied to page header</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>border</td>
            <td>Whether to show border at bottom of page header</td>
            <td>optional</td>
            <td>true</td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Page Header div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>bordercolor</td>
            <td>Color of page header border</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>