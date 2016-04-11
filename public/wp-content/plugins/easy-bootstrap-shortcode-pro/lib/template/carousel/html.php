<?php
$slideineffect=array('' => 'None', 'pulse' => 'Pulse', 'flipInX' => 'flipInX', 'fadeIn' => 'fadeIn', 'fadeInUp' => 'fadeInUp', 'fadeInDown' => 'fadeInDown', 'fadeInLeft' => 'fadeInLeft', 'fadeInRight' => 'fadeInRight', 'fadeInUpBig' => 'fadeInUpBig', 'fadeInDownBig' => 'fadeInDownBig', 'fadeInRightBig' => 'fadeInRightBig', 'bounceIn' => 'bounceIn', 'bounceInDown' => 'bounceInDown', 'bounceInLeft' => 'bounceInLeft', 'bounceInRight' => 'bounceInRight', 'rotateInUpLeft' => 'rotateInUpLeft', 'rotateInDownLeft' => 'rotateInDownLeft', 'rotateInUpRight' => 'rotateInUpRight', 'rotateInDownRight' => 'rotateInDownRight', 'lightSpeedRight' => 'lightSpeedRight', 'lightSpeedLeft' => 'lightSpeedLeft', 'rollin' => 'rollin');
$slideouteffect=array('' => 'None','fadeOut' => 'fadeOut','rollin'=>'rollin');
$slideineffect = array(
    '',
    'Parallax',
    "bounce",
    "shake",
    "flash",
    "tada",
    "swing",
    "wobble",
    "pulse",
    "flip",
    "flipInX",
    "flipInY",
    "fadeIn",
    "fadeInUp",
    "fadeInDown",
    "fadeInLeft",
    "fadeInRight",
    "fadeInUpBig",
    "fadeInDownBig",
    "fadeInLeftBig",
    "fadeInRightBig",
    "bounceIn",
    "bounceInUp",
    "bounceInDown",
    "bounceInLeft",
    "bounceInRight",
    "rotateIn",
    "rotateInUpLeft",
    "rotateInDownLeft",
    "rotateInUpRight",
    "rotateInDownRight",
    "hinge",
    "rollIn",
    "lightSpeedIn",
    "wiggle"
);
$slideouteffect = array(
    '',
    'Parallax',
    "bounce",
    "shake",
    "flash",
    "tada",
    "swing",
    "wobble",
    "pulse",
    "flip",
    "flipOutX",
    "flipOutY",
    "fadeOut",
    "fadeOutUp",
    "fadeOutDown",
    "fadeOutLeft",
    "fadeOutRight",
    "fadeOutUpBig",
    "fadeOutDownBig",
    "fadeOutLeftBig",
    "fadeOutLeftBig",
    "bounceOut",
    "bounceOutUp",
    "bounceOutDown",
    "bounceOutLeft",
    "bounceOutRight",
    "rotateOut",
    "rotateOutUpLeft",
    "rotateOutDownLeft",
    "rotateOutUpRight",
    "rotateOutDownRight",
    "hinge",
    "rollOut",
    "lightSpeedOut",
    "wiggle");

$slideouteffectList='';
$slideineffectList='';
foreach($slideineffect as $val){
    $newval=$val==''?__('None'):$val;
    $sel=$sData['slideineffect']==$val?'selected="selected"':'';
    $slideineffectList.='<option value="'.$val.'" '.$sel.'>'.$newval.'</option>';
}
foreach($slideouteffect as $val){
    $newval=$val==''?__('None'):$val;
    $sel=$sData['slideouteffect']==$val?'selected="selected"':'';
    $slideouteffectList.='<option value="'.$val.'" '.$sel.'>'.$newval.'</option>';
}
$post_array=array('post'=>'Post');
$posttype=get_post_types( array(
    '_builtin' => false,
    'public' => true
),'objects' );
foreach($posttype as $k => $p){
    $post_array[$k]=$p->label;
}
$post_type='<ul class="ebs_posttype">';
$count=1;

