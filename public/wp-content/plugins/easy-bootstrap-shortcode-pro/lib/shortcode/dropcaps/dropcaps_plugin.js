var dropcaps={
    title:"Dropcaps Shortcode",
    id :'oscitas-form-dropcaps',
    pluginName: 'dropcaps',
    setRowColors:true
};
if(window.ebsp_style=='icon'){
(function() {
    _create_tinyMCE_options(dropcaps,800);
})();
}
function dropcapvisiblebg(){
    var val=jQuery('#oscitas-form-dropcaps #oscitas-dropcap-style').val();
    if(val=='dropcap-standard'){
        jQuery('#oscitas-form-dropcaps #nodropcapbg').hide();
    } else{
        jQuery('#oscitas-form-dropcaps #nodropcapbg').show();
    }
    jQuery('#oscitas-form-dropcaps table tr:visible:even').css('background', '#EFEFEF');
    jQuery('#oscitas-form-dropcaps table tr:visible:odd').css('background', '#FFFFFF');
}

function dropcaps_generate_shortcode(pluginObj,form,table){
    // but well, this gets the job done nonetheless
    var cusclass='';
    if(table.find('#oscitas-dropcap-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-dropcap-class').val()+'"';
    }
    shortcode='';
    if(jQuery('#oscitas-dropcap-content').val()!=''){
        var bg;
        var val=jQuery('#oscitas-form-dropcaps #oscitas-dropcap-style').val();
        if(val=='dropcap-standard'){
            bg='';
        } else{
            bg=' bg="'+jQuery('#oscitas-dropcap-bg').val()+'"';
        }

        var shortcode = '['+$ebs_prefix+'dropcaps style="'+jQuery('#oscitas-dropcap-style').val()+'"'+cusclass+bg+'  color="'+jQuery('#oscitas-dropcap-color').val()+'"]';
        shortcode += jQuery('#oscitas-dropcap-content').val();
        shortcode += '[/'+$ebs_prefix+'dropcaps]';
    }
    return shortcode;
}
function create_oscitas_dropcaps(pluginObj){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');


    dropcapvisiblebg();
    form.find('#oscitas-dropcap-style').change(function(){
        dropcapvisiblebg();
        });
    ebs_color_picker(form.find('.color'));
}

