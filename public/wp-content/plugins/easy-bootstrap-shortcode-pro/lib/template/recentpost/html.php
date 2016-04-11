<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-recentpost-post"><?php  _e('No. of Posts',$ebsp_domain_name); ?></label></th>
            <td><input type="text" id="oscitas-recentpost-post" name="post_num" value="<?php echo $sData['post_num'];?>" /><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter number of postd to be shown, enter a numeric value',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-recentpost-layout"><?php  _e('Layout',$ebsp_domain_name); ?></label></th>
            <td><select id="oscitas-recentpost-layout" name="layout" >
                    <option value="col-4" <?php echo $sData['layout']=='col-4'?'selected="selected"':'';?>><?php  _e('4 Column',$ebsp_domain_name); ?></option>
                    <option value="col-3" <?php echo $sData['layout']=='col-3'?'selected="selected"':'';?>><?php  _e('3 Column',$ebsp_domain_name); ?></option>
                    <option value="col-2" <?php echo $sData['layout']=='col-2'?'selected="selected"':'';?>><?php  _e('2 Column',$ebsp_domain_name); ?></option>
                </select><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Select column layout for post',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-recentpost-excerpt"><?php  _e('Content length',$ebsp_domain_name); ?></label></th>
            <td><input type="text" id="oscitas-recentpost-excerpt" name="post_excerpt" value="<?php echo $sData['post_excerpt'];?>" /><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Define no of words to be shown in post content, Enter a numeric value',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-recentpost-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-recentpost-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>