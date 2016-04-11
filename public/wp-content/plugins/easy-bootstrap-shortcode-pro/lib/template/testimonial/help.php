<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Tabs</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <?php echo do_shortcode('['.$ebs_prefix.'testimonial author="Author Name" class="yourcustomclass" designation="Author Designation" ]Vestibulum interdum luctus nulla, dignissim placerat dui semper at. Nam sed erat id felis convallis elementum. Sed vitae placerat nisl, vel pretium ligula. [/'.$ebs_prefix.'testimonial] '); ?>
          </div>
        <div class="shortcode_desc">testimonial shortcode is useful when you want to write testimonial in page/post/custom post.To add Testimonial to your Page/Post click on Testimonial Shortcode icon. The shortcode will be seen in textarea, you can change author name, designation class and testimonial contnet .</div>
    </div>
    <div class="shortcode-text">
            <pre>[testimonial author="Author Name" class="yourcustomclass" designation="Author Designation" ]
 ...
[/testimonial]</pre>
    </div>
    <div class="shortcode-parameter">[testimonial] Parameters are:</div>
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
            <td>author</td>
            <td>Name of testimonial author</td>
            <td>optional</td>
            <td></td>
            <td>Author Name</td>
        </tr>
        <tr>
            <td>designation</td>
            <td>Designation of testimonial author</td>
            <td>optional</td>
            <td></td>
            <td>Author Designation</td>
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