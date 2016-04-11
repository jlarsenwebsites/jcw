<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
        <table id="oscitas-table" class="form-table">
            <tr>
                <th class="main_dp_th"><label for="oscitas-btngrp-heading" ><?php  _e('Button Group Features',$ebsp_domain_name);  ?></label></th>
                <td>
                    <table class="tb_multiple_column_upper">



                        <tbody>
                        <tr>
                            <th><?php  _e('Size',$ebsp_domain_name);  ?> <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Specifies size of buttons in button grp you can choose any one of standard bootstrap sizes',$ebsp_domain_name); ?>"></span> </th>
                            <td><select name="type" id="oscitas-btngrp-size">
                                    <option value="" <?php echo $sData['type']==''?'selected="selected"':'';?>><?php  _e('Default',$ebsp_domain_name);  ?></option>
                                    <option value="btn-lg" <?php echo $sData['type']=='btn-lg'?'selected="selected"':'';?>><?php  _e('Large',$ebsp_domain_name);  ?></option>
                                    <option value="btn-sm" <?php echo $sData['type']=='btn-sm'?'selected="selected"':'';?>><?php  _e('Small',$ebsp_domain_name);  ?></option>
                                    <option value="btn-xs" <?php echo $sData['type']=='btn-xs'?'selected="selected"':'';?>><?php  _e('Ex-small',$ebsp_domain_name);  ?></option>
                                </select>
                            </td>
                            <th><?php  _e('Style',$ebsp_domain_name);  ?> <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Weather to show vertical, horizontal or justified button group',$ebsp_domain_name); ?>"></span> </th>
                            <td>
                                <select name="style" id="oscitas-btngrp-style">
                                    <option value="" <?php echo $sData['style']==''?'selected="selected"':'';?>><?php  _e('Default',$ebsp_domain_name);  ?></option>
                                    <option value="vertical" <?php echo $sData['style']=='vertical'?'selected="selected"':'';?>><?php  _e('Vertical',$ebsp_domain_name);  ?></option>
                                    <option value="justified" <?php echo $sData['style']=='justified'?'selected="selected"':'';?>><?php  _e('Justified',$ebsp_domain_name);  ?></option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <th colspan="1" class="main_dp_th"><label for="oscitas-line"><?php  _e('Button Group Items',$ebsp_domain_name);  ?></label></th>
                <td colspan="1">
                    <a id="osc_add_new_dditem" class="pull-right" href="javascript:;" style="text-decoration:none;"><i class="glyphicon glyphicon-plus-sign"></i> <?php  _e('Add New Item',$ebsp_domain_name);  ?></a> <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Here you can add multiple buttons to button group by using \' Add new item Button\'',$ebsp_domain_name); ?>"></span>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <div id="oscitas-table-inner">
                        <table class="multiple-colm_tbl tb_multiple_column ">
                            <thead>
                            <tr>
                                <th class="width175"><?php  _e('Style',$ebsp_domain_name);  ?> <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Chosse a button style from standard bootstrap button styles',$ebsp_domain_name); ?>"></span> </th>
                                <th class="width175"><?php  _e('Type',$ebsp_domain_name);  ?> <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Specifies button type whether link or button',$ebsp_domain_name); ?>"></span> </th>
                                <th class="width175"><?php  _e('Link',$ebsp_domain_name);  ?> <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If button type is link, provide url for link \'href\' attribute',$ebsp_domain_name); ?>"></span> </th>
                                <th class="width175"><?php  _e('Open in New Window',$ebsp_domain_name);  ?> <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If button type is link, it specifies button target',$ebsp_domain_name); ?>"></span> </th>
                                <th class="width175"><?php  _e('Title',$ebsp_domain_name);  ?> <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Specifies button or link text',$ebsp_domain_name); ?>"></span> </th>
                                <th><?php  _e('Option',$ebsp_domain_name);  ?> <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Click this option to remove button from button group',$ebsp_domain_name); ?>"></span> </th>
                            </tr>
                            </thead>
                            <?php $btnAttr=$sData['btngrp'];?>
                            <tbody id="oscitas-append-btngrpitem">
                            <?php foreach( $btnAttr as $key => $btnVal){ ?>
                                <tr class="osc_btngrp_list_item">
                                    <td class="width175">
                                        <select name="btngrp[<?php echo $key;?>][type]" class="oscitas-btngrpitem-style">
                                            <option value="btn-default" <?php echo $btnVal['type']=='btn-default'?'selected="selected"':'';?>><?php  _e('Simple',$ebsp_domain_name);  ?></option>
                                            <option value="btn-primary" <?php echo $btnVal['type']=='btn-primary'?'selected="selected"':'';?>><?php  _e('Primary',$ebsp_domain_name);  ?></option>

                                            <option value="btn-success" <?php echo $btnVal['type']=='btn-success'?'selected="selected"':'';?>><?php  _e('Success',$ebsp_domain_name);  ?></option>
                                            <option value="btn-info" <?php echo $btnVal['type']=='btn-info'?'selected="selected"':'';?>><?php  _e('Information',$ebsp_domain_name);  ?></option>
                                            <option value="btn-warning" <?php echo $btnVal['type']=='btn-warning'?'selected="selected"':'';?>><?php  _e('Warning',$ebsp_domain_name);  ?></option>
                                            <option value="btn-danger" <?php echo $btnVal['type']=='btn-danger'?'selected="selected"':'';?>><?php  _e('Danger',$ebsp_domain_name);  ?></option>
                                            <option value="btn-link" <?php echo $btnVal['type']=='btn-link'?'selected="selected"':'';?>><?php  _e('Link',$ebsp_domain_name);  ?></option>
                                        </select>
                                    </td>
                                    <?php
                                    $colspan='';$styleTd='';
                                    if($btnVal['linktype']=='button'){
                                        $colspan=' colspan="3"';
                                        $styleTd=' style="display:none;"';
                                    }?>
                                    <td class="width175 osc_btg_type_change" <?php echo $colspan;?>>
                                        <select name="btngrp[<?php echo $key;?>][linktype]"  class="oscitas-btngrpitem-type">
                                            <option value="link" <?php echo $btnVal['linktype']=='link'?'selected="selected"':'';?>><?php  _e('Link',$ebsp_domain_name);  ?></option>
                                            <option value="button" <?php echo $btnVal['linktype']=='button'?'selected="selected"':'';?>><?php  _e('Button',$ebsp_domain_name);  ?></option>
                                        </select>
                                    </td>
                                    <td class="width175 osc_btg_hide" <?php echo $styleTd;?>>
                                        <input type="text" name="btngrp[<?php echo $key;?>][link]" class="oscitas-btngrpitem-link" value="<?php echo $btnVal['link'] ?>" />
                                    </td>
                                    <td class="width175 osc_btg_hide" <?php echo $styleTd;?>>
                                        <input type="checkbox" name="btngrp[<?php echo $key;?>][target]" class="oscitas-btngrpitem-target" value="true" <?php echo isset($btnVal['target']) && $btnVal['target']=='true'?'checked="checked"':''; ?>>
                                    </td>
                                    <td class="width175">
                                        <input type="text" name="btngrp[<?php echo $key;?>][title]" class="oscitas-btngrpitem-title" value="<?php echo $btnVal['title'] ?>"/>
                                    </td>
                                    <td><?php if($key>0){
                                            echo '<a class="osc_remove_element osc_remove_btgitem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a>';
                                        }?></td>
                                </tr>
                            <?php }?>
                            </tbody>

                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="oscitas-btngrp-class"><?php  _e('Custom Class',$ebsp_domain_name);  ?></label>
                </th>
                <td>
                    <input type="text" name="class" id="oscitas-btngrp-class" value="<?php $sData['class']; ?>"/> <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span>
                </td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>