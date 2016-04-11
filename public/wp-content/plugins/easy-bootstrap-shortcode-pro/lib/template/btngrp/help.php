<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Button Group</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail"><?php echo do_shortcode('['.$ebs_prefix.'buttongroup]['.$ebs_prefix.'button style="btn-primary btn-sm" type="button" title="Button 1" ]
['.$ebs_prefix.'button style="btn-success btn-sm" type="button"  title="Button 2" ]
['.$ebs_prefix.'button style="btn-info btn-sm" type="button"  title="Button 3" ]
['.$ebs_prefix.'button style="btn-warning btn-sm" type="button"  title="Button 4" ]
['.$ebs_prefix.'button style="btn-danger btn-sm" type="button"  title="Button 5" ]
[/'.$ebs_prefix.'buttongroup] ['.$ebs_prefix.'buttongroup]['.$ebs_prefix.'button style="btn-default " type="button" title="Button 1" ]
['.$ebs_prefix.'button style="btn-primary " type="button" title="Button 2" ]
['.$ebs_prefix.'button style="btn-success " type="button" title="Button 3" ]
[/'.$ebs_prefix.'buttongroup] <br /> <br /> ['.$ebs_prefix.'buttongroup]['.$ebs_prefix.'button style="btn-default btn-lg" type="button" title="Button 1" ]
['.$ebs_prefix.'button style="btn-danger btn-lg" type="button" title="Button 2" ]
['.$ebs_prefix.'button style="btn-success btn-lg" type="button" title="Button 3" ]
[/'.$ebs_prefix.'buttongroup]<br /><br />  ['.$ebs_prefix.'buttongroup style="justified"]['.$ebs_prefix.'button style="btn-primary btn-sm" type="link" target="false" link="#" title="Button 1" ]
['.$ebs_prefix.'button style="btn-success btn-sm" type="link" target="false" link="#" title="Button 2" ]
['.$ebs_prefix.'button style="btn-info btn-sm" type="link" target="false" link="#" title="Button 3" ]
['.$ebs_prefix.'button style="btn-warning btn-sm" type="link" target="false" link="#" title="Button 4" ]
['.$ebs_prefix.'button style="btn-danger btn-sm" type="link" target="false" link="#" title="Button 5" ]
[/'.$ebs_prefix.'buttongroup]  '); ?></div>
        <div class="shortcode_desc">Button Group group of adjoining buttons. To add Button Group to your Page/Post click on Button Group Shortcode icon. A popup will appear, select button group style and size of button group buttons. Add new button group buttons by clicking on "Add New Item" link. Provide button specification for each button. Provide custom class and click on "Insert Button Group" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[buttongroup class="test" style="justified"]
    [button style="btn-success btn-sm" type="button" title="Button1" ]
    [button style="btn-info btn-sm" type="link" target="true" link="http://google.com" title="Button2" ]
    [button style="btn-primary btn-sm" type="link" target="false" link="#" title="Button3" ]
[/buttongroup]
</pre>
    </div>
    <div class="shortcode-parameter">[buttongroup] Parameters are:</div>
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
            <td>Style of button group</td>
            <td>optional</td>
            <td>vertical, justified</td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Button Group div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <div class="shortcode-parameter">[button] Parameters are:</div>
    <div class="none_parameter">View <a href="#s12">Button Shortcode Section</a> for detail of [button] shortcode</div>
</div>
<?php $ebs_help_content=ob_get_clean();?>