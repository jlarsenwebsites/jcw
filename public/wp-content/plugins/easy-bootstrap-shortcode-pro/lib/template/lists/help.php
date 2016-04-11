<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>List</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <div class="short-detail-left">
                  <?php echo do_shortcode('['.$ebs_prefix.'list]
['.$ebs_prefix.'li type="glyphicon-arrow-right"]Donec tempor quam vitae ornare convallis.[/'.$ebs_prefix.'li]
['.$ebs_prefix.'li type="glyphicon-arrow-right"]Phasellus mattis ligula vel condimentum malesuada.[/'.$ebs_prefix.'li]
['.$ebs_prefix.'li type="glyphicon-arrow-right"]Mauris cursus tellus sit amet lectus commodo, at bibendum ante condimentum.[/'.$ebs_prefix.'li]
[/'.$ebs_prefix.'list]'); ?>
              </div>
              <div class="short-detail-right">
                  <?php echo do_shortcode('['.$ebs_prefix.'list]
['.$ebs_prefix.'li type="custom" icon="fa-star" icontype="fa" iconcolor="#1ab373"]Donec tempor quam vitae ornare convallis.[/'.$ebs_prefix.'li]
['.$ebs_prefix.'li type="custom" icon="fa-star" icontype="fa" iconcolor="#1ab373"]Phasellus mattis ligula vel condimentum malesuada.[/'.$ebs_prefix.'li]
['.$ebs_prefix.'li type="custom" icon="fa-star" icontype="fa" iconcolor="#1ab373"]Mauris cursus tellus sit amet lectus commodo, at bibendum ante condimentum.[/'.$ebs_prefix.'li]
[/'.$ebs_prefix.'list]'); ?>
              </div>
          </div>
        <div class="shortcode_desc">List show responsive list item in front end.To add Lists to your Page/Post click on List Shortcode icon. A popup will appear, select predefined list style or make your custom list style provide value for No. of list item and custom class, click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[list]
[li type="custom" icon="fa-star" icontype="fa" iconcolor="#1ab373"]...[/li]
[li type="custom" icon="fa-star" icontype="fa" iconcolor="#1ab373"]...[/li]
[li type="custom" icon="fa-star" icontype="fa" iconcolor="#1ab373"]...[/li][/list]
</pre>
    </div>
    <div class="shortcode-parameter">[List] Parameters are:</div>
    <table class="shortcode-table">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required</th>
            <th>Values</th>
            <th>Default</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>class</td>
            <td>Add custom class to list div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <div class="shortcode-parameter">[Li] Parameters are:</div>
    <table class="shortcode-table">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required</th>
            <th>Values</th>
            <th>Default</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>type</td>
            <td>specifty the list style front end</td>
            <td>optional</td>
            <td>glyphicon-arrow-right, glyphicon-ok, glyphiconplus, glyphicon-minus</td>
            <td></td>
        </tr>
        <tr>
            <td>icon</td>
            <td>If you want custom list type add your desired icon</td>
            <td>optional</td>
            <td><a target="_blank" href="http://getbootstrap.com/components/#glyphicons-glyphs">Glyphicon Icons</a> &nbsp;<a href="http://fontawesome.io/icons/">Font Awesome Icons</a></td>
            <td></td>
        </tr>
        <tr>
            <td>icontype</td>
            <td>Wether glyphicon or font awesome icon</td>
            <td>requied</td>
            <td>glyphicon, fa</td>
            <td></td>
        </tr>
        <tr>
            <td>color</td>
            <td>Specifies Icon Color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>