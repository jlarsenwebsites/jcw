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
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-recentwork-project"><?php  _e('No. of Projects',$ebsp_domain_name); ?></label></th>
            <td><input type="text" id="oscitas-recentwork-project" name="project_num" value="<?php echo $sData['project_num'];?>" /><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter number of project to be shown, enter a numeric value',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-recentwork-layout"><?php  _e('Layout',$ebsp_domain_name); ?></label></th>
            <td><select id="oscitas-recentwork-layout" name="layout" >
                    <option value="col-4" <?php echo $sData['layout']=='col-4'?'selected="selected"':'';?>><?php  _e('4 Column',$ebsp_domain_name); ?></option>
                    <option value="col-3" <?php echo $sData['layout']=='col-3'?'selected="selected"':'';?>><?php  _e('3 Column',$ebsp_domain_name); ?></option>
                    <option value="col-2" <?php echo $sData['layout']=='col-2'?'selected="selected"':'';?>><?php  _e('2 Column',$ebsp_domain_name); ?></option>
                </select><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Select column layout for projects',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-recentwork-excerpt"><?php  _e('Content length',$ebsp_domain_name); ?></label></th>
            <td><input type="text" id="oscitas-recentwork-excerpt" name="project_excerpt" value="<?php echo $sData['project_excerpt'];?>" /><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Define no of words to be shown, Enter a numeric value',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-recentwork-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-recentwork-class" value="<?php echo $sData['class'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>