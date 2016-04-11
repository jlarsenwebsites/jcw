<?php
$num_pt_table;
$ptcols='';
for($i=1;$i<=$column_number;$i++){
    $selected=$sData['num_ptcolumns']==$i?'selected="selected"':'';
    $ptcols.='<option value="'.$i.'" '.$selected.'>'.ucfirst(ebs_convert_number_to_words($i)).'</option>';
}
$num_pt_table_box=$ptcols;
$num_pt_table_circle='<option value="1" '.($sData['num_ptcolumns']==1?'selected="selected"':'').'>'. __('One',$ebsp_domain_name).'</option><option value="2" '.($sData['num_ptcolumns']==2?'selected="selected"':'').'>'.  __('Two',$ebsp_domain_name).'</option><option value="3" '.($sData['num_ptcolumns']==3?'selected="selected"':'').'>'. __('Three',$ebsp_domain_name).'</option><option value="4" '.($sData['num_ptcolumns']==4?'selected="selected"':'').'>'. __('Four',$ebsp_domain_name).'</option>';
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">


        <table id="oscitas-table" class="form-table">
            <tr>
                <th><label for="oscitas-pricing-table-type"><?php  _e('Type',$ebsp_domain_name); ?></label></th>
                <td class="oscitas-carousel-style" colspan="5"><input type="radio" name="pt_type" id="oscitas-pricing-table-type_box" value="box" <?php echo isset($sData['pt_type']) && $sData['pt_type']=='box'?'checked="checked"':'';?> class="pt_type"/><label for="oscitas-pricing-table-type_box" ><?php  _e('Vertical Box',$ebsp_domain_name); ?></label>
                    <input type="radio" name="pt_type" id="oscitas-pricing-table-type_circle" value="circle" <?php echo isset($sData['pt_type']) && $sData['pt_type']=='circle'?'checked="checked"':'';?> class="pt_type"/><label for="oscitas-pricing-table-type_circle" ><?php  _e('Circle',$ebsp_domain_name); ?></label>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose whether to make a box shaped or circle shaped pricing table.',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="ptcolumns_type">
                <th><label for="oscitas-no-of-ptcolumns"><?php  _e('Column Type',$ebsp_domain_name); ?></label></th>
                <td colspan="5"><select name="coltype" id="oscitas-pricing-table-coltype">
                        <option value="multicol" <?php echo $sData['coltype']=='multicol'?'selected="selected"':'';?>><?php  _e('Multi Column',$ebsp_domain_name); ?></option>
                        <option value="singlecol" <?php echo $sData['coltype']=='singlecol'?'selected="selected"':'';?>><?php  _e('Single Column',$ebsp_domain_name); ?></option></select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Single column for adjoining pricing table w/o  space and multi column for pricing table based on  bootstrap column structure',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-no-of-ptcolumns"><?php  _e('Currency',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="currency" id="oscitas-pricing-table-currency" value="<?php echo $sData['currency'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter currency symbol or text for that',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-no-of-ptcolumns"><?php  _e('Number of Pricing Tables',$ebsp_domain_name); ?></label></th>
                <td><select name="num_ptcolumns" id="oscitas-no-of-ptcolumns"><?php if(isset($sData['pt_type']) && $sData['pt_type']=='circle'){
                            echo $num_pt_table_circle;

                        } else{
                            echo $num_pt_table_box;
                        } ?>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose number of pricing table to show from available options',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-pricing-table-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="class" id="oscitas-pricing-table-class" value="<?php echo $sData['class']; ?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
            </tr>

            <tr>
                <td id="" colspan="6">
                    <div id="ebs_pt_accordion">
                        <h3><?php  _e('Global Color Settings',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('These setting to apply common color setting on all pricing tables',$ebsp_domain_name); ?>"></span>
                        <i class="fa fa-angle-down pull-right" style="font-size: 18px; margin: 0;"></i></h3>
                        <div id="insert_common_color"></div>
                    </div>
                </td>
            </tr>
            <tr><th colspan="6">
                    <label><?php  _e('Pricing Table Settings',$ebsp_domain_name); ?></label>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Here you customize pricing table, provide value pricing table features, overwrite color setting for specific pricing table and manage layout(column) for prcing tables according to screen size',$ebsp_domain_name); ?>"></span></th></tr>
            <tr >

                    <td colspan="6"> <div id="insert_pt_spec" class="insert_pt_spec-outer"></div></td>

            </tr>

        </table>
        <div id="num_pt_table_box" style="display: none"><?php echo $num_pt_table_box; ?></div>

        <div id="num_pt_table_circle" style="display: none"><?php echo $num_pt_table_circle; ?></div>


        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>