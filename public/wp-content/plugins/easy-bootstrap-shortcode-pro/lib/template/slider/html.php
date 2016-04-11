<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
        <table id="oscitas-table" class="form-table" style="margin-top: 0px;">
            <tr>
                <th><label for="oscitas-slider-interval"><?php  _e('Slider Interval',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><input type="text" name="interval" id="oscitas-slider-interval" value="<?php echo $sData['interval'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide slider interval in miliseconds (ex: 1200) if want an auto play slider',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-slider-controls"><?php  _e('Show Navigation Controls',$ebsp_domain_name); ?></label></th>
                <td><input type="checkbox" name="controls" id="oscitas-slider-controls" value="true"  <?php echo isset($sData['controls']) && $sData['controls']=='true'?'checked="checked"':''; ;?>/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Show slide next and previous links',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-slider-bullets"><?php  _e('Show Navigation Bullets',$ebsp_domain_name); ?></label></th>
                <td><input type="checkbox" name="bullets" id="oscitas-slider-bullets" value="true"  <?php echo isset($sData['bullets']) && $sData['bullets']=='true'?'checked="checked"':''; ;?>/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Show navigation bullets at bottom of slide',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-slider-pause"><?php  _e('Pause On Hover',$ebsp_domain_name); ?></label></th>
                <td><input type="checkbox" name="pause" id="oscitas-slider-pause" value="hover"  <?php echo isset($sData['pause']) && $sData['pause']=='hover'?'checked="checked"':''; ;?>/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Pause slider navigation on hover',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-slider-wrap"><?php  _e('Cyclic',$ebsp_domain_name); ?></label></th>
                <td><input type="checkbox" name="wrap" id="oscitas-slider-wrap" value="true"  <?php echo isset($sData['wrap']) && $sData['wrap']=='true'?'checked="checked"':''; ;?>/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Make slider repetitive, after last slide first slide will be shown',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-slider-captioncolor"><?php  _e('Caption Color',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="captioncolor" id="oscitas-slider-captioncolor" class="color" value="<?php echo $sData['captioncolor'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose slider image caption color',$ebsp_domain_name); ?>"></span></td>
                <th><label for="oscitas-slider-navcolor"><?php  _e('Navigation Color',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="navcolor" id="oscitas-slider-navcolor" class="color" value="<?php echo $sData['navcolor'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose slider navigation color',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th class="main_dp_th"><label for="oscitas-line"><?php  _e('Add slides',$ebsp_domain_name); ?></label></th>
                <td colspan="3"><a class="pull-right" id="osc_add_new_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon glyphicon-plus-sign"></i> <?php  _e('Add New Item',$ebsp_domain_name); ?></a></td>
            </tr>
            <tr>
                <td colspan="4">
                    <div id="oscitas-table-inner">
                        <table class="multiple-colm_tbl tb_multiple_column slider-multiple-colm">
                            <thead>
                            <tr>
                                <th class="width200">Title<span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Title for each slider image',$ebsp_domain_name); ?>"></span></th>
                                <th class="width200">Image<span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Upload slider image by using wordpress media uploader',$ebsp_domain_name); ?>"></span></th>
                                <th class="width350">Image Caption<span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide image caption for each image',$ebsp_domain_name); ?>"></span></th>
                                <th class="width150">Active<span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose image which you want to show at first when slider loaded',$ebsp_domain_name); ?>"></span></th>
                                <th>Option<span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Remove unwanted slides',$ebsp_domain_name); ?>"></span></th>
                            </tr>
                            </thead>
                            <tbody id="oscitas-append-slideritem">
                            <?php  $btnAttr=$sData['slider'];

                            foreach( $btnAttr as $key => $btnVal){
                                ?>
                                <tr class="osc_dropdown_list_item">
                                    <td class="width200"><input type="text" name="slider[<?php echo $key;?>][title]" class="oscitas-itemslider-title" value="<?php echo$btnVal['title']?>"/></td>
                                    <td class="width200"><input class="oscitas-itemslider-image" type="hidden" name="slider[<?php echo $key;?>][image]"  value="<?php echo $btnVal['image']?>" />
                                        <input id="_btn" class="upload_image_button" type="button" value="Upload Image" /><div class="image_preview"><?php echo $btnVal['image']!=''?'<img src="'.$btnVal['image'].'">':''?></div></td>
                                    <td class="width350"><textarea name="slider[<?php echo $key;?>][caption]" class="oscitas-itemslider-caption"><?php echo $btnVal['caption']?></textarea></td>
                                    <td class="width150"><input type="radio" name="activeslider" class="oscitas-itemslider-active" value="<?php echo $key;?>" <?php echo $sData['activeslider']==$key?'checked="checked"':'' ?>/></td>
                                    <td></td>
                                </tr>
                            <?php  } ?>
                            </tbody>

                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <th><label for="oscitas-slider-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
                <td><input type="text" name="class" id="oscitas-slider-class" value="<?php echo $sData['class'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>