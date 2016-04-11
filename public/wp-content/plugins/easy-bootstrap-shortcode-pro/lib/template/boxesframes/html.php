<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="gallery-shadow"><?php _e('Shadow Type',$ebsp_domain_name);  ?></label></th>
            <td><select name="shadow" id="gallery-shadow">
                    <option value=""><?php _e('None',$ebsp_domain_name);  ?></option>
                    <option value="left-perspective" <?php echo $sData['shadow']=='left-perspective'?'selected="selected"':'';?>><?php _e('Left Perspective',$ebsp_domain_name);  ?></option>
                    <option value="right-perspective" <?php echo $sData['shadow']=='everytime'?'selected="selected"':'';?>><?php _e('Right Perspective',$ebsp_domain_name);  ?></option>
                    <option value="two-side-perspective" <?php echo $sData['shadow']=='two-side-perspective'?'selected="selected"':'';?>><?php _e('Two Side Perspective',$ebsp_domain_name);  ?></option>
                    <option value="left-lifted-corner" <?php echo $sData['shadow']=='left-lifted-corner'?'selected="selected"':'';?>><?php _e('Left Lifted Corner',$ebsp_domain_name);  ?></option>
                    <option value="right-lifted-corner" <?php echo $sData['shadow']=='right-lifted-corner'?'selected="selected"':'';?>><?php _e('Right Lifted Corner',$ebsp_domain_name);  ?></option>
                    <option value="both-lifted-corner" <?php echo $sData['shadow']=='both-lifted-corner'?'selected="selected"':'';?>><?php _e('Both Lifted Corner',$ebsp_domain_name);  ?></option>
                    <option value="raised-box" <?php echo $sData['shadow']=='raised-box'?'selected="selected"':'';?>><?php _e('Raised Box',$ebsp_domain_name);  ?></option>
                    <option value="vertical-curves" <?php echo $sData['shadow']=='vertical-curves'?'selected="selected"':'';?>><?php _e('Vertical Curves',$ebsp_domain_name);  ?></option>
                    <option value="single-horizontal-curves" <?php echo $sData['shadow']=='single-horizontal-curve'?'selected="selected"':'';?>><?php _e('Single Horizontal Curves',$ebsp_domain_name);  ?></option>
                    <option value="horizontal-curves" <?php echo $sData['shadow']=='horizontal-curves'?'selected="selected"':'';?>><?php _e('Horizontal Curves',$ebsp_domain_name);  ?></option>
                </select>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('To make your boxframe more attractive choose a shadow type',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="gallery-bgcolor"><?php _e('Background Color',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="bgcolor" class="gallerycolor" id="gallery-bgcolor" value="<?php echo $sData['bgcolor'];?>" />
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Specifies background color of the box',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
            <th><label for="gallery-fgcolor"><?php _e('Font Color',$ebsp_domain_name);  ?>:</label></th>
            <td><input type="text" name="fgcolor" class="gallerycolor" id="gallery-fgcolor" value="<?php echo $sData['fgcolor'];?>" />
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Specifies text color in the box',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-boxframe-class"><?php _e('Custom Class',$ebsp_domain_name);  ?>:</label></th>
            <td><input type="text" name="class" id="oscitas-boxframe-class" value="<?php echo $sData['class'];?>"/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span>
            </td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>