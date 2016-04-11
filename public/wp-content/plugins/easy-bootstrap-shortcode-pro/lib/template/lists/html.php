<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-list-type"><?php  _e('Lists style',$ebsp_domain_name); ?></label></th>
            <td><select name="type" id="oscitas-list-type">
                    <option value="" <?php echo $sData['type']==''?'selected="selected"':'';?>><?php  _e('None',$ebsp_domain_name); ?></option>
                    <option value="glyphicon-arrow-right" <?php echo $sData['type']=='glyphicon-arrow-right'?'selected="selected"':'';?>><?php  _e('Arrow',$ebsp_domain_name); ?></option>
                    <option value="glyphicon-ok" <?php echo $sData['type']=='glyphicon-ok'?'selected="selected"':'';?>><?php  _e('Check',$ebsp_domain_name); ?></option>
                    <option value="glyphicon-plus" <?php echo $sData['type']=='glyphicon-plus'?'selected="selected"':'';?>><?php  _e('Plus',$ebsp_domain_name); ?></option>
                    <option value="glyphicon-minus" <?php echo $sData['type']=='glyphicon-minus'?'selected="selected"':'';?>><?php  _e('Minus',$ebsp_domain_name); ?></option>
                    <option value="custom" <?php echo $sData['type']=='custom'?'selected="selected"':'';?>><?php  _e('Custom',$ebsp_domain_name); ?></option>
                </select>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('There some predefined list style, made up with the help of icons, if you want to add custom icon choose custom option',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr class="osc_list_icon" style="display: none">
            <th><label for="oscitas-heading-icon"><?php  _e('Select Icon',$ebsp_domain_name); ?></label></th>
            <td><div id="click_icon_list_icon" class="oscitas-icon-div"><span id="osc_show_icon_icon" class="<?php echo $sData['icon'];?> <?php echo $sData['icontype'];?>"></span><span class="show-drop"></span></div><input type="hidden" id="oscitas-icon-icon" name="icon" value="<?php echo $sData['icon'];?>"><input type="hidden" id="oscitas-icon-icontype" name="icontype" value="<?php echo $sData['icontype'];?>">
                <div id="osc_show_iconlist_data" class="oscitas-icon" style="display:none;width:100%"><?php echo $icon_content;?></div>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('To make custom list style choose an icon for list',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr class="osc_list_icon" style="display: none">
            <th><label for="oscitas-icon-iconcolor"><?php  _e('Icon Color',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="iconcolor" id="oscitas-list-iconcolor" class="color" value="<?php echo $sData['iconcolor'];?>" data-default-color=""/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon color for associated list icons',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-line"><?php  _e('No of List Item',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="item" id="oscitas-list-item" value="<?php echo $sData['item'];?>"/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Number of list items, enter a numeric value',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-list-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-list-class" value="<?php echo $sData['class'];?>"/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>