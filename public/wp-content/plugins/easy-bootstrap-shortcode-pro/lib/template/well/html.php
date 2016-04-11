<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-well-type"><?php  _e('Well Type',$ebsp_domain_name); ?></label></th>
            <td><select name="type" id="oscitas-well-type">
                    <option value="" <?php echo $sData['type']==''?'selected="selected"':'';?>><?php  _e('Default',$ebsp_domain_name); ?></option>
                    <option value="well-lg" <?php echo $sData['type']=='well-lg'?'selected="selected"':'';?>><?php  _e('Large',$ebsp_domain_name); ?></option>
                    <option value="well-sm" <?php echo $sData['type']=='well-sm'?'selected="selected"':'';?>><?php  _e('Small',$ebsp_domain_name); ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose well type among standard bootstrap well types',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-well-content"><?php  _e('Well Content',$ebsp_domain_name); ?></label></th>
            <td><textarea name="content" id="oscitas-well-content"><?php echo $sData['content'];?></textarea>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide well content',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-well-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-well-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>