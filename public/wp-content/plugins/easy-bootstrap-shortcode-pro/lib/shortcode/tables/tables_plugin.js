var tables={
    title:"Table Shortcode",
    id :'oscitas-form-table',
    pluginName: 'tables'
};

if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(tables);
    })();
}


function tables_generate_shortcode(pluginObj,form,table){

    var cusclass='';
    if(table.find('#oscitas-table-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-table-class').val()+'"';
    }
    var columns = table.find('#oscitas-table-columns').val();
    var rows = table.find('#oscitas-table-rows').val();
    var value = table.find('#oscitas-table-width').val();
    var osStyle = table.find('#oscitas-table-style').val();

    var osHover = table.find('#oscitas-table-hover').prop('checked') ? ' table-hover' : '' ;
    var osScroll = table.find('#oscitas-table-scroll').prop('checked')? 'true': 'false';
    //creating table
    var shortcode = '['+$ebs_prefix+'table ';
    shortcode += 'width ="' + value + '"';
    shortcode += ' style ="' + osStyle +osHover+ '"';
    shortcode += ' responsive ="' +osScroll+ '"'+cusclass;

    shortcode += ']<br/>['+$ebs_prefix+'table_head]<br/>';
    for (var i=1;i<=columns;i++)
    {
        shortcode += '['+$ebs_prefix+'th_column]Heading-'+i+'[/'+$ebs_prefix+'th_column]<br/>';
    }
    shortcode += '[/'+$ebs_prefix+'table_head]<br/>['+$ebs_prefix+'table_body]<br/>';

    for (var j=1;j<=rows;j++)
    {
        shortcode += '['+$ebs_prefix+'table_row]<br/>';
        for (var i=1;i<=columns;i++)
        {
            shortcode += '['+$ebs_prefix+'row_column]value-'+i+'[/'+$ebs_prefix+'row_column]<br/>';
        }

        shortcode += '[/'+$ebs_prefix+'table_row]<br/>';
    }
    shortcode += '[/'+$ebs_prefix+'table_body]<br/>[/'+$ebs_prefix+'table]';

    return shortcode;
}
function create_oscitas_tables(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

}

