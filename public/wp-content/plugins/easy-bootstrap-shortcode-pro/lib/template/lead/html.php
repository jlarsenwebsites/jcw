<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <th><label for="oscitas-lead-content"><?php  _e('Lead Content',$ebsp_domain_name); ?></label></th>
        <td><input id="oscitas-lead-content" type="text" name="content"  value="<?php echo  $sData['content']; ?>" />
         <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter the content to be shown in lead',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-lead-alignment"><?php  _e('Lead Alignment',$ebsp_domain_name); ?></label></th>
            <td><select name="alignment" id="oscitas-lead-alignment">
                    <option value="center" <?php echo $sData['alignment']=='center'?'selected="selected"':'';?>><?php  _e('Center',$ebsp_domain_name); ?></option>
                    <option value="left" <?php echo $sData['alignment']=='left'?'selected="selected"':'';?>><?php  _e('Left',$ebsp_domain_name); ?></option>
                    <option value="right" <?php echo $sData['alignment']=='right'?'selected="selected"':'';?>><?php  _e('Right',$ebsp_domain_name); ?></option>
                </select>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose lead content alignment, default alignment is center',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-lead-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-lead-class" value="<?php echo  $sData['class']; ?>"/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>