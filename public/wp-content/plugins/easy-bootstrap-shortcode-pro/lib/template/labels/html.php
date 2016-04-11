<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
   <table id="oscitas-table" class="form-table">
            <tr>
                <th><label for="oscitas-label-type"><?php  _e('Label Type',$ebsp_domain_name); ?></label></th>
                <td><select name="type" id="oscitas-label-type">
                        <option value="label-default" <?php echo $sData['type']=='label-default'?'selected="selected"':'';?>><?php  _e('Default',$ebsp_domain_name); ?></option>
                        <option value="label-primary" <?php echo $sData['type']=='label-primary'?'selected="selected"':'';?>><?php  _e('Primary',$ebsp_domain_name); ?></option>
                        <option value="label-success" <?php echo $sData['type']=='label-success'?'selected="selected"':'';?>><?php  _e('Success',$ebsp_domain_name); ?></option>
                        <option value="label-info" <?php echo $sData['type']=='label-info'?'selected="selected"':'';?>><?php  _e('Information',$ebsp_domain_name); ?></option>
                        <option value="label-warning" <?php echo $sData['type']=='label-warning'?'selected="selected"':'';?>><?php  _e('Warning',$ebsp_domain_name); ?></option>
                        <option value="label-danger" <?php echo $sData['type']=='label-danger'?'selected="selected"':'';?>><?php  _e('Danger',$ebsp_domain_name); ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose label type among standard bootstrap label types',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-label-content"><?php  _e('Label Content',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="content" id="oscitas-label-content" value="<?php echo  $sData['content']; ?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter content to shown in stylish label',$ebsp_domain_name); ?>"></span> </td>
            </tr>
            <tr>
                <th><label for="oscitas-label-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="class" id="oscitas-label-class" value="<?php echo  $sData['class']; ?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
            </tr>
        </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>