<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr><th><label for="oscitas-label-content"><?php  _e('Upload Image',$ebsp_domain_name); ?></label></th>
            <td id="osc_image_upload"><input id="oscitas-image-src" type="text" name="src"  value="<?php echo $sData['src'];?>" />
                <input id="_btn" class="upload_image_button" type="button" value="Upload Image" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Click this button and upload image using wordpress media uploader',$ebsp_domain_name); ?>"></span>
            <?php if(!empty($sData['src'])){
                echo "<img src='{$sData['src']}' alt='Image'>";
            }?>
            </td>
        </tr>
        <tr>
            <th><label for="oscitas-image-shape"><?php  _e('Image Shape',$ebsp_domain_name); ?></label></th>
            <td><select name="shape" id="oscitas-image-shape">
                    <option value="img-rounded" <?php echo $sData['shape']=='img-rounded'?'selected="selected"':'';?>><?php  _e('Rounded',$ebsp_domain_name); ?></option>
                    <option value="img-circle" <?php echo $sData['shape']=='img-circle'?'selected="selected"':'';?>><?php  _e('Circle',$ebsp_domain_name); ?></option>
                    <option value="img-thumbnail" <?php echo $sData['shape']=='img-thumbnail'?'selected="selected"':'';?>><?php  _e('Thumbnail',$ebsp_domain_name); ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose one image shape among bootstrap standard image shapes',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-image-alt"><?php  _e('Alt Tag',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="alt" id="oscitas-image-alt" value="<?php echo $sData['alt'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide image alt tag',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-image-rainyeffect"><?php  _e('Add Rainy Effect',$ebsp_domain_name); ?></label></th>
            <td><input type="checkbox" name="rainyeffect" id="oscitas-image-rainyeffect" value="true" <?php echo isset($sData['rainyeffect']) && $sData['rainyeffect']=='true'?'checked="checked"':'';?>/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Add Rainy Effect to image',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr class="ebs_rainy_effect_dependent">
            <th><label for="oscitas-image-drops"><?php  _e('Number Of Drops',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="drops" id="oscitas-image-drops" value="<?php echo $sData['drops']?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Number of drops, Provide a positive integer',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-image-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-image-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>