<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>1. Accordion (Collapsible Menus)</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail"> <?php echo do_shortcode('['.$ebs_prefix.'toggles]
['.$ebs_prefix.'toggle active="active" ocicon="true" title="one" icon="glyphicon-pencil" icontype="glyphicon" iconcolor="#dd3333"]Toggle content goes here.[/'.$ebs_prefix.'toggle]
['.$ebs_prefix.'toggle ocicon="true" title="two" icon="glyphicon-ok" icontype="glyphicon" iconcolor="#dd3333"]Toggle content goes here.[/'.$ebs_prefix.'toggle]
['.$ebs_prefix.'toggle ocicon="true" title="three" icon="glyphicon-remove" icontype="glyphicon" iconcolor="#dd3333"]Toggle content goes here.[/'.$ebs_prefix.'toggle]
[/'.$ebs_prefix.'toggles]')?>
          </div>
        <div class="shortcode_desc">Accordion or Toggles are collapsible menus by which you can show more content in lesser space. According can be added to your post/page by providing values for required options, can see preview with current setting by clicking preview button.  Add new toggles  by clicking on "Add New Item" link. Add toggle title, icon, icon color and set active toggle. Provide custom class and click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[toggles class="test"]
[toggle active="active" ocicon="true" title="one" icon="glyphicon-pencil" icontype="glyphicon" iconcolor="#dd3333"]Toggle content goes here.[/toggle]
[toggle ocicon="true" title="two" icon="glyphicon-ok" icontype="glyphicon" iconcolor="#dd3333"]Toggle content goes here.[/toggle]
[toggle ocicon="true" title="three" icon="glyphicon-remove" icontype="glyphicon" iconcolor="#dd3333"]Toggle content goes here.[/toggle]
[/toggles]
</pre>
        </div>
        <div class="shortcode-parameter">[toggles] Parameters are:</div>
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
                <td>Add custom class to toggle div in front end</td>
                <td>optional</td>
                <td></td>
                <td>yourcustomclass</td>
            </tr>
            </tbody>
        </table>
        <div class="shortcode-parameter">[toggle] Parameters are:</div>
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
                <td>title</td>
                <td>Title of toggle link</td>
                <td>Required</td>
                <td></td>
                <td>Accordion number 1</td>
            </tr>
            <tr>
                <td>icon</td>
                <td>Add icon to toggle title</td>
                <td>optional</td>
                <td><a target="_blank" href="http://getbootstrap.com/components/#glyphicons-glyphs">Glyphicon Icons</a> &nbsp;<a href="http://fontawesome.io/icons/">Font Awesome Icons</a></td>
                <td></td>
            </tr>
            <tr>
                <td>icontype</td>
                <td>Wether glyphicon or font awesome icon</td>
                <td>requied</td>
                <td>glyphicon, fa</td>
                <td></td>
            </tr>
            <tr>
                <td>color</td>
                <td>Specifies Icon Color</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>active</td>
                <td>this option applied to first toggle only to show toggle open on page load</td>
                <td>Required</td>
                <td>active</td>
                <td>active</td>
            </tr>
            </tbody>
        </table>

</div>
<?php $ebs_help_content=ob_get_clean(); ?>
