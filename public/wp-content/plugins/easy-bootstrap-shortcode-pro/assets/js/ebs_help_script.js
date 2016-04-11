function help_open_popup(){
    jQuery('.ebs_help_popup').magnificPopup({
        type:'image',
        gallery: {
            enabled: true
        }
    });
}
function shortcode_help(){
    jQuery( "#shortcode_help_tabs" ).tabs({
        activate: function( event, ui ) {

            if(ui.newPanel.html()==''){
                ui.newPanel.html('<div class="loading-img-outer"><img class="loading-img" src="'+ebs_asseturl+'images/ebs-loading.png"></div>');
                var ele=ui.newPanel.attr('id');
                jQuery.ajax({
                    url:ebs_ajaxurl,
                    type:'post',
                    data:{
                        action:'fetch_help_content',
                        element:ele
                    }, success:function(res){
                        ui.newPanel.html(res)
//
                        jQuery('#frame_'+ele).load(function(){
                            iframe_height_set(ui.newPanel);
                        });

                    }
                });
            }
//            if (ui.newPanel.find('iframe').length){
//                iframe_height_set(ui.newPanel);
//            }
        },
        create: function( event, ui ) {

            if(ui.panel.html()==''){
                ui.panel.html('<div class="loading-img-outer"><img class="loading-img" src="'+ebs_asseturl+'images/ebs-loading.png"></div>');
                var ele=ui.panel.attr('id');
                jQuery.ajax({
                    url:ebs_ajaxurl,
                    type:'post',
                    data:{
                        action:'fetch_help_content',
                        element:ele
                    }, success:function(res){
                        ui.panel.html(res)

                        jQuery('#frame_'+ele).load(function(){
                            iframe_height_set(ui.panel)
                        });
                    }
                });
            }
//            if (ui.panel.find('iframe').length){
//                iframe_height_set(ui.panel)
//
//            }
        }
    }).addClass( "ui-tabs-vertical ui-helper-clearfix" );
    jQuery( "#shortcode_help_tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
}
function admin_interface(){
    jQuery( "#admin_help_tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    jQuery( "#admin_help_tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
    jQuery( "#admin_help_tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
}
jQuery(document).ready(function(){
    jQuery( "#ebs_upper_help_tabs" ).tabs({
        activate:function(event,ui){
            var id= ui.newPanel.attr('id')
            eval(id+'()');
            help_open_popup();
        },
        create:function(event,ui){
           var id= ui.panel.attr('id')
            eval(id+'()');
            help_open_popup();
        }
    });
    jQuery('body').append('<div id="toolbar"> <ul class="clear"> <li class="top fr"><a href="#"></a></li></ul></div>')
    jQuery('#toolbar .top a').click(function() {
        jQuery.scrollTo('#ebs_help_heading', 1000);
        return false;
    });
    jQuery('#toolbar').css({height: 0}).animate({ height: '38' }, 'slow');

})

function iframe_height_set(ele){
    ele.find('iframe').height(  ele.find('iframe').contents().find("body > div").height()+170);
    ele.find('iframe').contents().find("html").css('height','auto');
    ele.find('iframe').contents().find("body").css('height','auto');
}