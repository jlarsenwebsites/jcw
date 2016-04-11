<?php ob_start();?>
    <div class="shortcode-help-outer">
    <h3 id="s1"><span>Progress Bar</span></h3>
    <div class="shrt-content">
        <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">

            <div class="short-detail-full">
                <?php echo do_shortcode('['.$ebs_prefix.'progressbar type="default" value="90" bartype="progress-bar-success" barstyle="progress-striped active" label="Success"] ['.$ebs_prefix.'progressbar type="default" value="75" bartype="progress-bar-info" barstyle="progress-striped active" label="Information"] ['.$ebs_prefix.'progressbar type="default" value="80" bartype="progress-bar-warning" label="Warning"] ['.$ebs_prefix.'progressbar type="default" value="50" bartype="progress-bar-danger" label="Danger"]'); ?>

            </div>
            <div class="short-detail-left">
                <?Php echo do_shortcode('['.$ebs_prefix.'progressbar type="custom" circletype="full" barcolor="#e5d824" bgcolor="#00b1e2" fillcolor="#007cad" fontcolor="#ffffff" fontsize="14" size="200" pbwidth="23" border="inline" label="Heading One" iconsize="15" value="86" animation="true"] '); ?>
            </div>
            <div class="short-detail-right">
                <?Php echo do_shortcode(' ['.$ebs_prefix.'progressbar type="custom" circletype="full" barcolor="#e1574c" bgcolor="#ffffff" fillcolor="#f0c75e" fontcolor="#282828" fontsize="26" size="201" pbwidth="24" border="outline" label="Wordpress" icon="fa fa-user" iconsize="39" iconcolor="#191919" value="88" animation="true"]'); ?>
            </div>
            <div class="short-detail-full">
                <?php echo do_shortcode('['.$ebs_prefix.'progressbar type="custom_linear" bartype="type_1" max="800" increment="1" value="600" fillcolor1="#e88e35" fillcolor2="#eeee22" remaincolor="#ededed" fontcolor="#8224e3" offsetcolor="#1e73be" offset="true"]'); ?>
            </div>
        </div>
        <div class="shortcode_desc">Progress bar shortcode used to provide feedback on the progress of a workflow or action with simple yet flexible bootstrap progress bar. To add Progressbar to your Page/Post click on Progress Bar Shortcode icon. A popup will appear, select Progressbar type, provide value for progress bar label, value and custom class. Check stripped and animated options if you want stripped and animated progressbar, you can add circular progress bar nby choosing custom type and can make progress bar with your custom style setting. </div>
    </div>
    <div class="shortcode-text">
            <pre>[progressbar type="default" value="90" bartype="progress-bar-success" barstyle="progress-striped active" label="Success"]
                [progressbar type="custom" circletype="full" barcolor="#e1574c" bgcolor="#ffffff" fillcolor="#f0c75e" fontcolor="#282828" fontsize="26" size="201" pbwidth="24" border="outline" label="Wordpress" icon="fa fa-user" iconsize="39" iconcolor="#191919" value="88" animation="true"]
</pre>
    </div>
    <div class="shortcode-parameter">[progressbar] Parameters are:</div>
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
            <td>Whether to add a bootstrap default progress bar or custom circular or linear progress bar</td>
            <td>required</td>
            <td>default,custom, custom_linear</td>
            <td>default</td>
        </tr>
        <tr>
            <td>value</td>
            <td>A numeric value for progress bar</td>
            <td>required</td>
            <td>0-100</td>
            <td>50</td>
        </tr>
        <tr>
            <td>bartype</td>
            <td>Bar type of progress bar</td>
            <td>optional</td>
            <td><b>For default Progress bar: </b>progress-bar-success, progress-bar-info, progress-bar-warning, progress-bar-danger<br><b>For linear Progress bar: </b>type_1, type_2, type_3, type_4, type_5</td>
            <td></td>
        </tr>
        <tr>
            <td>barstyle</td>
            <td>this parameter specifies additional striped effect to bar</td>
            <td>optional</td>
            <td>progress-striped</td>
            <td></td>
        </tr>
        <tr>
            <td>barstyle</td>
            <td>Animate the stripes right to left. Not available in all versions of IE</td>
            <td>optional</td>
            <td>active</td>
            <td></td>
        </tr>
        <tr>
            <td>label</td>
            <td>Title for progressbar </td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>circletype</td>
            <td>In circular progress bar whether to show a full circled or semi circled progress bar</td>
            <td>optional</td>
            <td>full, half</td>
            <td>full</td>
        </tr><tr>
            <td>barcolor</td>
            <td>Color of progress bar</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>bgcolor</td>
            <td>background color of progress bar</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>fillcolor</td>
            <td>background color of the circle</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>fontcolor</td>
            <td>Color of progress bar text</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>fontsize</td>
            <td>font size of progress bar text</td>
            <td>optional</td>
            <td>10-30</td>
            <td>15</td>
        </tr><tr>
            <td>size</td>
            <td>Size of progress bar circle, provide a numeric value</td>
            <td>optional</td>
            <td>50-350</td>
            <td>150</td>
        </tr><tr>
            <td>pbwidth</td>
            <td>width of progress bar, provide a numeric value</td>
            <td>optional</td>
            <td>1-50</td>
            <td>40</td>
        </tr><tr>
            <td>border</td>
            <td>border style of progress bar</td>
            <td>optional</td>
            <td>none, inline, outline</td>
            <td>none</td>
        </tr><tr>
            <td>icon</td>
            <td>Icon for circular progress bar</td>
            <td>optional</td>
            <td><a target="_blank" href="http://getbootstrap.com/components/#glyphicons-glyphs">Glyphicon Icons</a> &nbsp;<a href="http://fontawesome.io/icons/">Font Awesome Icons</a></td>
            <td></td>
        </tr><tr>
            <td>iconsize</td>
            <td>fontsize of icon</td>
            <td>optional</td>
            <td>10-60</td>
            <td>15</td>
        </tr><tr>
            <td>iconcolor</td>
            <td>Color of progress bar icon</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>max</td>
            <td>Maximum value for linear progress bar</td>
            <td>required</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>increment</td>
            <td>increment in progress bar during animation</td>
            <td>required</td>
            <td></td>
            <td>1</td>
        </tr><tr>
            <td>fillcolor1</td>
            <td>Color of progress bar</td>
            <td>required</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>fillcolor2</td>
            <td>Second color of progress bar for gradient background</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>remaincolor</td>
            <td>Color of unfilled progress bar</td>
            <td>required</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>fontcolor</td>
            <td>Color of progress bar value</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>percent</td>
            <td>In linear bar show progress in percentage</td>
            <td>optional</td>
            <td>true</td>
            <td></td>
        </tr><tr>
            <td>offset</td>
            <td>Show maximum nad minimum value</td>
            <td>optional</td>
            <td>true</td>
            <td></td>
        </tr><tr>
            <td>offsetcolor</td>
            <td>Color of offset values</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>class</td>
            <td>Add custom class to Progress Bar div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    </div>
<?php $ebs_help_content=ob_get_clean();?>