<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Description List</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">

             <div class="short-detail-left"> <h2>Default List</h2><?php echo do_shortcode('['.$ebs_prefix.'dl]
['.$ebs_prefix.'dlitem heading="Heading 1"]Lorem ipsum dolor sit amet, consectetur adipiscing elit.[/'.$ebs_prefix.'dlitem]
['.$ebs_prefix.'dlitem heading="Heading 2"]Maecenas pellentesque mi nec ultrices pellentesque.[/'.$ebs_prefix.'dlitem]
['.$ebs_prefix.'dlitem heading="Heading 3"]Maecenas pellentesque mi nec ultrices pellentesque.[/'.$ebs_prefix.'dlitem]
['.$ebs_prefix.'dlitem heading="Heading 4"]Vestibulum malesuada libero sit amet orci faucibus varius.[/'.$ebs_prefix.'dlitem]
['.$ebs_prefix.'dlitem heading="Heading 5"]In sed enim ornare, ultricies dui ac, posuere eros.[/'.$ebs_prefix.'dlitem]
[/'.$ebs_prefix.'dl]'); ?></div>
              <div class="short-detail-right">
                  <h2>Horizontal List</h2>
                  <?php echo do_shortcode('['.$ebs_prefix.'dl style="dl-horizontal"]
['.$ebs_prefix.'dlitem heading="Heading 1"]Vestibulum malesuada libero sit amet orci faucibus varius.[/'.$ebs_prefix.'dlitem]
['.$ebs_prefix.'dlitem heading="Heading 2"]Maecenas pellentesque mi nec ultrices pellentesque.[/'.$ebs_prefix.'dlitem]
['.$ebs_prefix.'dlitem heading="Heading 3"]Nulla sed odio eu diam suscipit vulputate[/'.$ebs_prefix.'dlitem][/'.$ebs_prefix.'dl]'); ?>
              </div>
          </div>

        <div class="shortcode_desc">List show responsive description list items in front end.To add Description Lists to your Page/Post click on Description List Shortcode icon. A popup will appear, select list style, provide value for No. of list item and custom class, check preview and insert shortcode.</div>
    </div>
    <div class="shortcode-text">
            <pre>[dl class="test" style="dl-horizontal"]
    [dlitem heading="Heading 1"]...[/dlitem]
    [dlitem heading="Heading 2"]...[/dlitem]
    [dlitem heading="Heading 3"]...[/dlitem]
[/dl]
</pre>
    </div>
    <div class="shortcode-parameter">[dl] Parameters are:</div>
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
            <td>style</td>
            <td>Specifies style of description list either vertical or horizontal.</td>
            <td>optional</td>
            <td>dl-horizontal</td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to description list div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <div class="shortcode-parameter">[dlitem] Parameters are:</div>
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
            <td>heading</td>
            <td>Heading of description list item</td>
            <td>required</td>
            <td></td>
            <td>Heading 1</td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>