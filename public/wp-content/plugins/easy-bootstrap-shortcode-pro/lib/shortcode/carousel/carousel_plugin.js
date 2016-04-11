var carousel={
    title:"Carousel Shortcode",
    id :'oscitas-form-carousel',
    pluginName: 'carousel',
    setRowColors:true
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(carousel,800);
    })();
}
function isPositiveInteger(s)
{
    return /^\d+$/.test(s);
}
function check_num_item(form){
    if(jQuery(form).find('#oscitas-carousel-style_multiitem').prop('checked')){
        jQuery(form).find('.numitem').show();
        jQuery(form).find('.transition').hide();
    }else{
        jQuery(form).find('.numitem').hide();
        jQuery(form).find('.transition').show();
    }
    jQuery(carousel.hashId).find('table > tbody > tr:visible:even').css('background', '#EFEFEF');
    jQuery(carousel.hashId).find('table > tbody > tr:visible:odd').css('background', '#FFFFFF');
}

function carousel_generate_shortcode(pluginObj,form,table){
    var count=parseInt(jQuery("#ebs_car_accordion .group").length);
    if(table.find('#oscitas-carousel-style_singleitem').prop('checked')){
        table.find('#oscitas-carousel-itemnum').val('');
        table.find('#oscitas-carousel-slideouteffect').val('');
        table.find('#oscitas-carousel-slideineffect').val('');
    } else{
        table.find('#oscitas-carousel-transition').val('');
    }
    var  shortattr='';
    var valueattr=['itemnum','order','orderby','slideineffect','slideouteffect','transition','interval','navigation','navcolor','class']
    var checkattr={style_multiitem:'style',style_singleitem:'style',bullets:'bullets',pause:'pause',play_pause:'play_pause',type_gallery:'type',type_link:'type'}

    jQuery(valueattr).each(function(ind,val){
        if(table.find('#oscitas-carousel-'+val).val()!=''){
            shortattr+= ' '+val+'="'+table.find('#oscitas-carousel-'+val).val()+'"';
        }
    });
    jQuery.each(checkattr,function(ind,val){
        if(table.find('#oscitas-carousel-'+ind).prop('checked')){
            shortattr+= ' '+val+'="'+table.find('#oscitas-carousel-'+ind).val()+'"';
        }
    })
    var post_output='';

    for(var i=1;i<=count;i++){

        var num= form.find('#oscitas-carousel-postnum'+i).val().replace ( /[^\d.]/g, '' );
        var num = parseInt(num, 10);
        if(form.find('#oscitas-carousel-post'+i).prop('checked') && num>0){
            post_output+=form.find('#oscitas-carousel-post'+i).val()+':'+num+',';
        } else{
            var types = {};
            var tax= form.find('#oscitas-carousel-post'+i).parents('.cour_contnet').find('.cau_post_taxonomy');
            if(tax.length){
                jQuery(tax).each(function(){
                    var tVal=jQuery(this).val();
                    types[tVal]={};
                })
            }
            var checkbox=  form.find('#oscitas-carousel-post'+i).parents('.cour_contnet').find('.osc_post_table .osc_cat_checkbox');
            if(checkbox.length){
                var catVal='';
                jQuery(checkbox).each(function(){
                    if(jQuery(this).prop('checked')){
                        var tName=jQuery(this).data('tax');
                        var term=jQuery(this).val();
                        var catnum= form.find('#oscitas-carousel-catnum'+term).val().replace ( /[^\d.]/g, '' );
                        types[tName][term]=catnum;
//    catVal+=term+'->'+catnum+';'
                    }
                })
                jQuery.each(types,function(ind,val){
                    if(!jQuery.isEmptyObject(ind)){
                        catVal+=ind+'(';
                        jQuery.each(val,function(ind1,val1){
                            catVal+=  ind1+'-#-'+val1+'|'
                        });
                        catVal+=');';
                    }

                })
                if(catVal!=''){
                    post_output+=form.find('#oscitas-carousel-post'+i).val()+':'+catVal+',';
                }
            }
        }
    }
    console.log(post_output);
    var shortcode='';
    if(post_output!=''){
        post_output=post_output.slice(0,-1)
        shortattr+=' posts="'+post_output+'"';
        shortcode = '['+$ebs_prefix+'carousel'+shortattr;
        shortcode += ']';
    }

    return shortcode;

}
function create_oscitas_carousel(pluginObj){
    var form =jQuery(pluginObj.hashId);

    var table = form.find('table');


    check_num_item(form);
    ebs_color_picker(form.find('.color'));
    form.find('.checknumitem').click(function(){
        check_num_item(form);
    })


    jQuery('#ebs_car_accordion').accordion({
        header: "> div > h3",
        active: false,
        collapsible: true,
        heightStyle: "content"

    }).sortable({
            axis: "y",
            handle: "h3 .car_sortable",
            stop: function( event, ui ) {
// IE doesn't register the blur when sorting
// so trigger focusout handlers to remove .ui-state-focus
                ui.item.children( "h3" ).triggerHandler( "focusout" );
// Refresh accordion to handle new order
                jQuery( this ).accordion( "refresh" );
            }
        });

    jQuery('.car_post_check').click(function(e){
        e.stopPropagation();
        check_which_to_show(this);
    })
    jQuery('.car_post_check').each(function(){
        check_which_to_show(this);
    })
}
function check_which_to_show(ele){
    var check=jQuery(ele).data('check');
    if(jQuery(ele).prop('checked')){

        jQuery('.'+check).hide();
    } else{
        jQuery('.'+check).show();
    }
    jQuery('#ebs_car_accordion').accordion( "refresh" );
}
