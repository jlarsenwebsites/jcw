<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Video</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode('['.$ebs_prefix.'oscvideo type="youtube" link="https://www.youtube.com/watch?v=8T0IC1PsdTw" width="100%" height="350px"]'); ?>
<?php echo do_shortcode('['.$ebs_prefix.'rule margin="40" style="rule-dotted" ]')?>
              <?php echo do_shortcode('['.$ebs_prefix.'oscvideo  type="vimeo" link="http://vimeo.com/channels/staffpicks/103313236" dimensions="4by3"] '); ?>
              <?php echo do_shortcode('['.$ebs_prefix.'rule margin="40" style="rule-dotted" ]')?>
              <?php echo do_shortcode('['.$ebs_prefix.'oscvideo type="youtube" link="https://www.youtube.com/watch?v=8T0IC1PsdTw" dimensions="16by9"] '); ?>
          </div>
        <div class="shortcode_desc">Video shortcode is used to show responsive youtube or video. To add video to your Page/Post click on Video Shortcode icon. A popup will appear, select video type, provide url, height, width and Custom Class. click on "Insert Video" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[oscvideo type="youtube" link="https://www.youtube.com/watch?v=8T0IC1PsdTw" width="100%" height="350px"]
</pre>
    </div>
    <div class="shortcode-parameter">[oscvideo] Parameters are:</div>
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
            <td>type</td>
            <td>Type of video</td>
            <td>required</td>
            <td>video</td>
            <td>youtube, vimeo</td>
        </tr>
        <tr>
            <td>link</td>
            <td>link of video</td>
            <td>required</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>dimensions</td>
            <td>ratio of video dimensions</td>
            <td>required</td>
            <td>16by9</td>
            <td>16by9, 4by3, custom</td>
        </tr>
        <tr>
            <td>width</td>
            <td>if chosen custom dimensions, provide Width of video box</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>height</td>
            <td>if chosen custom dimensions, provide height of video box</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Video div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>