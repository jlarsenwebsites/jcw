<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Button Group Toolbar</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail"><?php echo do_shortcode('['.$ebs_prefix.'btngrptoolbar class="yourcustomclass"]['.$ebs_prefix.'buttongroup]['.$ebs_prefix.'button style="btn-primary btn-sm" type="button" title="Button 1" ]
['.$ebs_prefix.'button style="btn-success btn-sm" type="button"  title="Button 2" ]
['.$ebs_prefix.'button style="btn-info btn-sm" type="button"  title="Button 3" ]
['.$ebs_prefix.'button style="btn-warning btn-sm" type="button"  title="Button 4" ]
['.$ebs_prefix.'button style="btn-danger btn-sm" type="button"  title="Button 5" ][/'.$ebs_prefix.'buttongroup]
['.$ebs_prefix.'buttongroup]['.$ebs_prefix.'button style="btn-primary btn-sm" type="button" title="Button 1" ]
['.$ebs_prefix.'button style="btn-success btn-sm" type="button"  title="Button 2" ]
['.$ebs_prefix.'button style="btn-info btn-sm" type="button"  title="Button 3" ]
[/'.$ebs_prefix.'buttongroup]  ['.$ebs_prefix.'buttongroup]['.$ebs_prefix.'button style="btn-default " type="button" title="Button 1" ]
['.$ebs_prefix.'button style="btn-primary " type="button" title="Button 2" ]
['.$ebs_prefix.'button style="btn-success " type="button" title="Button 3" ]
[/'.$ebs_prefix.'buttongroup] [/'.$ebs_prefix.'btngrptoolbar] ['.$ebs_prefix.'btngrptoolbar class="yourcustomclass"]['.$ebs_prefix.'btngrptoolbar class="yourcustomclass"]['.$ebs_prefix.'buttongroup]['.$ebs_prefix.'button style="btn-default " type="button" title="1" ]
['.$ebs_prefix.'button style="btn-default " type="button" title="2" ]
['.$ebs_prefix.'button style="btn-default " type="button" title="3" ]
['.$ebs_prefix.'button style="btn-default " type="button" title="4" ][/'.$ebs_prefix.'buttongroup]['.$ebs_prefix.'buttongroup]
['.$ebs_prefix.'button style="btn-default " type="button" title="5" ]
['.$ebs_prefix.'button style="btn-default " type="button" title="6" ]
['.$ebs_prefix.'button style="btn-default " type="button" title="7" ]
[/'.$ebs_prefix.'buttongroup][/'.$ebs_prefix.'btngrptoolbar] '); ?></div>
        <div class="shortcode_desc">Button Group Toolbar Combine sets of Button groups and seems like button group menu. To add Button Group Toolbar to your Page/Post click on Button Group Toolbar Shortcode icon. Shortcode will be added to your editor, replace the custom class and insert button groups as content by using button group shortcode.</div>
    </div>
    <div class="shortcode-text">
            <pre>[btngrptoolbar class="yourcustomclass"]
    [buttongroup class="test" style="justified"]
        [button style="btn-success btn-sm" type="button" title="Button1" ]
        [button style="btn-info btn-sm" type="link" target="true" link="http://google.com" title="Button2" ]
    [/buttongroup]
    [buttongroup class="test" style="justified"]
        [button style="btn-success btn-sm" type="button" title="Button1" ]
        [button style="btn-info btn-sm" type="link" target="true" link="http://google.com" title="Button2" ]
        [button style="btn-primary btn-sm" type="link" target="false" link="#" title="Button3" ]
    [/buttongroup]
    [buttongroup class="test" style="justified"]
        [button style="btn-success btn-sm" type="button" title="Button1" ]
    [/buttongroup]
[/btngrptoolbar]
</pre>
    </div>
    <div class="shortcode-parameter">[btngrptoolbar] Parameters are:</div>
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
            <td>class</td>
            <td>Add custom class to button group toolbar div in front end</td>
            <td>optional</td>
            <td></td>
            <td>yourcustomclass</td>
        </tr>
        </tbody>
    </table>

</div>
<?php $ebs_help_content=ob_get_clean();?>