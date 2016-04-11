(function() {
    var objNew=jQuery.parseJSON(ebs_dropdown_obj);
    var basic=[],interactive=[],content=[],miscellaneous=[],columns=[],social=[];
    jQuery.each(objNew,function(ind,val){
        if(typeof val=='object'){
            if(typeof(val['width'])==='undefined' || val['width']=='') val['width'] = 'auto';
            if(typeof(val['height'])==='undefined' || val['height']=='') val['height'] = 'auto';
            var n={text:val['name'],image:ebs_url+'/lib/shortcode/'+ind+'/icon.png',icon:'osc_icon '+ind, onclick : function() {
                if(ind=='pagination'){

                    tinyMCE.activeEditor.selection.setContent('<img src="' + ebs_url+'/lib/shortcode/'+ind+'/trans.gif" class="mce-wp-custompagination mceItemNoResize"  title="OscNextPage"/>');

                } else{
                    eval('_create_tinyMCE_dropdown('+ind+',"'+val['width']+'","'+val['height']+'")');
                }
            }
            }
            var grp=val['group'];
            eval(grp).push(n);


        }
    });

    var objGrp=jQuery.parseJSON(ebs_dropdown_grp),grps_obj=[];
    jQuery.each(objGrp,function(ind,val){
        if(typeof val=='object'){
            var n=  {text:val['name'], image: ebs_asseturl+'images/'+val['icon'],menu:eval(ind),icon:'osc_group '}
        }
        grps_obj.push(n);
    });
    tinymce.create('tinymce.plugins.oscitas_main_dropdown', {

        init : function(ed, url) {
            ed.addButton( 'oscitas_main_dropdown_button', {
                type: 'splitbutton',
                title: "EBSP Shortcode",
                icon:'osc_icon_drop ebsp_dropdown_icon',
                image: ebs_asseturl+'images/osc-icon-dropdown.png',
                class: "osc_ebsp_dropdown",
                onclick: function(e) {
                },
                menu:grps_obj

            });

        }


    });

    tinymce.PluginManager.add('oscitas_main_dropdown', tinymce.plugins.oscitas_main_dropdown);
})();

jQuery(window).load(function(){
    jQuery('.mce-ico.mce-i-osc_icon_drop.ebsp_dropdown_icon').parents('div').addClass('ebsp_dropdown_cs_class');
});