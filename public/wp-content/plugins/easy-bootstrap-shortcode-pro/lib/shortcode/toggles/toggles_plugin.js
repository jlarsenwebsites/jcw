var toggles={
    title:"Toggle/Accordion Shortcode",
    id :'oscitas-form-toggles',
    pluginName: 'toggles',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(toggles,980);
})();
}
function __toggle_show_icon_dialog(parent,ele){
    parent.find(ele).on('click',function(){
        var $parent=jQuery(this).parent('td');
                var $this=jQuery('#osc_show_iconlist_togglestitle')
        $this.show();
                $this.find('li').unbind('click');
                $this.find('li').click(function(){
                    var val=jQuery(this).attr('data-value');
                    var type=jQuery(this).attr('type');

                    $parent.find('.oscitas-itemtoggle-iconpreview').removeClass().addClass('oscitas-itemtoggle-iconpreview').addClass(type).addClass(val);
                    $parent.find('.oscitas-itemtoggle-icon').val(val);
                    $parent.find('.oscitas-itemtoggle-icontype').val(type);
                    $this.hide();
                })


    })
}
function toggles_generate_shortcode(pluginObj,form,table){

    var cusclass='', active='', openclose='';

    if(table.find('#oscitas-toggles-class').val()!=''){
        cusclass+= ' class="'+table.find('#oscitas-toggles-class').val()+'"';
    }
    if(table.find('#oscitas-toggles-openfirst').is(":checked")==true){
        active=' active="active"';
    }
    if(table.find('#oscitas-toggles-opencloseicon').is(":checked")==true){
        openclose =' ocicon="true"';

    }
    var row_attr={
        title:'',
        icon:'',
        icontype:'',
        iconcolor:''
    }

    var shortcode = '['+$ebs_prefix+'toggles'+cusclass;
    shortcode += ']';

    var i=1;
    form.find('tr.osc_dropdown_list_item').each(function(index){
        var $this=jQuery(this);
        var attr='';
        if(i==1){
            attr+=active;
        }
        attr+=openclose;
        jQuery.each(row_attr,function(ind,val){
            if($this.find('.oscitas-itemtoggle-'+ind).val()!=''){
                attr+=' '+ind+'="'+$this.find('.oscitas-itemtoggle-'+ind).val()+'"';
            }
        });


        shortcode+='<br/>['+$ebs_prefix+'toggle'+attr+']Toggle content goes here.[/'+$ebs_prefix+'toggle]';
        i++;

    });

    shortcode += '<br/>[/'+$ebs_prefix+'toggles]';
    return shortcode;
}

function create_oscitas_toggles(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
    var key=parseInt(jQuery('.osc_dropdown_list_item').length);
    var ebsToggle={
        key:key
    }
    form.find('#osc_add_new_dditem').click(function(){
        var item=_.template(ebsToggleTmp, ebsToggle)
        form.find('#oscitas-append-toggleitem').append(item);
        ebsToggle.key=parseInt(ebsToggle.key)+1;
        ebs_color_picker(form.find('.color'));
        __toggle_show_icon_dialog(form,jQuery('#oscitas-append-toggleitem').find('tr:last').find('.oscitas-itemtoggle-showicon'));

    });
    jQuery('.osc_remove_dditem').live('click',function(){
        jQuery(this).parent().parent().remove();
    })

    ebs_color_picker(form.find('.color'));
    jQuery('.oscitas-itemtoggle-showicon').each(function(){

        __toggle_show_icon_dialog(form,jQuery(this));
    })
    jQuery('.hide_icon_div').click(function(){
        jQuery('#osc_show_iconlist_togglestitle').hide();
    })
}
