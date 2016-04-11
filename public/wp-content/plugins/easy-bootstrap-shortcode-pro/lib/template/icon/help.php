<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Icons</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">

              <div class="short-detail-left">
                  <?php echo do_shortcode('['.$ebs_prefix.'icon type="fa-arrows-alt" icontype="fa" color="#dd3333" fontsize="10"]['.$ebs_prefix.'icon type="fa-arrows-alt" icontype="fa" color="#dd3333" fontsize="18"] ['.$ebs_prefix.'icon type="fa-arrows-alt" icontype="fa" color="#dd3333" fontsize="24"] ['.$ebs_prefix.'icon type="fa-arrows-alt" icontype="fa" color="#dd3333" fontsize="32"] ['.$ebs_prefix.'icon type="fa-arrows-alt" icontype="fa" color="#dd3333" fontsize="40"] ['.$ebs_prefix.'icon type="fa-arrows-alt" icontype="fa" color="#dd3333" fontsize="48"] ['.$ebs_prefix.'icon type="fa-arrows-alt" icontype="fa" color="#dd3333" fontsize="54"]
               '); ?>
                  </div>
              <div class="short-detail-right">
                  <?php echo do_shortcode('['.$ebs_prefix.'icon type="fa-home" icontype="fa" color="#1AB373" fontsize="10"]['.$ebs_prefix.'icon type="fa-home" icontype="fa" color="#1AB373" fontsize="18"] ['.$ebs_prefix.'icon type="fa-home" icontype="fa" color="#1AB373" fontsize="24"] ['.$ebs_prefix.'icon type="fa-home" icontype="fa" color="#1AB373" fontsize="32"] ['.$ebs_prefix.'icon type="fa-home" icontype="fa" color="#1AB373" fontsize="40"] ['.$ebs_prefix.'icon type="fa-home" icontype="fa" color="#1AB373" fontsize="48"] ['.$ebs_prefix.'icon type="fa-home" icontype="fa" color="#1AB373" fontsize="54"]'); ?>
              </div>
              <div class="short-detail-left">
                  <?php echo do_shortcode('['.$ebs_prefix.'icon type="fa-cloud-download" icontype="fa" color="#FE8100" fontsize="10"]['.$ebs_prefix.'icon type="fa-cloud-download" icontype="fa" color="#FE8100" fontsize="18"] ['.$ebs_prefix.'icon type="fa-cloud-download" icontype="fa" color="#FE8100" fontsize="24"] ['.$ebs_prefix.'icon type="fa-cloud-download" icontype="fa" color="#FE8100" fontsize="32"] ['.$ebs_prefix.'icon type="fa-cloud-download" icontype="fa" color="#FE8100" fontsize="40"] ['.$ebs_prefix.'icon type="fa-cloud-download" icontype="fa" color="#FE8100" fontsize="48"] ['.$ebs_prefix.'icon type="fa-cloud-download" icontype="fa" color="#FE8100" fontsize="54"]
               '); ?>
              </div>
              <div class="short-detail-right">
                  <?php echo do_shortcode('['.$ebs_prefix.'icon type="fa-twitter" icontype="fa" color="#198DDC" fontsize="10"]['.$ebs_prefix.'icon type="fa-twitter" icontype="fa" color="#198DDC" fontsize="18"] ['.$ebs_prefix.'icon type="fa-twitter" icontype="fa" color="#198DDC" fontsize="24"] ['.$ebs_prefix.'icon type="fa-twitter" icontype="fa" color="#198DDC" fontsize="32"] ['.$ebs_prefix.'icon type="fa-twitter" icontype="fa" color="#198DDC" fontsize="40"] ['.$ebs_prefix.'icon type="fa-twitter" icontype="fa" color="#198DDC" fontsize="48"] ['.$ebs_prefix.'icon type="fa-twitter" icontype="fa" color="#198DDC" fontsize="54"]'); ?>
              </div>
          </div>
        <div class="shortcode_desc">Icon shortcode is used to add icon to your content any where you want. To add Icon to your Page/Post click on Icon Shortcode icon. A popup will appear select icon shape, provide value for custom class and click on "Insert" button. Shortcode will be added to your editor.</div>
    </div>
    <div class="shortcode-text">
            <pre>[icon type="glyphicon-asterisk" icontype="glyphicon" color="#81d742" fontsize="40" class="test"]
</pre>
    </div>
    <div class="shortcode-parameter">[icon] Parameters are:</div>
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
            <td>Icon type</td>
            <td>required</td>
            <td><a target="_blank" href="http://getbootstrap.com/components/#glyphicons-glyphs">Glyphicon Icons</a> &nbsp;<a href="http://fontawesome.io/icons/">Font Awesome Icons</a></td>
            <td>glyphicon-asterisk</td>
        </tr>
        <tr>
            <td>icontype</td>
            <td>Wether glyphicon or font awesome icon</td>
            <td>requied</td>
            <td>glyphicon, fa</td>
            <td>glyphicon</td>
        </tr>
        <tr>
            <td>color</td>
            <td>Specifies Icon Color</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>fontsize</td>
            <td>Specifies Icon font size</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to icon in front end</td>
            <td>optional</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>