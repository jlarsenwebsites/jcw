<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <th><label for="oscitas-label-content"><?php  _e('Upload Image',$ebsp_domain_name); ?></label></th>
        <td id="osc_thumbnail_upload"><input id="oscitas-thumbnail-src" type="text" name="source"  value="<?php echo $sData['source'];?>" />
            <input id="_btn" class="upload_image_button" type="button" value="Upload Image" />
        <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Upload an image by using wordpress media uploader',$ebsp_domain_name); ?>"></span>
            <?php if(!empty($sData['source'])){
                echo "<img src='{$sData['source']}' alt='{$sData['alt']}'>";
            }?>
        </td>
        </tr>
        <tr>
            <th><label for="oscitas-thumbnail-link"><?php  _e('Link',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="link" id="oscitas-thumbnail-link" value="<?php echo $sData['link'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a link where you want to redirect on image click or leave it empty',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-thumbnail-border"><?php  _e('Show Border',$ebsp_domain_name); ?></label></th>
            <td><input type="checkbox" name="border" id="oscitas-thumbnail-border" value="1" <?php echo isset($sData['border']) && $sData['border']==1?'checked="checked"':'';?>/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this option if you want to show image border',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-thumbnail-alt"><?php  _e('Alt Tag',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="alt" id="oscitas-thumbnail-alt" value="<?php echo $sData['alt'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide image alt tag',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-thumbnail-rainyeffect"><?php  _e('Add Rainy Effect',$ebsp_domain_name); ?></label></th>
            <td><input type="checkbox" name="rainyeffect" id="oscitas-thumbnail-rainyeffect" value="true" <?php echo isset($sData['rainyeffect']) && $sData['rainyeffect']=='true'?'checked="checked"':'';?>/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Add Rainy Effect to image',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr class="ebs_rainy_effect_dependent">
            <th><label for="oscitas-thumbnail-drops"><?php  _e('Number Of Drops',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="drops" id="oscitas-thumbnail-drops" value="<?php echo $sData['drops']?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Number of drops, Provide a positive integer',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-thumbnail-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-thumbnail-class" value="<?php $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php
$return_ebs=ob_get_clean();
?>