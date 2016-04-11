<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Responsive Image</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
                <?php echo do_shortcode('['.$ebs_prefix.'thumbnail border="1" link="#" src="http://lorempixel.com/output/business-q-g-230-230-9.jpg"] ['.$ebs_prefix.'thumbnail border="1" link="#" src="http://lorempixel.com/output/business-q-g-230-230-1.jpg"]'); ?>
          </div>
        <div class="shortcode_desc">Responsive Image shortcode used to add thumbnail as name describes these images are responsive. To add Responsive Image to your Page/Post click on Responsive Image Shortcode icon. A popup will appear, Upload image, provide value for image link, custom class. check border option if you want image with border and click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[thumbnail border="1" link="#" src="http://lorempixel.com/output/business-q-g-230-230-9.jpg"]</pre>
    </div>
    <div class="shortcode-parameter">[thumbnail] Parameters are:</div>
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
            <td>src</td>
            <td>required</td>
            <td>Source of image on which you want to show</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>link</td>
            <td>Image link where you want to redirect on image click</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>border</td>
            <td>Adds border to image</td>
            <td>optional</td>
            <td>1</td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Well div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>