<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-column-wrap"><?php  _e('Add Wrap',$ebsp_domain_name); ?></label></th>
            <td><input name="wrap" id="oscitas-column-wrap" type="checkbox" value="true" <?php echo isset($sData['wrap']) && $sData['wrap']=='true'?'checked="checked"':'';?>>

                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this option if you want to add wrapper div to row',$ebsp_domain_name); ?>"> </td>
        </tr>
        <tr id="osc_add_column_wrapper" style="display: none">
            <th><label for="oscitas-column-wrap_class"><?php  _e('Wrapper Class',$ebsp_domain_name); ?></label></th>
            <td><input name="wrap_class" id="oscitas-column-wrap_class" type="text" value="<?php echo $sData['wrap_class'];?>">

                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be added to wrapper div.',$ebsp_domain_name); ?>"> </td>
        </tr>
        <tr>
            <th><label for="oscitas-no-of-wpcolumns"><?php  _e('Number of columns',$ebsp_domain_name); ?></label></th>
            <td><select name="numofcolumns" id="oscitas-no-of-wpcolumns">
                    <option value="1" <?php echo $sData['numofcolumns']==1?'selected="selected"':'';?>><?php  _e('One column',$ebsp_domain_name); ?></option>
                    <option value="2" <?php echo $sData['numofcolumns']==2?'selected="selected"':'';?>><?php  _e('Two columns',$ebsp_domain_name); ?></option>
                    <option value="3" <?php echo $sData['numofcolumns']==3?'selected="selected"':'';?>><?php  _e('Three columns',$ebsp_domain_name); ?></option>
                    <option value="4" <?php echo $sData['numofcolumns']==4?'selected="selected"':'';?>><?php  _e('Four columns',$ebsp_domain_name); ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose number of columns you want to show',$ebsp_domain_name); ?>"> </td>
        </tr><?php echo $twocoloutput.$threecoloutput;?>
        <tr id="" >
            <th colspan=""><label for="append_column_table"><?php  _e('Column Specification',$ebsp_domain_name); ?></label><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Customize every column features and setting ',$ebsp_domain_name); ?>"></th><td> <span class="osc_popover" data-title="Column Abbreviations and usage" data-toggle="popover" data-contentwrapper="#column_content_desc" ><img src="<?php echo EBS_ASSET_URL.'images/info.png'?>"   /> </span><div id="column_content_desc" style="display: none">
                    <p><b>CL(Clear Left):</b> Clear left side content</p>
                    <p><b>Column:</b> From how  many grids a column is made up </p>
                    <p><b>Offset:</b> Provide the space to left side of columns</p>
                    <p> offset grid + columns grid must not exceed the total number of available grids</p>
                    <p><b>Hide:</b> Hide This column</p>
                    <p><b>Animation:</b> Choose animation to be applied on every column content</p>
                    <p><b>Class:</b> Add class to every column, By using this you can customize column css and js</p>
            </div></td>

        </tr>
        <tr >
            <td id="append_column_table" colspan="2"></td>
        </tr>
        <tr>
            <th><label for="oscitas-column-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></th>
            <td><input type="text" name="class" id="oscitas-column-class" value="<?php echo $sData['class'];?>"/>
            </td>
        </tr>
    </table>
    <div id="osc_column_headings" style="display: none">
        <div class="colname">Column <span class="colnum">1</span></div>
        <div class="head_division head_division_check"><?php  _e('CL',$ebsp_domain_name); ?></div>
        <div class="head_division"><?php  _e('Column',$ebsp_domain_name); ?></div>
        <div class="head_division"><?php  _e('Offset',$ebsp_domain_name); ?></div>
        <div class="head_division head_division_check right"><?php  _e('Hide',$ebsp_domain_name); ?></div>

    </div>
    <table  style="display: none">
        <tr id="osc_column_headings_2">
            <th><?php  _e('Screen',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('All bootstrap standard screen type you can customize your column according to screen type',$ebsp_domain_name); ?>"></th>
            <th style="min-width:50px;max-width:50px"><?php  _e('Hide Row',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this option to hide the complete row',$ebsp_domain_name); ?>"></th></tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>