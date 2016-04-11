<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Horizontal Rule</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode('['.$ebs_prefix.'rule margin="20" style="rule-dotted" ]

['.$ebs_prefix.'rule margin="20" style="rule-dashed" ]

['.$ebs_prefix.'rule margin="20" style="rule-double" ]

['.$ebs_prefix.'rule margin="20" style="rule-double-thick-thin" ]

['.$ebs_prefix.'rule margin="20" style="rule-fadecorder" ]

['.$ebs_prefix.'rule margin="20" style="rule-double-fadecorder" ]'); ?>
          </div>
        <div class="shortcode_desc">Use this shortcode to show a horizontal rule. To add Horizontal Rule to your Page/Post click on Horizontal Rule Shortcode icon. A popup will appear, select number rule type, provide margin and Custom Class. click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[rule class="test" margin="10" style="rule-line" ]
</pre>
    </div>
    <div class="shortcode-parameter">[rule] Parameters are:</div>
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
            <td>style</td>
            <td>Show horizontal rule with selected style</td>
            <td>required</td>
            <td>rule-dotted,rule-dashed,rule-double, rule-double-thick-thin, rule-fadecorder, rule-shadow, rule-diagonal, rule-wave, rule-thick, rule-thin</td>
            <td>rule-dotted</td>
        </tr>
        <tr>
            <td>margin</td>
            <td>Add amrgin to Horizontal rule</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Horizontal Rule in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>