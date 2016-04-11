<?php
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']);?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>"><table id="oscitas-table" class="form-table">
            <tr>
                <th><label for="oscitas-animation-effect"><?php _e('Shortcode') ?></label></th>
                <td><textarea name="oscitas-animation-effect" id="oscitas-direct-insert-shortcode" readonly="readonly"></textarea>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('This shordcode is used to add pagination to page content in stylish and desired style this shorcode is not editable and doesn\'t accept any parameter',$ebsp_domain_name);  ?>"></span></td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>