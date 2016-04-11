<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Help</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode('['.$ebs_prefix.'row]

['.$ebs_prefix.'column md="6" sm="6" xs="6" ]
['.$ebs_prefix.'list]
['.$ebs_prefix.'li type="glyphicon-ok"]Lorem ipsum dolor sit amet ['.$ebs_prefix.'badge bgcolor="#1e73be" color="#ffffff" value="2" float_right="true"][/'.$ebs_prefix.'li]
['.$ebs_prefix.'li type="glyphicon-ok"]Suspendisse porta leo ['.$ebs_prefix.'badge bgcolor="#1e73be" color="#ffffff" value="4" float_right="true"][/'.$ebs_prefix.'li]
['.$ebs_prefix.'li type="glyphicon-ok"]Mauris vel nisl quis ['.$ebs_prefix.'badge bgcolor="#1e73be" color="#ffffff" value="7" float_right="true"][/'.$ebs_prefix.'li]
[/'.$ebs_prefix.'list]
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column md="6" sm="6" xs="6" ]
['.$ebs_prefix.'list]
['.$ebs_prefix.'li type="glyphicon-ok"]Phasellus tincidunt nibh['.$ebs_prefix.'badge bgcolor="#d11b45" color="#ffffff" value="5" float_right="true"][/'.$ebs_prefix.'li]
['.$ebs_prefix.'li type="glyphicon-ok"]Aliquam ultrices sapien
['.$ebs_prefix.'badge bgcolor="#d11b45" color="#ffffff" value="3" float_right="true"]
[/'.$ebs_prefix.'li]
['.$ebs_prefix.'li type="glyphicon-ok"]Donec malesuada est ut
['.$ebs_prefix.'badge bgcolor="#d11b45" color="#ffffff" value="10" float_right="true"]
[/'.$ebs_prefix.'li]
[/'.$ebs_prefix.'list]
[/'.$ebs_prefix.'column]
[/'.$ebs_prefix.'row]'); ?>
          </div>
        <div class="shortcode_desc">

            Easily highlight new or unread items by adding a badge to lists, nav items etc.</div>
    </div>
    <div class="shortcode-text">
            <pre>[badge  bgcolor="#1e73be" color="#ffffff" value="2" float_right="true" class="test"]</pre>
    </div>
    <div class="shortcode-parameter">[badge] Parameters are:</div>
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
            <td>Specifies badge type</td>
            <td>optional</td>
            <td>badge-lg, badge-sm</td>
            <td></td>
        </tr>
        <tr><td>bgcolor</td>
            <td>Background color for badge</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr> <tr><td>color</td>
            <td>text color fof badge</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr> <tr><td>value</td>
            <td>any content for badge</td>
            <td>required</td>
            <td></td>
            <td>1</td>
        </tr><tr><td>float_right</td>
            <td>Align badge to right side</td>
            <td>optional</td>
            <td>true</td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to badge div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>