<?php
$effectlist='';

foreach($ebs_effectlist as $k => $val){
    if($k!='none'){
        $selected=$k==$sData['effect']?'selected="selected"':'';
        $effectlist.='<option value="'.$k.'" '.$selected.'>'.$val.'</option>';
    }
}

ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>"><table id="oscitas-table" class="form-table">
            <tr>
                <th><label for="oscitas-animation-effect"><?php _e('Animation Type') ?></label></th>
                <td><select name="effect" id="oscitas-animation-effect"><?php echo $effectlist;?></select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose an animation type, you want to apply on your content',$ebsp_domain_name);  ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-animation-time"><?php _e('Animation Time') ?></label></th>
                <td><select name="time" id="oscitas-animation-time">
                        <option value="everytime" <?php echo $sData['time']=='everytime'?'selected="selected"':'';?>><?php _e('Every Time',$ebsp_domain_name);  ?></option>
                        <option value="onetime" <?php echo $sData['time']=='onetime'?'selected="selected"':'';?>><?php _e('One Time',$ebsp_domain_name);  ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to apply animation every time or single time when content comes in view',$ebsp_domain_name); ?>"></span> </td>
            </tr>
            <tr>
                <th><label><?php _e('Duration') ?></label></th>
                <td><input type="text" name="duration" class="slider_input" id="oscitas-animation-duration" value="<?php echo $sData['duration'];?>"/>
                    <div class="slider_render" id="slider_rander_duration"></div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide value in seconds that specify the animation completion time',$ebsp_domain_name); ?>"></span> </td>
            </tr>
            <tr>
                <th><label><?php _e('Delay') ?></label></th>
                <td><input type="text" name="delay" class="slider_input" id="oscitas-animation-delay" value="<?php echo $sData['delay'];?>"/>
                    <div class="slider_render" id="slider_rander_delay"></div>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide value in seconds that specify the time after which animation will start',$ebsp_domain_name); ?>"></span> </td>
            </tr>
            <tr>
                <th><label for="oscitas-animation-class"><?php _e('Custom Class') ?></label></th>
                <td><input type="text" name="class" id="oscitas-animation-class" value="<?php echo $sData['class'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span> </td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>