<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="gallery-table" class="form-table">
        <tr>
            <th><label for="oscitas-heading-icon"><?php  _e('Select Icon',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><div id="click_icon_list" class="oscitas-icon-div"><span id="osc_show_icon" class="<?php echo $sData['icontype'];?> <?php echo $sData['icon'];?>"></span><span class="show-drop" ></span></div><input type="hidden" id="oscitas-iconhead-icon" name="icon" value="<?php echo $sData['icon'];?>"><input type="hidden" id="oscitas-iconhead-icontype" name="icontype" value="<?php echo $sData['icontype'];?>">
                <div id="osc_show_iconlist" class="oscitas-icon" style="display:none;width:100%"><?php echo $icon_content;?></div>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon for icon heading',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-iconhead-iconcolor"><?php  _e('Icon Color',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><input type="text" name="iconcolor" id="oscitas-iconhead-iconcolor" class="color" value="<?php echo $sData['iconcolor'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon color for icon heading',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-iconhead-headingtype"><?php  _e('Heading Type',$ebsp_domain_name); ?></label></th>
            <td><select name="headingtype" id="oscitas-iconhead-headingtype">
                    <option value="h1" <?php echo $sData['headingtype']=='h1'?'selected="selected"':''?>>H1</option>
                    <option value="h2" <?php echo $sData['headingtype']=='h2'?'selected="selected"':''?>>H2</option>
                    <option value="h3" <?php echo $sData['headingtype']=='h3'?'selected="selected"':''?>>H3</option>
                    <option value="h4" <?php echo $sData['headingtype']=='h4'?'selected="selected"':''?>>H4</option>
                    <option value="h5" <?php echo $sData['headingtype']=='h5'?'selected="selected"':''?>>H5</option>
                    <option value="h6" <?php echo $sData['headingtype']=='h6'?'selected="selected"':''?>>H6</option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose an heading type',$ebsp_domain_name); ?>"></span></td>

            <th><label for="oscitas-iconhead-heading"><?php  _e('Heading',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="heading" id="oscitas-iconhead-heading" value="<?php echo $sData['heading'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter heading',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-iconhead-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><input type="text" name="class" id="oscitas-iconhead-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>