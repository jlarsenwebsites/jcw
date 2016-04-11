<?php ob_start();?>
<div class="shortcode-help-outer">
    <h3 id="s1"><span>Highlights</span></h3>
    <div class="shrt-content">
          <div class="shrt-detail"><?php echo do_shortcode('['.$ebs_prefix.'highlights type="existing" highlight="yellow"]Lorem ipsum dolor sit amet, consectetur adipisicing elit, [/'.$ebs_prefix.'highlights]sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ['.$ebs_prefix.'highlights type="existing" highlight="blue"]" sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. [/'.$ebs_prefix.'highlights] Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ['.$ebs_prefix.'highlights type="custom" bg="#81d742" color="#ffffff"]Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,[/'.$ebs_prefix.'highlights]  totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.'); ?></div>
        <div class="shortcode_desc">Highlights Box shortcode is used to highlight content. There are four pre defined highlights and if you want you can create your own highlights too. To add Highlights Box your Page/Post click on Highlights Shortcode icon. A popup will appear, select highlight type, select predefined highlight or create your own, provide value for custom class, click on "Insert" button. Shortcode will be added to your editor. Change Highlight content.</div>
    </div>
    <div class="shortcode-text">
            <pre>[highlights type="existing" highlight="yellow"]
...
[/highlights]
</pre>
    </div>
    <div class="shortcode-parameter">[highlights] Parameters are:</div>
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
            <td>Specifies highlight type whether you want to choose existing one or want to create your own.</td>
            <td>requires</td>
            <td>existing, custom</td>
            <td>existing</td>
        </tr>
        <tr>
            <td>highlight</td>
            <td>If you want to use existing highlight then this parameter is compulsory, it specifies highlight</td>
            <td>optional</td>
            <td>yellow, blue, red, green</td>
            <td>yellow</td>
        </tr>
        <tr>
            <td>bg</td>
            <td>If you want to use create your own highlight then this parameter is compulsory,  it specifies background color of highlighted content</td>
            <td>optional</td>
            <td></td>
            <td>#F9F9F9</td>
        </tr>
        <tr>
            <td>Color</td>
            <td>If you want to use create your own highlight then this parameter is compulsory,  it specifies color of highlighted content</td>
            <td>optional</td>
            <td></td>
            <td>#000000</td>
        </tr>
        </tbody>
    </table>
</div>
<?php $ebs_help_content=ob_get_clean();?>