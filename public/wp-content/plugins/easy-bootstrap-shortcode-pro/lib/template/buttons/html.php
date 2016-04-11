<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
        <table id="oscitas-table" class="form-table">
            <tr>
                <th><label for="oscitas-button-style"><?php  _e('Style',$ebsp_domain_name);  ?></label></th>
                <td><select name="style" id="oscitas-button-style">
                        <option value="btn-default" <?php echo $sData['style']=='btn-default'?'selected="selected"':'';?>><?php  _e('Simple',$ebsp_domain_name);  ?></option>
                        <option value="btn-primary" <?php echo $sData['style']=='btn-primary'?'selected="selected"':'';?>><?php  _e('Primary',$ebsp_domain_name);  ?></option>
                        <option value="btn-success" <?php echo $sData['style']=='btn-success'?'selected="selected"':'';?>><?php  _e('Success',$ebsp_domain_name);  ?></option>
                        <option value="btn-info" <?php echo $sData['style']=='btn-info'?'selected="selected"':'';?>><?php  _e('Information',$ebsp_domain_name);  ?></option>
                        <option value="btn-warning" <?php echo $sData['style']=='btn-warning'?'selected="selected"':'';?>><?php  _e('Warning',$ebsp_domain_name);  ?></option>
                        <option value="btn-danger" <?php echo $sData['style']=='btn-danger'?'selected="selected"':'';?>><?php  _e('Danger',$ebsp_domain_name);  ?></option>
                        <option value="btn-link" <?php echo $sData['style']=='btn-link'?'selected="selected"':'';?>><?php  _e('Link',$ebsp_domain_name);  ?></option>
                        <option value="custom" <?php echo $sData['style']=='custom'?'selected="selected"':'';?>><?php  _e('Custom',$ebsp_domain_name);  ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Specifies button style,list contains all standard bootstrap button style, can choose custom to customize button style ',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-button-size"><?php  _e('Size',$ebsp_domain_name);  ?></label></th>
                <td><select name="size" id="oscitas-button-size">
                        <option value="btn-lg" <?php echo $sData['size']=='btn-lg'?'selected="selected"':'';?>><?php  _e('Large',$ebsp_domain_name);  ?></option>
                        <option value="btn-sm" <?php echo $sData['size']=='btn-sm'?'selected="selected"':'';?>><?php  _e('Small',$ebsp_domain_name);  ?></option>
                        <option value="btn-xs" <?php echo $sData['size']=='btn-xs'?'selected="selected"':'';?>><?php  _e('Ex-small',$ebsp_domain_name);  ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose a button size',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-custom-button-style" style="display: none">
                <th><label for="oscitas-button-bgcolor"><?php  _e('Button Background Color',$ebsp_domain_name);  ?></label></th>
                <td><input type="text" name="bgcolor" id="oscitas-button-bgcolor" class="color" value="<?php echo $sData['bgcolor'];?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If you chosen custom button style, choose button background color',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-button-fgcolor"><?php  _e('Button Foreground Color',$ebsp_domain_name);  ?></label></th>
                <td><input type="text" name="fgcolor" id="oscitas-button-fgcolor" class="color" value="<?php echo $sData['fgcolor'];?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If you chosen custom button style, choose button text color',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-custom-button-style" style="display: none">
                <th><label for="oscitas-button-hoverbgcolor"><?php  _e('Button Hover Background Color',$ebsp_domain_name);  ?></label></th>
                <td><input type="text" name="hoverbgcolor" id="oscitas-button-hoverbgcolor" class="color" value="<?php echo $sData['hoverbgcolor'];?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If you chosen custom button style, choose button background color on hover',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-button-hoverfgcolor"><?php  _e('Button Hover Foreground Color',$ebsp_domain_name);  ?></label></th>
                <td><input type="text" name="hoverfgcolor" id="oscitas-button-hoverfgcolor" class="color" value="<?php echo $sData['hoverfgcolor'];?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If you chosen custom button style, choose button text color on hover',$ebsp_domain_name); ?>"></span></td>
            </tr>

            <tr>
                <th><label for="oscitas-button-type"><?php  _e('Type',$ebsp_domain_name);  ?></label></th>
                <td colspan="3"><select name="type" id="oscitas-button-type">
                        <option value="link" <?php echo $sData['type']=='link'?'selected="selected"':'';?>><?php  _e('Link',$ebsp_domain_name);  ?></option>
                        <option value="button" <?php echo $sData['type']=='button'?'selected="selected"':'';?>><?php  _e('Button',$ebsp_domain_name);  ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether button is an anchor or just html button',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-heading-icon"><?php  _e('Select Icon',$ebsp_domain_name);  ?></label></th>
                <td colspan="3"><div id="click_icon_list_button" class="oscitas-icon-div"><span id="osc_show_icon_button" class="<?php echo $sData['icon'].' '.$sData['icontype'];?>"></span><span class="show-drop"></span></div><input type="hidden" id="oscitas-button-icon" value="<?php echo $sData['icon'];?>" name="icon"><input type="hidden" id="oscitas-button-icontype" value="<?php echo $sData['icontype'];?>" name="icontype">
                    <div id="osc_show_iconlist_data" class="oscitas-icon" style="display:none;width:100%"><?php echo $icon_content;?></div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If you want to add an icon t button choose desired one',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-button-iconalign"><?php  _e('Icon Alignment',$ebsp_domain_name);  ?></label></th>
                <td><select name="iconalign" id="oscitas-button-iconalign">
                        <option value="left" <?php echo $sData['iconalign']=='left'?'selected="selected"':'';?>><?php  _e('Left',$ebsp_domain_name);  ?></option>
                        <option value="right" <?php echo $sData['iconalign']=='right'?'selected="selected"':'';?>><?php  _e('Right',$ebsp_domain_name);  ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to align icon to right or left side of text',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-button-iconcolor"><?php  _e('Icon Color',$ebsp_domain_name);  ?></label></th>
                <td><input type="text" name="iconcolor" id="oscitas-button-iconcolor" class="color" value="<?php echo $sData['iconcolor'];?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose a color for selected icon',$ebsp_domain_name); ?>"></span></td>
            </tr>


            <tr>
                <th><label for="oscitas-button-title"><?php  _e('Title',$ebsp_domain_name);  ?></label></th>
                <td><input type="text" name="title" id="oscitas-button-title" value="<?php echo $sData['title'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Button text',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-table-rows"><?php  _e('Make block',$ebsp_domain_name);  ?></label></th>
                <td>
                    <input type="checkbox" name="block" id="oscitas-button-block" value="1" <?php echo (isset($sData['block']) && $sData['block']==1)?'checked="checked"':'';?>>

                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Makes a full width button',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr id="tr-button-link">

                <th><label for="oscitas-button-link"><?php  _e('Link',$ebsp_domain_name);  ?></label></th>
                <td><input type="text" name="link" id="oscitas-button-link" value="<?php echo $sData['link'];?>" />
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If button type is an link provide the url',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-table-rows"><?php  _e('Open in new window',$ebsp_domain_name);  ?></label></th>
                <td>
                    <input type="checkbox" id="oscitas-button-target" name="new_window" value="1" <?php echo (isset($sData['new_window']) && $sData['new_window']==1)?'checked="checked"':'';?>>

                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If button type is link specifies its target',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-button-modal"><?php  _e('Modal Attribute',$ebsp_domain_name);  ?></label></th>
                <td colspan="3"><select name="modal" id="oscitas-button-modal">
                        <option value="" <?php echo $sData['modal']==''?' selected="selected"':''?>>None</option>
                        <option value="initializer" <?php echo $sData['modal']=='initializer'?' selected="selected"':''?>>Initializer</option>
                        <option value="closer" <?php echo $sData['modal']=='closer'?' selected="selected"':''?>>Closer</option>
                       </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('modal attribute for button, whether to open or close a modal on button click or do nothing',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="show_modal_initializer">
                <th><label for="oscitas-button-modal_header"><?php  _e('Show Modal Header',$ebsp_domain_name);  ?></label></th>
                <td><input type="checkbox" name="modal_header" id="oscitas-button-modal_header" value="true" <?php echo isset($sData['modal_header']) && $sData['modal_header']=='true'?' checked="checked"':'';?>/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Show modal header',$ebsp_domain_name); ?>"></span></td>
             <th><label for="oscitas-button-modal_footer"><?php  _e('Show Modal Footer',$ebsp_domain_name);  ?></label></th>
                <td><input type="checkbox" name="modal_footer" id="oscitas-button-modal_footer" value="true" <?php echo isset($sData['modal_footer']) && $sData['modal_footer']=='true'?' checked="checked"':'';?>/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Show modal Footer',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="show_modal_initializer">
                <th><label for="oscitas-button-modal_size"><?php  _e('Modal Size',$ebsp_domain_name);  ?></label></th>
                <td colspan="3"><select name="modal_size" id="oscitas-button-modal_size">
                        <option value="" <?php echo $sData['modal_size']==''?' selected="selected"':''?>>Default</option>
                        <option value="modal-lg" <?php echo $sData['modal_size']=='modal-lg'?' selected="selected"':''?>>Large</option>
                        <option value="modal-sm" <?php echo $sData['modal_size']=='modal-sm'?' selected="selected"':''?>>Small</option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('modal attribute for button, whether to open or close a modal on button click or do nothing',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-button-class"><?php  _e('Custom Class',$ebsp_domain_name);  ?></label></th>
                <td colspan="3"><input type="text" name="class" id="oscitas-button-class" value="<?php echo $sData['class']?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>