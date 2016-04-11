<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Recent Work</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
                <?php echo do_shortcode('['.$ebs_prefix.'recentwork length="20" layout="col-3" projects="3" ]'); ?>
          </div>
        <div class="shortcode_desc">Recent work shortcode used to add recent custom post projects with their featured image. This icon is visible only if you have a custom post registered with name "our_projects". To add Recent Projects to your Page/Post click on Recent Post Shortcode icon. A popup will appear, provide value for project content length, number of projects and custom class. click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[recentwork class="test" length="20" layout="col-3" projects="2" ]</pre>
    </div>
    <div class="shortcode-parameter">[recentwork] Parameters are:</div>
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
            <td>Length of project content, if not provided whole content will be shown</td>
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
            <td>projects</td>
            <td>Number of projects to be shown.</td>
            <td>required</td>
            <td></td>
            <td>2</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Recent Work div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>