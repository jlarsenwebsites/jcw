<?php ob_start();?>
    <div class="shortcode-help-outer">
        <h3 id="s1"><span>Buttons</span></h3>
        <div class="shrt-content">
            <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
                <div class="short-detail-left">
                    <?php echo do_shortcode('['.$ebs_prefix.'button style="custom btn-sm" bgcolor="#fba634" fgcolor="#ffffff" hoverbgcolor="#e88030" hoverfgcolor="#f9f9f9" icon="fa-truck" icontype="fa" align="left" type="button" title="Button Style 3"]<br/><br/>['.$ebs_prefix.'button style="custom btn-sm" bgcolor="#32a372" fgcolor="#ffffff" hoverbgcolor="#19776e" hoverfgcolor="#ffffff" icon="fa-tachometer" icontype="fa" align="left" iconcolor="#ffffff" type="button" title="Button Style 1"]<br/><br/> ['.$ebs_prefix.'button style="custom btn-lg" bgcolor="#fc5242" fgcolor="#ffffff" hoverbgcolor="#e23b3b" hoverfgcolor="#ffffff" icon="fa-cloud-upload" icontype="fa" align="right" iconcolor="#ffffff" type="button" title="Button Style 2"]<br/><br/>'); ?>
                </div>
                <div class="short-detail-right">
                    <?php echo do_shortcode('['.$ebs_prefix.'button style="custom btn-xs" bgcolor="#1ab373" fgcolor="#ffffff" icon="fa-road" icontype="fa" align="left" type="button" title="Button Style 1"]<br/><br/> ['.$ebs_prefix.'button style="custom btn-sm" bgcolor="#fc5242" fgcolor="#ffffff" icon="fa-sitemap" icontype="fa" align="left" type="button" title="Button Style 2"] <br/><br/>['.$ebs_prefix.'button style="custom btn-lg" bgcolor="#e20040" fgcolor="#ffffff" icon="fa-briefcase" icontype="fa" align="left" type="button" title="Button Style 3"]'); ?>


                </div>
            </div>
            <div class="shortcode_desc">Buttons are responsive bootstrap button, Button type can be either link or button. to insert button shortcode select button style or design button with custom colors using custom style option, select size, type, button icon, icon alignment and provide value for other fields and custom class.</div>
        </div>
        <div class="shortcode-text">
            <pre>[button style="btn-default btn-lg" icon="glyphicon-align-justify" align="left" type="link" target="false" title="Button" link="#"]
</pre>
        </div>
        <div class="shortcode-parameter">[button] Parameters are:</div>
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
                <td>Specifies button style</td>
                <td>required</td>
                <td>btn-default, btn-primary, btn-primary, btn-success, btn-info, btn-warning, btn-danger, btn-link</td>
                <td>btn-default</td>
            </tr>
            <tr>
                <td>style</td>
                <td>Specifies button size</td>
                <td>optional</td>
                <td>btn-lg, btn-sm, btn-xs</td>
                <td>btn-lg</td>
            </tr>
            <tr>
                <td>style</td>
                <td>Make button width 100%</td>
                <td>optional</td>
                <td>btn-block</td>
                <td></td>
            </tr>
            <tr>
                <td>bgcolor</td>
                <td>This option is application if you select custom style for button, this sets background color of button</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>fgcolor</td>
                <td>This option is application if you select custom style for button, this sets foreground color of button</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr><tr>
                <td>hoverbgcolor</td>
                <td>This option is application if you select custom style for button, this sets background color of button on hover</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr><tr>
                <td>hoverfgcolor</td>
                <td>This option is application if you select custom style for button, this sets foreground color of button on hover</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>icon</td>
                <td>Add icon to button text if you want</td>
                <td>optional</td>
                <td><a target="_blank" href="http://getbootstrap.com/components/#glyphicons-glyphs">Glyphicon Icons</a> &nbsp;<a href="http://fontawesome.io/icons/">Font Awesome Icons</a></td>
                <td></td>

            </tr>
            <tr>
                <td>icontype</td>
                <td>Wether glyphicon or font awesome icon</td>
                <td>requied</td>
                <td>glyphicon, fa</td>
                <td>glyphicon</td>
            </tr>
            <tr>
                <td>color</td>
                <td>Specifies Icon Color</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>align</td>
                <td>specifies icon align to the left or right of button text</td>
                <td>optional</td>
                <td></td>
                <td>right, left</td>
            </tr>
            <tr>
                <td>type</td>
                <td>Tells whether button will be link or simple button.</td>
                <td>required</td>
                <td>link</td>
                <td>link, button</td>
            </tr>
            <tr>
                <td>target</td>
                <td>Tells whether the link will be opened in new tab or not.</td>
                <td>optional</td>
                <td></td>
                <td>true</td>
            </tr>
            <tr>
                <td>title</td>
                <td>The button text.</td>
                <td>required</td>
                <td>Button</td>
                <td></td>
            </tr>
            <tr>
                <td>link</td>
                <td>The href of button if button type is link.</td>
                <td>optional</td>
                <td>Give the URL of any webpage or just leave it '#'</td>
                <td></td>
            </tr>
            <tr>
                <td>modal</td>
                <td>Modal attribute for button whether to open or close modal on click or do nothing.</td>
                <td>optional</td>
                <td></td>
                <td>initializer, closer</td>
            </tr>
            <tr>
                <td>class</td>
                <td>Add custom class to list div in front end</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>

    </div>
    <div class="shortcode-parameter">[ebs_modal_header] Parameters are:</div>
    <div class="none_parameter">None</div>
    <div class="shortcode-parameter">[ebs_modal_body] Parameters are:</div>
    <div class="none_parameter">None</div>
    <div class="shortcode-parameter">[ebs_modal_footer] Parameters are:</div>
    <div class="none_parameter">None</div>
<?php $ebs_help_content=ob_get_clean();?>