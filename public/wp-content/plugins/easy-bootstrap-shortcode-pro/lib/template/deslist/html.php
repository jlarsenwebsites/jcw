<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-line"><?php  _e('No of List Item',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="item" id="oscitas-deslist-item" value="<?php echo $sData['item'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Number of items you want to show in list, enter a numeric value',$ebsp_domain_name);  ?>"></span> </td>
        </tr>
        <tr>
            <th><label for="oscitas-deslist-style"><?php  _e('List style',$ebsp_domain_name);  ?></label></th>
            <td><select name="style" id="oscitas-deslist-style">
                    <option value="" <?php echo $sData['style']==''?'selected="selected"':'';?>><?php  _e('Default',$ebsp_domain_name);  ?></option>
                    <option value="dl-horizontal" <?php echo $sData['style']=='dl-horizontal'?'selected="selected"':'';?>><?php  _e('Horizontal',$ebsp_domain_name);  ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to show vertical list or horizontal list',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-deslist-class"><?php  _e('Custom Class',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="class" id="oscitas-deslist-class" value="<?php echo $sData['class'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>