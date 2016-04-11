var pageheader={
    title:"Page Header Shortcode",
    id :'oscitas-form-pageheader',
    pluginName: 'pageheader',
    setRowColors:true
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(pageheader,800);
    })();
}

function pageheader_generate_shortcode(pluginObj,form,table){
    var type=jQuery('#oscitas-pageheader-headingtype').val();
    var cusclass='',style='';
    var arr=['headingtype','headcolor','fontsize','margin','padding','class'];
    jQuery(arr).each(function(ind,val){
        if(table.find('#oscitas-pageheader-'+val).val()!=''){
            style+=' '+val+'="'+table.find('#oscitas-pageheader-'+val).val()+'"' ;
        }
    })
    if(table.find('#oscitas-pageheader-border').prop('checked')){
        style+=' border="true"';
        var val='bordercolor';
        if(table.find('#oscitas-pageheader-'+val).val()!=''){
            style+=' '+val+'="'+table.find('#oscitas-pageheader-'+val).val()+'"' ;
        }
    }
    var shortcode = '['+$ebs_prefix+'pageheader';

    shortcode += style ;

    shortcode += ']'+table.find('#oscitas-pageheader-heading').val()+'[/'+$ebs_prefix+'pageheader]' ;

    return shortcode;
}

function create_oscitas_pageheader(pluginObj){


    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');


    ebs_color_picker(form.find('.color'));
    pageheader_border_options(pluginObj,form);
    form.find('#oscitas-pageheader-border').click(function(){
        pageheader_border_options(pluginObj,form);
    })


}

function pageheader_border_options(pluginObj,form){
    if(jQuery('#oscitas-pageheader-border').prop('checked')){
        form.find('.show_border').show();
    } else{
        form.find('.show_border').hide();
    }

    jQuery(pluginObj.hashId).find('table > tbody > tr:visible:even').css('background', '#EFEFEF');
    jQuery(pluginObj.hashId).find('table > tbody > tr:visible:odd').css('background', '#FFFFFF');
}

