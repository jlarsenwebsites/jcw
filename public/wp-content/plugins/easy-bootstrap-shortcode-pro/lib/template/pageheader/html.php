<?php
$effectlist='';
foreach($ebs_effectlist as $k => $val){
    if($k!='none'){
        $effectlist.='<option value="'.$k.'">'.$val.'</option>';
    }
}
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="gallery-table" class="form-table">
        <tr>
            <th><label for="oscitas-pageheader-heading"><?php  _e('Heading',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><input type="text" name="heading" id="oscitas-pageheader-heading" value="<?php echo $sData['heading'];?>"/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter heading for page header',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-pageheader-headingtype"><?php  _e('Heading Type',$ebsp_domain_name); ?></label></th>
            <td><select name="headingtype" id="oscitas-pageheader-headingtype">
                    <option value="h1" <?php echo $sData['headingtype']=='h1'?'selected="selected"':''?>>H1</option>
                    <option value="h2" <?php echo $sData['headingtype']=='h2'?'selected="selected"':''?>>H2</option>
                    <option value="h3" <?php echo $sData['headingtype']=='h3'?'selected="selected"':''?>>H3</option>
                    <option value="h4" <?php echo $sData['headingtype']=='h4'?'selected="selected"':''?>>H4</option>
                    <option value="h5" <?php echo $sData['headingtype']=='h5'?'selected="selected"':''?>>H5</option>
                    <option value="h6" <?php echo $sData['headingtype']=='h6'?'selected="selected"':''?>>H6</option>
                </select>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose a heading type, this option is useful for styling of heading according to your theme',$ebsp_domain_name); ?>"></span></td>

            <th><label for="oscitas-pageheader-headcolor"><?php  _e('Heading Color',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="headcolor" id="oscitas-pageheader-headcolor" class="color" value="<?php echo $sData['headcolor'];?>" />
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose heading color',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-pageheader-fontsize"><?php  _e('Font Size',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="fontsize" id="oscitas-pageheader-fontsize" value="<?php echo $sData['fontsize'];?>" />
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter font size for heading',$ebsp_domain_name); ?>"></span></td>
            <th><label for="oscitas-pageheader-border"><?php  _e('Show Border',$ebsp_domain_name); ?></label></th>
            <td><input type="checkbox" name="border" id="oscitas-pageheader-border"  value="true" <?php echo (isset($sData['border']) && $sData['border']=='true')?'checked="checked"':'';?> />
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('check to show border at bottom of heading',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr class="show_border" style="display: none">
            <th><label for="oscitas-pageheader-bordercolor"><?php  _e('Border Color',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="bordercolor" id="oscitas-pageheader-bordercolor" class="color" value="<?php echo $sData['bordercolor'];?>" />
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose border color',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-pageheader-margin"><?php  _e('Margin',$ebsp_domain_name); ?></label></th>

            <td><input type="text" name="margin" id="oscitas-pageheader-margin" value="<?php echo $sData['margin'];?>"/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Margin for heading, give margin value like 10px 5px 5px 3px',$ebsp_domain_name); ?>"></span></td>

            <th><label for="oscitas-pageheader-padding"><?php  _e('Padding',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="padding" id="oscitas-pageheader-padding" value="<?php echo $sData['padding'];?>"/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Padding for heading, give padding value like 10px 5px 5px 3px',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-pageheader-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><input type="text" name="class" id="oscitas-pageheader-class" value="<?php echo $sData['class'];?>"/>
             <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>