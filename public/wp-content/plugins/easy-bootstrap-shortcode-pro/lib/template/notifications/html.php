<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-type"><?php  _e('Style',$ebsp_domain_name); ?></label></th>
            <td><select name="type" id="oscitas-type">
                    <option value="alert-warning" <?php echo $sData['type']=='alert-warning'?'selected="selected"':'';?>><?php  _e('Warning',$ebsp_domain_name); ?></option>
                    <option value="alert-success" <?php echo $sData['type']=='alert-success'?'selected="selected"':'';?>><?php  _e('Success',$ebsp_domain_name); ?></option>
                    <option value="alert-info" <?php echo $sData['type']=='alert-info'?'selected="selected"':'';?>><?php  _e('Information',$ebsp_domain_name); ?></option>
                    <option value="alert-danger" <?php echo $sData['type']=='alert-danger'?'selected="selected"':'';?>><?php  _e('Danger',$ebsp_domain_name); ?></option>
                </select>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose notification(alert) style among bootstrap standard notification styles',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-line"><?php  _e('Close link',$ebsp_domain_name); ?></label></th>
            <td><input type="checkbox" name="close" id="oscitas-close" value="true" <?php echo (isset($sData['close']) && $sData['close']=='true')?'checked="checked"':'';?>/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to show a close button on notification, by clicking on this icon you can close the notification',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-note-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-note-class" value="<?php echo $sData['class'];?>"/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>