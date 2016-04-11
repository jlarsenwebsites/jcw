<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-popover-style"><?php  _e('Popover Style',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><select name="style" id="oscitas-popover-style">
                    <option value="top" <?php echo $sData['style']=='top'?'selected="selected"':'';?>><?php  _e('Top',$ebsp_domain_name); ?></option>
                    <option value="bottom" <?php echo $sData['style']=='bottom'?'selected="selected"':'';?>><?php  _e('Bottom',$ebsp_domain_name); ?></option>
                    <option value="left" <?php echo $sData['style']=='left'?'selected="selected"':'';?>><?php  _e('Left',$ebsp_domain_name); ?></option>
                    <option value="right" <?php echo $sData['style']=='right'?'selected="selected"':'';?>><?php  _e('Right',$ebsp_domain_name); ?></option>
                    <option value="auto" <?php echo $sData['style']=='auto'?'selected="selected"':'';?>><?php  _e('Auto',$ebsp_domain_name); ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Select popover position',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-popover-title"><?php  _e('Popover Title Text',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><input type="text" name="title" id="oscitas-popover-title" value="<?php echo $sData['title'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter heading for popover',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-popover-content"><?php  _e('Popover Content',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><textarea  name="content" id="oscitas-popover-content" class="textarea-content-box"><?php echo $sData['content'];?></textarea>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter popover content',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-pbutton-trigger"><?php  _e('Trigger Popover On',$ebsp_domain_name); ?></label></th>
            <td><select name="tigger" id="oscitas-pbutton-trigger">
                    <option value="click" <?php echo $sData['tigger']=='click'?'selected="selected"':'';?>><?php  _e('Click',$ebsp_domain_name); ?></option>
                    <option value="hover" <?php echo $sData['tigger']=='hover'?'selected="selected"':'';?>><?php  _e('Hover',$ebsp_domain_name); ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to show popover on hover or on click',$ebsp_domain_name); ?>"></span></td>

            <th><label for="oscitas-pbutton-size"><?php  _e('Button Size',$ebsp_domain_name); ?></label></th>
            <td><select name="size" id="oscitas-pbutton-size">
                    <option value="" <?php echo $sData['size']==''?'selected="selected"':'';?>><?php  _e('Default',$ebsp_domain_name); ?></option>
                    <option value="btn-lg" <?php echo $sData['size']=='btn-lg'?'selected="selected"':'';?>><?php  _e('Large',$ebsp_domain_name);  ?></option>
                    <option value="btn-sm" <?php echo $sData['size']=='btn-sm'?'selected="selected"':'';?>><?php  _e('Small',$ebsp_domain_name);  ?></option>
                    <option value="btn-xs" <?php echo $sData['size']=='btn-xs'?'selected="selected"':'';?>><?php  _e('Ex-small',$ebsp_domain_name);  ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose button size ',$ebsp_domain_name); ?>"></span></td>
        </tr >
        <tr>
            <th><label for="oscitas-pbutton-type"><?php  _e('Button Type',$ebsp_domain_name); ?></label></th>
            <td><select name="type" id="oscitas-pbutton-type">
                    <option value="btn-default" <?php echo $sData['type']=='btn-default'?'selected="selected"':'';?>><?php  _e('Simple',$ebsp_domain_name);  ?></option>
                    <option value="btn-primary" <?php echo $sData['type']=='btn-primary'?'selected="selected"':'';?>><?php  _e('Primary',$ebsp_domain_name);  ?></option>
                    <option value="btn-success" <?php echo $sData['type']=='btn-success'?'selected="selected"':'';?>><?php  _e('Success',$ebsp_domain_name);  ?></option>
                    <option value="btn-info" <?php echo $sData['type']=='btn-info'?'selected="selected"':'';?>><?php  _e('Information',$ebsp_domain_name);  ?></option>
                    <option value="btn-warning" <?php echo $sData['type']=='btn-warning'?'selected="selected"':'';?>><?php  _e('Warning',$ebsp_domain_name);  ?></option>
                    <option value="btn-danger" <?php echo $sData['type']=='btn-danger'?'selected="selected"':'';?>><?php  _e('Danger',$ebsp_domain_name);  ?></option>
                    <option value="btn-link" <?php echo $sData['type']=='btn-link'?'selected="selected"':'';?>><?php  _e('Link',$ebsp_domain_name);  ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose button type',$ebsp_domain_name); ?>"></span></td>

            <th><label for="oscitas-popover-button-text"><?php  _e('Button Text',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="buttontext" id="oscitas-popover-button-text" value="<?php echo $sData['buttontext'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter popover parent button text',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-popover-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><input type="text" name="class" id="oscitas-popover-class" value="<?php echo $sData['class'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>