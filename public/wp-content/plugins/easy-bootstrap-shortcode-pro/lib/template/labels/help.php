<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Labels</span></h3>
    <div class="shrt-content ">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <?php echo do_shortcode('['.$ebs_prefix.'label type="label-default"]Default[/'.$ebs_prefix.'label] ['.$ebs_prefix.'label type="label-primary"]
Primary [/'.$ebs_prefix.'label] ['.$ebs_prefix.'label type="label-success"] Success [/'.$ebs_prefix.'label] ['.$ebs_prefix.'label type="label-info"] Information[/'.$ebs_prefix.'label]'); ?>
          </div>
        <div class="shortcode_desc">Label Shortcode is used to show bootstrap label in front end. To add Label to your Page/Post click on Label Shortcode icon. A popup will appear, select value for label type, provide value for label content and custom class and click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[label type="label-primary" class="test"]
 ...
[/label]
</pre>
    </div>
    <div class="shortcode-parameter">[label] Parameters are:</div>
    <table class="shortcode-table">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required</th>
            <th>Values</th>
            <th>Default</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>type</td>
            <td>Specifies the label type.</td>
            <td>required</td>
            <td>label-default, label-success, label-info, label-primary, label-warning, label-danger</td>
            <td>label-default</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Label span in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>