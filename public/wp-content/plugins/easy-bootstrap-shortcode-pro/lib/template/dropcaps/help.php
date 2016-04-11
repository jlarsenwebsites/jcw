<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Dropcaps</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
             <div class="short-detail-left"> <?php echo do_shortcode('['.$ebs_prefix.'dropcaps style="dropcap-standard" color="#dd3333"]L[/'.$ebs_prefix.'dropcaps]orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '); ?></div>
              <div class="short-detail-right"> <?php echo do_shortcode('['.$ebs_prefix.'dropcaps style="dropcap-circle" bg="#1ab373" color="#ffffff"]L[/'.$ebs_prefix.'dropcaps]orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '); ?></div>
          </div>
        <div class="shortcode_desc">Dropcaps are useful when you want to high light a letter. To add Dropcap to your Page/Post click on Dropcap Shortcode icon. A popup will appear, select dropcap style, provide value for Dropcap content(Usually a letter) and custom class,, check preview if you want and insert shortcode</div>
    </div>
    <div class="shortcode-text">
            <pre>[dropcaps style="dropcap-circle" bg="#eeee22" color="#1e73be" class="test"]...[/dropcaps]
</pre>
    </div>
    <div class="shortcode-parameter">[dropcap] Parameters are:</div>
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
            <td>style</td>
            <td>Style of Letter</td>
            <td>required</td>
            <td>dropcap-standard, dropcap-circle, dropcap-box</td>
            <td>dropcap-standard</td>
        </tr>
        <tr>
            <td>bg</td>
            <td>Background of dropcap content in front end, used only for "dropcap-circle and dropcap-box" dropcap style</td>
            <td>required</td>
            <td></td>
            <td>#F9F9F9</td>
        </tr>
        <tr>
            <td>color</td>
            <td>Color of dropcap content</td>
            <td>required</td>
            <td></td>
            <td>#000000</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Dropcap  div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>

</div>
<?php $ebs_help_content=ob_get_clean();?>