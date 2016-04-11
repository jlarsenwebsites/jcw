<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Icon Heading</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode('['.$ebs_prefix.'iconheading type="h1" style="fa-tachometer" icontype="fa" color="#e53434"]Heading 1[/'.$ebs_prefix.'iconheading] Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              <br /> <br />
              ['.$ebs_prefix.'iconheading type="h1" style="fa-apple" icontype="fa" color="#64c972"]Heading 2[/'.$ebs_prefix.'iconheading] Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.'); ?>
          </div>
        <div class="shortcode_desc">Icon Heading used to show heading with glyphicon icon or font awesoome icon. To add Icon Heading to your Page/Post click on Icon Heading Shortcode icon. A popup will appear, select value for icon, heading type, provide value for heading and custom class. click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[iconheading type="h1" style="fa-heart" icontype="fa" color="#adadad" class="test"]
 ...
[/iconheading]
</pre>
    </div>
    <div class="shortcode-parameter">[iconheading] Shortcode Parameters are:</div>
    <table class="shortcode-table">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required</th>
            <th>Values</th>
            <th>Default</th>
        </tr></thead>
        <tbody>
        <tr>
            <td>type</td>
            <td>Heading Type for icon heading</td>
            <td>required</td>
            <td>h1, h2, h3, h4, h5, h6</td>
            <td>h1</td>
        </tr>
        <tr>
            <td>style</td>
            <td>Icon for icon heading</td>
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
            <td>color</td>
            <td>Specifies Icon Color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to icon heading div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>