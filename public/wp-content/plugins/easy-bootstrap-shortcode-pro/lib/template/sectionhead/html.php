<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>"><table id="oscitas-table" class="form-table">
            <tr>
                <th><label for="oscitas-animation-effect"><?php _e('Shortcode') ?></label></th>
                <td><textarea name="shortcode" id="oscitas-direct-insert-shortcode">
                        <?php echo $sData['shortcode'];?></textarea>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Add section heading provide your heading and class and insert shortcode',$ebsp_domain_name);  ?>"></span></td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>