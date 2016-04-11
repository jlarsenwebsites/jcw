var rule={
    title:"Horizontal Rule Shortcode",
    id :'oscitas-form-rule',
    pluginName: 'rule',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(rule);
    })();
}

function rule_generate_shortcode(pluginObj,form,table){
    var cusclass='',margin='';
    if(table.find('#oscitas-rule-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-rule-class').val()+'"';
    }
    if(table.find('#oscitas-rule-margin').val()!=''){
        margin= ' margin="'+table.find('#oscitas-rule-margin').val()+'"';
    }
    var shortcode = '['+$ebs_prefix+'rule'+cusclass+margin;

    shortcode += ' style="' + table.find('#oscitas-rule-style').val();

    shortcode += '" ';
    //shortcode += ' btntag="'+table.find('#oscitas-button-type').val()+'" ';



    shortcode += ']';

    return shortcode;
}
function create_oscitas_rule(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');
}

