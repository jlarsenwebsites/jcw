<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Button Dropdown </span></h3>
    <div class="shrt-content">
          <div class="shrt-detail"><?php echo do_shortcode('['.$ebs_prefix.'dropdown dropup="dropdown"]
['.$ebs_prefix.'dropdownhead style="btn-default" size="" split=""]
Dropdown
[/'.$ebs_prefix.'dropdownhead]
['.$ebs_prefix.'dropdownbody]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 1[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 2[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 3[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item[/'.$ebs_prefix.'dropdownitem]
[/'.$ebs_prefix.'dropdownbody]
[/'.$ebs_prefix.'dropdown] ['.$ebs_prefix.'dropdown dropup="dropdown"]
['.$ebs_prefix.'dropdownhead style="btn-success" size="" split="split"]
Dropdown
[/'.$ebs_prefix.'dropdownhead]
['.$ebs_prefix.'dropdownbody]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 1[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 2[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 3[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item[/'.$ebs_prefix.'dropdownitem]
[/'.$ebs_prefix.'dropdownbody]
[/'.$ebs_prefix.'dropdown] ['.$ebs_prefix.'dropdown dropup="dropdown"]
['.$ebs_prefix.'dropdownhead style="btn-primary" size="btn-lg" split="split"]Dropdown[/'.$ebs_prefix.'dropdownhead]
['.$ebs_prefix.'dropdownbody]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 1[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 2[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" disabled="disabled"]Dropdown Item 3[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 4[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item[/'.$ebs_prefix.'dropdownitem]
[/'.$ebs_prefix.'dropdownbody]
[/'.$ebs_prefix.'dropdown] ['.$ebs_prefix.'dropdown dropup="dropup"]
['.$ebs_prefix.'dropdownhead style="btn-success" size="btn-sm" split=""]
Dropdown
[/'.$ebs_prefix.'dropdownhead]
['.$ebs_prefix.'dropdownbody]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 1[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" disabled="disabled"]Dropdown Item 2[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 3[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item[/'.$ebs_prefix.'dropdownitem]
[/'.$ebs_prefix.'dropdownbody]
[/'.$ebs_prefix.'dropdown] ['.$ebs_prefix.'dropdown dropup="dropdown"]
['.$ebs_prefix.'dropdownhead style="btn-danger" size="btn-sm" split=""]
Dropdown
[/'.$ebs_prefix.'dropdownhead]
['.$ebs_prefix.'dropdownbody]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 1[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 2[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 3[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item[/'.$ebs_prefix.'dropdownitem]
[/'.$ebs_prefix.'dropdownbody]
[/'.$ebs_prefix.'dropdown] ['.$ebs_prefix.'dropdown dropup="dropup"]
['.$ebs_prefix.'dropdownhead style="btn-warning" size="btn-xs" split=""]
Dropdown
[/'.$ebs_prefix.'dropdownhead]
['.$ebs_prefix.'dropdownbody]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 1[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 2[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item 3[/'.$ebs_prefix.'dropdownitem]
['.$ebs_prefix.'dropdownitem type="menuitem" link="#" ]Dropdown Item[/'.$ebs_prefix.'dropdownitem]
[/'.$ebs_prefix.'dropdownbody]
[/'.$ebs_prefix.'dropdown]'); ?> </div>
        <div class="shortcode_desc">Button Dropdown is bootstrap dropdown which is triggered on button click. To add Button Dropdown to your Page/Post  select value for button style, size, dropup, split and text. Add new dropdown items by clicking on "Add New Item" link. Provide dropdown item type, title link and whether to diisable it or not. Provide custom class.</div>
    </div>
    <div class="shortcode-text">
            <pre>[dropdown dropup="dropup" class="test"]
	[dropdownhead style="btn-primary" size="btn-sm" split="split"]
	 ...
	[/dropdownhead]
	[dropdownbody]
		[dropdownitem type="menuitem" link="#" ] ... [/dropdownitem]
		[dropdownitem type="menuitem" link="#" disabled="disabled"] ... [/dropdownitem],
		[dropdownitem type="menuitem" link="#" ] ... [/dropdownitem]
	[/dropdownbody]
[/dropdown]
</pre>
    </div>
    <div class="shortcode-parameter">[dropdown] Parameters are:</div>
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
            <td>dropup</td>
            <td>This parameter specifies whether to make the alignment of dropdown downward or upward</td>
            <td>required</td>
            <td>dropdown, dropup</td>
            <td>dropdown</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Dropdown div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <div class="shortcode-parameter">[dropdownhead] Parameters are:</div>
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
        </tr><tr>
            <td>style</td>
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
            <td>split</td>
            <td>Split dropdown trigger from button</td>
            <td>optional</td>
            <td>split</td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <div class="shortcode-parameter">[dropdownbody] Parameters are:</div>
    <div class="none_parameter">None</div>
    <div class="shortcode-parameter">[dropdownitem] Parameters are:</div>
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
        </tr><tr>
            <td>type</td>
            <td>Type of dropdownitem</td>
            <td>required</td>
            <td>menuitem, divider</td>
            <td>menuitem</td>
        </tr>
        <tr>
            <td>link</td>
            <td>Dropdown item link if dropdown item type is link</td>
            <td>optional</td>
            <td></td>
            <td>#</td>
        </tr>
        <tr>
            <td>disabled</td>
            <td>Weather to disable the dropdown item link</td>
            <td>optional</td>
            <td>disabled</td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>