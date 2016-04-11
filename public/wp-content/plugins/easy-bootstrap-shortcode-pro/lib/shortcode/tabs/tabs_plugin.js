var tabs={
    title:"Tabs Shortcode",
    id :'oscitas-form-tabs',
    pluginName: 'tabs',
    setRowColors:true
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(tabs,1170);
})();
}
function show_icon_dialog(parent,ele){
    parent.find(ele).on('click',function(){
        var $parent=jQuery(this).parent('td');


                var $this=jQuery('#osc_show_iconlist_tabstitle');
                $this.show();
                $this.find('li').unbind('click');
                $this.find('li').click(function(){
                    var val=jQuery(this).attr('data-value');
                    var type=jQuery(this).attr('type');
                    $parent.find('.oscitas-itemtab-iconpreview').removeClass().addClass('oscitas-itemtab-iconpreview').addClass(type).addClass(val);
                    $parent.find('.oscitas-itemtab-icon').val(val);
                    $parent.find('.oscitas-itemtab-icontype').val(type);
                    $this.hide();
                })

    })
}

function tabs_generate_shortcode(pluginObj,form,table){

    var cusclass='',icon='',text='',pills='',position='',item= 0,eactive='',responsive='',tabicon,restype='';
    var num=table.find('#oscitas-tabs-number').val();
    if(jQuery('#oscitas-tabs-responsive').prop('checked')){
        responsive=' responsive="true"';
        var sctype=['lg','md','sm','xs'];
        jQuery(sctype).each(function(ind,val){

            if(jQuery('#oscitas-tabs-tabtype-'+val+'_accordion').prop('checked')){
                restype+=' '+val+'="accordion"';
            }
        })

        if(jQuery('#oscitas-tabs-pills').prop('checked')){
            pills=' pills="nav-pills"';

        }
        if(table.find('#oscitas-tabs-icontitle').val()!=''){
            tabicon= ' icon="'+table.find('#oscitas-tabs-icontitle').val()+'"';
            tabicon+= ' icontype="'+table.find('#oscitas-tabs-icontypetitle').val()+'"';
        }
        if(table.find('#oscitas-tabs-icon').val()!=''){
            icon= ' icon="'+table.find('#oscitas-tabs-icon').val()+'"';
            icon+= ' icontype="'+table.find('#oscitas-tabs-icontype').val()+'"';
        }
        if(table.find('#oscitas-tabs-text').val()!=''){
            text= ' text="'+table.find('#oscitas-tabs-text').val()+'"';
        }
        if(table.find('#oscitas-tabs-position').val()!=''){
            position= ' position="tabs-below"';
        }
    }
    if(table.find('#oscitas-tabs-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-tabs-class').val()+'"';
    }
    var color='';
var coloesetting=['tabcolor','tabhcolor','atabcolor','atabhcolor','tabconcolor','tabconbgcolor'];
    jQuery(coloesetting).each(function(ind,val){
        if(table.find('#oscitas-tabs-'+val).val()!=''){
            color+= ' '+val+'="'+table.find('#oscitas-tabs-'+val).val()+'"';
        }
    })
    var shortcode = '['+$ebs_prefix+'tabs'+responsive+position+pills+icon+text+restype+cusclass+color;
    shortcode += ']';
    var row_attr={
        title:'',
        icon:'',
        icontype:'',
        iconcolor:''
    }
    form.find('tr.osc_dropdown_list_item').each(function(index){
        var $this=jQuery(this);
        var attr='';
        jQuery.each(row_attr,function(ind,val){
            if($this.find('.oscitas-itemtab-'+ind).val()!=''){
                attr+=' '+ind+'="'+$this.find('.oscitas-itemtab-'+ind).val()+'"';
            }
        })
        if(jQuery(this).find('.oscitas-itemtab-active').is(":checked")==true){
            attr+=' active="active"';
        }

        shortcode+='<br/>['+$ebs_prefix+'tab'+attr+']Tab content goes here.[/'+$ebs_prefix+'tab]';


    });

    shortcode += '<br/>[/'+$ebs_prefix+'tabs]';

    return shortcode;
}
function create_oscitas_tabs(pluginObj){
    var form = jQuery(pluginObj.hashId);
    var key=parseInt(jQuery('.osc_dropdown_list_item').length);
    var ebsTab={
        key:key
    }
    var table = form.find('table');
    form.find('#osc_add_new_dditem').click(function(){
        var item=_.template(ebsTabTmp, ebsTab)
        form.find('#oscitas-append-tabitem').append(item);
        ebsTab.key=parseInt(ebsTab.key)+1;
        ebs_color_picker(form.find('.color'));
        show_icon_dialog(form,jQuery('#oscitas-append-tabitem').find('tr:last').find('.oscitas-itemtab-showicon'));
//        jQuery('.oscitas-itemtab-showicon').each(function(){
//            show_icon_dialog(form,jQuery(this));
//        })

    });
    jQuery('.osc_remove_dditem').live('click',function(){
        jQuery(this).parent().parent().remove();
    })
    var icons = {
        header: "fa fa-caret-down",
        activeHeader: "fa fa-caret-up"
    };
    jQuery( "#ebs_pt_accordion" ).accordion({
        icons:icons,
        collapsible: true,
        heightStyle: "content"
    });

    jQuery('.tabs_color_setting table th,.tabs_color_setting table td').css({
        border:'1px solid #E0E0E0'
    });
    ebs_color_picker(form.find('.color'));
    table.find('#click_icon_list_tabs').click(function(){
        if(!jQuery(this).hasClass('osc_icon_showing_tabs')){
            jQuery(this).addClass('osc_icon_showing_tabs')
            table.find('#osc_show_iconlist_tabs').show();
        } else{
            jQuery(this).removeClass('osc_icon_showing_tabs')
            table.find('#osc_show_iconlist_tabs').hide();
        }
    });
    table.find('.oscitas-heading-icon_data li').click(function(){
        var val=jQuery(this).attr('data-value');
        var type=jQuery(this).attr('type');
        table.find('.oscitas-heading-icon_data li').removeClass('osc_icon_selected');
        jQuery(this).addClass('osc_icon_selected');
        table.find('#click_icon_list_tabs').removeClass('osc_icon_showing_tabs');
        table.find('#osc_show_iconlist_tabs').hide();
        table.find('#osc_show_icon_tabs').removeClass().addClass(type).addClass(val);
        table.find('#oscitas-tabs-icon').val(val);
        table.find('#oscitas-tabs-icontype').val(type);

    });
    jQuery('.oscitas-itemtab-showicon').each(function(){
        show_icon_dialog(form,jQuery(this));
    })
    check_tab_responsive();

    jQuery('#oscitas-tabs-responsive').click(function(){
        check_tab_responsive();
    })
    jQuery('.hide_icon_div').click(function(){
        jQuery('#osc_show_iconlist_tabstitle').hide();
    })

}

function check_tab_responsive(){
    var name=jQuery('#oscitas-tabs-responsive').data('name');
    if(jQuery('#oscitas-tabs-responsive').prop('checked')){
        jQuery('.'+name).show();

    } else{
        jQuery('.'+name).hide();
    }
    jQuery('#oscitas-form-tabs > table > tbody > tr:visible:even').css('background', '#EFEFEF');
    jQuery('#oscitas-form-tabs > table > tbody > tr:visible:odd').css('background', '#FFFFFF');
}
