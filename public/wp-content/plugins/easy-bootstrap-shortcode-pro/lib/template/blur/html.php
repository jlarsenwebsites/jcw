<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">

        <tr>
            <th><label for="oscitas-blur-deviation"><?php  _e('Blur Deviation',$ebsp_domain_name); ?></label></th>
            <td><input type="text"  class="slider_input" name="deviation" id="oscitas-blur-deviation" value="<?php echo $sData['deviation'];?>">
                <div class="slider_render" id="osc_blur_render_deviation"></div>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Measurement of blurriness, higher value increase blurriness ',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-blur-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-blur-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>