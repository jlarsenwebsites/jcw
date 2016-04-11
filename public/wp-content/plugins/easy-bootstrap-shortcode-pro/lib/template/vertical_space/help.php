<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Vertical Space</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode('['.$ebs_prefix.'row]['.$ebs_prefix.'column lg="4" md="4" sm="4" xs="12" ]
 Donec commodo auctor imperdiet. Morbi non mi posuere, interdum nibh hendrerit, viverra justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed lacinia odio est. Ut ac lacinia velit. Aliquam erat volutpat. Nunc in pellentesque risus, eget placerat purus. Duis semper lobortis lorem euismod blandit. Aliquam elementum feugiat tristique.
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column lg="4" md="4" sm="4" xs="12" ]
Suspendisse ac nisl non sem cursus euismod.  <h4>I need space</h4>['.$ebs_prefix.'space height="30" ]Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed elit ante, lobortis vel luctus nec, fringilla a eros.Sed elit ante, lobortis vel luctus nec, fringilla a eros.
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column lg="4" md="4" sm="4" xs="12" ]
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus diam mauris, accumsan convallis risus id, tristique suscipit ante. Vestibulum tristique posuere pretium. Proin imperdiet ac lacus sit amet ornare. Donec interdum gravida lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi dictum erat felis, a dignissim odio eget.
[/'.$ebs_prefix.'column][/'.$ebs_prefix.'row]
['.$ebs_prefix.'space height="40" ]
['.$ebs_prefix.'pageheader headingtype="h2" headcolor="#1e73be" fontsize="20" margin="5" padding="5" border="true" bordercolor="#1e73be"]Space is Awesome[/'.$ebs_prefix.'pageheader]
['.$ebs_prefix.'space height="70" ]
['.$ebs_prefix.'row]['.$ebs_prefix.'column lg="4" md="4" sm="4" xs="12" ]
 Donec commodo auctor imperdiet. Morbi non mi posuere, interdum nibh hendrerit, viverra justo. Interdum et malesuada fames ac ante ipsum primis in faucibus.['.$ebs_prefix.'space height="40" ]
 <h3>Some space is always preferred</h3>
  ['.$ebs_prefix.'space height="40" ]Sed lacinia odio est. Ut ac lacinia velit. Aliquam erat volutpat. Nunc in pellentesque risus, eget placerat purus. Duis semper lobortis lorem euismod.
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column lg="4" md="4" sm="4" xs="12" ]
Suspendisse ac nisl non sem cursus euismod.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed elit ante, lobortis vel luctus nec, fringilla a eros. Cras hendrerit varius metus vitae faucibus.Suspendisse ac nisl non sem cursus euismod.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed elit ante, lobortis vel luctus nec, fringilla a eros. Cras hendrerit varius metus vitae faucibus.
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column lg="4" md="4" sm="4" xs="12" ]
 Suspendisse vel elit nec nunc viverra fermentum quis non nunc. Sed id metus diam. Cras vulputate leo quis sem euismod cursus. Quisque ac commodo felis, a vulputate justo. Pellentesque blandit id eros vestibulum elementum. Morbi tempor ut ante sed condimentum. Quisque a nisl eget risus consequat dictum. Cras velit nulla, feugiat at nunc sed, tincidunt iaculis turpis. Mauris aliquam gravida molestie. Vivamus consectetur ut mauris non condimentum. Etiam eget lobortis sem.
[/'.$ebs_prefix.'column][/'.$ebs_prefix.'row]

'); ?>
          </div>
        <div class="shortcode_desc">Use this shortcode to add vertical space in your content.</div>
    </div>
    <div class="shortcode-text">
            <pre>[space class="test" height="30"]
</pre>
    </div>
    <div class="shortcode-parameter">[space] Parameters are:</div>
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
            <td>height</td>
            <td>Height of space</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to vertical space div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>