<?php ob_start();?>
    <div class="shortcode-help-outer">
        <h3 id="s1"><span>Carousel</span></h3>
        <div class="shrt-content">
            <div class="shrt-detail">
                <?php echo do_shortcode('['.$ebs_prefix.'carousel itemnum="3" slideineffect="swing" slideouteffect="bounce" interval="1000" navigation="bottom" navcolor="#ffffff" style="multiitem" pause="true" type="gallery" posts="post:8"]'); ?>
            </div>
            <div class="shortcode_desc">Carousel shortcode get the thumbnails of the post and custom post you specify and shows them into slider or multiitem carousel with effects. In carousel you choose which post/custom post you want to show and provide a number for each post/custom post n this shortcode picks the latest post you chosen, you can specify effects, navigation settings, interval etc options.</div>
        </div>
        <div class="shortcode-text">
            <pre>[carousel itemnum="3" slideineffect="swing" slideouteffect="bounce" interval="1000" navigation="bottom" navcolor="#ffffff" style="multiitem" pause="true" type="gallery" posts="post:8"]
</pre>
        </div>
        <div class="shortcode-parameter">[carousel] Parameters are:</div>
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
                <td>posts</td>
                <td>specifies post name and associated number of latest post for selected post types</td>
                <td>required</td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>style</td>
                <td>Whether to show multiitem carousel or single image slider</td>
                <td>required</td>
                <td>multiitem</td>
                <td>multiitem, singleitem</td>
            </tr>
            <tr>
                <td>itemnum</td>
                <td>If multiitem carousel the how many items you want to hsow at a time</td>
                <td>optional</td>
                <td></td>
                <td>3</td>
            </tr>
            <tr>
                <td>slideineffect</td>
                <td>For multi item carousel incoming slide effect</td>
                <td>optional</td>
                <td>None, Parallax, bounce, shake, flash, tada, swing, wobble, pulse, flip, flipInX, flipInY, fadeIn, fadeInUp, fadeInDown, fadeInLeft, fadeInRight, fadeInUpBig, fadeInDownBig, fadeInLeftBig, fadeInRightBig, bounceIn, bounceInUp, bounceInDown, bounceInLeft, bounceInRight, rotateIn, rotateInUpLeft, rotateInDownLeft, rotateInUpRight, rotateInDownRight, hinge, rollIn, lightSpeedIn, wiggle, </td>
                <td>None</td>
            </tr>

            <tr>
                <td>slideouteffect</td>
                <td>For multi item carousel outgoing slide effect</td>
                <td>optional</td>
                <td>Parallax,
                    bounce,
                    shake,
                    flash,
                    tada,
                    swing,
                    wobble,
                    pulse,
                    flip,
                    flipOutX,
                    flipOutY,
                    fadeOut,
                    fadeOutUp,
                    fadeOutDown,
                    fadeOutLeft,
                    fadeOutRight,
                    fadeOutUpBig,
                    fadeOutDownBig,
                    fadeOutLeftBig,
                    fadeOutLeftBig,
                    bounceOut,
                    bounceOutUp,
                    bounceOutDown,
                    bounceOutLeft,
                    bounceOutRight,
                    rotateOut,
                    rotateOutUpLeft,
                    rotateOutDownLeft,
                    rotateOutUpRight,
                    rotateOutDownRight,
                    hinge,
                    rollOut,
                    lightSpeedOut,
                    wiggle</td>
                <td>None</td>
            </tr>

            <tr>
                <td>transition</td>
                <td>For single item slider transition effect when slide changes</td>
                <td>optional</td>
                <td>fade,
                   backSlide,
                    goDown,
                    fadeUp </td>
                <td>None</td>
            </tr>
            <tr>
                <td>interval</td>
                <td>If you want a autoplay slider, provide interval time in milliseconds, a slide will change after this time</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>navigation</td>
                <td>specifies whether to show next previous links at bottom, at sides or don't show navigation</td>
                <td>optional</td>
                <td>side, bottom</td>
                <td>side</td>
            </tr>
            <tr>
                <td>navcolor</td>
                <td>Color of navigation link and control bullets</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>bullets</td>
                <td>Specifies whether to hide or show navigation control bullets at bottom</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>pause</td>
                <td>Whether to pause slider transition on hover</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
           <tr>
                <td>play_pause</td>
                <td>Whether to show a autoplay pause and play button which will be shown on carousel hover</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
           <tr>
                <td>type</td>
                <td>This specifies what to show on carousel image click. Choose gallery to open original image in popup, link to redirect to post and none for none of these</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
           <tr>
                <td>class</td>
                <td>Add custom class to carousel div in front end</td>
                <td>optional</td>
                <td></td>
                <td>yourcustomclass</td>
            </tr>
            </tbody>
        </table>

    </div>
<?php $ebs_help_content=ob_get_clean();?>