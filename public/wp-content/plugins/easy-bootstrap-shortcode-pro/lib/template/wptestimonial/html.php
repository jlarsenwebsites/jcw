<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-wptestimonial"><?php  _e('No. of Testimonials',$ebsp_domain_name); ?></label></th>
            <td><input type="text" id="oscitas-wptestimonial" name="project_num" value="<?php echo $sData['project_num'];?>" />
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide number of testimonials you want to show, enter a numeric value',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-wptestimonial-excerpt"><?php  _e('Content length',$ebsp_domain_name); ?></label></th>
            <td><input type="text" id="oscitas-wptestimonial-excerpt" name="project_excerpt" value="<?php echo $sData['project_excerpt'];?>" />
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Define no of words to be shown, Enter a numeric value.',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-wptestimonial-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-wptestimonial-class" value="<?php echo $sData['class'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>