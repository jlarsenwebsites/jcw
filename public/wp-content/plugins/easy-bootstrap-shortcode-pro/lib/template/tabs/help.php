<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Tabs</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
              <div class="short-detail">
                  <?php echo do_shortcode('['.$ebs_prefix.'tabs responsive="true" pills="nav-pills" icon="glyphicon-chevron-down" icontype="glyphicon" text="More"]
['.$ebs_prefix.'tab title="Tab Content One" active="active"]Suspendisse vitae nisl nisi. Donec suscipit eu felis et tincidunt. Sed at leo id nibh mattis aliquam. Sed sit amet est quam. Pellentesque laoreet libero id ligula convallis faucibus.[/'.$ebs_prefix.'tab]
['.$ebs_prefix.'tab title="Tab Content Two"]Suspendisse vitae nisl nisi. Donec suscipit eu felis et tincidunt. Sed at leo id nibh mattis aliquam. Sed sit amet est quam. Pellentesque laoreet libero id ligula convallis faucibus.Suspendisse vitae nisl nisi. Donec suscipit eu felis et tincidunt. Sed at leo id nibh mattis aliquam.[/'.$ebs_prefix.'tab]
['.$ebs_prefix.'tab title="Tab Content Three"]Suspendisse vitae nisl nisi. Donec suscipit eu felis et tincidunt.[/'.$ebs_prefix.'tab]
[/'.$ebs_prefix.'tabs]'); ?>
              </div>
              <hr>
              <div class="short-detail">
                  <?php echo do_shortcode('['.$ebs_prefix.'tabs responsive="true" icon="fa-th-large" icontype="fa" text="More" ]
['.$ebs_prefix.'tab title="Tab Content 1" icon="fa-home" icontype="fa" iconcolor="#3cc147"]Suspendisse potenti. Quisque ut metus feugiat, sodales arcu varius, accumsan turpis. Nam non ipsum et mi consequat convallis. Donec gravida porta nisl vitae faucibus. [/'.$ebs_prefix.'tab]
['.$ebs_prefix.'tab title="Tab Content 2" icon="fa-map-marker" icontype="fa" iconcolor="#f46f22" active="active"] Sed at leo id nibh mattis aliquam. Sed sit amet est quam. Pellentesque laoreet libero id ligula convallis faucibus.[/'.$ebs_prefix.'tab]
['.$ebs_prefix.'tab title="Tab Content 3" icon="fa-cloud" icontype="fa" iconcolor="#1f6cc4"]Vestibulum interdum luctus nulla, dignissim placerat dui semper at. Nam sed erat id felis convallis elementum. [/'.$ebs_prefix.'tab]
[/'.$ebs_prefix.'tabs]'); ?>
              </div>
          </div>
        <div class="shortcode_desc">Tabs are bootstrap tabs.To add Tabs to your Page/Post click on Tab Shortcode icon. A popup will appear, if you want responsive tabs check Make responsive Tabs Checkbox and provide value for responsive tab attributes. Add new tabs by clicking on "Add New Item" link. Add tab title icon, icon color and set active tab. Provide custom class and click on "Insert" button. Shortcode will be added to your editor. </div>
    </div>
    <div class="shortcode-text">
            <pre>[tabs responsive="true" pills="nav-pills" icon="glyphicon-chevron-down" icontype="glyphicon" text="More"]
[tab title="Tab Content One" active="active"]...[/tab]
[tab title="Tab Content Two"]...[/tab]
[tab title="Tab Content Three"]...[/tab]
[/tabs]
</pre>
    </div>
    <div class="shortcode-parameter">[tabs] Parameters are:</div>
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
            <td>responsive</td>
            <td>whether to make tab responsive or not</td>
            <td>optional</td>
            <td>true</td>
            <td></td>
        </tr>
        <tr>
            <td>position</td>
            <td>Tabs position below or above the tab content. </td>
            <td>optional</td>
            <td>tabs-below</td>
            <td></td>
        </tr>
        <tr>
            <td>pills</td>
            <td>Show selector on selected tab.</td>
            <td>optional</td>
            <td>nav-pills</td>
            <td></td>
        </tr>
        <tr>
            <td>icon</td>
            <td>Add icon to tab dropdown text if you want</td>
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
            <td>text</td>
            <td>Tab dropdown text</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>tabcolor</td>
            <td>Tab background color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>tabhcolor</td>
            <td>Tab heading color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>atabcolor</td>
            <td>Active tab background color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
       <tr>
            <td>atabhcolor</td>
            <td>Active tab heading color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
       <tr>
            <td>tabconcolor</td>
            <td>Tab content text color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
       <tr>
            <td>tabconbgcolor</td>
            <td>Tab content background color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to tabs div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <div class="shortcode-parameter">[tab] Parameters are:</div>
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
            <td>title</td>
            <td>Title for Tab heading</td>
            <td>Required</td>
            <td></td>
            <td>Tab number 1</td>
        </tr>
        <tr>
            <td>icon</td>
            <td>Add icon to tab title</td>
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
        <tr>
            <td>active</td>
            <td>Tells which tab should be active</td>
            <td>Required</td>
            <td>active</td>
            <td>active</td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>