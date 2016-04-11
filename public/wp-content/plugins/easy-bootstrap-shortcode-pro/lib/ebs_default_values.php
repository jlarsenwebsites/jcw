<?php
/*
 * this file contains default values for all ebs shortcodes. each array is created as 'shortcodename'.'_data'
 */
$ebs_prefix=get_option('EBS_SHORTCODE_PREFIX','ebs_');

$animation_data=array('effect'=>'pulse','time'=>'everytime','duration'=>1,'delay'=>0,'class'=>'');
$blur_data=array('deviation'=>10,'class'=>'');

$boxesframes_data=array('shadow'=>'','bgcolor'=>'#ffffff','fgcolor'=>'#000000','class'=>'');
$btngrptool_data=array('shortcode'=>"[{$ebs_prefix}btngrptoolbar class=\"yourcustomclass\"][/{$ebs_prefix}btngrptoolbar]");

$buttons_data=array('style'=>'btn-default','size'=>'btn-lg','bgcolor'=>'','fgcolor'=>'','hoverbgcolor'=>'','hoverfgcolor'=>'','type'=>'link','fgcolor'=>'','icon'=>'','icontype'=>'','iconalign'=>'left','iconcolor'=>'','title'=>'Button','link'=>'#','new_window'=>'','block'=>'','class'=>'','modal'=>'','modal_size'=>'',);

$carousel_data=array('csstyle'=>'multiitem','itemnum'=>3,'order'=>'ASC','orderby'=>'rand','slideineffect'=>'','slideouteffect'=>'','transition'=>'','cstype'=>'link','interval'=>'','pause'=>'','play_pause'=>'','navigation'=>'side','bullets'=>'','navcolor'=>'','class'=>'');

$deslist_data=array('style'=>'','item'=>3,'class'=>'');
$progressbar_data=array('ebsp_pb_type'=>'default', 'type'=>'','stripped'=>'','animated'=>'','bar_circle'=>'full','border'=>'','lin_percent'=>'','lin_offset'=>'','barcolor'=>'','bgcolor'=>'','fillcolor'=>'','fontcolor'=>'','size'=>50,'fontsize'=>15,'pbwidth'=>50,'ebsp_pb_animation'=>'true','label'=>'','label_style'=>'outside','icon'=>'','iconcolor'=>'','iconsize'=>15,'lin_bartype'=>'type_1','lin_max'=>'','lin_increment'=>1,'lin_value'=>'','lin_fillcolor1'=>'','lin_fillcolor2'=>'','lin_remaincolor'=>'','lin_fontcolor'=>'','lin_offsetcolor'=>'','value'=>50,'class'=>'');
$deslist_data=array('style'=>'','item'=>3,'class'=>'');
$dropcaps_data=array('style'=>'dropcap-standard','content'=>'A','bg'=>'#F9F9F9','color'=>'#000000','class'=>'');


$gmaps_data=array('type'=>'ROADMAP','width'=>'false','height'=>400,'latitude'=>0,'longitude'=>0,'address'=>'','zoom'=>3,'class'=>'');

$highlights_data=array('type'=>'existing','hightlight'=>'yellow','bg'=>"#F9F9F9",'color'=>"#000000", 'class'=>'');

$icon_data=array('icontype'=>'glyphicon','icon'=>'glyphicon-asterisk','iconcolor'=>"",'fontsize'=>"", 'class'=>'');

$iconhead_data=array('icontype'=>'','icon'=>'','iconcolor'=>"",'headingtype'=>"h1",'heading'=>"Heading", 'class'=>'');
$image_data=array('src'=>'','shape'=>'','class'=>'','drops'=>500,'alt'=>'');

$labels_data=array('type'=>'label-default','content'=>'Label','class'=>'');

$lead_data=array('alignment'=>'center','content'=>'Content','class'=>'');

$lists_data=array('type'=>'','icontype'=>'glyphicon','icon'=>'glyphicon-asterisk','iconcolor'=>'','item'=>3,'class'=>'');

$notifications_data=array('type'=>'alert-warning','close'=>'','class'=>'');

$oscpopover_data=array('style'=>'top','title'=>'A title','content'=>'Your Content','tigger'=>'click','size'=>'','type'=>'btn-default','buttontext'=>'Popover','class'=>'');

$pageheader_data=array('heading'=>'Heading  ','headingtype'=>'h1','headcolor'=>'','fontsize'=>'','border'=>'','bordercolor'=>'','margin'=>'','padding'=>'','class'=>'');

$panel_data=array('type'=>'panel-default','footer'=>'','class'=>'');

$recentpost_data=array('layout'=>'col-4','post_num'=>3,'post_excerpt'=>'','class'=>'');

$recentwork_data=array('layout'=>'col-4','project_num'=>3,'project_excerpt'=>'','class'=>'');

$rule_data=array('style'=>'rule-dotted','margin'=>'','class'=>'');

$sectionhead_data=array('shortcode'=>"[{$ebs_prefix}sectionheading class=\"yourcustomclass\"]Section Heading[/{$ebs_prefix}sectionheading]");


$separator_data=array('content'=>'Separator','style'=>'','margin'=>'','class'=>'');

$slider_data=array('content'=>'Separator','style'=>'','margin'=>'','class'=>'');

$social_data=array('posts'=>15,'username'=>'','link'=>'http://www.facebook.com/oscitas','width'=>600,'height'=>600,'tweets'=>10,'bordercolor'=>'#5B8090','linkscolor'=>'#1985B5','type'=>'fbox','variant'=>'light','faces'=>'true','stream'=>'true','noborders'=>'','nofooter'=>'','noheader'=>'','class'=>'');

