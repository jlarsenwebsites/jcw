<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Boxes frames</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail"><?php echo do_shortcode('['.$ebs_prefix.'frame bgcolor=" #1ab373" fgcolor=" #ffffff" shadow="ebs_shadow shadow both-lifted-corner"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mi lorem, venenatis sed elementum in, lacinia eu lectus. Curabitur consectetur, dui luctus aliquam accumsan, sapien felis sodales libero, a egestas nibh turpis id quam. Fusce gravida erat non mi fermentum molestie. Vestibulum metus enim, egestas quis ullamcorper sit amet, mattis a est. In non auctor risus. Nulla facilisi. Integer purus massa, vestibulum nec augue id, pharetra mollis mi. [/'.$ebs_prefix.'frame]
          ['.$ebs_prefix.'frame bgcolor=" #f14a19" fgcolor=" #ffffff" shadow="ebs_shadow shadow raised-box"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mi lorem, venenatis sed elementum in, lacinia eu lectus. Curabitur consectetur, dui luctus aliquam accumsan, sapien felis sodales libero, a egestas nibh turpis id quam. Fusce gravida erat non mi fermentum molestie.[/'.$ebs_prefix.'frame]
          ') ?></div>
        <div class="shortcode_desc">Boxframe are used to show content in a frame, make content more attractive and stylish or to highlight content.</div>
    </div>
    <div class="shortcode-text">
            <pre>[frame bgcolor=" #dd3333" fgcolor=" #eeee22" shadow="ebs_shadow shadow two-side-perspective" class="test"]
 ...
[/frame]
</pre>
    </div>
    <div class="shortcode-parameter">[frame] Parameters are:</div>
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
            <td>bgcolor</td>
            <td>Background color of frame</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>fgcolor</td>
            <td>foreground color of frame</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>shadow</td>
            <td>Shadow of boxframe</td>
            <td>optional</td>
            <td>left-perspective, right-perspective, two-side-perspective, left-lifted-corner, right-lifted-corner, both-lifted-corner,raised-box,vertical-curves,single-horizontal-curves,horizontal-curves</td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Boxframe div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>

</div>
<?php $ebs_help_content=ob_get_clean();?>