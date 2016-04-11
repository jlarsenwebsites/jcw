<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Recent Post</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <?php echo do_shortcode('['.$ebs_prefix.'oscrecentpost length="20" layout="col-3" posts="3" ]'); ?>
          </div>
        <div class="shortcode_desc">Recent Post shortcode used to add recent posts with their featured image.To add Recent Projects to your Page/Post click on Recent Post Shortcode icon. A popup will appear, provide value for post content length, number of posts and custom class. click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[oscrecentpost class="test" length="20" layout="col-3" posts="6" ]</pre>
    </div>
    <div class="shortcode-parameter">[oscrecentpost] Parameters are:</div>
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
            <td>Length of post content, if not provided whole content will be shown</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>layout</td>
            <td>Column layout for posts.</td>
            <td>required</td>
            <td>col-4, col-3, col-2</td>
            <td>col-4</td>
        </tr>
        <tr>
            <td>posts</td>
            <td>Number of posts to be shown.</td>
            <td>required</td>
            <td></td>
            <td>2</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Recent Post div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>