$table_data=array('width'=>'100%','columns'=>4,'rows'=>4,'hover'=>'','responsive'=>'','tablestyle'=>'','class'=>'');

$testimonial_data=array('testimonial'=>'['.$ebs_prefix.'testimonial author="Author Name" class="yourcustomclass" designation="Author Designation" ]Your testimonail[/'.$ebs_prefix.'testimonial]');
$thumbnail_data=array('source'=>'','link'=>'','border'=>'','class'=>'','drops'=>500,'alt'=>'');
$tooltip_data=array('style'=>'top','type'=>'link','tooltiptext'=>'Tooltip','tooltiplink'=>'#','linktext'=>'Hover Me','class'=>'');


$vertical_space_data=array('space'=>'','class'=>'');

$video_data=array('type'=>'youtube','link'=>'','width'=>'100%','height'=>'','class'=>'');
$well_data=array('type'=>'','content'=>'Your Content','class'=>'');
$jumbotron_data=array('bgcolor'=>'','class'=>'');
$badge_data=array('bgcolor'=>'','color'=>'','value'=>1,'class'=>'');

$wptestimonial_data=array('project_num'=>3,'project_excerpt'=>'','class'=>'');

$wpcolumns_data=array('wrap' => '', 'wrap_class' =>'', 'numofcolumns' => 1, 'twocolopt' => '6$6', 'threecolopt' => '4$4$4', 'lgrowhide' => '', 'lgclear_1' => '', 'lg_1' => 12, 'lgoff_1' => 0, 'lghide_1' => '', 'mdrowhide' => '', 'mdclear_1' => '', 'md_1' => 12, 'mdoff_1' => 0, 'mdhide_1' => '', 'smrowhide' => '', 'smclear_1' => '', 'sm_1' => 12, 'smoff_1' => 0, 'smhide_1' => '', 'xsrowhide' => '', 'xsclear_1' => '', 'xs_1' => 12, 'xsoff_1' => 0, 'xshide_1' => '', 'am_1' => 'none', 'at_1' => 'everytime', 'cl_1' =>'', 'class' =>'' );

$btngrp_data=array('type'=>'','style'=>'','btngrp'=>array(0=>array('type'=>'btn-default','linktype'=>'link','link'=>'#','target'=>'','title'=>'Button')), 'class'=>'');

$dropdown_data=array('heading'=>'Dropdown','type'=>'','style'=>'btn-default','split'=>'','dropup'=>'dropdown','dropdown'=>array(0=>array('type'=>'menuitem','link'=>'#','disabled'=>'','title'=>'Dropdown Item')), 'class'=>'');

$slider_data=array('interval'=>'','controls'=>'','bullets'=>'','pause'=>'','wrap'=>'','captioncolor'=>'','navcolor'=>'','slider'=>array(0=>array('title'=>'','image'=>'','caption'=>'')),'activeslider'=>0,'class'=>'');

$toggles_data=array('opencloseicon'=>'','openfirst'=>'','toggle'=>array(0=>array('title'=>'Title','icon'=>'','icontype'=>'','iconcolor'=>'')), 'class'=>'');

$tabs_data=array('responsive'=>'','position'=>'','pills'=>'','icon'=>'','icontype'=>'','title'=>'More','tabtypelg'=>'more','tabtypemd'=>'more','tabtypesm'=>'more','tabtypexs'=>'more','tabcolor'=>'','tabhcolor'=>'','tabhcolor'=>'','atabcolor'=>'','atabhcolor'=>'','tabconcolor'=>'','tabconbgcolor'=>'','tab'=>array(0=>array('title'=>'Title','icon'=>'','icontype'=>'','iconcolor'=>'')),'activetab'=>0, 'class'=>'');
$servicebox_data=array('boxtype'=>'icon','thumbnailsrc'=>'','icon'=>'','icontype'=>'','iconbg'=>'iconcircle','icon_size'=>40, 'iconbg_size'=>100, 'iconbg_radius'=>50, 'iconstyle'=>'inline', 'bordercolor'=>'', 'hbordercolor'=>'', 'borderwidth'=>2, 'margin_top'=>30, 'iconalign'=>'none', 'margin_bottom'=>30, 'iconbgcolor'=>'#FFFFFF', 'iconcolor'=>'#777777', 'hover_iconbgcolor'=>'#FFFFFF', 'hover_iconcolor'=>'#777777', 'bgcolor'=>'#FFFFFF', 'fgcolor'=>'#777777', 'iconhover'=>'default','boxstyle'=>'default','hover'=>'default', 'hover_bgcolor'=>'#FFFFFF', 'hover_fgcolor'=>'#777777', 'readmore_link'=>'#', 'readmore_text'=>'Read More', 'readmore_type'=>'', 'readmorestyle'=>'default', 'readmore_bgcolor'=>'#FFFFFF', 'readmore_fgcolor'=>'#777777', 'headingtype'=>'h1', 'heading'=>'Heading', 'class'=>'');


$pricingtable_data=array('pt_type'=>'box','coltype'=>'multicol','currency'=>'$','num_ptcolumns'=>1,'coltype'=>'','coltype'=>'','coltype'=>'','coltype'=>'','coltype'=>'','coltype'=>'','pricing_table'=>array(1=>array('title'=>'Title','icon'=>'','icontype'=>'','iconcolor'=>'')), 'class'=>'');