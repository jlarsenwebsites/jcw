<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="gallery-table" class="form-table">
        <tr >
            <th><label for="oscitas-highlights-type"><?php  _e('Highlight Type',$ebsp_domain_name);  ?></label></th>
            <td><select name="type" id="oscitas-highlights-type">
                    <option value="existing" <?php echo $sData['type']=='existing'?'selected="selected"':'';?>><?php  _e('Use Existing Highlights',$ebsp_domain_name);  ?></option>
                    <option value="custom" <?php echo $sData['type']=='custom'?'selected="selected"':'';?>><?php  _e('Make Custom Highlight',$ebsp_domain_name);  ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('EBS provide inbuilt highlight you can make custom highlight too, choose desired option',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr class="osc-hl-existing osc-hl-class">
            <th><label for="oscitas-highlights-hightlight"><?php  _e('Highlights',$ebsp_domain_name);  ?></label></th>
            <td><select name="hightlight" id="oscitas-highlights-hightlight">
                    <option value="yellow" <?php echo $sData['hightlight']=='yellow'?'selected="selected"':'';?>><?php  _e('Yellow',$ebsp_domain_name);  ?></option>
                    <option value="blue" <?php echo $sData['hightlight']=='blue'?'selected="selected"':'';?>><?php  _e('Blue',$ebsp_domain_name);  ?></option>
                    <option value="red" <?php echo $sData['hightlight']=='red'?'selected="selected"':'';?>><?php  _e('Red',$ebsp_domain_name);  ?></option>
                    <option value="green" <?php echo $sData['hightlight']=='green'?'selected="selected"':'';?>><?php  _e('Green',$ebsp_domain_name);  ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('These are existing highlights',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr class="osc-hl-custom osc-hl-class">
            <th><label for="oscitas-highlights-bg"><?php  _e('Highlight Background',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="bg" id="oscitas-highlights-bg" class="color"  value="<?php echo $sData['bg'];?>" data-default-color="#F9F9F9"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If you want to make custom highlight, choose background color for the content',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr class="osc-hl-custom osc-hl-class">
            <th><label for="oscitas-highlights-color"><?php  _e('Highlight Color',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="color" id="oscitas-highlights-color" class="color" value="<?php echo $sData['color'];?>" data-default-color="#000000"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If you want to make custom highlight, choose text color for the content',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-highlights-class"><?php  _e('Custom Class',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="class" id="oscitas-highlights-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>