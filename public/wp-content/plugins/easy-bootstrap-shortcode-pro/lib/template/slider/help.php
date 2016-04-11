<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Slider</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode('['.$ebs_prefix.'slider interval="1000" captioncolor="#fff" navcolor="#f4f4f4" controls="true" pause="hover"]
['.$ebs_prefix.'slide title="Sed fermentum" image="http://lorempixel.com/output/business-q-c-421-165-4.jpg" caption="Sed fermentum odio eu justo auctor varius." active="active"/]
['.$ebs_prefix.'slide title="Sed fermentum" image="http://lorempixel.com/output/business-q-c-421-165-1.jpg" caption="Sed fermentum odio eu justo auctor varius."/]
['.$ebs_prefix.'slide title="Sed fermentum" image="http://lorempixel.com/output/business-q-c-421-165-8.jpg" caption="Sed fermentum odio eu justo auctor varius."/]
[/'.$ebs_prefix.'slider]'); ?>
          </div>
        <div class="shortcode_desc">Slider is enhanced bootstrap slider. you can add multiple slides to slider using wpordpress media uploader and can provide custom title and caption for each slide and can choose which slide will b active on page load</div>
    </div>
    <div class="shortcode-text">
            <pre>[slider interval="1000" captioncolor="#444444" navcolor="#f4f4f4" controls="true" pause="hover"]
[slide title="Sed fermentum" image="http://lorempixel.com/output/business-q-g-400-400-2.jpg" caption="Sed fermentum odio eu justo auctor varius." active="active"/]
[slide title="Sed fermentum" image="http://lorempixel.com/output/business-q-c-400-400-1.jpg" caption="Sed fermentum odio eu justo auctor varius."/]
[slide title="Sed fermentum" image="http://lorempixel.com/output/business-q-c-400-400-6.jpg" caption="Sed fermentum odio eu justo auctor varius."/]
[/slider]
</pre>
    </div>
    <div class="shortcode-parameter">[slider] Parameters are:</div>
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
            <td>interval</td>
            <td>slider interval in miliseconds (ex: 1200) if want an auto play slider</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>captioncolor</td>
            <td>slider image caption color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>navcolor</td>
            <td>Slider navigation link color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr><tr>
            <td>controls</td>
            <td>Whether to show slider next, previous slide links</td>
            <td>optional</td>
            <td>true</td>
            <td></td>
        </tr><tr>
            <td>bullets</td>
            <td>Whether to show navigation bullets at bottom</td>
            <td>optional</td>
            <td>true</td>
            <td></td>
        </tr><tr>
            <td>pause</td>
            <td>Pause slider transition on hover</td>
            <td>optional</td>
            <td>hover</td>
            <td></td>
        </tr><tr>
            <td>wrap</td>
            <td>Make slider cyclic</td>
            <td>optional</td>
            <td>true</td>
            <td></td>
        </tr><tr>
            <td>class</td>
            <td>Add custom class to slider div in front end</td>
            <td>optional</td>
            <td></td>
            <td>yourcustomclass</td>
        </tr>
        </tbody>
    </table>
    <div class="shortcode-parameter">[slide] Parameters are:</div>
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
            <td>Title of slide</td>
            <td>optional</td>
            <td></td>
            <td>Title</td>
        </tr>
        <tr>
            <td>Caption</td>
            <td>Caption for the slide image</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>image</td>
            <td>Url of the slide image</td>
            <td>required</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>active</td>
            <td>Which image will be shown on slider load</td>
            <td>optional</td>
            <td>active</td>
            <td></td>
        </tr>

        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>