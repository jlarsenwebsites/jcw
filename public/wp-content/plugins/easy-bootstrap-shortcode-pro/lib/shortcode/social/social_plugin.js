var social={
    title:"Social Link Shortcode",
    id :'oscitas-form-social',
    pluginName: 'social',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(social,800);
})();
}


function social_generate_shortcode(pluginObj,form,table){
    var fbox = {
        'link'       : 'http://www.facebook.com/oscitas',
        'width'      : '600',
        'height'     : '600',
        'variant'    : 'light',
        'faces'      : 'true',
        'stream'     : 'true'
    };
    var fcomments = {
        'width'      : '600',
        'height'     : '600',
        'posts'      : '15',
        'variant'    : 'light'
    };
    var twitter = {
        'width'          : '600',
        'height'         : '600',
        'username'       : '10',
        'variant'        : 'light',
        'tweets'         : '10',
        'bordercolor'     :'5B8090',
        'linkscolor'     :'1985B5'



    };
    var tweeter_check={
        'noheader'      : '',
        'nofooter'      : '',
        'noborders'      : ''
    }

    var type = table.find('#mygallery-social-type').val();
    var cusclass='';
    if(table.find('#oscitas-social-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-social-class').val()+'"';
    }
    if('fbox'==type){
        var shortcode = '['+$ebs_prefix+'fb-box'+cusclass;
        for( var index in fbox) {
            var value = table.find('#mygallery-social-' + index).val();

            // attaches the attribute to the shortcode only if it's different from the default value
            //if ( value !== options[index] )
            shortcode += ' ' + index + '="' + value + '"';
        }

    }else if('fcomments'==type){
        var shortcode = '['+$ebs_prefix+'fb-comments'+cusclass;
        for( var index in fcomments) {
            var value = table.find('#mygallery-social-' + index).val();

            // attaches the attribute to the shortcode only if it's different from the default value
            //if ( value !== options[index] )
            shortcode += ' ' + index + '="' + value + '"';
        }

    }else{
        var shortcode = '['+$ebs_prefix+'twitter'+cusclass;
        for( var index in twitter) {
            var value = table.find('#mygallery-social-' + index).val();

            // attaches the attribute to the shortcode only if it's different from the default value
            //if ( value !== options[index] )
            shortcode += ' ' + index + '="' + value + '"';
        }
        for( var index in tweeter_check) {
            if(table.find('#mygallery-social-' + index).is(":checked")){
                var val= index;
            } else {
                var val= '';
            }
            shortcode += ' ' + index + '="' + val + '"';
        }

    }
    shortcode += ']';

    return shortcode;
}

function create_oscitas_social(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

    jQuery('#oscitas-form-social table tr:visible:even').css('background', '#EFEFEF');
    jQuery('#oscitas-form-social table tr:visible:odd').css('background', '#FFFFFF');
    var colors = ['bordercolor','linkscolor'];
    jQuery.each(colors,function(index,color){
        ebs_color_picker(jQuery('#oscitas-form-social').find('#mygallery-social-'+color));

    });

    ebs_social_box_display();
    jQuery('#mygallery-social-type').change(function(){
        ebs_social_box_display();
      
    });

}

function ebs_social_box_display(){
    var elements = ['interval','tweets','username','posts','stream','faces','link','bordercolor','linkscolor','noheader','nofooter','noborders'];
    var abc = jQuery('#mygallery-social-type').val();
    if('fbox' == abc){
        jQuery.each(elements,function(index,element){
            if('link'==element||'faces'==element||'stream'==element){
                jQuery("#tr-"+element).show();
            }else{
                jQuery("#tr-"+element).hide();
            }
        });
        jQuery('#mygallery-social-submit').val('Insert Facebook Box');
        jQuery(social.hashId).find('table tr:visible:even').css('background', '#EFEFEF');
        jQuery(social.hashId).find('table tr:visible:odd').css('background', '#FFFFFF');
    }
    else if('fcomments' == abc){
        jQuery.each(elements,function(index,element){
            if('posts'==element){
                jQuery("#tr-"+element).show();
            }else{
                jQuery("#tr-"+element).hide();
            }
        });
        jQuery('#mygallery-social-submit').val('Insert Facebook Comments');
        jQuery(social.hashId).find('table tr:visible:even').css('background', '#EFEFEF');
        jQuery(social.hashId).find('table tr:visible:odd').css('background', '#FFFFFF');
    }
    else{
        jQuery.each(elements,function(index,element){
            if('link'==element||'faces'==element||'stream'==element||'posts'==element){
                jQuery("#tr-"+element).hide();
            }else{
                jQuery("#tr-"+element).show();
            }
        });
        jQuery('#mygallery-social-submit').val('Insert Tweets');
        jQuery(social.hashId).find('table tr:visible:even').css('background', '#EFEFEF');
        jQuery(social.hashId).find('table tr:visible:odd').css('background', '#FFFFFF');
    }
}