$post_type='';
$post_type.='<div id="ebs_car_accordion">';
foreach($post_array as $ind => $val){
    $post_type.='<div class="group"><h3><table><thead><th><span class="car_sortable glyphicon glyphicon-sort"></span></th><th>'.$val.'</th></table></h3><div class="cour_contnet">';
    $taxnomies= get_object_taxonomies( $ind);
$post_type.='<div class="cur_post_spec"><ul><li><label for="oscitas-carousel-post'.$count.'" >Include</label><input type="checkbox" class="car_post_check" data-check="osc_post_table_'.$ind.'" id="oscitas-carousel-post'.$count.'" value="'.$ind.'" name="ebs_cs_'.$ind.'" '.(isset($sData['ebs_cs_'.$ind]) && $sData['ebs_cs_'.$ind]==$ind?'checked="checked"':'').'></li><li><label for="oscitas-carousel-postnum'.$count.'">Number of Post</label><input type="text" id="oscitas-carousel-postnum'.$count.'" name="ebs_cs_num_'.$ind.'" value="'.(isset($sData['ebs_cs_num_'.$ind])?$sData['ebs_cs_num_'.$ind]:4).'"></li></ul></div>';
    if($taxnomies){
        $post_type.='<table class="osc_post_table_'.$ind.' osc_post_table"><thead><tr><th>Name</th><th>Include</th><th>Count</th></tr></thead><tbody>';

        foreach($taxnomies as $tax){

                $categories= get_categories( array('type'=>$ind,'taxonomy'=>$tax,'hide_empty'=>0) );
                if($categories){
                    $post_type.='<tr><td colspan="3">'.$tax.'<input type="hidden" class="cau_post_taxonomy" name="cau_post_name'.$tax.'" value="'.$tax.'"></td></tr>';
                    foreach($categories as $category) {

                    $term=$category->term_id;
                    $post_type.='<tr><td>'.$category->name.'</td><td><input type="checkbox" id="oscitas-carousel-cat'.$term.'" value="'.$term.'" data-tax="'.$tax.'" name="ebs_cs_cat_'.$term.'" '.(isset($sData['ebs_cs_cat_'.$term]) && $sData['ebs_cs_cat_'.$term]==$term?'checked="checked"':'').' class="osc_cat_checkbox"></td><td><input type="text" id="oscitas-carousel-catnum'.$term.'" name="ebs_cs_cat_num_'.$term.'" value="'.(isset($sData['ebs_cs_cat_num_'.$term])?$sData['ebs_cs_cat_num_'.$term]:4).'"></td></tr>';
                }
            }

        }
        $post_type.='</tbody></table>';
    } else{
        $post_type.='<b class="osc_post_table_'.$ind.'">No Taxonomies found</b>';
    }
    $post_type.='</div></div>';
    $count++;
}
$post_type.='</div>';
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']); echo $preset_markup; ?></h2>
    <div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">

        <table id="oscitas-table" class="form-table" style="margin-top: 0px;">
            <tr>
                <th colspan="4"><label for="oscitas-carousel-class"><?php  _e('Post Type',$ebsp_domain_name);  ?></label></th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $post_type ?>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Choose post type whose images you want to display in carousel, and provide number of post value for each selected post type',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr >
                <th><label for="oscitas-carousel-order"><?php  _e('Order',$ebsp_domain_name);  ?></label></th>
                <td><select name="order" id="oscitas-carousel-order">
                        <option value="ASC" <?php check_ebs_selected($sData['order'],'ASC');?>><?php  _e('Ascending',$ebsp_domain_name); ?></option>
                        <option value="DESC" <?php check_ebs_selected($sData['order'],'DESC');?>><?php  _e('Descending',$ebsp_domain_name); ?></option>
                        </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Designates the ascending or descending order of the \'orderby\' parameter.',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-carousel-orderby"><?php  _e('Order By',$ebsp_domain_name);  ?></label></th>
                <td><select name="orderby" id="oscitas-carousel-orderby">
                        <option value="rand" <?php check_ebs_selected($sData['orderby'],'rand');?>><?php  _e('Random',$ebsp_domain_name); ?></option>
                        <option value="ID" <?php check_ebs_selected($sData['orderby'],'ID');?>><?php  _e('Post ID',$ebsp_domain_name); ?></option>
                        <option value="author" <?php check_ebs_selected($sData['orderby'],'author');?>><?php  _e('Post Author',$ebsp_domain_name); ?></option>
                        <option value="title" <?php check_ebs_selected($sData['orderby'],'title');?>><?php  _e('Post Title',$ebsp_domain_name); ?></option>
                        <option value="name" <?php check_ebs_selected($sData['orderby'],'name');?>><?php  _e('Post Slug',$ebsp_domain_name); ?></option>
                        <option value="date" <?php check_ebs_selected($sData['orderby'],'date');?>><?php  _e('Post Date',$ebsp_domain_name); ?></option>
                        <option value="modified" <?php check_ebs_selected($sData['orderby'],'modified');?>><?php  _e('Last Modified Date',$ebsp_domain_name); ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Sort carousel posts by parameter',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label><?php  _e('Carousel Style',$ebsp_domain_name);  ?></label></th>
                <td colspan="3" class="oscitas-carousel-style"><input type="radio" name="csstyle" id="oscitas-carousel-style_multiitem"  value="multiitem" <?php echo isset($sData['csstyle']) && $sData['csstyle']=='multiitem'?'checked="checked"':''; ;?> class="checknumitem"/><label for="oscitas-carousel-style_multiitem"><?php  _e('Multi Item',$ebsp_domain_name);  ?></label>
                    <input type="radio" name="csstyle" id="oscitas-carousel-style_singleitem" class="checknumitem" value="singleitem" <?php echo isset($sData['csstyle']) && $sData['csstyle']=='singleitem'?'checked="checked"':''; ;?>/><label for="oscitas-carousel-style_singleitem"><?php  _e('Single Item',$ebsp_domain_name);  ?></label>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Weather to show a multiitem carousel or single slider like carousel',$ebsp_domain_name); ?>"></span></td>

            </tr>
            <tr class="numitem">
                <th><label for="oscitas-carousel-itemnum"><?php  _e('Number of Items',$ebsp_domain_name);  ?></label></th>
                <td colspan="3"><input type="text" name="itemnum" id="oscitas-carousel-itemnum" value="<?php echo $sData['itemnum'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If chosen multi item carousel, how many item will be shown at a time',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="numitem">
                <th><label for="oscitas-carousel-slideineffect"><?php  _e('Slide In Effect',$ebsp_domain_name);  ?></label></th>
                <td><select name="slideineffect" id="oscitas-carousel-slideineffect">
                        <?php echo $slideineffectList;?></select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If chosen multi item carousel, choose an effect which will be applied on new coming carousel slide',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-carousel-slideouteffect"><?php  _e('Slide Out Effect',$ebsp_domain_name);  ?></label></th>
                <td><select name="slideouteffect" id="oscitas-carousel-slideouteffect">
                        <?php echo $slideouteffectList;?></select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If chosen multi item carousel, choose an effect which will be applied on outing carousel slide',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr class="transition">
                <th><label for="oscitas-carousel-transition"><?php  _e('Transition Style',$ebsp_domain_name);  ?></label></th>
                <td colspan="3"><select id="oscitas-carousel-transition" name="transition">
                        <option value="" <?php echo $sData['transition']==''?'selected="selected"':'';?>><?php  _e('None',$ebsp_domain_name);  ?></option>
                        <option value="fade" <?php echo $sData['transition']=='fade'?'selected="selected"':'';?>><?php  _e('fade',$ebsp_domain_name);  ?></option>
                        <option value="backSlide" <?php echo $sData['transition']=='backSlide'?'selected="selected"':'';?>><?php  _e('backSlide',$ebsp_domain_name);  ?></option>
                        <option value="goDown" <?php echo $sData['transition']=='goDown'?'selected="selected"':'';?>><?php  _e('goDown',$ebsp_domain_name);  ?></option>
                        <option value="fadeUp" <?php echo $sData['transition']=='fadeUp'?'selected="selected"':'';?>><?php  _e('fadeUp',$ebsp_domain_name);  ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If chosen single item carousel, ',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th class="main_dp_th"><label for="oscitas-carousel-type_link"><?php  _e('Carousel Type',$ebsp_domain_name);  ?></label></th>
                <td colspan="3" class="oscitas-carousel-style">
                    <input type="radio" name="cstype" id="oscitas-carousel-type_link"  value="link" <?php echo isset($sData['cstype']) && $sData['cstype']=='link'?'checked="checked"':''; ;?>/><label for="oscitas-carousel-type_link"><?php  _e('Link',$ebsp_domain_name);  ?></label>
                    <input type="radio" name="cstype" id="oscitas-carousel-type_gallery"  value="gallery" <?php echo isset($sData['cstype']) && $sData['cstype']=='gallery'?'checked="checked"':''; ;?>/><label for="oscitas-carousel-type_gallery"><?php  _e('Gallery',$ebsp_domain_name);  ?></label>
                    <input type="radio" name="cstype" id="oscitas-carousel-type_none"  value="none" <?php echo isset($sData['cstype']) && $sData['cstype']=='none'?'checked="checked"':''; ;?> /><label for="oscitas-carousel-type_none"><?php  _e('None',$ebsp_domain_name);  ?></label>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('choose gallery to open original image in popup, link to redirect to post and none for none of these',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-carousel-interval"><?php  _e('Interval',$ebsp_domain_name);  ?></label></th>
                <td colspan="3"><input type="text" name="interval" id="oscitas-carousel-interval" value="<?php echo $sData['interval'];?>"/>&nbsp;&nbsp;
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If you want an auto play carousel provide a interval time in milliseconds',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-carousel-pause"><?php  _e('Pause On Hover',$ebsp_domain_name);  ?></label></th>
                <td><input type="checkbox" name="pause" id="oscitas-carousel-pause" <?php echo isset($sData['pause']) && $sData['pause']=='true'?'checked="checked"':''; ;?>  value="true"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('If carousel is auto play enabled  whether to stop slide animation on hover',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-carousel-play_pause"><?php  _e('Show Play/Pause button',$ebsp_domain_name);  ?></label></th>
                <td><input type="checkbox" name="play_pause" id="oscitas-carousel-play_pause" <?php echo isset($sData['play_pause']) && $sData['play_pause']=='true'?'checked="checked"':''; ;?> value="true"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Show play pause button to control carousel animation',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-carousel-navigation"><?php  _e('Navigation Position',$ebsp_domain_name);  ?></label></th>
                <td><select id="oscitas-carousel-navigation" name="navigation">
                        <option value="side"  <?php echo $sData['navigation']=='side'?'selected="selected"':'';?>><?php  _e('Side',$ebsp_domain_name);  ?></option>
                        <option value="bottom" <?php echo $sData['navigation']=='bottom'?'selected="selected"':'';?>><?php  _e('Bottom',$ebsp_domain_name);  ?></option>
                        <option value="" <?php echo $sData['navigation']==''?'selected="selected"':'';?>><?php  _e('None',$ebsp_domain_name);  ?></option>
                    </select>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Do u want to show next and previous link, if yes then on bottom of carousel or at sides',$ebsp_domain_name); ?>"></span></td>

                <th><label for="oscitas-carousel-bullets"><?php  _e('Show Navigation Bullets',$ebsp_domain_name);  ?></label></th>
                <td><input type="checkbox" name="bullets" id="oscitas-carousel-bullets" <?php echo isset($sData['bullets']) && $sData['bullets']=='true'?'checked="checked"':''; ;?> value="true"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Whether to show bullets control at bottom of carousel',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-carousel-navcolor"><?php  _e('Navigation Color',$ebsp_domain_name);  ?></label></th>
                <td colspan="3"><input type="text" name="navcolor" id="oscitas-carousel-navcolor" class="color" value="<?php echo $sData['navcolor'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Color Of navigation bullets and linkss',$ebsp_domain_name); ?>"></span></td>
            </tr>
            <tr>
                <th><label for="oscitas-carousel-class"><?php  _e('Custom Class',$ebsp_domain_name);  ?></label></th>
                <td colspan="3"><input type="text" name="class" id="oscitas-carousel-class" value="<?php echo $sData['class'];?>"/>
                    <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="<?php  _e('Provide a custom class which will be applied on shortcode container, with help of this you can customize js and css for complied shortcode',$ebsp_domain_name); ?>"></span></td>
            </tr>
        </table>
        <?php echo $ebs_button_section_markup; ?>
    </div>
<?php

$return_ebs=ob_get_clean();
?>