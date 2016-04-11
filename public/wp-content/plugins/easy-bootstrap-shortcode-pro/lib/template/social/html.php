<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
        <tr>
            <th><label for="mygallery-social-type"><?php  _e('Insert',$ebsp_domain_name); ?></label></th>
            <td colspan="2"><select name="type" id="mygallery-social-type">
                    <option value="fbox" <?php echo $sData['type']=='fbox'?'selected="selected"':'';?>><?php  _e('Facebook box',$ebsp_domain_name); ?></option>
                    <option value="fcomments" <?php echo $sData['type']=='fcomments'?'selected="selected"':'';?>><?php  _e('Facebook comments',$ebsp_domain_name); ?></option>
                    <option value="twitter" <?php echo $sData['type']=='twitter'?'selected="selected"':'';?>><?php  _e('Twitter',$ebsp_domain_name); ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose which social networking site content you want to show, facebook or twitter',$ebsp_domain_name); ?>"></span></td>
            <th><label for="mygallery-social-variant"><?php  _e('Variant',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><select name="variant" id="mygallery-social-variant">
                    <option value="light" <?php echo $sData['variant']=='light'?'selected="selected"':'';?>><?php  _e('Light',$ebsp_domain_name); ?></option>
                    <option value="dark" <?php echo $sData['variant']=='dark'?'selected="selected"':'';?>><?php  _e('Dark',$ebsp_domain_name); ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose theme for content',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr id="tr-link">
            <th><label for="mygallery-social-link"><?php  _e('Fanpage link',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><input type="text" name="link" id="mygallery-social-link" value="<?php echo $sData['link'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide link or facebook page which you want to show',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="mygallery-social-width"><?php  _e('Width',$ebsp_domain_name); ?></label></th>
            <td colspan="2"><input type="text" name="width" id="mygallery-social-width" value="<?php echo $sData['width'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Width of container',$ebsp_domain_name); ?>"></span></td>
            <th><label for="mygallery-social-height"><?php  _e('Height',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><input type="text" name="height" id="mygallery-social-height" value="<?php echo $sData['height'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Height of container',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr id="tr-faces">
            <th><label for="mygallery-social-faces"><?php  _e('Show faces',$ebsp_domain_name); ?></label></th>
            <td colspan="2"><select name="faces" id="mygallery-social-faces">
                    <option value="true" <?php echo $sData['faces']=='true'?'selected="selected"':'';?>><?php  _e('show',$ebsp_domain_name); ?></option>
                    <option value="false" <?php echo $sData['faces']=='false'?'selected="selected"':'';?>><?php  _e('hide',$ebsp_domain_name); ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Show images of users who like this page',$ebsp_domain_name); ?>"></span></td>
            <th><label for="mygallery-social-stream"><?php  _e('Stream',$ebsp_domain_name); ?></label></th>
            <td colspan="2"><select name="stream" id="mygallery-social-stream">
                    <option value="true" <?php echo $sData['stream']=='true'?'selected="selected"':'';?>><?php  _e('show',$ebsp_domain_name); ?></option>
                    <option value="false" <?php echo $sData['stream']=='false'?'selected="selected"':'';?>><?php  _e('hide',$ebsp_domain_name); ?></option>
                </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Show the latest updates',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr id="tr-posts" style="display:none;">
            <th><label for="mygallery-social-posts"><?php  _e('Show posts',$ebsp_domain_name); ?></label></th>
            <td colspan="6"><input type="text" name="posts" id="mygallery-social-posts" value="<?php echo $sData['posts'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Number of comments you want to show',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr id="tr-username" style="display:none;">
            <th><label for="mygallery-social-username"><?php  _e('Twitter username',$ebsp_domain_name); ?></label></th>
            <td colspan="2"><input type="text" name="username" id="mygallery-social-username" value="<?php echo $sData['username'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide twitter usename whose tweet you want to show',$ebsp_domain_name); ?>"></span></td>
            <th><label for="mygallery-social-tweets"><?php  _e('Show tweets',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><input type="text" name="tweets" id="mygallery-social-tweets" value="<?php echo $sData['tweets'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide number of tweets you want to show, enter a numeric value',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr id="tr-bordercolor" style="display:none;">
            <th><label for="mygallery-social-bordercolor"><?php  _e('Border Color',$ebsp_domain_name); ?></label></th>
            <td colspan="2"><input type="text" name="bordercolor" id="mygallery-social-bordercolor" value="<?php echo $sData['bordercolor'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Select border color tweet box',$ebsp_domain_name); ?>"></span></td>
            <th><label for="mygallery-social-linkscolor"><?php  _e('Links Color',$ebsp_domain_name); ?></label></th>
            <td colspan="3"><input type="text" name="linkscolor" id="mygallery-social-linkscolor" value="<?php echo $sData['linkscolor'];?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Select link color for tweet box',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr id="tr-noheader" style="display:none;">
            <th><label for="mygallery-social-noheader"><?php  _e('Hide Header',$ebsp_domain_name); ?></label></th>
            <td><input type="checkbox" name="noheader" id="mygallery-social-noheader" value="noheader" <?php echo (isset($sData['noheader']) && $sData['noheader']=='noheader')?'checked="checked"':'';?>/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Hide tweet box header',$ebsp_domain_name); ?>"></span></td>
            <th><label for="mygallery-social-nofooter"><?php  _e('Hide Footer',$ebsp_domain_name); ?></label></th>
            <td><input type="checkbox" name="nofooter" id="mygallery-social-nofooter" value="nofooter" <?php echo (isset($sData['nofooter']) && $sData['nofooter']=='nofooter')?'checked="checked"':'';?>/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Hide tweet box footer',$ebsp_domain_name); ?>"></span></td>

            <th><label for="mygallery-social-linkscolor"><?php  _e('No Border',$ebsp_domain_name); ?></label></th>
            <td colspan="2"><input type="checkbox" name="noborders" id="mygallery-social-noborders" value="noborders" <?php echo (isset($sData['noborders']) && $sData['noborders']=='noborders')?'checked="checked"':'';?>/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Check this option if you don\'t want to show twwet box border',$ebsp_domain_name); ?>"></span></td>
        </tr>
        <tr>
            <th><label for="oscitas-social-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
            <td colspan="6"><input type="text" name="class" id="oscitas-social-class" value="<?php echo $sData['class'];?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
        </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
</div>
<?php

$return_ebs=ob_get_clean();
?>