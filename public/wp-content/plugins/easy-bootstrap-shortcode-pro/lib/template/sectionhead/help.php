<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Section Heading</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <?php echo do_shortcode('['.$ebs_prefix.'sectionheading class="yourcustomclass"]Section Heading[/'.$ebs_prefix.'sectionheading]'); ?>
          </div>
        <div class="shortcode_desc">Section Heading shortcode is used to add heading to a section. To add Section Heading to your Page/Post click on Section Heading Shortcode icon. Shortcode will be seen in a textarea you can change heading and class. Add shortcode to editor by clicking "Insert" button.</div>
    </div>
    <div class="shortcode-text">
            <pre>[sectionheading class="yourcustomclass"]Section Heading[/sectionheading]</pre>
    </div>
    <div class="shortcode-parameter">[sectionheading] Parameters are:</div>
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
            <td>class</td>
            <td>Add custom class to Section heading in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>