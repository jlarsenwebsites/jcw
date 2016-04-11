<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="gallery-table" class="form-table">
        <tr>
            <th><label for="mygallery-type"><?php  _e('Map Type',$ebsp_domain_name);  ?></label></th>
            <td><select name="type" id="mygallery-type">
                    <option value="ROADMAP" <?php echo $sData['type']=='ROADMAP'?'selected="selected"':'';?>><?php  _e('Normal Map',$ebsp_domain_name);  ?></option>
                    <option value="SATELLITE" <?php echo $sData['type']=='SATELLITE'?'selected="selected"':'';?>><?php  _e('Satellite Map',$ebsp_domain_name);  ?></option>
                    <option value="HYBRID" <?php echo $sData['type']=='HYBRID'?'selected="selected"':'';?>><?php  _e('Hybrid Map',$ebsp_domain_name);  ?></option>
                </select>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose a map type',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="mygallery-width"><?php  _e('Width',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="width" id="mygallery-width" value="<?php echo $sData['width'];?>" />
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Width of map, enter a numeric value or \'false\' for full width',$ebsp_domain_name);  ?>"></span></td>
            <th><label for="mygallery-height"><?php  _e('Height',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="height" id="mygallery-height" value="<?php echo $sData['height'];?>" />
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Height of map, enter a numeric value or \'false\' for auto height',$ebsp_domain_name);  ?>"></span></td>
        </tr>

        <tr>
            <th><label for="mygallery-latitude"><?php  _e('Latitude',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="latitude" id="mygallery-latitude" value="<?php echo $sData['latitude'];?>" />
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter latitude of place you want marked on map',$ebsp_domain_name); ?>"></span></td>
            <th><label for="mygallery-longitude"><?php  _e('Longitude',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="longitude" id="mygallery-longitude" value="<?php echo $sData['longitude'];?>" />
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Enter longitude of place you want marked on map',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="mygallery-address"><?php  _e('Address',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="address" id="mygallery-address" value="<?php echo $sData['address'];?>" />
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If You dont know latitude and longitude anter the address of place',$ebsp_domain_name); ?>"></span></td>
            <th><label for="mygallery-zoom"><?php  _e('Zoom',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="zoom" id="mygallery-zoom" value="<?php echo $sData['zoom'];?>" />
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('enter zoom level of map',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-gmap-class"><?php  _e('Custom Class',$ebsp_domain_name);  ?></label></th>
            <td><input type="text" name="class" id="oscitas-gmap-class" value="<?php echo $sData['class'];?>"/>
                <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span> </td>
        </tr>
    </table>
    <p style="color: red;"><small><?php _e('Latitude and Longitude having higher priority than address if latitude or longitude having zero value, map will search for address specified',$ebsp_domain_name);  ?></small>
    </p>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>