<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
        <table id="oscitas-table" class="form-table">
            <tr>
                <th><label for="oscitas-progressbar-type"><?php  _e('Progress Bar Type',$ebsp_domain_name); ?></label></th>
                <td colspan="3">
                    <input type="radio" name="ebsp_pb_type" id="oscitas-progressbar-type-default" value="default" <?php check_ebs_checked($sData,'ebsp_pb_type','default');?> class="define_pb_type" ><label for="oscitas-progressbar-type-default"  ><?php  _e('Default',$ebsp_domain_name); ?></label>
                    <input type="radio" name="ebsp_pb_type" id="oscitas-progressbar-type-custom" value="custom" <?php check_ebs_checked($sData,'ebsp_pb_type','custom');?> class="define_pb_type" ><label for="oscitas-progressbar-type-custom" ><?php  _e('Circular',$ebsp_domain_name); ?></label>
                    <input type="radio" name="ebsp_pb_type" id="oscitas-progressbar-type-custom-linear" value="linear" <?php check_ebs_checked($sData,'ebsp_pb_type','linear');?> class="define_pb_type" ><label for="oscitas-progressbar-type-custom-linear" ><?php  _e('Linear',$ebsp_domain_name); ?></label>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('To add bootstrap default linear progress bar choose default and to make custom bar choose circular  or linear progress bar.',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-default">
                <th><label for="oscitas-progressbar-style"><?php  _e('Progress Bar Style',$ebsp_domain_name); ?></label></th>
                <td><select name="type" id="oscitas-progressbar-style">
                        <option value="" <?php check_ebs_selected($sData['type'],'');?>><?php  _e('Default',$ebsp_domain_name); ?></option>
                        <option value="progress-bar-success" <?php check_ebs_selected($sData['type'],'progress-bar-success');?>><?php  _e('Success',$ebsp_domain_name); ?></option>
                        <option value="progress-bar-info" <?php check_ebs_selected($sData['type'],'progress-bar-info');?>><?php  _e('Information',$ebsp_domain_name); ?></option>
                        <option value="progress-bar-warning" <?php check_ebs_selected($sData['type'],'progress-bar-warning');?>><?php  _e('Warning',$ebsp_domain_name); ?></option>
                        <option value="progress-bar-danger" <?php check_ebs_selected($sData['type'],'progress-bar-danger');?>><?php  _e('Danger',$ebsp_domain_name); ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose progress bar style among default bootstrap progress bar styles',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr  class="oscitas-progressbar-type-custom">
                <th><label for="oscitas-progressbar-circletype"><?php  _e('Circle Style',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><select name="bar_circle" id="oscitas-progressbar-circletype">
                        <option value="full" <?php check_ebs_selected($sData['bar_circle'],'full');?>><?php  _e('Full',$ebsp_domain_name); ?></option>
                        <option value="half" <?php check_ebs_selected($sData['bar_circle'],'half');?>><?php  _e('Half',$ebsp_domain_name); ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose circle shape for progress bar',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-custom">
                <th><label for="oscitas-progressbar-barcolor"><?php  _e('Bar Color',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="barcolor" id="oscitas-progressbar-barcolor" class="color" value="<?php echo $sData['barcolor'];?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose progress bar color',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-progressbar-bgcolor"><?php  _e('Background Color',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="bgcolor" id="oscitas-progressbar-bgcolor" class="color" value="<?php  echo $sData['bgcolor'];?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose background color for progress bar',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-custom">
                <th><label for="oscitas-progressbar-fillcolor"><?php  _e('Fill Color',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="fillcolor" id="oscitas-progressbar-fillcolor" class="color" value="<?php echo $sData['fillcolor'];?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose circle background color',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-progressbar-fontcolor"><?php  _e('Font Color',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="fontcolor" id="oscitas-progressbar-fontcolor" class="color" value="<?php echo $sData['fontcolor'];?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose text color for progress bar',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr  class="oscitas-progressbar-type-custom">
                <th><label for="oscitas-progressbar-size"><?php  _e('Dimension Size',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" class="slider_input" name="size" id="oscitas-progressbar-size" value="<?php echo $sData['size'];?>"/>
                    <div class="slider_render" id="progress_bar_render_size"></div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose circle size for progress bar',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr  class="oscitas-progressbar-type-custom">
                <th><label for="oscitas-progressbar-fontsize"><?php  _e('Font Size',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" class="slider_input" name="fontsize" id="oscitas-progressbar-fontsize" value="<?php echo $sData['fontsize']?>"/>
                    <div class="slider_render" id="progress_bar_render_fontsize"></div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose font size for progress bar content',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr  class="oscitas-progressbar-type-custom">
                <th><label for="oscitas-progressbar-pbwidth"><?php  _e('Progress bar width',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" class="slider_input" name="pbwidth" id="oscitas-progressbar-pbwidth" value="<?php echo $sData['pbwidth']?>"/>
                    <div class="slider_render" id="progress_bar_render_pbwidth"></div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose progress bar width',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr  class="oscitas-progressbar-type-custom">
                <th><label for="oscitas-progressbar-border"><?php  _e('Progress bar Border Style',$ebsp_domain_name); ?></label></th>
                <td><select name="border" id="oscitas-progressbar-border">
                        <option value="" <?php check_ebs_selected($sData['border'],'');?>><?php  _e('None',$ebsp_domain_name); ?></option>
                        <option value="inline" <?php check_ebs_selected($sData['border'],'inline');?>><?php  _e('Inline',$ebsp_domain_name); ?></option>
                        <option value="outline" <?php check_ebs_selected($sData['border'],'outline');?>><?php  _e('Outline',$ebsp_domain_name); ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose border style for progress bar',$ebsp_domain_name); ?>"></span></td>

                <th><label><?php  _e('Progress Bar Animation',$ebsp_domain_name); ?></label></th>
                <td>
                    <input type="checkbox" name="ebsp_pb_animation" id="oscitas-progressbar-animation-true" value="true" data-attr="animation" checked="checked" <?php check_ebs_checked($sData,'ebsp_pb_animation','true')?>><label for="oscitas-progressbar-animation-true" ><?php  _e('Animated Progress Bar',$ebsp_domain_name); ?></label>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to show animated progress bar',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-custom oscitas-progressbar-type-default">
                <th><label for="oscitas-progressbar-label"><?php  _e('Progressbar Label',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" name="label" id="oscitas-progressbar-label" value="<?php echo $sData['label']?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Text for progress bar',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr  class="oscitas-progressbar-type-default">
                <th><label for="oscitas-progressbar-circletype"><?php  _e('Label Style',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><select name="label_style" id="oscitas-progressbar-label_style">
                        <option value="outside" <?php check_ebs_selected($sData['label_style'],'outside');?>><?php  _e('Outside',$ebsp_domain_name); ?></option>
                        <option value="inside" <?php check_ebs_selected($sData['label_style'],'inside');?>><?php  _e('Inside',$ebsp_domain_name); ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose circle shape for progress bar',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-custom">
                <th><label for="oscitas-heading-icon"><?php  _e('Progress bar  Icon',$ebsp_domain_name); ?></label></th>
                <td><div id="click_icon_list" class="oscitas-icon-div"><span id="osc_show_icon" class="<?php echo $sData['icon']?>"></span><span class="show-drop"></span></div><input type="hidden" name="icon" id="oscitas-progressbar-icon" value="<?php echo $sData['icon']?>">
                    <div id="osc_show_iconlist" class="oscitas-icon" style="display:none;width:100%"><?php echo $icon_content; ?></div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose Icon for progress bar',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-progressbar-iconcolor"><?php  _e('Icon Color',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="iconcolor" id="oscitas-progressbar-iconcolor" class="color" value="<?php echo $sData['iconcolor']?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon color',$ebsp_domain_name); ?>"></span></td>

            </tr>
            <tr  class="oscitas-progressbar-type-custom">
                <th><label for="oscitas-progressbar-iconsize"><?php  _e('Icon Size',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" class="slider_input" name="iconsize" id="oscitas-progressbar-iconsize" value="<?php echo $sData['iconsize']?>"/>
                    <div class="slider_render" id="progress_bar_render_iconsize"></div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide Icon size ',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-linear">
                <th><label for="oscitas-progressbar-lin_bartype"><?php  _e('Bar Type',$ebsp_domain_name); ?></label></th>

                <td>
                    <input type="hidden" name="lin_bartype" id="oscitas-progressbar-lin_bartype" value="<?php echo $sData['lin_bartype']?>">
                    <div id="display_bar_type">
                        <div class="content"><img src="<?php echo EBS_ASSET_URL.'images/bar_'.$sData['lin_bartype'].'.png'?>"> </div>
                        <span class="dropdown"></span>
                    </div>
                    <div id="show_bar_list" style="display: none">
                        <ul id="ebs_progress_bar_list">
                            <li data-val="type_1"><img src="<?php echo EBS_ASSET_URL.'images/bar_type_1.png'?>"></li>
                            <li data-val="type_2"><img src="<?php echo EBS_ASSET_URL.'images/bar_type_2.png'?>"></li>
                            <li data-val="type_3"><img src="<?php echo EBS_ASSET_URL.'images/bar_type_3.png'?>"></li>
                            <li data-val="type_4"><img src="<?php echo EBS_ASSET_URL.'images/bar_type_4.png'?>"></li>
                            <li data-val="type_5"><img src="<?php echo EBS_ASSET_URL.'images/bar_type_5.png'?>"></li>
                        </ul>
                    </div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Type of linear progress bar, deign of all progress bar can be seen in dropdown choose any one by clicking on it ',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-linear">
                <th><label for="oscitas-progressbar-lin_max"><?php  _e('Maximum Value',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="lin_max" id="oscitas-progressbar-lin_max"  value="<?php echo $sData['lin_max']?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Maximum value of progress bar, enter a numeric value',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-progressbar-lin_increment"><?php  _e('Increment',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="lin_increment" id="oscitas-progressbar-lin_increment" value="<?php echo $sData['lin_increment']?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Increment in the progress bar during animation, enter a numeric value',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-linear">

                <th><label for="oscitas-progressbar-lin_value"><?php  _e('Progress value',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="lin_value" id="oscitas-progressbar-lin_value"  value="<?php echo $sData['lin_value']?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Actual progress value, it must be less than or equal to maximum value of progress bar',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-progressbar-lin_fillcolor1"><?php  _e('Fill Color',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="lin_fillcolor1" id="oscitas-progressbar-lin_fillcolor1" class="color" value="<?php echo $sData['lin_fillcolor1']?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Color of progress bar',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-linear fill_color_2">
                <th><label for="oscitas-progressbar-lin_fillcolor2"><?php  _e('Fill Color 2',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" name="lin_fillcolor2" id="oscitas-progressbar-lin_fillcolor2" class="color" value="<?php echo $sData['lin_fillcolor2']?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Second gradient color of progress bar, it provide you gradient background for progress bar',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-linear">
                <th><label for="oscitas-progressbar-lin_remaincolor"><?php  _e('Remaining Bar Color',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="lin_remaincolor" id="oscitas-progressbar-lin_remaincolor" class="color" value="<?php echo $sData['lin_remaincolor']?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Color of unfilled progress bar',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-progressbar-lin_fontcolor"><?php  _e('Font Color',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="lin_fontcolor" id="oscitas-progressbar-lin_fontcolor" class="color" value="<?php echo $sData['lin_fontcolor']?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Color of progress value',$ebsp_domain_name); ?>"></span></td>
            </tr>

            <tr class="oscitas-progressbar-type-linear">
                <th><label for="oscitas-progressbar-lin_percent"><?php  _e('Show Percent',$ebsp_domain_name); ?></label></th>
                <td><input type="checkbox" name="lin_percent" id="oscitas-progressbar-lin_percent"  value="true" <?php check_ebs_checked($sData,'lin_percent','true')?> />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this option if you to show progress percentage instead of progress value',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-progressbar-lin_offset"><?php  _e('Show Offset',$ebsp_domain_name); ?></label></th>
                <td><input type="checkbox" name="lin_offset" id="oscitas-progressbar-lin_offset" value="true" <?php check_ebs_checked($sData,'lin_offset','true')?>/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this option if you want to show minimum and maximum value',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-linear lin_offset">
                <th><label for="oscitas-progressbar-lin_offsetcolor"><?php  _e('Offset Color',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" name="lin_offsetcolor" id="oscitas-progressbar-lin_offsetcolor" class="color" value="<?php echo $sData['lin_offsetcolor']?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Color of offset values',$ebsp_domain_name); ?>"></span></td>
            </tr>


            <tr class="oscitas-progressbar-type-custom oscitas-progressbar-type-default">
                <th><label for="oscitas-progressbar-value"><?php  _e('Progress Value',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" class="slider_input" name="value" id="oscitas-progressbar-value" value="<?php echo $sData['value']?>"/>
                    <div class="slider_render" id="progress_bar_render_value"></div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter the progress value',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-progressbar-type-default">
                <th><label for="oscitas-progressbar-stripped"><?php  _e('Stripped Progress Bar',$ebsp_domain_name); ?></label></th>
                <td colspan="3">
                    <input type="checkbox" id="oscitas-progressbar-stripped" name="stripped" value="true" <?php check_ebs_checked($sData,'stripped','true')?>>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to show strips in progress bar',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr id="osc_progress_animate" style="display: none;">
                <th><label for="oscitas-progressbar-animated"><?php  _e('Animated Progress Bar',$ebsp_domain_name); ?></label></th>
                <td colspan="3">
                    <input type="checkbox" id="oscitas-progressbar-animated" name="animated" value="true" <?php check_ebs_checked($sData,'animated','true')?>>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to animate progress bar stripes',$ebsp_domain_name); ?>"></span></td>
            </tr>

            <tr>
                <th><label for="oscitas-progressbar-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" name="class" id="oscitas-progressbar-class" value="<?php echo $sData['class']?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>