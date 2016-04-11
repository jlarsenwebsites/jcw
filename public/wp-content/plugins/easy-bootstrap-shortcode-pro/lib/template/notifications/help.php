<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Notification</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <?php echo do_shortcode('['.$ebs_prefix.'notification type="alert-warning" close="true" ]Nullam consectetur, nisi et convallis pulvinar, urna massa placerat mi, pretium luctus arcu sem ac orci. Morbi ut tristique sem, in consequat nulla.[/'.$ebs_prefix.'notification] ['.$ebs_prefix.'notification type="alert-success" close="false" ] Vestibulum in ultricies eros, quis gravida lacus. Nullam sodales, libero non semper viverra, augue arcu pellentesque urna, eget fermentum enim urna accumsan erat.[/'.$ebs_prefix.'notification] ['.$ebs_prefix.'notification type="alert-info" close="false" ]Nullam consectetur, nisi et convallis pulvinar, urna massa placerat mi, pretium luctus arcu sem ac orci. Nullam sodales, libero non semper viverra, augue arcu pellentesque urna, eget fermentum enim urna accumsan erat.[/'.$ebs_prefix.'notification]'); ?>
          </div>
        <div class="shortcode_desc">Notifications are bootstrap alert boxes. To add Notifications to your Page/Post click on Notification Shortcode icon. A popup will appear, select notification type, check for close link, provide value for custom class, click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[notification type="alert-warning" close="true" ] ... [/notification]</pre>
    </div>
    <div class="shortcode-parameter">[notification] Parameters are:</div>
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
            <td>type</td>
            <td>specify the notification type</td>
            <td>required</td>
            <td>alert-warning, alert-success, alert-info, alert-danger</td>
            <td>alert-warning</td>
        </tr>
        <tr>
            <td>close</td>
            <td>Weather to show close link on notification in front end</td>
            <td>optional</td>
            <td>true</td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to notification div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>