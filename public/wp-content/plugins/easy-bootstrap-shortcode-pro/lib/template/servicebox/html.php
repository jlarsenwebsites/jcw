<?php
$effectlist='';
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <table id="oscitas-table" class="form-table">
    <tr><td colspan="4"><p><span style="color: green; font-size: 12px">Note: 'custom' option enables you to change colors according to your choice</span></p></td></tr>
    <tr >
        <th><label for="oscitas-servicebox-boxstyle"><?php  _e('Service Box Style',$ebsp_domain_name); ?></label></th>
        <td colspan="3" class="oscitas-carousel-style"><input type="radio" name="boxtype" id="oscitas-servicebox-boxtype-icon" class="osc_check_boxtype" value="icon" <?php echo isset($sData['boxtype']) && $sData['boxtype']=='icon'?'checked="checked"':'';?>/><label for="oscitas-servicebox-boxtype-icon"><?php  _e('Icon',$ebsp_domain_name); ?></label> &nbsp;&nbsp;<input type="radio" name="boxtype" id="oscitas-servicebox-boxtype-image" class="osc_check_boxtype" value="img" <?php echo isset($sData['boxtype']) && $sData['boxtype']=='img'?'checked="checked"':'';?>/><label for="oscitas-servicebox-boxtype-image"><?php  _e('Image',$ebsp_domain_name); ?></label>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Service box type use icon for service or upload image',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="show_boxtype_image"><th><label for="oscitas-label-content"><?php  _e('Upload Image',$ebsp_domain_name); ?></label></th>
        <td id="osc_image_upload" colspan="3"><input id="oscitas-servicebox-imgsrc" type="text" name="thumbnailsrc"  value="<?php $sData['thumbnailsrc'];?>" />
            <input id="_btn" class="upload_image_button" type="button" value="<?php _e('Upload Image'); ?>" />
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Upload using wordpress media uploader',$ebsp_domain_name); ?>"></span>
        <?php echo !empty($sData['thumbnailsrc'])?"<img src='{$sData['thumbnailsrc']}'>":'';?></td>
    </tr>
    <tr class="show_boxtype_icon">
        <th><label for="oscitas-heading-icon"><?php  _e('Select Icon',$ebsp_domain_name); ?></label></th>
        <td><div id="click_icon_list_servicebox" class="oscitas-icon-div"><span id="osc_show_icon_servicebox" class="<?php echo $sData['icon'];?> <?php echo $sData['icontype'];?>"></span><span class="show-drop"></span></div><input type="hidden" id="oscitas-servicebox-icon" name="icon" value="<?php echo $sData['icon'];?>"><input type="hidden" id="oscitas-servicebox-icontype" name="icontype" value="<?php echo $sData['icontype'];?>">
            <div id="osc_show_iconlist_data" class="oscitas-icon" style="display:none;width:100%"><?php echo $icon_content;?></div>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose an icon for service box',$ebsp_domain_name); ?>"></span></td>

        <th><label for="oscitas-servicebox-iconbg"><?php  _e('Icon background',$ebsp_domain_name); ?></label></th>
        <td><select name="iconbg" id="oscitas-servicebox-iconbg">
                <option value="iconcircle" <?php echo $sData['iconbg']=='iconcircle'?'selected="selected"':'';?>><?php  _e('Circle',$ebsp_domain_name); ?></option>
                <option value="iconbox" <?php echo $sData['iconbg']=='iconbox'?'selected="selected"':'';?>><?php  _e('Box',$ebsp_domain_name); ?></option>
                <option value="iconstar" <?php echo $sData['iconbg']=='iconstar'?'selected="selected"':'';?>><?php  _e('Star',$ebsp_domain_name); ?></option>
                <option value="triangle-up" <?php echo $sData['iconbg']=='triangle-up'?'selected="selected"':'';?>><?php  _e('Triangle Up',$ebsp_domain_name); ?></option>
                <option value="triangle-down" <?php echo $sData['iconbg']=='triangle-down'?'selected="selected"':'';?>><?php  _e('Triangle Down',$ebsp_domain_name); ?></option>
                <option value="trapezoid" <?php echo $sData['iconbg']=='trapezoid'?'selected="selected"':'';?>><?php  _e('Trapezoid',$ebsp_domain_name); ?></option>
                <option value="hexagon" <?php echo $sData['iconbg']=='hexagon'?'selected="selected"':'';?>><?php  _e('Hexagon',$ebsp_domain_name); ?></option>
                <option value="pentagon" <?php echo $sData['iconbg']=='pentagon'?'selected="selected"':'';?>><?php  _e('Pentagon',$ebsp_domain_name); ?></option>
                <option value="heart" <?php echo $sData['iconbg']=='heart'?'selected="selected"':'';?>><?php  _e('Heart',$ebsp_domain_name); ?></option>
                <option value="diamond" <?php echo $sData['iconbg']=='diamond'?'selected="selected"':'';?>><?php  _e('Diamond',$ebsp_domain_name); ?></option>
                <option value="diamond-narrow" <?php echo $sData['iconbg']=='diamond-narrow'?'selected="selected"':'';?>><?php  _e('Diamond Narrow',$ebsp_domain_name); ?></option>
                <option value="cut-diamond" <?php echo $sData['iconbg']=='cut-diamond'?'selected="selected"':'';?>><?php  _e('Cut Diamond',$ebsp_domain_name); ?></option>
                <option value="burst-12" <?php echo $sData['iconbg']=='burst-12'?'selected="selected"':'';?>><?php  _e('Burst 12',$ebsp_domain_name); ?></option>
                <option value="burst-8" <?php echo $sData['iconbg']=='burst-8'?'selected="selected"':'';?>><?php  _e('Burst 8',$ebsp_domain_name); ?></option>
            </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon background shape',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="show_boxtype_icon show_iconcircle_icon">
        <th><label><?php  _e('Icon Size',$ebsp_domain_name); ?></label></th>
        <td colspan="3"><input type="text" name="icon_size" class="slider_input" id="oscitas-servicebox-icon_size" value="<?php echo $sData['icon_size'];?>"/>
            <div class="slider_render" id="slider_rander_icon"></div>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon size using slider',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="show_boxtype_icon show_iconcircle_icon">
        <th><label><?php  _e('Icon Background Size',$ebsp_domain_name); ?></label></th>
        <td colspan="3"><input type="text" name="iconbg_size" class="slider_input" id="oscitas-servicebox-iconbg_size" value="<?php echo $sData['iconbg_size'];?>"/>
            <div class="slider_render" id="slider_rander_icon_bg"></div>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('hoose icon background shape size using slider',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr id="iconcircle_border_radius" class="show_boxtype_icon show_iconcircle_icon">
        <th><label><?php  _e('Border Radius',$ebsp_domain_name); ?></label></th>
        <td colspan="3"><input type="text" name="iconbg_radius" class="slider_input" id="oscitas-servicebox-iconbg_radius" value="<?php echo $sData['iconbg_radius'];?>"/>
            <div class="slider_render" id="slider_rander_icon_bg_radius"></div>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose border radius for circle shaped icon background',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="show_boxtype_icon show_iconcircle_icon">
        <th><label><?php  _e('Icon Style',$ebsp_domain_name); ?></label></th>
        <td colspan="3"><select name="iconstyle" id="oscitas-servicebox-iconstyle">
                <option value="inline" <?php echo $sData['iconstyle']=='inline'?'selected="selected"':'';?>>Inline</option>
                <option value="onborder" <?php echo $sData['iconstyle']=='onborder'?'selected="selected"':'';?>>On Border</option>
            </select>
    </tr>
    <tr class="show_boxtype_icon show_iconcircle_icon icon_circle_onborder">
        <th><label for="oscitas-servicebox-bgcolor"><?php  _e('Border Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="bordercolor" id="oscitas-servicebox-bordercolor" class="color" value="<?php echo $sData['bordercolor']; ?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose servicebox border color',$ebsp_domain_name); ?>"></span></td>
        <th><label for="oscitas-servicebox-hbordercolor"><?php  _e('Border Color on Hover',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="hbordercolor" id="oscitas-servicebox-hbordercolor" class="color" value="<?php echo $sData['hbordercolor']; ?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose servicebox border color on hover',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="show_boxtype_icon show_iconcircle_icon icon_circle_onborder">
        <th><label for="oscitas-servicebox-bgcolor"><?php  _e('Border Width',$ebsp_domain_name); ?></label></th>
        <td colspan="3"><input type="text" name="borderwidth" class="slider_input" id="oscitas-servicebox-borderwidth" value="<?php echo $sData['borderwidth']; ?>"/>
            <div class="slider_render" id="slider_rander_borderwidth"></div>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('choose border Width using slider',$ebsp_domain_name); ?>"></span></td>

    </tr>
    <tr class="show_boxtype_icon show_iconcircle_icon">
        <th class="icon_circle_inline"><label><?php  _e('Margin Top',$ebsp_domain_name); ?></label></th>
        <td class="icon_circle_inline"><input type="text" name="margin_top" id="oscitas-servicebox-margin_top" value="<?php echo $sData['margin_top']; ?>"/> <small>px</small>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('margin for service box from top',$ebsp_domain_name); ?>"></span></td>
        <th class="icon_circle_onborder"><label><?php  _e('Icon Alignment',$ebsp_domain_name); ?></label></th>
        <td class="icon_circle_onborder">
            <select name="iconalign" id="oscitas-servicebox-iconalign">
                <option value="none" <?php echo $sData['iconalign']=='none'?'selected="selected"':'';?>><?php _e('Centre');?></option>
                <option value="left" <?php echo $sData['iconalign']=='left'?'selected="selected"':'';?>><?php _e('Left');?></option>
                <option value="right" <?php echo $sData['iconalign']=='right'?'selected="selected"':'';?>><?php _e('Right');?></option>
            </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Alignment of icon',$ebsp_domain_name); ?>"></span></td>

        <th><label><?php  _e('Margin Bottom',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="margin_bottom" id="oscitas-servicebox-margin_bottom" value="<?php echo $sData['margin_bottom']; ?>"/> <small>px</small>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('margin for service box from bottom',$ebsp_domain_name); ?>"></span></td>
    </tr>


    <tr class="show_boxtype_icon">
        <th><label for="oscitas-servicebox-iconbgcolor"><?php  _e('Icon Background Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="iconbgcolor" id="oscitas-servicebox-iconbgcolor" class="color" value="<?php echo $sData['iconbgcolor']; ?>" data-default-color="#FFFFFF"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon background color',$ebsp_domain_name); ?>"></span></td>
        <th><label for="oscitas-servicebox-iconcolor"><?php  _e('Icon Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="iconcolor" id="oscitas-servicebox-iconcolor" class="color" value="<?php echo $sData['iconcolor']; ?>" data-default-color="#777777"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon color',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="show_boxtype_icon">
        <th><label><?php  _e('Icon Hover Effect',$ebsp_domain_name); ?></label></th>
        <td colspan="3" class="oscitas-carousel-style"><input type="radio" data-name="oscitas-servicebox-iconhover" name="iconhover" id="oscitas-servicebox-iconhover-default" data="iconhover" <?php echo isset($sData['boxstyle']) && $sData['iconhover']=='default'?'checked="checked"':'';?> class="show_sub" value="default"/><label for="oscitas-servicebox-iconhover-default"><?php  _e('Default',$ebsp_domain_name); ?></label><input type="radio" data-name="oscitas-servicebox-iconhover" name="iconhover" <?php echo isset($sData['boxstyle']) && $sData['iconhover']=='revert'?'checked="checked"':'';?> data="iconhover" id="oscitas-servicebox-iconhover-revert" class="show_sub" value="revert"/><label for="oscitas-servicebox-iconhover-revert" ><?php  _e('Revert',$ebsp_domain_name); ?></label><input type="radio" class="show_sub has_sub" data-name="oscitas-servicebox-iconhover"  name="iconhover"  <?php echo isset($sData['boxstyle']) && $sData['iconhover']=='custom'?'checked="checked"':'';?> data="iconhover" id="oscitas-servicebox-iconhover-custom" value="custom"/><label for="oscitas-servicebox-iconhover-custom"><?php  _e('Custom',$ebsp_domain_name); ?></label>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose an icon hover effect, revert for reveting default icon color and background color on hover',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="oscitas-servicebox-iconhover" style="display:none">
        <th><label for="oscitas-servicebox-hover_iconbgcolor"><?php  _e('Icon Background Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="hover_iconbgcolor" id="oscitas-servicebox-hover_iconbgcolor" class="color" value="<?php echo $sData['hover_iconbgcolor']; ?>" data-default-color="#FFFFFF"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon background color on hover',$ebsp_domain_name); ?>"></span></td>
        <th><label for="oscitas-servicebox-hover_iconcolor"><?php  _e('Icon Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="hover_iconcolor" id="oscitas-servicebox-hover_iconcolor" class="color" value="<?php echo $sData['hover_iconcolor']; ?>" data-default-color="#777777"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose icon color on hover',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr>
        <th><label><?php  _e('Service Box Style',$ebsp_domain_name); ?></label></th>
        <td colspan="3" class="oscitas-carousel-style"><input type="radio" data-name="oscitas-servicebox-boxstyle" id="oscitas-servicebox-boxstyle-default" class="show_sub" value="default" data="boxstyle"  name="boxstyle" <?php echo isset($sData['boxstyle']) && $sData['boxstyle']=='default'?'checked="checked"':'';?>/><label for="oscitas-servicebox-boxstyle-default"><?php  _e('Default',$ebsp_domain_name); ?></label><input type="radio" class="show_sub has_sub" data-name="oscitas-servicebox-boxstyle" id="oscitas-servicebox-boxstyle-custom" value="custom" data="boxstyle"  name="boxstyle" <?php echo isset($sData['boxstyle']) && $sData['boxstyle']=='custom'?'checked="checked"':'';?>/><label for="oscitas-servicebox-boxstyle-custom"><?php  _e('Custom',$ebsp_domain_name); ?></label>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose service box style, custom to customize color settings',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="oscitas-servicebox-boxstyle" style="display:none">
        <th><label for="oscitas-servicebox-bgcolor"><?php  _e('Service Box Background Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="bgcolor" id="oscitas-servicebox-bgcolor" class="color" value="<?php echo $sData['bgcolor']; ?>" data-default-color="#FFFFFF"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose servicebox background color',$ebsp_domain_name); ?>"></span></td>
        <th><label for="oscitas-servicebox-fgcolor"><?php  _e('Service Box Foreground Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="fgcolor" id="oscitas-servicebox-fgcolor" class="color" value="<?php echo $sData['fgcolor']; ?>#777777" data-default-color="#777777"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose service ox text color',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr>
        <th><label><?php  _e('Service Box Hover Effect',$ebsp_domain_name); ?></label></th>
        <td colspan="3" class="oscitas-carousel-style"><input type="radio" data-name="oscitas-servicebox-hover" id="oscitas-servicebox-hover-default" class="show_sub" value="default" name="hover" <?php echo isset($sData['hover']) && $sData['hover']=='default'?'checked="checked"':'';?> data="hover"/><label for="oscitas-servicebox-hover-default"><?php  _e('Default',$ebsp_domain_name); ?></label><input type="radio" class="show_sub has_sub" data-name="oscitas-servicebox-hover" id="oscitas-servicebox-hover-custom" value="custom" data="hover"  name="hover" <?php echo isset($sData['hover']) && $sData['hover']=='custom'?'checked="checked"':'';?>/><label for="oscitas-servicebox-hover-custom"><?php  _e('Custom',$ebsp_domain_name); ?></label>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose servicebox style  on hover, custom to customize color settings',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="oscitas-servicebox-hover" style="display:none">
        <th><label for="oscitas-servicebox-hover_bgcolor"><?php  _e('Service Box Background Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="hover_bgcolor" id="oscitas-servicebox-hover_bgcolor" class="color" value="<?php echo $sData['hover_bgcolor']; ?>" data-default-color="#FFFFFF"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Sevicebox background color on hover',$ebsp_domain_name); ?>"></span></td>

        <th><label for="oscitas-servicebox-hover_fgcolor"><?php  _e('Service Box Foreground Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="hover_fgcolor" id="oscitas-servicebox-hover_fgcolor" class="color" value="<?php echo $sData['hover_fgcolor']; ?>" data-default-color="#777777"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('servicebox text color on hover',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr>
        <th><label ><?php  _e('Read More',$ebsp_domain_name); ?></label></th>
        <td colspan="3"><input type="checkbox" data-name="oscitas-servicebox-readmore" id="oscitas-servicebox-readmore" class="show_sub has_sub" value="true" name="readmore" <?php echo isset($sData['readmore']) && $sData['readmore']=='true'?'checked="checked"':'';?>data="readmore"/><label for="oscitas-servicebox-readmore"><?php  _e('Include Read More Link',$ebsp_domain_name); ?></label>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to show a radmore link, it can be any link for example link of the web page where user can buy this service',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="oscitas-servicebox-readmore" style="display:none">
        <th><label for="oscitas-servicebox-readmore_link"><?php  _e('Link',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="readmore_link" id="oscitas-servicebox-readmore_link" value="<?php echo $sData['readmore_link']; ?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Url for read more link',$ebsp_domain_name); ?>"></span></td>
        <th><label for="oscitas-servicebox-readmore_text"><?php  _e('Text',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="readmore_text" id="oscitas-servicebox-readmore_text" value="<?php echo $sData['readmore_text']; ?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Read more text',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="oscitas-servicebox-readmore" style="display:none">
        <th><label for="oscitas-servicebox-readmore_type"><?php  _e('Button Type',$ebsp_domain_name); ?></label></th>
        <td colspan="3"><select name="readmore_type" id="oscitas-servicebox-readmore_type">
                <option value=""  <?php echo $sData['readmore_type']==''?'selected="selected"':'';?>><?php  _e('Default',$ebsp_domain_name); ?></option>
                <option value="btn-lg" <?php echo $sData['readmore_type']=='btn-lg'?'selected="selected"':'';?>><?php  _e('Large',$ebsp_domain_name); ?></option>
                <option value="btn-sm" <?php echo $sData['readmore_type']=='btn-sm'?'selected="selected"':'';?>><?php  _e('Small',$ebsp_domain_name); ?></option>
                <option value="btn-xs" <?php echo $sData['readmore_type']=='btn-xs'?'selected="selected"':'';?>><?php  _e('Ex-small',$ebsp_domain_name); ?></option>
            </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose button type for read more link',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="oscitas-servicebox-readmore" style="display:none">
        <th><label><?php  _e('Read More Style',$ebsp_domain_name); ?></label></th>
        <td class="oscitas-carousel-style" colspan="3"><input type="radio" data-name="oscitas-servicebox-readmorestyle" name="readmorestyle" <?php echo isset($sData['readmorestyle']) && $sData['readmorestyle']=='default'?'checked="checked"':'';?> id="oscitas-servicebox-readmorestyle-default" class="show_sub" value="default"  data="readmorestyle"/><label for="oscitas-servicebox-readmorestyle-default"><?php  _e('Default',$ebsp_domain_name); ?></label><input type="radio" class="show_sub has_sub" data-name="oscitas-servicebox-readmorestyle" name="readmorestyle" <?php echo isset($sData['readmorestyle']) && $sData['readmorestyle']=='custom'?'checked="checked"':'';?> id="oscitas-servicebox-readmorestyle-custom" value="custom" data="readmorestyle"/><label for="oscitas-servicebox-readmorestyle-custom"><?php  _e('Custom',$ebsp_domain_name); ?></label>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose Readmore style , custom to customize color settings',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr class="oscitas-servicebox-readmorestyle" style="display:none">
        <th><label for="oscitas-servicebox-readmore_bgcolor"><?php  _e('Link Background Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="readmore_bgcolor" id="oscitas-servicebox-readmore_bgcolor" class="color" value="<?php echo $sData['readmore_bgcolor']; ?>" data-default-color="#FFFFFF"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Read more link background color',$ebsp_domain_name); ?>"></span></td>

        <th><label for="oscitas-servicebox-readmore_fgcolor"><?php  _e('Link Foreground Color',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="readmore_fgcolor" id="oscitas-servicebox-readmore_fgcolor" class="color" value="<?php echo $sData['readmore_fgcolor']; ?>" data-default-color="#777777"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Read more link heading color',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr >
        <th><label for="oscitas-servicebox-headingtype"><?php  _e('Heading Type',$ebsp_domain_name); ?></label></th>
        <td><select name="headingtype" id="oscitas-servicebox-headingtype">
                <option value="h1" <?php echo $sData['headingtype']=='h1'?'selected="selected"':'';?>>H1</option>
                <option value="h2" <?php echo $sData['headingtype']=='h2'?'selected="selected"':'';?>>H2</option>
                <option value="h3" <?php echo $sData['headingtype']=='h3'?'selected="selected"':'';?>>H3</option>
                <option value="h4" <?php echo $sData['headingtype']=='h4'?'selected="selected"':'';?>>H4</option>
                <option value="h5" <?php echo $sData['headingtype']=='h5'?'selected="selected"':'';?>>H5</option>
                <option value="h6" <?php echo $sData['headingtype']=='h6'?'selected="selected"':'';?>>H6</option>
            </select>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose a heading type',$ebsp_domain_name); ?>"></span></td>
        <th><label for="oscitas-servicebox-heading"><?php  _e('Heading',$ebsp_domain_name); ?></label></th>
        <td><input type="text" name="heading" id="oscitas-servicebox-heading" value="<?php echo $sData['heading']; ?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide heading for service box',$ebsp_domain_name); ?>"></span></td>
    </tr>
    <tr>
        <th><label for="oscitas-servicebox-class"><?php  _e('Custom Class',$ebsp_domain_name); ?></label></th>
        <td colspan="3"><input type="text" name="class" id="oscitas-servicebox-class" value="<?php echo $sData['class']; ?>"/>
            <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
    </tr>
    </table>
    <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>