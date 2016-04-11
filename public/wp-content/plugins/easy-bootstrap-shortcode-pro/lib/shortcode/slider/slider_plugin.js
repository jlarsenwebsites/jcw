var slider={
    title:"Slider Shortcode",
    id :'oscitas-form-slider',
    pluginName: 'slider',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(slider,1100);
    })();
}
function __slider_show_image_upload_icon(parent,ele){
    var imgparent= jQuery(ele).parent('td');
    var container= imgparent.find('.image_preview')
    ebs_insert_media_content(ele,container,parent);
}

function slider_generate_shortcode(pluginObj,form,table){

    var  shortattr='';
    var valueattr=['class','interval','captioncolor','navcolor']
    var checkattr=['controls','bullets','pause','wrap']

    jQuery(valueattr).each(function(ind,val){
        if(table.find('#oscitas-slider-'+val).val()!=''){
            shortattr+= ' '+val+'="'+table.find('#oscitas-slider-'+val).val()+'"';
        }
    });
    jQuery(checkattr).each(function(ind,val){
        if(table.find('#oscitas-slider-'+val).prop('checked')){
            shortattr+= ' '+val+'="'+table.find('#oscitas-slider-'+val).val()+'"';
        }
    })

    var shortcode = '['+$ebs_prefix+'slider'+shortattr;
    shortcode += ']';
    var row_attr={
        title:'',
        image:'',
        caption:''
    }

    form.find('tr.osc_dropdown_list_item').each(function(index){
        var $this=jQuery(this);
        var attr='';

        jQuery.each(row_attr,function(ind,val){
            if($this.find('.oscitas-itemslider-'+ind).val()!=''){
                attr+=' '+ind+'="'+$this.find('.oscitas-itemslider-'+ind).val()+'"';
            }
        });
        if(jQuery(this).find('.oscitas-itemslider-active').is(":checked")==true){
            attr+=' active="active"';
        }

        shortcode+='<br/>['+$ebs_prefix+'slide'+attr+'/]';


    });

    shortcode += '<br/>[/'+$ebs_prefix+'slider]';
    return shortcode;
}

function create_oscitas_slider(pluginObj){
    var form = jQuery(pluginObj.hashId);
    var key=parseInt(jQuery('.osc_dropdown_list_item').length);
    var ebsSlider={
        key:key
    }
    var table = form.find('table');
    form.find('#osc_add_new_dditem').click(function(){
        var item=_.template(ebsSliderTmp, ebsSlider)
        form.find('#oscitas-append-slideritem').append(item);
        ebsSlider.key=parseInt(ebsSlider.key)+1;
        __slider_show_image_upload_icon(form,jQuery('#oscitas-append-slideritem').find('tr:last').find('.upload_image_button'));


    });
    jQuery('.osc_remove_dditem').live('click',function(){
        jQuery(this).parent().parent().remove();
    })

    ebs_color_picker(form.find('.color'));

    jQuery('.upload_image_button').each(function(){
        __slider_show_image_upload_icon(form,jQuery(this));
    })


}
