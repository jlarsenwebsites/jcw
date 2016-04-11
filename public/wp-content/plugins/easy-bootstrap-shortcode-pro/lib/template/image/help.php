<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Image Effect</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode(' ['.$ebs_prefix.'image src="http://lorempixel.com/output/business-q-c-200-200-8.jpg" shape="img-circle"] ['.$ebs_prefix.'image src="http://lorempixel.com/output/business-q-c-200-200-4.jpg" shape="img-rounded"] ['.$ebs_prefix.'image src="http://lorempixel.com/output/business-q-c-200-200-5.jpg" shape="img-thumbnail"]'); ?>
          </div>
        <div class="shortcode_desc">Image shortcode is used to provide effect to image, these images are not responsive. To add Image with effects to your Page/Post click on Image Effect Shortcode icon. A popup will appear, Upload image, select image shape, provide value for custom class and click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[image class="test" src="http://lorempixel.com/output/business-q-c-200-200-4.jpg" shape="img-circle"]
</pre>
    </div>
    <div class="shortcode-parameter">[image] Parameters are:</div>
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
            <td>src</td>
            <td>required</td>
            <td>Source of image on which you want image effects</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>shape</td>
            <td>image shape, the image will be displayed in your selected shape</td>
            <td>required</td>
            <td>img-rounded, img-circle, img-thumbnail</td>
            <td>img-rounded</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to image in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>