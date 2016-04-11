<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>

    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
        <table id="oscitas-table" class="form-table" style="margin-top: 0px;">
            <tr>
                <th><label for="oscitas-tabs-responsive"><?php  _e('Make Tab Responsive',$ebsp_domain_name); ?></label></th>
                <td colspan="3">
                    <input type="checkbox" id="oscitas-tabs-responsive" name="responsive" data-name="oscitas-tabs-responsive" value="true" <?php echo isset($sData['responsive']) && $sData['responsive']=='true'?'checked="checked"':'';?> >
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this checkbox if you  want responsive tabs',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-tabs-responsive" style="display: none">
                <th><label for="oscitas-tabs-position"><?php  _e('Show Tabs Position',$ebsp_domain_name); ?></label></th>
                <td><select name="position" id="oscitas-tabs-position">
                        <option value="" <?php echo $sData['position']==''?'selected="selected"':'';?>><?php  _e('Top',$ebsp_domain_name); ?></option>
                        <option value="tabs-below" <?php echo $sData['position']=='tabs-below'?'selected="selected"':'';?>><?php  _e('Bottom',$ebsp_domain_name); ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to show tabs at bottom or top of content',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-tabs-pills"><?php  _e('Tabs With Pills',$ebsp_domain_name); ?></label></th>
                <td>
                    <input type="checkbox" id="oscitas-tabs-pills" name="pills" value="true" <?php echo isset($sData['pills']) && $sData['pills']=='true'?'checked="checked"':'';?>>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this checkbox to show selector on selected tab',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-tabs-responsive"  style="display: none">
                <th><label for="oscitas-tabs-icon"><?php  _e('Use Icon',$ebsp_domain_name); ?></label></th>
                <td>
                    <div id="click_icon_list_tabs" class="oscitas-icon-div"><span id="osc_show_icon_tabs" class="<?php echo $sData['icon'];?> <?php echo $sData['icontype'];?>"></span><span class="show-drop"></span></div><input type="hidden" id="oscitas-tabs-icon" name="icon" value="<?php echo $sData['icon'];?>"><input type="hidden" id="oscitas-tabs-icontype" name="icontype" value="<?php echo $sData['icontype'];?>">
                    <div id="osc_show_iconlist_tabs" class="oscitas-icon" style="display:none;width:100%"><?php echo $icon_content;?></div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('chosse an icon you want to show on tab button dropdown',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-tabs-text"><?php  _e('Drop Down Text',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="title" id="oscitas-tabs-text" value="<?php echo $sData['title'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Write text to be shown on button dropdown',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="oscitas-tabs-responsive"  style="display: none">
                <th ><label for="oscitas-tabs-icon"><?php  _e('Type of responsive tabs',$ebsp_domain_name); ?></label></th><td colspan="3"><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('When tabs exceeds than container width to make them responsive either you want to change them into accordion or want to show a button dropdown you can choose one of these option according to your window size',$ebsp_domain_name); ?>"></td>
            </tr>
            <tr class="oscitas-tabs-responsive"  style="display: none">
                <td colspan="4">

                    <table class="common_color_setting">
                        <thead><tr>
                            <th><?php  _e('Type',$ebsp_domain_name); ?></span></th>
                            <th><?php  _e('Large Screen',$ebsp_domain_name); ?></th>
                            <th><?php  _e('Medium Screen',$ebsp_domain_name); ?></th>
                            <th><?php  _e('Small Screen',$ebsp_domain_name); ?></th>
                            <th><?php  _e('Ex. Small Screen',$ebsp_domain_name); ?></th>
                        </tr></thead>
                        <tbody>
                        <tr>
                            <td><?php  _e('More Button',$ebsp_domain_name); ?></td>
                            <td><input type="radio" name="tabtypelg" id="oscitas-tabs-tabtype-lg_more" value="more" <?php echo isset($sData['tabtypelg']) && $sData['tabtypelg']=='more'?'checked="checked"':'';?>></td>
                            <td><input type="radio" name="tabtypemd" id="oscitas-tabs-tabtype-md_more" value="more" <?php echo isset($sData['tabtypemd']) && $sData['tabtypemd']=='more'?'checked="checked"':'';?>></td>
                            <td><input type="radio" name="tabtypesm" id="oscitas-tabs-tabtype-sm_more" value="more" <?php echo isset($sData['tabtypesm']) && $sData['tabtypesm']=='more'?'checked="checked"':'';?>></td>
                            <td><input type="radio" name="tabtypexs" id="oscitas-tabs-tabtype-xs_more" value="more" <?php echo isset($sData['tabtypexs']) && $sData['tabtypexs']=='more'?'checked="checked"':'';?>></td>
                        </tr>
                        <tr>
                            <td><?php  _e('Accordion',$ebsp_domain_name); ?></td>
                            <td><input type="radio" name="tabtypelg" id="oscitas-tabs-tabtype-lg_accordion" value="accordion" <?php echo isset($sData['tabtypelg']) && $sData['tabtypelg']=='accordion'?'checked="checked"':'';?>></td>
                            <td><input type="radio" name="tabtypemd" id="oscitas-tabs-tabtype-md_accordion" value="accordion" <?php echo isset($sData['tabtypemd']) && $sData['tabtypemd']=='accordion'?'checked="checked"':'';?>></td>
                            <td><input type="radio" name="tabtypesm" id="oscitas-tabs-tabtype-sm_accordion" value="accordion" <?php echo isset($sData['tabtypesm']) && $sData['tabtypesm']=='accordion'?'checked="checked"':'';?>></td>
                            <td <?php echo isset($sData['tabtypexs']) && $sData['tabtypexs']=='accordion'?'checked="checked"':'';?>><input type="radio" name="tabtypexs" id="oscitas-tabs-tabtype-xs_accordion" value="accordion"></td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div id="ebs_pt_accordion">
                        <h3><?php  _e('Tab  Color Settings',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose color settings to customize tab color',$ebsp_domain_name); ?>"></span>
                            <i class="fa fa-angle-down pull-right" style="font-size: 18px; margin: 0;"></i></h3>
                        <div class="tabs_color_setting">
                            <table style="width: 100%">
                                <tr>
                                    <th>Tab Color</th><td><input type="text" class="color" data-default-color="" value="<?php echo $sData['tabcolor'];?>" name="tabcolor" id="oscitas-tabs-tabcolor"/></td>
                                    <th>Tab Heading Color</th><td><input type="text" class="color" data-default-color="" value="<?php echo $sData['tabhcolor'];?>" name="tabhcolor" id="oscitas-tabs-tabhcolor"/></td>
                               <th>Tab Content Color</th><td><input type="text" class="color" data-default-color=""  value="<?php echo $sData['tabconcolor'];?>" name="tabconcolor" id="oscitas-tabs-tabconcolor"/></td>
                                </tr>
                                <tr>
                                    <th>Active Tab Color</th><td><input type="text" class="color" data-default-color=""  value="<?php echo $sData['atabcolor'];?>" name="atabcolor" id="oscitas-tabs-atabcolor"/></td>
                                    <th>Active Tab Heading Color</th>
                                    <td><input type="text" class="color" data-default-color=""  value="<?php echo $sData['atabhcolor'];?>" name="atabhcolor" id="oscitas-tabs-atabhcolor"/></td>
                                    <th>Tab Content BG Color</th><td><input type="text" class="color" data-default-color=""  value="<?php echo $sData['tabconbgcolor'];?>" name="tabconbgcolor" id="oscitas-tabs-tabconbgcolor"/></td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="main_dp_th"><label for="oscitas-line"><?php  _e('Dropdown Items',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><a class="pull-right" id="osc_add_new_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon glyphicon-plus-sign"></i> <?php  _e('Add New Item',$ebsp_domain_name); ?></a></td>
            </tr>
            <tr>
                <td colspan="4">   <div id="osc_show_iconlist_tabstitle" title="<?php  _e('Choose Icon',$ebsp_domain_name); ?>" class="oscitas-icon" style="display:none;width:100%"><h2><?php _e('Choose Icon',$ebsp_domain_name);?></h2>
                        <span class="hide_icon_div pull-right"><i class="fa fa-times"></i></span> <?php echo $icon_content_title;?></div>
                    <div id="oscitas-table-inner">
                        <table class="multiple-colm_tbl tb_multiple_column">
                            <thead>
                            <tr>
                                <th class="width200"><?php  _e('Title',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Title of tab',$ebsp_domain_name); ?>"></span></th>
                                <th class="width200"><?php  _e('Icon',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('icon for tab to be shown with tab title',$ebsp_domain_name); ?>"></span></th>
                                <th class="width300"><?php  _e('Icon Color',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('select icon color',$ebsp_domain_name); ?>"></span></th>
                                <th class="width150"><?php  _e('Active',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose a tab which you want to keep opened on load',$ebsp_domain_name); ?>"></span></th>
                                <th><?php  _e('Option',$ebsp_domain_name); ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('remove unwanted tabs',$ebsp_domain_name); ?>"></span></th>
                            </tr>
                            </thead>
                            <tbody id="oscitas-append-tabitem">
                            <div class="sc_dropdown_icon_list">
<?php  $btnAttr=$sData['tab'];
foreach( $btnAttr as $key => $btnVal){
    ?>
                                <tr class="osc_dropdown_list_item">
                                    <td class="width200"><input type="text" name="tab[<?php echo $key;?>][title]" class="oscitas-itemtab-title" value="<?php echo $btnVal['title'] ?>"/>
                                    </td>
                                    <td class="width200"><div class="oscitas-icon-div oscitas-itemtab-showicon"><span class="oscitas-itemtab-iconpreview <?php echo $btnVal['icontype'] ?> <?php echo $btnVal['icon'] ?>"></span><span class="show-drop"></span></div><input type="hidden" class="oscitas-itemtab-icon" name="tab[<?php echo $key;?>][icon]" value="<?php echo $btnVal['icon'] ?>"><input type="hidden" class="oscitas-itemtab-icontype" name="tab[<?php echo $key;?>][icontype]" value="<?php echo $btnVal['icontype'] ?>"></td>
                                    <td class="width300"><input type="text" name="tab[<?php echo $key;?>][iconcolor]"  class="oscitas-itemtab-iconcolor color" value="<?php echo $btnVal['iconcolor'] ?>" data-default-color="" /></td>
                                    <td class="width150"><input type="radio" name="activetab" class="oscitas-itemtab-active" value="<?php echo $key;?>" <?php echo $sData['activetab']==$key?'checked="checked"':'';?>/></td><td><?php if($key>0){
                                            echo '<a class="osc_remove_element osc_remove_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a>';
                                        }?></td>
                                </tr>
    <?php } ?>
                            </div>

                            </tbody>

                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <th><label for="oscitas-tabs-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" name="class" id="oscitas-tabs-class" value="<?php echo $sData['class'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>