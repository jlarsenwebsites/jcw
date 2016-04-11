<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-rule-style"><?php  _e('Style',$ebsp_domain_name); ?></label></th>
            <td><select name="style" id="oscitas-rule-style">
                    <option value="rule-dotted" <?php echo $sData['style']=='rule-dotted'?'selected="selected"':'';?>><?php  _e('Dotted',$ebsp_domain_name); ?></option>
                    <option value="rule-dashed" <?php echo $sData['style']=='rule-dashed'?'selected="selected"':'';?>><?php  _e('Dashed',$ebsp_domain_name); ?></option>
                    <option value="rule-double" <?php echo $sData['style']=='rule-double'?'selected="selected"':'';?>><?php  _e('Double',$ebsp_domain_name); ?></option>
                    <option value="rule-double-thick-thin" <?php echo $sData['style']=='rule-double-thick-thin'?'selected="selected"':'';?>><?php  _e('Double Thick Thin',$ebsp_domain_name); ?></option>
                    <option value="rule-fadecorder" <?php echo $sData['style']=='rule-fadecorder'?'selected="selected"':'';?>><?php  _e('Fade Corner',$ebsp_domain_name); ?></option>
                    <option value="rule-double-fadecorder" <?php echo $sData['style']=='rule-double-fadecorder'?'selected="selected"':'';?>><?php  _e('Double Fade Corner',$ebsp_domain_name); ?></option>
                    <option value="rule-shadow" <?php echo $sData['style']=='rule-shadow'?'selected="selected"':'';?>><?php  _e('Shadow',$ebsp_domain_name); ?></option>
                    <option value="rule-diagonal" <?php echo $sData['style']=='rule-diagonal'?'selected="selected"':'';?>><?php  _e('Diagonal',$ebsp_domain_name); ?></option>
                    <option value="rule-wave" <?php echo $sData['style']=='rule-wave'?'selected="selected"':'';?>><?php  _e('Wave',$ebsp_domain_name); ?></option>
                    <option value="rule-thick" <?php echo $sData['style']=='rule-thick'?'selected="selected"':'';?>><?php  _e('Thick',$ebsp_domain_name); ?></option>
                    <option value="rule-thin" <?php echo $sData['style']=='rule-thin'?'selected="selected"':'';?>><?php  _e('Thin',$ebsp_domain_name); ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Chose horizontal rule style',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-rule-margin"><?php  _e('Margin',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="margin" id="oscitas-rule-margin" value="<?php echo $sData['margin'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('margin for rule from top and bottom, Enter a numeric value Ex. 20',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-rule-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-rule-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>