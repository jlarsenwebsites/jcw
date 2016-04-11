<?php
$effectlist='';
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-type"><?php  _e('Style',$ebsp_domain_name); ?></label></th>
            <td><select name="type" id="oscitas-panel-type">
                    <option value="panel-default" <?php echo $sData['type']=='panel-default'?'selected="selected"':'';?>><?php  _e('Simple',$ebsp_domain_name); ?></option>
                    <option value="panel-primary" <?php echo $sData['type']=='panel-primary'?'selected="selected"':'';?>><?php  _e('Primary',$ebsp_domain_name); ?></option>
                    <option value="panel-warning" <?php echo $sData['type']=='panel-warning'?'selected="selected"':'';?>><?php  _e('Warning',$ebsp_domain_name); ?></option>
                    <option value="panel-success" <?php echo $sData['type']=='panel-success'?'selected="selected"':'';?>><?php  _e('Success',$ebsp_domain_name); ?></option>
                    <option value="panel-info" <?php echo $sData['type']=='panel-info'?'selected="selected"':'';?>><?php  _e('Information',$ebsp_domain_name); ?></option>
                    <option value="panel-danger" <?php echo $sData['type']=='panel-danger'?'selected="selected"':'';?>><?php  _e('Danger',$ebsp_domain_name); ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose one of among default bootstrap panel styles',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-line"><?php  _e('Show footer',$ebsp_domain_name); ?></label></th>
            <td><input type="checkbox" id="oscitas-panel-footer" name="footer" <?php echo (isset($sData['footer']) && $sData['footer']=='true')?'checked="checked"':'';?> value="true"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this checkbox to show panel with footer',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-panel-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-panel-class" value="<?php echo $sData['class'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>