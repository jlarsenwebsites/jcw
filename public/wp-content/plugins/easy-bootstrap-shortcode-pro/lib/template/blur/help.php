<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Help</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail">
              <?php echo do_shortcode('
              ['.$ebs_prefix.'blur deviation="1"]
['.$ebs_prefix.'iconheading type="h1" style="glyphicon-phone-alt" icontype="glyphicon" color="#4e8abf"]Extract Data[/'.$ebs_prefix.'iconheading][/'.$ebs_prefix.'blur]
['.$ebs_prefix.'blur deviation="5"]['.$ebs_prefix.'thumbnail alt="City Lights" src="http://lorempixel.com/output/city-q-c-900-300-4.jpg"][/'.$ebs_prefix.'blur]
<br/>
['.$ebs_prefix.'blur deviation="7"]['.$ebs_prefix.'thumbnail alt="City" src="http://lorempixel.com/output/city-q-c-900-300-5.jpg"][/'.$ebs_prefix.'blur]
</br>
['.$ebs_prefix.'blur deviation="2"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris orci, sodales non porttitor posuere, scelerisque a ipsum. Quisque non dui auctor, dapibus purus eu, hendrerit nisl. Aenean sodales dui ut lectus consequat, nec pellentesque lacus euismod. Quisque arcu enim, varius non pharetra in, rhoncus non lacus. [/'.$ebs_prefix.'blur]
['.$ebs_prefix.'blur deviation="1"]['.$ebs_prefix.'space height="20" ]
['.$ebs_prefix.'row]
['.$ebs_prefix.'column md="4" sm="4" xs="4" ]
['.$ebs_prefix.'button style="custom btn-lg" bgcolor="#32a372" fgcolor="#ffffff" hoverbgcolor="#19776e" hoverfgcolor="#ffffff" icon="fa-cloud-upload" icontype="fa" align="right" iconcolor="#ffffff" type="button" title="Viewport"]
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column md="4" sm="4" xs="4" ]
['.$ebs_prefix.'button style="custom btn-lg" bgcolor="#32a372" fgcolor="#ffffff" hoverbgcolor="#19776e" hoverfgcolor="#ffffff" icon="fa-sitemap" icontype="fa" align="right" iconcolor="#ffffff" type="button" title="Style Changer"]
[/'.$ebs_prefix.'column]
['.$ebs_prefix.'column md="4" sm="4" xs="4" ]
['.$ebs_prefix.'button style="custom btn-lg" bgcolor="#32a372" fgcolor="#ffffff" hoverbgcolor="#19776e" hoverfgcolor="#ffffff" icon="fa-tachometer" icontype="fa" align="right" iconcolor="#ffffff" type="button" title="Abstract"]
[/'.$ebs_prefix.'column]
[/'.$ebs_prefix.'row]
[/'.$ebs_prefix.'blur]'); ?>
          </div>
        <div class="shortcode_desc">

            A lightweight, flexible component that can optionally extend the entire viewport to showcase key content on your site.</div>
    </div>
    <div class="shortcode-text">
            <pre>[blur deviation="10" class="test"]...[/blur]</pre>
    </div>
    <div class="shortcode-parameter">[blur] Parameters are:</div>
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

        <tr><td>deviation</td>
            <td>Measurement of blurriness, higher value increase blurriness </td>
            <td>required</td>
            <td>1-20</td>
            <td>10</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to blur div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>