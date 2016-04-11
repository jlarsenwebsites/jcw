<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">

        <tr>
            <th><label for="oscitas-jumbotron-bgcolor"><?php  _e('Background Color',$ebsp_domain_name); ?></label></th>
            <td><input type="text" class="color" name="bgcolor" id="oscitas-jumbotron-bgcolor" value="<?php echo $sData['bgcolor'];?>">
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide jumbotron background color',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-jumbotron-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-jumbotron-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>