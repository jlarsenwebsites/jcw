<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Tooltip</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode('['.$ebs_prefix.'tooltip type="button" link="" tooltip="Tooltip Top" style="top" ]Tooltip Top[/'.$ebs_prefix.'tooltip] ['.$ebs_prefix.'tooltip type="button" link="" tooltip="Tooltip Left" style="left" ]Tooltip Left[/'.$ebs_prefix.'tooltip] ['.$ebs_prefix.'tooltip type="button" link="" tooltip="Tooltip Right" style="right" ]Tooltip Right[/'.$ebs_prefix.'tooltip] ['.$ebs_prefix.'tooltip type="button" link="" tooltip="Tooltip Bottom" style="bottom" ]Tooltip Bottom[/'.$ebs_prefix.'tooltip] <br/> <br/>'); ?>
          </div>
        <div class="shortcode_desc">Tooltips can be attached to link or buttons. When you hover the element with your mouse, the title attribute is displayed in a little box next to the element, just like a native tooltip. To add Tooltip to your Page/Post click on Tooltip Shortcode icon. A popup will appear, select tooltip style,type provide value for tooltip text, link, value class. click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[tooltip type="link" link="#" tooltip="Tooltip" style="top" class="nbgj"]
 ...
[/tooltip]
</pre>
    </div>
    <div class="shortcode-parameter">[tooltip] Parameters are:</div>
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
            <td>Element type for which tooltip will be added</td>
            <td>required</td>
            <td>link, button</td>
            <td>link</td>
        </tr>
        <tr>
            <td>link</td>
            <td>href for link if tooltip type is link</td>
            <td>optional</td>
            <td>Give the URL of any webpage or just leave it '#'</td>
        </tr>
        <tr>
            <td>tooltip</td>
            <td>tooltip text</td>
            <td>required</td>
            <td></td>
            <td>Tooltip</td>
        </tr>
        <tr>
            <td>style</td>
            <td>Tooltip alignment</td>
            <td>required</td>
            <td>top, bottom, left, right, auto</td>
            <td>top</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to tooltip div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>