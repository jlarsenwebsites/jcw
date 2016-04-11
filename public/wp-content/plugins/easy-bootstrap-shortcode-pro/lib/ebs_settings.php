<!--EBS main setting page markup-->
<?php global $ebsp_domain_name ;?>
<div class="ebs_page_settings">
    <h1><?php _e('Easy Bootstrap Shortcode Pro Settings',$ebsp_domain_name)?></h1>
    <div class="pull-right osc-logo-setting"><a target="_blank" href="http://oscitasthemes.com/"><img src="<?php echo EBS_ASSET_URL.'images/osc-logo.png'?>"></a></div>
    <form name="ebs_setting" id="ebs_setting" method="post" action="">
        <div id="ebs_accordion">
            <h3 class="accordion_header"><?php _e('CSS/JS Settings',$ebsp_domain_name); ?></h3>
            <div class="ebs_accordion_section">
                <?php  if(!apply_filters('plugin_oscitas_theme_check',false)){ ?><div class="ebs_details">
                    <label class="ebs_setting_label"><?php _e('Bootstrap JS File',$ebsp_domain_name); ?></label>
                    <p>
                        <input type="radio" name="b_js" id="b_js_plugin" class="check_cdn" value="1" <?php echo ($js == 1) ? 'checked=checked' : '' ?>>
                        <label for="b_js_plugin"><?php _e('Use from EBS Plugin',$ebsp_domain_name); ?></label>
                        <input type="radio" name="b_js" id="b_js_theme" class="check_cdn" value="2" <?php echo ($js == 2) ? 'checked=checked' : '' ?>><label for="b_js_theme"><?php _e('Use from theme or any other plugin',$ebsp_domain_name); ?></label>
                        <input type="radio" name="b_js" class="check_cdn" id="b_js_cdn" <?php echo ($js == 3) ? 'checked=checked' : '' ?> value="3"><label for="b_js_cdn"><?php _e('Load from CDN',$ebsp_domain_name); ?></label>
                    </div>
                    <div class="ebs_details show_cdn" ><label class="ebs_setting_label"><?php _e('bootstrap.js CDN Path',$ebsp_domain_name); ?></label><p><input type="text" name="cdn_path" id="cdn_path" value="<?php echo $cdn; ?>">
                        <div id="bs_cdn" style="display: none"><b>
                                <?php _e('CDN Links for bootstrap.js, you can use any of these',$ebsp_domain_name); ?></b>
                            <ul>
                                <li>
                                    <?php echo str_replace('http:','',EBS_JS_CDN)?>
                                </li>
                                <li>
                                    //cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js
                                </li>
                            </ul></div>

                        </p>
                        <span class="osc_popover" data-title="Bootstrap CDN" data-toggle="popover" data-contentwrapper="#bs_cdn" ><img src="<?php echo EBS_ASSET_URL.'images/info.png'?>"  title="<?php _e('Click here to see more information about this icon.',$ebsp_domain_name)?>"  /> </span>
                    </div>
                    <div class="ebs_details">
                        <label class="ebs_setting_label"><?php _e('IE6+ compatibility JS File ',$ebsp_domain_name); ?></label>
                        <p>
                            <input type="radio" name="respond_js" id="respond_js_plugin" class="respond_cdn" value="1" <?php echo ($respond == 1) ? 'checked=checked' : '' ?>>
                            <label for="respond_js_plugin"><?php _e('Use from EBS Plugin',$ebsp_domain_name); ?></label>
                            <input type="radio" name="respond_js" id="respond_js_theme" class="respond_cdn" value="2" <?php echo ($respond == 2) ? 'checked=checked' : '' ?>><label for="respond_js_theme"><?php _e('Use from theme or any other plugin',$ebsp_domain_name); ?></label>
                            <input type="radio" name="respond_js" class="respond_cdn" id="respond_js_cdn" <?php echo ($respond == 3) ? 'checked=checked' : '' ?> value="3"><label for="respond_js_cdn"><?php _e('Load from CDN',$ebsp_domain_name); ?></label>
                    </div>
                    <div class="ebs_details respond_show_cdn" ><label class="ebs_setting_label">respond.js CDN Path</label><p><input type="text" name="respond_cdn_path" id="respond_cdn_path" value="<?php echo $respondcdn; ?>">
                        <div id="respond_cdn" style="display: none"><b>
                                <?php _e('CDN Links for respond.js, you can use any of these',$ebsp_domain_name); ?></b>
                            <ul>
                                <li>
                                    <?php echo str_replace('http:','',EBS_RESPOND_CDN)?>
                                </li>
                            </ul></div>
                        <span class="osc_popover" data-title="Respond CDN" data-toggle="popover" data-contentwrapper="#respond_cdn" ><img src="<?php echo EBS_ASSET_URL.'images/info.png'?>" alt=""/></span>
                        </p>

                    </div>
                    <div class="ebs_details">

                        <label class="ebs_setting_label"><?php _e('Bootstrap Styling CSS File',$ebsp_domain_name) ?></label>
                        <p><input type="radio" name="b_css" id="b_css_plugin" value="1" <?php echo ($css == 1) ? 'checked=checked' : '' ?>>
                            <label for="b_css_plugin" ><?php _e('Use from EBS Plugin',$ebsp_domain_name) ?></label>
                            <input type="radio" name="b_css" id="b_css_theme" value="2" <?php echo ($css == 2) ? 'checked=checked' : '' ?>><label for="b_css_theme"><?php _e('Use from theme or any other plugin',$ebsp_domain_name) ?></label>
                            <input type="radio" name="b_css" id="b_css_nobs" value="3" <?php echo ($css == 3) ? 'checked=checked' : '' ?>><label for="b_css_nobs"><?php _e('No bootstrap theme',$ebsp_domain_name) ?><span class="osc_tooltip notered osc_tootltip" data-toggle="tooltip" data-placement="left" title="Choose this option if you don't have a bootstrap theme"><img src="<?php echo EBS_ASSET_URL.'images/info.png'?>" alt=""/></span>
                            </label>
                        </p>
                    </div>
                <?php } ?>
                <div class="ebs_details">
                    <label class="ebs_setting_label"><?php _e('Custom CSS Editor',$ebsp_domain_name) ?></label>
                    <p>
                        <textarea  name="ebs_custom_css" id="ebs_custom_css"><?php echo trim($ebs_custom_css) ?></textarea>
                    </p>
                </div>
            </div>
            <h3 class="accordion_header"><?php _e('Font Inclusion',$ebsp_domain_name) ?></h3>
            <div class="ebs_accordion_section">
                <div class="ebs_details">

                    <label class="ebs_setting_label"><?php _e('Font Awesome Icons',$ebsp_domain_name)?></label>
                    <p><input type="checkbox" name="fa_icon" id="fa_icon" value="1" <?php echo ($fa_icon == 1) ? 'checked=checked' : '' ?>>
                        <label for="fa_icon" ><?php _e('Include Font Awesome Icons',$ebsp_domain_name)?></label>

                    </p>
                </div>
            </div>
            <h3 class="accordion_header"><?php _e('User Interface',$ebsp_domain_name)?></h3>
            <div class="ebs_accordion_section">
                <div class="ebs_details">
                    <label class="ebs_setting_label"><?php _e('Editor Button Style',$ebsp_domain_name)?></label>
                    <p>
                        <label for="ebsp_icon" class="ebs_editor_label" title="Icons"><input type="radio" name="ebsp_editor_opt" id="ebsp_icon" value="icon" <?php echo ($ebsp_editor_opt == 'icon') ? 'checked=checked' : '' ?> style="display: none" class="ebs_editor_style"><img src="<?php echo EBS_ASSET_URL.'images/icons.png'?>"></label>

                        <label for="ebsp_dropdown" class="ebs_editor_label" title="Dropdown"><input type="radio" name="ebsp_editor_opt" id="ebsp_dropdown" value="dropdown" <?php echo ($ebsp_editor_opt == 'dropdown') ? 'checked=checked' : '' ?> style="display: none" class="ebs_editor_style"><img src="<?php echo EBS_ASSET_URL.'images/dropdown.png'?>"></label>
                        <label for="ebsp_media" class="ebs_editor_label" title="Button"><input type="radio" name="ebsp_editor_opt" id="ebsp_media" value="media" <?php echo ($ebsp_editor_opt == 'media') ? 'checked=checked' : '' ?> style="display: none" class="ebs_editor_style"><img src="<?php echo EBS_ASSET_URL.'images/button.png'?>"></label>

                    </p>
                </div>
                <div class="ebs_details" ><label class="ebs_setting_label">Number of Columns in a Grid</label><p><input type="text" name="column_number" value="<?php echo $column_number; ?>">
                    </p>
                </div>
                <div class="ebs_details" ><label class="ebs_setting_label">Shortcode Prefix</label>
                    <p><input type="text" name="shortcode_prefix" value="<?php echo $shortcode_prefix; ?>">
                    </p>
                </div>
                <div class="ebs_details" ><label class="ebs_setting_label">Backward prefix Compatibility</label>
                    <p>
                        <?php foreach($shortcode_backward as $val){
                           echo '<input type="checkbox" name="shortcode_backward_arr[]" id="ebs_shortcode_backward_'.$val.'" '.(in_array($val,$shortcode_backward_arr)?'checked="checked"':'').' value="'.$val.'"><label for="ebs_shortcode_backward_'.$val.'">'.($val==''?'Basic':$val).'</label>';
                        }?>

                    </p>
                </div>
            </div>
            <!-- EBS Global Pagination-->
            <h3 class="accordion_header"><?php _e('Pagination Setup',$ebsp_domain_name)?></h3>
            <div class="ebs_accordion_section">
                <div class="ebs_details">
                    <label class="ebs_setting_label"><?php _e('Pagination Style',$ebsp_domain_name)?></label>
                    <p> <input type="radio" name="ebs_paginition[paginition_style]" id="pagi_pagination" value="pagination" <?php echo ebs_get_pagination_opt('paginition_style')=='' || ebs_get_pagination_opt('paginition_style')=='pagination'?'checked="checked"':''; ?>><label class="img_select" for="pagi_pagination"><?php echo '<img src="'.EBS_ASSET_URL.'images/1.png" />'?></label>
                        <input type="radio" name="ebs_paginition[paginition_style]" id="pagi_box" value="pagination_box" <?php echo ebs_get_pagination_opt('paginition_style')=='pagination_box'?'checked="checked"':''; ?>><label class="img_select" for="pagi_box"><?php echo '<img src="'.EBS_ASSET_URL.'images/2.png" />'?></label>
                        <input type="radio" name="ebs_paginition[paginition_style]" id="pagi_circle" value="pagination_circle" <?php echo  ebs_get_pagination_opt('paginition_style')=='pagination_circle'?'checked="checked"':''; ?>><label class="img_select" for="pagi_circle"><?php echo '<img src="'.EBS_ASSET_URL.'images/3.png" />'?></label>
                        <input type="radio" name="ebs_paginition[paginition_style]" id="pagi_rounded_corner" value="pagination_rounded_corner" <?php echo ebs_get_pagination_opt('paginition_style')=='pagination_rounded_corner'?'checked="checked"':''; ?>><label class="img_select" for="pagi_rounded_corner"><?php echo '<img src="'.EBS_ASSET_URL.'images/4.png" />'?></label>
                    </p>
                </div>
                <div class="ebs_details pagination-style">
                    <label class="ebs_setting_label"><?php _e('Pagination Color Settings',$ebsp_domain_name)?></label>
                    <div id="oscitas-table-inner">
                    <table class="table_data multiple-colm_tbl">
                        <thead>
                            <tr>
                                <th class="width150"><?php _e('Type',$ebsp_domain_name)?></th>
                                <th class="width350"><?php _e('Background Color',$ebsp_domain_name)?></th>
                                <th class="width350"><?php _e('Text Color',$ebsp_domain_name)?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="width150"><?php _e('Default',$ebsp_domain_name)?></td>
                            <td class="width350"><input type="text" name="ebs_paginition[default_color]" id="default_color" value="<?php echo ebs_get_pagination_opt('default_color'); ?>" class="wp_colorpicker" data-default-color="#FFFFFF"></td>
                            <td class="width350"><input type="text" name="ebs_paginition[default_text_color]" id="default_text_color" data-default-color="#DDDDDD" value="<?php echo ebs_get_pagination_opt('default_text_color'); ?>" class="wp_colorpicker"></td>
                        </tr>
                        <tr>
                            <td><?php _e('Hover',$ebsp_domain_name)?></td>
                            <td><input type="text" name="ebs_paginition[hover_color]" id="hover_color" value="<?php echo ebs_get_pagination_opt('hover_color'); ?>" class="wp_colorpicker" data-default-color="#EEEEEE"></td>
                            <td><input type="text" name="ebs_paginition[hover_text_color]" id="hover_text_color" value="<?php echo ebs_get_pagination_opt('hover_text_color'); ?>" class="wp_colorpicker" data-default-color="#DDDDDD"></td>
                        </tr>
                        <tr>
                            <td><?php _e('Current',$ebsp_domain_name) ?></td>
                            <td><input type="text" name="ebs_paginition[current_color]" id="current_color" value="<?php echo ebs_get_pagination_opt('current_color'); ?>" class="wp_colorpicker" data-default-color="#428BCA"></td>
                            <td><input type="text" name="ebs_paginition[current_text_color]" id="current_text_color" value="<?php echo ebs_get_pagination_opt('current_text_color'); ?>" class="wp_colorpicker" data-default-color="#FFFFFF"></td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="ebs_btn"><input type="submit" name="ebs_submit" class="button-primary" value="<?php _e('Update Settings',$ebsp_domain_name)?>"></div>

    </form>
</div>

