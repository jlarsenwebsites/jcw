<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Lead</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <?php echo do_shortcode('['.$ebs_prefix.'lead align="left"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris libero ante, rhoncus ut elementum ut, placerat a nunc.[/'.$ebs_prefix.'lead]

['.$ebs_prefix.'lead align="center"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris libero ante, rhoncus ut elementum ut, placerat a nunc. Praesent imperdiet magna ac diam placerat, id elementum nibh facilisis.[/'.$ebs_prefix.'lead]

['.$ebs_prefix.'lead align="right"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris libero ante, rhoncus ut elementum ut, placerat a nunc. Praesent imperdiet magna ac diam placerat.[/'.$ebs_prefix.'lead]'); ?>
          </div>
        <div class="shortcode_desc">Lead Shortcode is used to make a content stand out. To add Lead to your Page/Post click on Lead Shortcode icon. A popup will appear, select lead alignment, provide value for Lead content and custom class, click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[lead class="test" align="left"]
 ...
[/lead]
</pre>
    </div>
    <div class="shortcode-parameter">[lead] Parameters are:</div>
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
            <td>align</td>
            <td>Alignment of Lead content</td>
            <td>required</td>
            <td>center, left, right</td>
            <td>center</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Progress Bar div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>