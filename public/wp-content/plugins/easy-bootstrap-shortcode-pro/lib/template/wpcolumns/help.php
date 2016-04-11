<?php ob_start();?>
    <div class="shortcode-help-outer">
        <h3 id="s1"><span>Columns</span></h3>
        <div class="shrt-content">
            <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
                <?php echo do_shortcode('['.$ebs_prefix.'row]
                <h2>Column 6</h2><br/>
['.$ebs_prefix.'column lg="6" md="6" sm="6" xs="12" ]
Suspendisse ac nisl non sem cursus euismod. Aenean imperdiet erat vel nunc viverra egestas. Praesent consectetur, lectus sit amet convallis imperdiet, metus tellus sagittis lectus, vitae tempor ante nibh vitae tortor.
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column lg="6" md="6" sm="6" xs="12" ]
Suspendisse ac nisl non sem cursus euismod. Aenean imperdiet erat vel nunc viverra egestas. Praesent consectetur, lectus sit amet convallis imperdiet, metus tellus sagittis lectus, vitae tempor ante nibh vitae tortor.
[/'.$ebs_prefix.'column]
[/'.$ebs_prefix.'row] ['.$ebs_prefix.'row]
<br/><br/>
 <h2>Column 4</h2> <br/>
['.$ebs_prefix.'column lg="4" md="4" sm="4" xs="12" ]
Suspendisse ac nisl non sem cursus euismod. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed elit ante, lobortis vel luctus nec, fringilla a eros.
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column lg="4" md="4" sm="4" xs="12" ]
Suspendisse ac nisl non sem cursus euismod.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed elit ante, lobortis vel luctus nec, fringilla a eros.
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column lg="4" md="4" sm="4" xs="12" ]
Suspendisse ac nisl non sem cursus euismod.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed elit ante, lobortis vel luctus nec, fringilla a eros.
[/'.$ebs_prefix.'column]
[/'.$ebs_prefix.'row]'); ?>
            </div>
            <div class="shortcode_desc">Columns are used to indent content in specific width each row is made up of 12 columns. To add Columns to your Page/Post click on Column Shortcode icon. A popup will appear, select number of columns for a row, select column width and offset and check to hide column for large, medium, small, extra-small screens, provide value for custom class, click on "Insert" button. Shortcode will be added to your editor.</div>
        </div>
        <div class="shortcode-text">
            <pre>[row class="test"]
    [column lg="6" lgoff="4" smhide="yes" ]
     ...
    [/column]
    [column lg="6" ]
     ...
    [/column]
[/row]
</pre>
        </div>
        <div class="shortcode-parameter">[row] Parameters are:</div>
        <table class="shortcode-table">
            <tbody><tr>
                <th>Parameter</th>
                <th>Description</th>
                <th>Required</th>
                <th>Values</th>
                <th>Default</th>
            </tr>

            </tbody><tbody>
            <tr>
                <td>wrap</td>
                <td>wrap row in a div</td>
                <td>optional</td>
                <td>true</td>
                <td></td>
            </tr>
            <tr>
                <td>wrap_class</td>
                <td>Add custom class to wrapper div in front end</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>class</td>
                <td>Add custom class to row div in front end</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>

            </tbody>
        </table>
        <div class="shortcode-parameter">[column] Parameters are:</div>
        <table class="shortcode-table">
            <tbody><tr>
                <th>Parameter</th>
                <th>Description</th>
                <th>Required</th>
                <th>Values</th>
                <th>Default</th>
            </tr>

            </tbody><tbody>
            <tr>
                <td>lg</td>
                <td>Specifies column width in large screen</td>
                <td>required</td>
                <td>1-12</td>
                <td>12</td>
            </tr>
            <tr>
                <td>md</td>
                <td>Specifies column width in medium screen</td>
                <td>optional</td>
                <td>1-12</td>
                <td></td>
            </tr>
            <tr>
                <td>sm</td>
                <td>Specifies column width in small screen</td>
                <td>optional</td>
                <td>1-12</td>
                <td></td>
            </tr>
            <tr>
                <td>xs</td>
                <td>Specifies column width in extra small screen</td>
                <td>optional</td>
                <td>1-12</td>
                <td></td>
            </tr>
            <tr>
                <td>lgoff</td>
                <td>Specifies column offset in large screen</td>
                <td>optional</td>
                <td>1-11</td>
                <td></td>
            </tr>
            <tr>
                <td>mdoff</td>
                <td>Specifies column offset in medium screen</td>
                <td>optional</td>
                <td>1-11</td>
                <td></td>
            </tr>
            <tr>
                <td>smoff</td>
                <td>Specifies column offset in small screen</td>
                <td>optional</td>
                <td>1-11</td>
                <td></td>
            </tr>
            <tr>
                <td>xsoff</td>
                <td>Specifies column offset in extra small screen</td>
                <td>optional</td>
                <td>1-11</td>
                <td></td>
            </tr>
            <tr>
                <td>lghide</td>
                <td>Specifies whether to hide column  in large screen</td>
                <td>optional</td>
                <td>yes</td>
                <td></td>
            </tr>
            <tr>
                <td>mdhide</td>
                <td>Specifies whether to hide column  in medium screen</td>
                <td>optional</td>
                <td>yes</td>
                <td></td>
            </tr>
            <tr>
                <td>smhide</td>
                <td>Specifies whether to hide column  in small screen</td>
                <td>optional</td>
                <td>yes</td>
                <td></td>
            </tr>
            <tr>
                <td>xshide</td>
                <td>Specifies whether to hide column  in extra small screen</td>
                <td>optional</td>
                <td>yes</td>
                <td></td>
            </tr>
            <tr>
                <td>animation</td>
                <td>Animation effect type to be applied on column contnet</td>
                <td>optional</td>
                <td>pulse, flipInX, fadeIn, fadeInUp, fadeInDown, fadeInLeft, fadeInRight, fadeInUpBig, fadeInDownBig, fadeInRightBig, bounceIn, bounceInDown, bounceInLeft, bounceInRight, rotateInUpLeft, rotateInDownLeft, rotateInUpRight, rotateInDownRight, lightSpeedRight, lightSpeedLeft, rollin</td>
                <td></td>
            </tr>
            <tr>
                <td>animationtime</td>
                <td>Whether animation will be applied to content every time when it comes to in view or just first time</td>
                <td>optional</td>
                <td>everytime, onetime</td>
                <td>everytime</td>
            </tr>
            <tr>
                <td>class</td>
                <td>Add custom class applied to every column to customize column css or js</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $ebs_help_content=ob_get_clean();?>