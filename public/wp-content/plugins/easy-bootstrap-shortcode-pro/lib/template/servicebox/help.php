<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Service Box</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode('
              ['.$ebs_prefix.'row]
['.$ebs_prefix.'column md="4" sm="4" xs="12" ]
['.$ebs_prefix.'servicebox type="icon" icon="fa-star" icontype="fa" iconbg="iconcircle" icon_size="40" iconbg_size="100" iconbg_radius="50" margin_bottom="30" margin_top="30" iconbgcolor="#FFFFFF" iconcolor="#3db39d" headingtype="h1" heading="Heading 1" iconhover="custom" hover_iconbgcolor="#3db39d" hover_iconcolor="#ffffff" boxstyle="custom" bgcolor="#3db39d" fgcolor="#ffffff" hover="custom" hover_bgcolor="#f7f7f7" hover_fgcolor="#3db39d" readmore="true" readmore_link="#" readmore_text="Read More" readmorestyle="custom" readmore_bgcolor="#3db39d" readmore_fgcolor="#ffffff"]Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum.[/'.$ebs_prefix.'servicebox]

[/'.$ebs_prefix.'column]

['.$ebs_prefix.'column md="4" sm="4" xs="12" ]
['.$ebs_prefix.'servicebox type="icon" icon="fa-cog" icontype="fa" iconbg="burst-8" icon_size="40" iconbg_size="100" iconbg_radius="50" margin_bottom="30" margin_top="30" iconbgcolor="#FFFFFF" iconcolor="#E1574C" headingtype="h1" heading="Heading 1" iconhover="custom" hover_iconbgcolor="#E1574C" hover_iconcolor="#ffffff" boxstyle="custom" bgcolor="#E1574C" fgcolor="#ffffff" hover="custom" hover_bgcolor="#f7f7f7" hover_fgcolor="#E1574C" readmore="true" readmore_link="#" readmore_text="Read More" readmorestyle="custom" readmore_bgcolor="#E1574C" readmore_fgcolor="#ffffff"]Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum.[/'.$ebs_prefix.'servicebox]
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column md="4" sm="4" xs="12" ]
['.$ebs_prefix.'servicebox type="image" imgsrc="http://lorempixel.com/output/business-q-c-200-200-5.jpg" icon_size="40" iconbg_size="100" iconbg_radius="50" margin_bottom="30" margin_top="30" iconbgcolor="#FFFFFF" iconcolor="#27A6D1" headingtype="h1" heading="Heading 1" iconhover="custom" hover_iconbgcolor="#27A6D1" hover_iconcolor="#ffffff" boxstyle="custom" bgcolor="#27A6D1" fgcolor="#ffffff" hover="custom" hover_bgcolor="#f7f7f7" hover_fgcolor="#27A6D1" readmore="true" readmore_link="#" readmore_text="Read More" readmorestyle="custom" readmore_bgcolor="#27A6D1" readmore_fgcolor="#ffffff"]Epsum factorial non deposit quid pro quo hic escorol.[/'.$ebs_prefix.'servicebox]
[/'.$ebs_prefix.'column]
[/'.$ebs_prefix.'row]'); ?>



          </div>
        <div class="shortcode_desc">Service Box shortcode is used to describe a service by using heading and icon. To add Service Box to your Page/Post click on Service Box Shortcode icon. A popup will appear, select icon, icon background, heading type, provide value for heading and custom class, click on "Insert" button. Shortcode will be added to your editor. Change service box content.</div>
    </div>
    <div class="shortcode-text">
            <pre>[servicebox icon="glyphicon-asterisk" icontype="glyphicon" iconbg="iconcircle" iconbgcolor="#FFFFFF" iconcolor="#777777" headingtype="h1" heading="heading" class="test" iconhover="default" boxstyle="default" hover="default" readmorestyle="default"]
    ...
[/servicebox]
</pre>
    </div>
    <div class="shortcode-parameter">[servicebox] Parameters are:</div>
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
            <td>icon</td>
            <td>Icon for service box</td>
            <td>required</td>
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
            <td>iconbg</td>
            <td>Background for icon in service box</td>
            <td>required</td>
            <td>iconcircle, iconbox, iconstar,riangle-up, triangle-down, trapezoid, hexagon, pentagon, heart, diamond, diamond-narrow, cut-diamond, burst-12, burst-8</td>
            <td>iconcircle</td>
        </tr>
        <tr>
            <td>icon_size</td>
            <td>Specifies icon size in pixel,You can set this option if icon background is either circle or box.</td>
            <td>optional</td>
            <td>20-140</td>
            <td>40</td>
        </tr>
        <tr><td>iconbg_size</td>
            <td>Specifies icon background size in pixel,You can set this option if icon background is either circle or box.</td>
            <td>optional</td>
            <td>50-150</td>
            <td>100</td>
        </tr>
        <tr><td>iconbg_radius</td>
            <td>Specifies icon background border radius in percentage(%),You can set this option if icon background is circle.</td>
            <td>optional</td>
            <td>0-50</td>
            <td>50</td>
        </tr>
        <tr>
            <td>iconbgcolor</td>
            <td>Icon background color</td>
            <td>optional</td>
            <td></td>
            <td>#FFFFFF</td>
        </tr>
        <tr>
            <td>iconcolor</td>
            <td>Icon color</td>
            <td>optional</td>
            <td></td>
            <td>#777777</td>
        </tr>

        <tr>
            <td>iconhover</td>
            <td>Icon hover effects if you choose custom you can set icon color and icon background color on servicebox hover</td>
            <td>required</td>
            <td>default, revert, custom</td>
            <td>default</td>
        </tr>
        <tr>
            <td>hover_iconbgcolor</td>
            <td>Icon background color on service box hover</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>hover_iconcolor</td>
            <td>Icon color on service box hover</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>boxstyle</td>
            <td>sets service box style, if you choose custom option you can set service box foreground color and service box background color</td>
            <td>required</td>
            <td>default, custom</td>
            <td>default</td>
        </tr>
        <tr>
            <td>bgcolor</td>
            <td>Service box background color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>fgcolor</td>
            <td>Service box foreground color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>hover</td>
            <td>sets service box style on service box hover, if you choose custom option you can set service box foreground color and service box background color on service box hover</td>
            <td>required</td>
            <td>default, custom</td>
            <td>default</td>
        </tr>
        <tr>
            <td>hover_bgcolor</td>
            <td>Service box background color on service box hover</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>hover_fgcolor</td>
            <td>Service box foreground color on service box hover</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>readmore</td>
            <td>Weather to iclude read more link in service box</td>
            <td>optional</td>
            <td>true</td>
            <td></td>
        </tr><tr>
            <td>readmore_link</td>
            <td>Read more url</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>readmore_text</td>
            <td>Read More link text</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>readmorestyle</td>
            <td>if you checked readmore option(i.e read more option value is true), this fiels defines style for read more link, if you choose custom you can set link color and link background color.</td>
            <td>optional</td>
            <td>default, custom</td>
            <td>default</td>
        </tr>
        <tr>
            <td>readmore_bgcolor</td>
            <td>Read More link background color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>readmore_fgcolor</td>
            <td>Read More link color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>headingtype</td>
            <td>Heading Type for service box heading</td>
            <td>required</td>
            <td>h1, h2, h3, h4, h5, h6</td>
            <td>h1</td>
        </tr>
        <tr>
            <td>heading</td>
            <td>Heading  for service box</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Service Box div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>