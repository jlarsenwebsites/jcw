<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Widgets</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
                <div class="short-detail-left">
                    <?php echo do_shortcode('['.$ebs_prefix.'oscwidget type="WP_Widget_Recent_Posts" class="widget_recent_entries" attr="|;osc;|title="Recent Posts"|;osc;|number="3"|;osc;|show_date="on""]'); ?>
                </div>
                <div class="short-detail-right">
                    <?php echo do_shortcode('['.$ebs_prefix.'oscwidget type="WP_Widget_Calendar" class="widget_calendar" attr="|;osc;|title="Our Events""]'); ?>
                </div>

          </div>
        <div class="shortcode_desc">widgets shortcode is used to add any of your wordpress widget to page content. To add widgets your Page/Post click on Widgets Shortcode icon. A popup will appear, select widget you want to add , widget required fields will be seen right side of popup. You can fill attributes required for that widget . Click on "Insert" Button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[oscwidget type="WP_Widget_Categories" attr=",title='test cat',dropdown='on',count='on'"]
</pre>
    </div>
    <div class="shortcode-parameter">[oscwidget] Parameters are:</div>
    <table class="shortcode-table">
        <thead>
        <tr><th>Parameter</th>
            <th>Description</th>
            <th>Required</th>
            <th>Values</th>
            <th>Default</th>
        </tr></thead>
        <tbody>
        <tr>
            <td>type</td>
            <td>Specifies the widget Class.</td>
            <td>required</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>attr</td>
            <td>Widget attributes to customize widget.</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>