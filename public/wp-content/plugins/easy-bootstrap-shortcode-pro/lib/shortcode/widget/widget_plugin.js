var widget={
    title:"widget Shortcode",
    id :'oscitas-form-widget',
    pluginName: 'widget',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(widget,950,480);
    })();
}
function widget_generate_shortcode(pluginObj,form,table){
    var $this=jQuery('.single_widget_container'),type='',value='',str='',name='',shortcodeatr='',separator='';
    var title=$this.attr('data-title');
    var classtype=$this.attr('data-class');
    var classname=$this.attr('data-classname');
    var opt=['input','select','textarea']

    jQuery.each(opt,function(ind,val){
        var obj=$this.find(val);
        if(typeof obj=="object"){
            jQuery(obj).each(function(index){


                str=jQuery(this).attr('name');
                type=jQuery(this).attr('type');
                name= str.substring(str.lastIndexOf("][")+2,str.lastIndexOf("]"))
                value=jQuery(this).val();
                if(type=='checkbox'){
                    if(jQuery(this).prop('checked')){

                        shortcodeatr+='|;osc;|'+name+"='"+value+"'"
                    }
                } else if(type=='radio'){
                    if(jQuery(this).prop('checked')){
                        shortcodeatr+='|;osc;|'+name+"='"+value+"'"
                    }
                }else{
                    shortcodeatr+='|;osc;|'+name+"='"+value+"'"
                }


            })


        }
    });
    var shortcode='['+$ebs_prefix+'oscwidget type="'+classtype+'" class="'+classname+'" attr="'+shortcodeatr+'"]';
    return shortcode;
}
    function create_oscitas_widget(pluginObj){
        var form = jQuery(pluginObj.hashId);

        var table = form.find('table');

        jQuery('#oscitas-form-widget .ebs-widget-type').live('click',function(){
            var dialog=jQuery(this).attr('data-form');
            var title=jQuery(this).attr('data-title');
            var classtype=jQuery(this).attr('data-class');
            var classname=jQuery(this).attr('data-classname');
            var heading='<h3 class="single_widget_heading">'+title+'</h3>';
            jQuery(".single_widget_container").html(heading+dialog);


            if(!jQuery('.multiple_widget_container').hasClass('widget_narrow')){
                jQuery('.multiple_widget_container').animate({
                    width:'55%'
                },600,function(){
                    jQuery(this).find('li').css({
                        width:'50%'
                    })

                })
                jQuery('.multiple_widget_container').addClass('widget_narrow');
            }
            jQuery(".right_widget_container").show();
            jQuery(".single_widget_container").attr('data-title',title);
            jQuery(".single_widget_container").attr('data-class',classtype);
            jQuery(".single_widget_container").attr('data-classname',classname);

        })

    }

