<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
        <table id="oscitas-table" class="form-table">
            <tr>
                <th class="main_dp_th"><label for="oscitas-dropdown-heading" ><?php  _e('Dropdown Button Features',$ebsp_domain_name);  ?></label></th>
            </tr>
            <tr>
                <td colspan="6">
                    <div id="oscitas-table-inner">
                        <table class="multiple-colm_tbl tb_multiple_column_upper">
                            <thead>
                            <tr><th class="width200"><?php  _e('Text',$ebsp_domain_name);  ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter text for dropdown button',$ebsp_domain_name); ?>"></span></th>
                                <th class="width200"><?php  _e('Size',$ebsp_domain_name);  ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose dropdown button size among standard bootsrap button sizes',$ebsp_domain_name); ?>"></span></th>
                                <th class="width200"><?php  _e('Style',$ebsp_domain_name);  ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose dropdown button style among standard bootsrap button sizes',$ebsp_domain_name); ?>"></span></th>
                                <th class="width200"><?php  _e('Split',$ebsp_domain_name);  ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this checkbox if you want a split button',$ebsp_domain_name); ?>"></span></th>
                                <th class="width200"><?php  _e('Dropup',$ebsp_domain_name);  ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('specifies position of dropdown items on button click',$ebsp_domain_name); ?>"></span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="width200"><input type="text" name="heading" id="oscitas-dropdown-heading" value="<?php echo $sData['heading']?>"/>
                                </td>
                                <td class="width200"><select name="type" id="oscitas-dropdown-size">
                                        <option value="" <?php echo $sData['type']==''?'selected="selected"':'';?>><?php  _e('Default',$ebsp_domain_name);  ?></option>
                                        <option value="btn-lg" <?php echo $sData['type']=='btn-lg'?'selected="selected"':'';?>><?php  _e('Large',$ebsp_domain_name);  ?></option>
                                        <option value="btn-sm" <?php echo $sData['type']=='btn-sm'?'selected="selected"':'';?>><?php  _e('Small',$ebsp_domain_name);  ?></option>
                                        <option value="btn-xs" <?php echo $sData['type']=='btn-xs'?'selected="selected"':'';?>><?php  _e('Ex-small',$ebsp_domain_name);  ?></option>
                                    </select>
                                </td>
                                <td class="width200"><select name="style" id="oscitas-dropdown-style">
                                        <option value="btn-default" <?php echo $sData['style']=='btn-default'?'selected="selected"':'';?>><?php  _e('Simple',$ebsp_domain_name);  ?></option>
                                        <option value="btn-primary" <?php echo $sData['style']=='btn-primary'?'selected="selected"':'';?>><?php  _e('Primary',$ebsp_domain_name);  ?></option>
                                        <option value="btn-success" <?php echo $sData['style']=='btn-success'?'selected="selected"':'';?>><?php  _e('Success',$ebsp_domain_name);  ?></option>
                                        <option value="btn-info" <?php echo $sData['style']=='btn-info'?'selected="selected"':'';?>><?php  _e('Information',$ebsp_domain_name);  ?></option>
                                        <option value="btn-warning" <?php echo $sData['style']=='btn-warning'?'selected="selected"':'';?>><?php  _e('Warning',$ebsp_domain_name);  ?></option>
                                        <option value="btn-danger" <?php echo $sData['style']=='btn-danger'?'selected="selected"':'';?>><?php  _e('Danger',$ebsp_domain_name);  ?></option>
                                        <option value="btn-link" <?php echo $sData['style']=='btn-link'?'selected="selected"':'';?>><?php  _e('Link',$ebsp_domain_name);  ?></option>
                                    </select>
                                </td>
                                <td class="width200"><input type="checkbox" name="split" id="oscitas-dropdown-split" value="split" <?php echo isset($sData['split']) && $sData['split']=='split'?'checked="checked"':'';?>/></td>
                                <td class="width200"><select name="dropup" id="oscitas-dropdown-dropup">
                                        <option value="dropdown" <?php echo $sData['dropup']=='dropdown'?'selected="selected"':'';?>><?php  _e('Drop Down',$ebsp_domain_name);  ?></option>
                                        <option value="dropup" <?php echo $sData['dropup']=='dropup'?'selected="selected"':'';?>><?php  _e('Drop Up',$ebsp_domain_name);  ?></option>
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="main_dp_th"><label for="oscitas-line"><?php  _e('Dropdown Items',$ebsp_domain_name);  ?></label></th>
                <td colspan="5"><a class="pull-right" id="osc_add_new_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon glyphicon-plus-sign"></i> <?php  _e('Add New Item',$ebsp_domain_name);  ?></a></td>
            </tr>
            <tr>
                <td colspan="6">
                    <div id="oscitas-table-inner">
                        <table class="multiple-colm_tbl tb_multiple_column">
                            <thead>
                            <tr><th class="width200"><?php  _e('Type',$ebsp_domain_name);  ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether the item will be a menu item or a divider',$ebsp_domain_name); ?>"></span></th>
                                <th class="width200"><?php  _e('Link',$ebsp_domain_name);  ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If item is a menu item provide a urlfor item',$ebsp_domain_name); ?>"></span></th>
                                <th class="width200"><?php  _e('Title',$ebsp_domain_name);  ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Title of the item',$ebsp_domain_name); ?>"></span></th>
                                <th class="width200"><?php  _e('Disabled',$ebsp_domain_name);  ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to make link disabled',$ebsp_domain_name); ?>"></span></th>
                                <th><?php  _e('Option',$ebsp_domain_name);  ?><span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Remove unwanted menu dropdown items',$ebsp_domain_name); ?>"></span></th>
                            </tr>
                            </thead>
                            <?php $btnAttr=$sData['dropdown'];?>
                            <tbody id="oscitas-append-dropdownitem">

                            <?php foreach( $btnAttr as $key => $btnVal){
                                $colspan='';$styleTd='';$changeClass='';$colClass='';
                                if($btnVal['type']=='divider'){
                                    $colspan=' colspan="4"';
                                    $styleTd=' style="display:none;"';
                                }
                                if($key>0){
                                    $changeClass=' osc_type_change';
                                    $colClass=' osc_hide';
                                }
                                ?>
                                <tr class="osc_dropdown_list_item">
                                    <td class="width200<?php echo $changeClass;?>" <?php echo $colspan;?>>
                                        <?php if($key>0){?>
                                            <select name="dropdown[<?php echo $key;?>][type]"  class="oscitas-dropdownitem-type"><option value="menuitem" <?php echo $btnVal['type']=='menuitem'?'selected="selected"':''; ?>><?php  _e('Menu Item',$ebsp_domain_name);  ?></option><option value="divider" <?php echo $btnVal['type']=='divider'?'selected="selected"':''; ?>><?php  _e('Divider',$ebsp_domain_name);  ?></option></select>
                                        <?php } else{ ?>
                                            <input type="hidden"  name="dropdown[<?php echo $key;?>][type]" class="oscitas-dropdownitem-type" value="<?php echo $btnVal['type'];?>"><span><?php  _e('Menu Item',$ebsp_domain_name);  ?></span>
                                        <?php } ?>
                                    </td>
                                    <td class="width200<?php echo $colClass;?>" <?php echo $styleTd;?>><input type="text" name="dropdown[<?php echo $key;?>][link]" class="oscitas-dropdownitem-link" value="<?php echo $btnVal['link'];?>"/></td>
                                    <td class="width200<?php echo $colClass;?>" <?php echo $styleTd;?>><input type="text" name="dropdown[<?php echo $key;?>][title]" class="oscitas-dropdownitem-title" value="<?php echo $btnVal['title'];?>"/>
                                    </td>
                                    <td class="width200<?php echo $colClass;?>" <?php echo $styleTd;?>><input type="checkbox" name="dropdown[<?php echo $key;?>][disabled]" class="oscitas-dropdownitem-disabled" value="disabled" <?php echo isset($btnVal['disabled']) && $btnVal['disabled']=='disabled'?'checked="checked"':'' ;?>/></td>
                                    <td><?php if($key>0){
                                            echo '<a class="osc_remove_element osc_remove_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a>';
                                        } ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <th><label for="oscitas-dropdown-class"><?php  _e('Custom Class',$ebsp_domain_name);  ?></label></th>
                <td colspan="2"><input type="text" name="class" id="oscitas-dropdown-class" value="<?php echo $sData['class'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span> </td>
            </tr>
        </table>
        <table id="" style="display: none">
            <tbody id="dropdown_item_clone">
            <tr class="osc_dropdown_list_item"><td class="osc_type_change"><select name="dropdown-item-type[]"  class="oscitas-dropdownitem-type"><option value="menuitem"><?php  _e('Menu Item',$ebsp_domain_name);  ?></option><option value="divider"><?php  _e('Divider',$ebsp_domain_name);  ?></option></select></td><td class="osc_hide"><input type="text" name="dropdown-item-link[]" class="oscitas-dropdownitem-link" value="#"/></td><td class="osc_hide"><input type="text" name="dropdown-item-title[]" class="oscitas-dropdownitem-title" value="Dropdown Item"/></td><td class="osc_hide"><input type="checkbox" name="dropdown-item-disabled[]" class="oscitas-dropdownitem-disabled" value="disabled"/></td><td><a class="osc_remove_element osc_remove_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a></td></tr>
            </tbody>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php
$return_ebs=ob_get_clean();
