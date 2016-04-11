<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Separator</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <?php echo do_shortcode('['.$ebs_prefix.'separator style="separator-dotted" margin="30"]Welcome to EBSPro[/'.$ebs_prefix.'separator]

['.$ebs_prefix.'separator style="separator-dashed" margin="30"]Welcome to EBSPro[/'.$ebs_prefix.'separator]

['.$ebs_prefix.'separator style="separator-double" margin="30"]Welcome to EBSPro[/'.$ebs_prefix.'separator]

['.$ebs_prefix.'separator style="separator-double-thick-thin" margin="30"]Welcome to EBSPro[/'.$ebs_prefix.'separator]

['.$ebs_prefix.'separator style="separator-diagonal" margin="30"]Welcome to EBSPro[/'.$ebs_prefix.'separator]'); ?>
          </div>
        <div class="shortcode_desc">Separator shortcode is used to to separate content with a heading.To Separator to your Page/Post click on Separator Shortcode icon. A popup will appear, provide value for separator content and custom class, click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[separator class="test"]
 ...
[/separator]
</pre>
    </div>
    <div class="shortcode-parameter">[separator] Parameters are:</div>
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
            <td>Add custom class to Progress Bar div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>margin</td>
            <td>Add margin to separator</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>style</td>
            <td>Style of separator</td>
            <td>optional</td>
            <td>separator-dotted, separator-dashed, separator-double, separator-double-thick-thin, separator-diagonal, separator-wave, separator-thick, separator-thin</td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>