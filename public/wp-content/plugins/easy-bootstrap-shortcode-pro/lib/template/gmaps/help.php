<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Google Map</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail"><?php echo do_shortcode('['.$ebs_prefix.'googlemap width="false" height="300" latitude="0" longitude="0" address="chandigrah" zoom="12" type="ROADMAP"]'); ?></div>
        <div class="shortcode_desc">Google map is best way to show a place on your site. To add google map to your Page/Post click on Horizontal Rule Shortcode icon. A popup will appear, select map type, provide value for height, width, latitude, longitude, address, zoom and Custom Class. click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[googlemap width="false" height="400" latitude="30.733314800000000000" longitude="76.779417900000000000" address="Chandigarh" zoom="3" type="ROADMAP" class="test"]
</pre>
    </div>
    <div class="shortcode-parameter">[googlemap] Parameters are:</div>
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
            <td>google map type</td>
            <td>required</td>
            <td>ROADMAP, SATELLITE, HYBRID</td>
            <td>ROADMAP</td>
        </tr>
        <tr>
            <td>width</td>
            <td>width of google map</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>height</td>
            <td>height of google map</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>width</td>
            <td>width of google map</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Latitude</td>
            <td>Latitude of place you want to show</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Longitude</td>
            <td>Longitude of place you want to show</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>Address of place you want to show (One value from latitude-longitude or address is required)</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>zoom</td>
            <td>zoom level of map</td>
            <td>required</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to Google map div in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>