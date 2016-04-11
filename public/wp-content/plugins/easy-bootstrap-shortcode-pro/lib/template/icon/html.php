<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
        <table id="oscitas-table" class="form-table">
            <tr>
                <th><label for="oscitas-heading-icon"><?php  _e('Select Icon',$ebsp_domain_name);  ?></label></th>
                <td><div id="click_icon_list_icon" class="oscitas-icon-div"><span id="osc_show_icon_icon" class="<?php echo $sData['icontype'];?> <?php echo $sData['icon'];?>"></span><span class="show-drop"></span></div>
                    <input type="hidden" id="oscitas-icon-icon" name="icon"  value="<?php echo $sData['icon'];?>">
                    <input type="hidden" id="oscitas-icon-icontype" name="icontype"  value="<?php echo $sData['icontype'];?>">
                    <div id="osc_show_iconlist_data" class="oscitas-icon" style="display:none;width:100%"><?php echo $icon_content;?></div>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose one icon from list of icons',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-icon-iconcolor"><?php  _e('Icon Color',$ebsp_domain_name);  ?></label></th>
                <td><input type="text" name="iconcolor" id="oscitas-icon-iconcolor" class="color" value="<?php echo $sData['iconcolor'];?>" />
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon color',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-icon-fontsize"><?php  _e('Icon Font Size',$ebsp_domain_name);  ?></label></th>
                <td><input type="text" name="fontsize" id="oscitas-icon-fontsize" value="<?php echo $sData['fontsize'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Font size of icon in pixels, enter a numeric value',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-icon-class"><?php  _e('Custom Class',$ebsp_domain_name);  ?></label></th>
                <td><input type="text" name="class" id="oscitas-icon-class" value="<?php echo $sData['class'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>