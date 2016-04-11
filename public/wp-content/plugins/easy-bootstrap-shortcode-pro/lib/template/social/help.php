<?php ob_start();?>
    <div class="shortcode-help-outer">
        <h3 id="s1"><span>Social Link</span></h3>

        <div class="shrt-content">
            <div class="shortcode_desc">Social links provide three shortcode which are used to show, facebook box, facebook comments, and tweets.
            </div>
            <br/>
            <br/>
            <br/>
            <h3 id="s1"><span>Facebook Box</span></h3>
            <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
                <div class="short-detail-left">
                    <?php echo do_shortcode('['.$ebs_prefix.'fb-box link="http://www.facebook.com/oscitas" width="300" height="300" variant="light" faces="true" stream="true"]'); ?>
                </div>
            </div>
            <div class="shortcode_desc">Social links provide three shortcode which are used to show, facebook box, facebook comments, and tweets. This is used to show the latest post of facebook page.To add Facebook box to your Page/Post click on Social Links Shortcode icon. A popup will appear, select Facebook box,variant, show faces and stream theme, provide facebook page link, height, width and Custom Class. click on "Insert" button. Shortcode will be added to your editor.</div>
        </div>
        <div class="shortcode-text">
            <pre>[fb-box class="test" link="http://www.facebook.com/oscitas" width="600" height="600" variant="light" faces="true" stream="true"]
</pre>
        </div>
        <div class="shortcode-parameter">[fb-box] Parameters are:</div>
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
                <td>height</td>
                <td>Height of facebook box</td>
                <td>required</td>
                <td></td>
                <td>600</td>
            </tr>
            <tr>
                <td>width</td>
                <td>Width of facebook box</td>
                <td>required</td>
                <td></td>
                <td>600</td>
            </tr>
            <tr>
                <td>link</td>
                <td>Link of facebook page</td>
                <td>required</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>variant</td>
                <td>theme for facebook box</td>
                <td>required</td>
                <td>light, dark</td>
                <td>light</td>
            </tr>
            <tr>
                <td>stream</td>
                <td>Specifies whether to show posts in facebook box</td>
                <td>required</td>
                <td>true, false</td>
                <td>true</td>
            </tr>
            <tr>
                <td>faces</td>
                <td>Specifies whether to show user images who like this page in facebook box</td>
                <td>required</td>
                <td>true, false</td>
                <td>true</td>
            </tr>
            <tr>
                <td>class</td>
                <td>Add custom class to facebook box div in front end</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <div class="shrt-content">
            <br/>
            <br/>
            <br/>
            <h3 id="s1"><span>Tweets</span></h3>
            <div class="shrt-detail clearfix<?php echo EBS_CONTAINER_CLASS;?>">
                <div class="short-detail-right">
                    <?php echo do_shortcode('[twitter width="300" height="300" username="oscitasthemes" variant="light" tweets="3" bordercolor="#5B8090" linkscolor="#1985B5" noheader="noheader" nofooter="nofooter" noborders="noborders"]'); ?>
                </div>

            </div>
            <div class="shortcode_desc">Used to add latest tweets from a user on your site. To add tweets to your Page/Post click on Social Links Shortcode icon. A popup will appear, select Twitter, variant, border color, link color, provide twitter username, height, width and Custom Class. Check options if you want to hide footer, header or borders. click on "Insert Tweets" button. Shortcode will be added to your editor.</div>
        </div>

        <div class="shortcode-text">
            <pre>[twitter width="300" height="300" username="oscitasthemes" variant="light" tweets="3" bordercolor="#5B8090" linkscolor="#1985B5" noheader="noheader" nofooter="nofooter" noborders="noborders"]</pre>
        </div>
        <div class="shortcode-parameter">[twitter] Parameters are:</div>
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
                <td>username</td>
                <td>Username of twitter</td>
                <td>required</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>tweets</td>
                <td>number of tweets to show</td>
                <td>required</td>
                <td></td>
                <td>10</td>
            </tr>
            <tr>
                <td>height</td>
                <td>Height of twitter box</td>
                <td>required</td>
                <td></td>
                <td>600</td>
            </tr>
            <tr>
                <td>width</td>
                <td>Width of twitter box</td>
                <td>required</td>
                <td></td>
                <td>600</td>
            </tr>
            <tr>
                <td>variant</td>
                <td>theme for twitter box</td>
                <td>required</td>
                <td>light, dark</td>
                <td>light</td>
            </tr>
            <tr>
                <td>nofooter</td>
                <td>hide footer from tweet box</td>
                <td>optional</td>
                <td>nofooter</td>
                <td></td>
            </tr>
            <tr>
                <td>noborders</td>
                <td>hide border from tweet box</td>
                <td>optional</td>
                <td>noborders</td>
                <td></td>
            </tr>
            <tr>
                <td>noheader</td>
                <td>hide header from tweet box</td>
                <td>optional</td>
                <td>noheader</td>
                <td></td>
            </tr>
            <tr>
                <td>bordercolor</td>
                <td>link color for tweet box</td>
                <td>optional</td>
                <td></td>
                <td>#1985B5</td>
            </tr>
            <tr>
                <td>bordercolor</td>
                <td>border color for tweet box</td>
                <td>optional</td>
                <td></td>
                <td>#5B8090</td>
            </tr>
            <tr>
                <td>class</td>
                <td>Add custom class to Progress Bar div in front end</td>
                <td>optional</td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $ebs_help_content=ob_get_clean();?>