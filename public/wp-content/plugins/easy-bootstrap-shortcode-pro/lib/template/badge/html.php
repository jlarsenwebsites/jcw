<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-badge-bgcolor"><?php  _e('Background Color',$ebsp_domain_name); ?></label></th>
            <td><input type="text" class="color" name="bgcolor" id="oscitas-badge-bgcolor" value="<?php echo $sData['bgcolor'];?>">
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Badge Background Color',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-badge-color"><?php  _e('Color',$ebsp_domain_name); ?></label></th>
            <td><input type="text" class="color" name="color" id="oscitas-badge-color" value="<?php echo $sData['color'];?>">
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Badge contnet color',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-badge-value"><?php  _e('Content',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="value" id="oscitas-badge-value" value="<?php echo $sData['value'];?>">
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Badge content ',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-badge-float_right"><?php  _e('Float Right',$ebsp_domain_name); ?></label></th>
            <td><input type="checkbox" name="float_right" id="oscitas-badge-float_right" value="true" <?php check_ebs_checked($sData,'float_right','true')?>>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this option if you want to align badge to right',$ebsp_domain_name); ?>"></span></td>
        </tr>

        <tr>
            <th><label for="oscitas-badge-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-badge-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>