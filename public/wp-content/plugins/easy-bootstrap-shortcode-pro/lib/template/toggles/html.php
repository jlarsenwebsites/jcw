<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
        <table id="oscitas-table" class="form-table" style="margin-top: 0px;">
            <tr>
                <th><label for="oscitas-toggles-class"><?php  _e('Open Close Icon',$ebsp_domain_name); ?></label></th>
                <td><input type="checkbox" name="opencloseicon" id="oscitas-toggles-opencloseicon" value="true" <?php echo isset($sData['opencloseicon']) && $sData['opencloseicon']=='true'?'checked="checked"':'';?>/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this option if you want to show arrows which change their direction according to toggle active status',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-toggles-class"><?php  _e('Open first Toggle',$ebsp_domain_name); ?></label></th>
                <td><input type="checkbox" name="openfirst" id="oscitas-toggles-openfirst" value="true" <?php echo isset($sData['openfirst']) && $sData['openfirst']=='true'?'checked="checked"':'';?>/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Show first toggle opened',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th  class="main_dp_th"><label for="oscitas-line"><?php  _e('Toggle Items',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><a class="pull-right" id="osc_add_new_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon glyphicon-plus-sign"></i> <?php  _e('Add New Item',$ebsp_domain_name); ?></a></td>
           </tr>
                <tr>
                <td colspan="4">   <div id="osc_show_iconlist_togglestitle" title="Choose Icon" class="oscitas-icon" style="display:none;width:100%"><h2><?php _e('Choose Icon',$ebsp_domain_name);?></h2>
                        <span class="hide_icon_div pull-right"><i class="fa fa-times"></i></span> <?php echo $icon_content_title; ?></div>
                    <div id="oscitas-table-inner">
                        <table class="multiple-colm_tbl tb_multiple_column">
                            <thead>
                            <tr>
                                <th class="width200"><?php  _e('Title',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Title of toggle',$ebsp_domain_name); ?>"></span></th>
                                <th class="width200 toggle_custom_icon"><?php  _e('Icon',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon which will be displayed with toggle title',$ebsp_domain_name); ?>"></span></th>
                                <th class="width300 toggle_custom_icon"><?php  _e('Icon Color',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('choose icon color',$ebsp_domain_name); ?>"></span></th>
                                <th class="width100"><?php  _e('Option',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('remove unwanted toggle items',$ebsp_domain_name); ?>"></span></th>
                            </tr>
                            </thead>
                            <tbody id="oscitas-append-toggleitem">
                            <?php  $btnAttr=$sData['toggle'];
foreach( $btnAttr as $key => $btnVal){
                            ?>
                            <tr class="osc_dropdown_list_item">
                                <td  class="width200"><input type="text" name="toggle[<?php echo $key;?>][title]" class="oscitas-itemtoggle-title" value="<?php echo $btnVal['title'] ?>"/></td>
                                <td class="width200 toggle_custom_icon"><div class="oscitas-icon-div oscitas-itemtoggle-showicon"><span class="oscitas-itemtoggle-iconpreview <?php echo $btnVal['icontype'] ?> <?php echo $btnVal['icon'] ?>"></span><span class="show-drop"></span></div><input type="hidden" class="oscitas-itemtoggle-icon" name="toggle[<?php echo $key;?>][icon]" value="<?php echo $btnVal['icon'] ?>">
                                    <input type="hidden" class="oscitas-itemtoggle-icontype" name="toggle[<?php echo $key;?>][icontype]" value="<?php echo $btnVal['icontype'] ?>">
                                </td>
                                <td class="width300 toggle_custom_icon">
                                    <input type="text" name="toggle[<?php echo $key;?>][iconcolor]" class="oscitas-itemtoggle-iconcolor color" data-default-color="" value="<?php echo $btnVal['iconcolor'] ?>"/>
                                </td>
                                <td  class="width100"><?php if($key>0){
                                        echo '<a class="osc_remove_element osc_remove_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a>';
                                    }?></td>
                            </tr>
    <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <th><label for="oscitas-toggles-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" name="class" id="oscitas-toggles-class" value="<?php echo $sData['class'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>