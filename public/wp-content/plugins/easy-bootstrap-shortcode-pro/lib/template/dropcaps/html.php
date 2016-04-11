<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-dropcap-style"><?php  _e('Dropcap Style',$ebsp_domain_name);  ?></label></th>
            <td><select name="style" id="oscitas-dropcap-style">
                    <option value="dropcap-standard" <?php echo $sData['style']=='dropcap-standard'?'selected="selected"':'';?>><?php  _e('Standard',$ebsp_domain_name);  ?></option>
                    <option value="dropcap-circle" <?php echo $sData['style']=='dropcap-circle'?'selected="selected"':'';?>><?php  _e('Circle',$ebsp_domain_name);  ?></option>
                    <option value="dropcap-box" <?php echo $sData['style']=='dropcap-box'?'selected="selected"':'';?>><?php  _e('Box',$ebsp_domain_name);  ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose a dropcap style',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-dropcap-content"><?php  _e('Dropcap Content',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="content" id="oscitas-dropcap-content" value="<?php echo $sData['content'];?>"/><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter a letter you want to highlight',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr id="nodropcapbg">
            <th><label for="oscitas-dropcap-bg"><?php  _e('Background Color',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="bg" id="oscitas-dropcap-bg" class="color" value="<?php echo $sData['bg'];?>" data-default-color="#F9F9F9"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose background color for dropcap',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr >
            <th><label for="oscitas-dropcap-color"><?php  _e('Dropcap Color',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="color" id="oscitas-dropcap-color" class="color" value="<?php echo $sData['color'];?>" data-default-color="#000000"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose dropcap text color',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-dropcap-class"><?php  _e('Custom Class',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="class" id="oscitas-dropcap-class" value="<?php echo $sData['class'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>