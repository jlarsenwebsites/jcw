<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Panel</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <div class="short-detail-left">
                  <?php echo do_shortcode('['.$ebs_prefix.'panel style="panel-default"]
['.$ebs_prefix.'panel-header]
Heading goes here
[/'.$ebs_prefix.'panel-header]
['.$ebs_prefix.'panel-content]
 Vestibulum in ultricies eros, quis gravida lacus. Nullam sodales, libero non semper viverra, augue arcu pellentesque urna, eget fermentum enim urna accumsan erat.
[/'.$ebs_prefix.'panel-content]
['.$ebs_prefix.'panel-footer]
Footer goes here
[/'.$ebs_prefix.'panel-footer]
[/'.$ebs_prefix.'panel] ['.$ebs_prefix.'panel style="panel-warning"]
['.$ebs_prefix.'panel-header]
Heading goes here
[/'.$ebs_prefix.'panel-header]
['.$ebs_prefix.'panel-content]
 Vestibulum in ultricies eros, quis gravida lacus. Nullam sodales, libero non semper viverra, augue arcu pellentesque urna, eget fermentum enim urna accumsan erat.
[/'.$ebs_prefix.'panel-content]
[/'.$ebs_prefix.'panel]'); ?>
              </div>
              <div class="short-detail-right">
                  <?php echo do_shortcode('['.$ebs_prefix.'panel style="panel-primary"]
['.$ebs_prefix.'panel-header]
Heading goes here
[/'.$ebs_prefix.'panel-header]
['.$ebs_prefix.'panel-content]
 Vestibulum in ultricies eros, quis gravida lacus. Nullam sodales, libero non semper viverra, augue arcu pellentesque urna, eget fermentum enim urna accumsan erat.
[/'.$ebs_prefix.'panel-content]
['.$ebs_prefix.'panel-footer]
Footer goes here
[/'.$ebs_prefix.'panel-footer]
[/'.$ebs_prefix.'panel] ['.$ebs_prefix.'panel style="panel-success"]
['.$ebs_prefix.'panel-header]
Heading goes here
[/'.$ebs_prefix.'panel-header]
['.$ebs_prefix.'panel-content]
Vestibulum in ultricies eros, quis gravida lacus. Nullam sodales, libero non semper viverra, augue arcu pellentesque urna, eget fermentum enim urna accumsan erat.
[/'.$ebs_prefix.'panel-content]
[/'.$ebs_prefix.'panel]'); ?>
              </div>
          </div>
        <div class="shortcode_desc">Panel Shortcode is used to show panel in front end. To add Panel to your Page/Post click on Panel Shortcode icon. A popup will appear, select value for style, Check "Show Footer" if you want to include panel footer, provide value for custom class. click on "Insert" button. Shortcode will be added to your editor.
        </div>
    </div>
    <div class="shortcode-text">
            <pre>[panel style="panel-success" class="test"]
	[panel-header]
	 ...
	[/panel-header]
	[panel-content]
	 ...
	[/panel-content]
	[panel-footer]
	 ...
	[/panel-footer]
[/panel]
</pre>
    </div>
    <div class="shortcode-parameter">[panel] Parameters are:</div>
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
            <td>style</td>
            <td>Panel style</td>
            <td>required</td>
            <td>panel-default, panel-primary, panel-warning, panel-success, panel-info, panel-danger</td>
            <td>panel-default</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to panel div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <div class="shortcode-parameter">[panel-header] Parameters are:</div>
    <div class="none_parameter">None</div>
    <div class="shortcode-parameter">[panel-content] Parameters are:</div>
    <div class="none_parameter">None</div>
    <div class="shortcode-parameter">[panel-footer] Parameters are:</div>
    <div class="none_parameter">None</div>
</div>
<?php $ebs_help_content=ob_get_clean();?>