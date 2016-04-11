<?php
$effectlist='';
foreach($ebs_effectlist as $k => $val){
    if($k!='none'){
        $effectlist.='<option value="'.$k.'">'.$val.'</option>';
    }
}
ob_start();
?>
    <h2 class="ebsp_heading"><?php  _e($ebsdata['title']);?></h2>
<div id="<?php echo  $ebsdata['id']; ?>" class="oscitas-container" title="<?php  _e($ebsdata['title']); ?>">
    <div class="multiple_widget_container">
    <?php
    $panel_widgets = array();
    global $wp_widget_factory,$ajaxwidget_array;

    $i = 0;

    foreach($wp_widget_factory->widgets as $class => $info){

        $widget = new $class();
//    echo '<pre>';
//    echo $widget->get_field_id('title');
//    print_r($widget);
        $widget->id = 'temp';
        $widget->number = count($ajaxwidget_array);
        $ajaxwidget_array[$widget->number]=array();
        ob_start();
        $widget->form(array());
        $form = ob_get_clean();

        // Convert the widget field naming into ones that panels uses


        $widget->form = $form;

        $panel_widgets[] = $widget;
    }?>
    <ul class="ebs-widget-list">
        <?php $i = 0; foreach($panel_widgets as $widget) : $i++; ?>
            <li class="ebs-widget-type"
                data-class="<?php echo esc_attr(get_class($widget)) ?>"
                data-form="<?php echo esc_attr($widget->form) ?>"
                data-title="<?php echo esc_attr($widget->name) ?>"
                data-classname="<?php echo esc_attr($widget->widget_options['classname']) ?>"
                >

                <div class="ebs_widget-wrapper">
                    <h3><?php echo esc_html($widget->name) ?></h3>
                    <?php if(!empty($widget->widget_options['description'])) : ?>
                        <small class="description"><?php echo esc_html($widget->widget_options['description']) ?></small>
                    <?php endif; ?>

                </div>
            </li>
        <?php endforeach; ?>

        <div class="clear"></div>
    </ul>
    <?php //echo $ebs_button_section_markup; ?>
</div>
    <div class="right_widget_container"  style="display: none">
    <div class="single_widget_container"></div>
    <div class="single_widget_button_container"> <?php echo $ebs_button_section_markup; ?></div>
    </div>
</div>
<?php

$return_ebs=ob_get_clean();
?>