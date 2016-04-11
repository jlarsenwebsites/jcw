<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Tables</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <div class="short-detail-left">
                    <?php echo do_shortcode('['.$ebs_prefix.'table width ="100%" style ="" responsive ="false"]
['.$ebs_prefix.'table_head]
['.$ebs_prefix.'th_column]Heading-1[/'.$ebs_prefix.'th_column]
['.$ebs_prefix.'th_column]Heading-2[/'.$ebs_prefix.'th_column]
['.$ebs_prefix.'th_column]Heading-3[/'.$ebs_prefix.'th_column]
['.$ebs_prefix.'th_column]Heading-4[/'.$ebs_prefix.'th_column]
[/'.$ebs_prefix.'table_head]
['.$ebs_prefix.'table_body]
['.$ebs_prefix.'table_row]
['.$ebs_prefix.'row_column]value-1[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-2[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-3[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-4[/'.$ebs_prefix.'row_column]
[/'.$ebs_prefix.'table_row]
['.$ebs_prefix.'table_row]
['.$ebs_prefix.'row_column]value-1[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-2[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-3[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-4[/'.$ebs_prefix.'row_column]
[/'.$ebs_prefix.'table_row]
['.$ebs_prefix.'table_row]
['.$ebs_prefix.'row_column]value-1[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-2[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-3[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-4[/'.$ebs_prefix.'row_column]
[/'.$ebs_prefix.'table_row]
['.$ebs_prefix.'table_row]
['.$ebs_prefix.'row_column]value-1[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-2[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-3[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-4[/'.$ebs_prefix.'row_column]
[/'.$ebs_prefix.'table_row]
[/'.$ebs_prefix.'table_body]
[/'.$ebs_prefix.'table]'); ?>
              </div>
              <div class="short-detail-right">
                  <?php echo do_shortcode('['.$ebs_prefix.'table width ="100%" style ="table-striped table-bordered table-hover" responsive ="true"]
['.$ebs_prefix.'table_head]
['.$ebs_prefix.'th_column]Heading-1[/'.$ebs_prefix.'th_column]
['.$ebs_prefix.'th_column]Heading-2[/'.$ebs_prefix.'th_column]
['.$ebs_prefix.'th_column]Heading-3[/'.$ebs_prefix.'th_column]
['.$ebs_prefix.'th_column]Heading-4[/'.$ebs_prefix.'th_column]
[/'.$ebs_prefix.'table_head]
['.$ebs_prefix.'table_body]
['.$ebs_prefix.'table_row]
['.$ebs_prefix.'row_column]value-1[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-2[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-3[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-4[/'.$ebs_prefix.'row_column]
[/'.$ebs_prefix.'table_row]
['.$ebs_prefix.'table_row]
['.$ebs_prefix.'row_column]value-1[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-2[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-3[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-4[/'.$ebs_prefix.'row_column]
[/'.$ebs_prefix.'table_row]
['.$ebs_prefix.'table_row]
['.$ebs_prefix.'row_column]value-1[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-2[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-3[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-4[/'.$ebs_prefix.'row_column]
[/'.$ebs_prefix.'table_row]
['.$ebs_prefix.'table_row]
['.$ebs_prefix.'row_column]value-1[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-2[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-3[/'.$ebs_prefix.'row_column]
['.$ebs_prefix.'row_column]value-4[/'.$ebs_prefix.'row_column]
[/'.$ebs_prefix.'table_row]
[/'.$ebs_prefix.'table_body]
[/'.$ebs_prefix.'table]'); ?>
              </div>
          </div>
        <div class="shortcode_desc">Tables are responsive bootstrap table. To add Table to your Page/Post click on Table Shortcode icon. A popup will appear, provide value for table width, number of rows and columns, custom class, select table style, check options for table hover effect and responsive table. click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[table width ="100%"  responsive ="false"]
    [table_head]
        [th_column] ... [/th_column]
        [th_column] ... [/th_column]
    [/table_head]
    [table_body]
        [table_row]
            [row_column] ... [/row_column]
            [row_column] ... [/row_column]
        [/table_row]
        [table_row]
            [row_column] ... [/row_column]
            [row_column] ... [/row_column]
        [/table_row]
    [/table_body]
[/table]
</pre>
    </div>
    <div class="shortcode-parameter">[table] Shortcode Parameters are:</div>
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
            <td>width</td>
            <td>Specifies table width</td>
            <td>required</td>
            <td>In % or in px</td>
            <td>100%</td>
        </tr>
        <tr>
            <td>style</td>
            <td>Specifies table style</td>
            <td>optional</td>
            <td>table-striped, table-striped</td>
            <td></td>
        </tr>
        <tr>
            <td>style</td>
            <td>Show hover effect on table</td>
            <td>optional</td>
            <td>table-hover</td>
            <td></td>
        </tr>
        <tr>
            <td>responsive</td>
            <td>Specifies wheather to make table responsive or not</td>
            <td>required</td>
            <td>true, false</td>
            <td>false</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to table div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <div class="shortcode-parameter">[table_head] Parameters are:</div>
    <div class="none_parameter">None</div>
    <div class="shortcode-parameter">[th_column] Parameters are:</div>
    <div class="none_parameter">None</div>
    <div class="shortcode-parameter">[table_body] Parameters are:</div>
    <div class="none_parameter">None</div>
    <div class="shortcode-parameter">[table_row] Parameters are:</div>
    <div class="none_parameter">None</div>
    <div class="shortcode-parameter">[row_column] Parameters are:</div>
    <div class="none_parameter">None</div>
</div>
<?php $ebs_help_content=ob_get_clean();?>