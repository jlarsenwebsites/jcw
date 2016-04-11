<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-table-width"><?php  _e('Table Width',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="width" id="oscitas-table-width" value="<?php echo $sData['width'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide table width ex. 80% or 400px',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-table-columns"><?php  _e('Columns',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="columns" id="oscitas-table-columns" value="<?php echo $sData['columns'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Number of table columns, enter a numeric value',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-table-rows"><?php  _e('Rows',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="rows" id="oscitas-table-rows" value="<?php echo $sData['rows'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Number of table rows, enter a numeric value',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-table-rows"><?php  _e('Table style',$ebsp_domain_name); ?></label></th>
            <td>
                <select name="tablestyle" id="oscitas-table-style">
                    <option value="" <?php echo $sData['tablestyle']==''?'selected="selected"':'';?>><?php  _e('Simple',$ebsp_domain_name); ?></option>
                    <option value="table-striped" <?php echo $sData['tablestyle']=='table-striped'?'selected="selected"':'';?>><?php  _e('Striped',$ebsp_domain_name); ?></option>
                    <option value="table-bordered" <?php echo $sData['tablestyle']=='table-bordered'?'selected="selected"':'';?>><?php  _e('Bordered',$ebsp_domain_name); ?></option>
                    <option value="table-striped table-bordered" <?php echo $sData['tablestyle']=='table-striped table-bordered'?'selected="selected"':'';?>><?php  _e('Striped + Bordered',$ebsp_domain_name); ?></option>
                </select>
                
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose  a table style among standard bootstrap table styles',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-table-rows"><?php  _e('Show hover effect',$ebsp_domain_name); ?></label></th>
            <td>
                <input type="checkbox" name="hover" id="oscitas-table-hover" value="table-hover" <?php echo (isset($sData['hover']) && $sData['hover']=='table-hover')?'checked="checked"':'';?>>
                
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Show hover effect n table',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-table-rows"><?php  _e('Responsive',$ebsp_domain_name); ?></label></th>
            <td>
                <input type="checkbox" name="responsive" id="oscitas-table-scroll" value="table-responsive" <?php echo (isset($sData['responsive']) && $sData['responsive']=='table-responsive')?'checked="checked"':'';?>>
                
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this option to make table responsive ',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-table-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-table-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('message',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>