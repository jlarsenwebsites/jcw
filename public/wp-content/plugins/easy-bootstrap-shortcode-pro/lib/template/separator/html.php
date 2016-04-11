<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-separator-content"><?php  _e('Separator Content',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="content" id="oscitas-separator-content" value="<?php echo $sData['content'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter separator content',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-separator-style"><?php  _e('Separator Style',$ebsp_domain_name); ?></label></th>
            <td><select name="style" id="oscitas-separator-style">
                    <option value="" <?php echo $sData['style']==''?'selected="selected"':'';?>><?php  _e('None',$ebsp_domain_name); ?></option>
                    <option value="separator-dotted" <?php echo $sData['style']=='separator-dotted'?'selected="selected"':'';?>><?php  _e('Dotted',$ebsp_domain_name); ?></option>
                    <option value="separator-dashed" <?php echo $sData['style']=='separator-dashed'?'selected="selected"':'';?>><?php  _e('Dashed',$ebsp_domain_name); ?></option>
                    <option value="separator-double" <?php echo $sData['style']=='separator-double'?'selected="selected"':'';?>><?php  _e('Double',$ebsp_domain_name); ?></option>
                    <option value="separator-double-thick-thin" <?php echo $sData['style']=='separator-double-thick-thin'?'selected="selected"':'';?>><?php  _e('Double Thick Thin',$ebsp_domain_name); ?></option>
                    <option value="separator-diagonal" <?php echo $sData['style']=='separator-diagonal'?'selected="selected"':'';?>><?php  _e('Diagonal',$ebsp_domain_name); ?></option>
                    <option value="separator-wave" <?php echo $sData['style']=='separator-wave'?'selected="selected"':'';?>><?php  _e('Wave',$ebsp_domain_name); ?></option>
                    <option value="separator-thick" <?php echo $sData['style']=='separator-thick'?'selected="selected"':'';?>><?php  _e('Thick',$ebsp_domain_name); ?></option>
                    <option value="separator-thin" <?php echo $sData['style']=='separator-thin'?'selected="selected"':'';?>><?php  _e('Thin',$ebsp_domain_name); ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose separator style',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-separator-margin"><?php  _e('Margin',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="margin" id="oscitas-separator-margin" value="<?php echo $sData['margin'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Margin for separator from top and bottom, Enter a numeric value Ex. 20',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-separator-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-separator-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>