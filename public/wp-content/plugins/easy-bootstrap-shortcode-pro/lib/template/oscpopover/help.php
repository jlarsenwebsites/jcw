<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Popover</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <?php echo do_shortcode('['.$ebs_prefix.'popover title="Popover Top" pop_content=" Nam sit amet nunc eget est posuere dictum in vitae urna. " trigger="hover" style="top" size="btn-sm" type="btn-default" ]Popover Top[/'.$ebs_prefix.'popover]  &nbsp &nbsp
['.$ebs_prefix.'popover title="Popover bottom" pop_content=" Nam sit amet nunc eget est posuere dictum in vitae urna. " trigger="hover" style="bottom" size="btn-sm" type="btn-success" ]Popover Bottom[/'.$ebs_prefix.'popover] &nbsp &nbsp ['.$ebs_prefix.'popover title="Popover Left" pop_content=" Nam sit amet nunc eget est posuere dictum in vitae urna. " trigger="hover" style="left" size="btn-sm" type="btn-info" ]Popover Left[/'.$ebs_prefix.'popover] &nbsp &nbsp ['.$ebs_prefix.'popover title="Popover Right" pop_content=" Nam sit amet nunc eget est posuere dictum in vitae urna. " trigger="hover" style="right" size="btn-sm" type="btn-warning" ]Popover[/'.$ebs_prefix.'popover]'); ?>
          </div>
        <div class="shortcode_desc">Popover is used to show brief description about a button on its hover or click. To add Popover to your Page/Post click on Panel Shortcode icon. A popup will appear, select value for Popover Style, Trigger Popover On, Button Style and Button type, provide value for Popover Title Text, popover Content and Custom Class. click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[oscpopover title="A title" pop_content="Your Content" trigger="click" style="top" size="button-lg" type="btn-default" ]
 ...
[/oscpopover]
</pre>
    </div>
    <div class="shortcode-parameter">[popover] Parameters are:</div>
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
            <td>Specifies popover style either left,right, top, bottom</td>
            <td>required</td>
            <td>left, right, top, bottom, auto</td>
            <td>top</td>
        </tr>
        <tr>
            <td>title</td>
            <td>Popover Title</td>
            <td>optional</td>
            <td></td>
            <td>A Title</td>
        </tr>
        <tr>
            <td>pop_content</td>
            <td>Popover content to be shown on button hover or click</td>
            <td>required</td>
            <td></td>
            <td>Your Content</td>
        </tr>
        <tr>
            <td>trigger</td>
            <td>Specifies when to show popover content either on button hover or click</td>
            <td>required</td>
            <td>click, hover</td>
            <td>click</td>
        </tr>
        <tr>
        </tr><tr>
            <td>type</td>
            <td>Specifies button style</td>
            <td>required</td>
            <td>btn-default, btn-primary, btn-primary, btn-success, btn-info, btn-warning, btn-danger, btn-link</td>
            <td>btn-default</td>
        </tr>
        <tr>
            <td>size</td>
            <td>Specifies button size</td>
            <td>optional</td>
            <td>btn-lg, btn-sm, btn-xs</td>
            <td>btn-lg</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Popover div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody></table>
</div>
<?php $ebs_help_content=ob_get_clean();?>