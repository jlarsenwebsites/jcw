<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="oscitas-type"><?php  _e('VideoServer',$ebsp_domain_name); ?></label></th>
            <td><select name="type" id="oscitas-type">
                    <option value="youtube" <?php echo $sData['type']=='youtube'?'selected="selected"':'';?>><?php  _e('Youtube',$ebsp_domain_name); ?></option>
                    <option value="vimeo" <?php echo $sData['type']=='vimeo'?'selected="selected"':'';?>><?php  _e('Vimeo',$ebsp_domain_name); ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('choose type of video',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-link"><?php  _e('Link',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="link" id="oscitas-link" value="<?php echo $sData['link'];?>" />
              <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter url of the video',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-dimensions"><?php  _e('Video dimensions',$ebsp_domain_name); ?></label></th>
            <td><select name="dimensions" id="oscitas-dimensions">
                    <option value="16by9"" <?php echo isset($sData['dimensions']) && $sData['dimensions']=='16by9"'?'selected="selected"':'';?>><?php  _e('16:9',$ebsp_domain_name); ?></option>
                    <option value="4by3" <?php echo isset($sData['dimensions']) && $sData['dimensions']=='4by3'?'selected="selected"':'';?>><?php  _e('4:3',$ebsp_domain_name); ?></option>
                    <option value="custom" <?php echo isset($sData['dimensions']) && $sData['dimensions']=='custom'?'selected="selected"':'';?>><?php  _e('Custom',$ebsp_domain_name); ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide video aspect ratio if you want custom video dimensions choose custom option',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr class="video_custom_dimensions">
            <th><label for="oscitas-width"><?php  _e('Width',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="width" id="oscitas-width" value="<?php echo $sData['width'];?>" />
                <small></small>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter numeric value with \'%\' or \'px\'',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr class="video_custom_dimensions">
            <th><label for="oscitas-height"><?php  _e('Height',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="height" id="oscitas-height" value="<?php echo $sData['height'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter numeric value with \'%\' or \'px\'',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-video-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td><input type="text" name="class" id="oscitas-video-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>