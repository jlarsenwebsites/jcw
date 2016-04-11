<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Help</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode('['.$ebs_prefix.'well type=""]
Sed at leo id nibh mattis aliquam. Sed sit amet est quam. Pellentesque laoreet libero id ligula convallis faucibus. Mauris varius neque nec suscipit porta. Phasellus sit amet urna justo. Sed vitae euismod dui. Phasellus tristique velit eget placerat fermentum. Donec vitae nisl sed ligula pulvinar dignissim.
[/'.$ebs_prefix.'well]'); ?>
          </div>
        <div class="shortcode_desc">Use the well as a simple effect on an element to give it an inset effect. To add Well to your Page/Post click on Well Shortcode icon. A popup will appear, select value for well type, provide value for well content and custom class and click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[well type="well-lg" class="test"]...[/well]</pre>
    </div>
    <div class="shortcode-parameter">[well] Parameters are:</div>
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

        <tr><td>type</td>
            <td>Specifies well type</td>
            <td>optional</td>
            <td>well-lg, well-sm</td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Well div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>