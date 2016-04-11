<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Custom Post Testimonial</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
            <?php echo do_shortcode('['.$ebs_prefix.'post_testimonials length="20" testimonials="4" ]'); ?>
          </div>
        <div class="shortcode_desc">Custom Post Testimonial shortcode used to add recent custom post testimonial. This icon is visible only if you have a custom post registered with name "testimonial". To add Custom Post Testimonial to your Page/Post click on Custom Post Testimonial Shortcode icon. A popup will appear, provide value for testimonial content length, number of testimonial and custom class. click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[post_testimonials class="test" length="20" testimonials="2" ]
</pre>
    </div>
    <div class="shortcode-parameter">[post_testimonials] Parameters are:</div>
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
            <td>length</td>
            <td>Length of testimonial content, if not provided whole content will be shown</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>testimonials</td>
            <td>Number of testimonial to be shown.</td>
            <td>required</td>
            <td></td>
            <td>2</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Testimonial div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>