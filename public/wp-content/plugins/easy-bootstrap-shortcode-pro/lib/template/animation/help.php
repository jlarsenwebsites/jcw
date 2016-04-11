<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Animation</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail"> <?php echo do_shortcode('['.$ebs_prefix.'animation effect="fadeInLeft" time="everytime" duration="3" delay="0.5"]
<h2>Heading One</h2>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mi lorem, venenatis sed elementum in, lacinia eu lectus. Curabitur consectetur, dui luctus aliquam accumsan, sapien felis sodales libero, a egestas nibh turpis id quam. Fusce gravida erat non mi fermentum molestie. Vestibulum metus enim, egestas quis ullamcorper sit amet, mattis a est. In non auctor risus. Nulla facilisi. Integer purus massa, vestibulum nec augue id, pharetra mollis mi. Nulla consequat a turpis eu lobortis. Phasellus sit amet tortor vel orci pulvinar congue sit amet ut purus.[/'.$ebs_prefix.'animation]
<br />
['.$ebs_prefix.'animation effect="fadeInRight" time="everytime" duration="3" delay="0.5"]
<h2>Heading Two</h2>
Maecenas purus orci, mollis vel vehicula eget, consequat eget elit. Cras fermentum orci eros, id adipiscing dolor blandit at. Donec tincidunt malesuada augue, et gravida tortor convallis vel. Sed vitae adipiscing enim. Proin lectus elit, fermentum ut ultrices in, sagittis at ante. Quisque et facilisis eros. Nunc non sagittis ante. Ut placerat id neque id gravida. Sed posuere, libero quis tempus ornare, eros lectus adipiscing elit, nec ullamcorper sem orci in justo.
[/'.$ebs_prefix.'animation]');?></div>
        <div class="shortcode_desc">Animation shortcode is useful to animate the content. You can add html, text or any other shortcode under this shortcode, from options choose desired animation  effect, time, duration and delay.</div>
    </div>
    <div class="shortcode-text">
            <pre>[animation effect="fadeInLeft" time="everytime" duration="3" delay="0.5"]
                ...
             [/animation]
</pre>
    </div>
    <div class="shortcode-parameter">[animation] Parameters are:</div>
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
            <td>effect</td>
            <td>Animation effect type</td>
            <td>required</td>
            <td>pulse, flipInX, fadeIn, fadeInUp, fadeInDown, fadeInLeft, fadeInRight, fadeInUpBig, fadeInDownBig, fadeInRightBig, bounceIn, bounceInDown, bounceInLeft, bounceInRight, rotateInUpLeft, rotateInDownLeft, rotateInUpRight, rotateInDownRight, lightSpeedRight, lightSpeedLeft, rollin</td>
            <td>pulse</td>
        </tr>
        <tr>
            <td>time</td>
            <td>Whether animation will be applied to content every time when it comes to in view or just first time</td>
            <td>required</td>
            <td>everytime, onetime</td>
            <td>everytime</td>
        </tr>
        <tr>
            <td>duration</td>
            <td>the time duration for which animation will be applied to content</td>
            <td>required</td>
            <td>1-20</td>
            <td>1</td>
        </tr>
        <tr>
            <td>delay</td>
            <td>The time after which animation will be applied to contnet</td>
            <td>optional</td>
            <td>0-20</td>
            <td>0</td>
        </tr>
        <tr>
            <td>class</td>
            <td>Add custom class to animation div in front end</td>
            <td>optional</td>
            <td></td>
            <td>yourcustomclass</td>
        </tr>
        </tbody>
    </table>

</div>
<?php $ebs_help_content=ob_get_clean();?>