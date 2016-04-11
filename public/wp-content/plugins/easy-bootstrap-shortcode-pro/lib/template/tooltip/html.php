<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-tooltip-style"><?php  _e('Tooltip Style',$ebsp_domain_name); ?></label></th>
            <td><select name="style" id="oscitas-tooltip-style">
                    <option value="top" <?php echo $sData['style']=='top'?'selected="selected"':'';?>><?php  _e('Top',$ebsp_domain_name); ?></option>
                    <option value="bottom" <?php echo $sData['style']=='bottom'?'selected="selected"':'';?>><?php  _e('Bottom',$ebsp_domain_name); ?></option>
                    <option value="left" <?php echo $sData['style']=='left'?'selected="selected"':'';?>><?php  _e('Left',$ebsp_domain_name); ?></option>
                    <option value="right" <?php echo $sData['style']=='right'?'selected="selected"':'';?>><?php  _e('Right',$ebsp_domain_name); ?></option>
                    <option value="auto" <?php echo $sData['style']=='auto'?'selected="selected"':'';?>><?php  _e('Auto',$ebsp_domain_name); ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose tooltip position',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-tooltip-text"><?php  _e('Tooltip Text',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="tooltiptext" id="oscitas-tooltip-text" value="<?php echo $sData['tooltiptext'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide content which will be shown in tooltip',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-tooltip-type"><?php  _e('Type',$ebsp_domain_name); ?></label></th>
            <td><select name="type" id="oscitas-tooltip-type">
                    <option value="link" <?php echo $sData['type']=='link'?'selected="selected"':'';?>><?php  _e('Link',$ebsp_domain_name); ?></option>
                    <option value="button" <?php echo $sData['type']=='button'?'selected="selected"':'';?>><?php  _e('Button',$ebsp_domain_name); ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose tooltip button type',$ebsp_domain_name); ?>"></span></td>
        </tr >
        <tr id="oscitas-tooltip-link-tr">
            <th><label for="oscitas-tooltip-link"><?php  _e('Link',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="tooltiplink" id="oscitas-tooltip-link" value="<?php echo $sData['tooltiplink'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide url for the button',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-tooltip-link-text"><?php  _e('Value',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="linktext" id="oscitas-tooltip-link-text" value="<?php echo $sData['linktext'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide text for button',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-tooltip-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-tooltip-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>