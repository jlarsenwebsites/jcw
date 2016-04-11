var pricingtable={
    title:"Pricing Table Shortcode",
    id :'oscitas-form-pricing-table',
    pluginName: 'pricingtable',
    setRowColors:false
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(pricingtable,1220);
    })();
}
var pt_labels=jQuery.parseJSON(ebs.pt_labels);
function pricingtable_generate_shortcode(pluginObj,form,table){

    var shortcode ='',cl=0,premium,button,heading,price,fet,i, e,bgcolor, textcolor, hbgcolor, htextcolor, premium,currency,linkcolor, hlinkcolor,linkbgcolor, hlinkbgcolor,linkspec;
    var cusclass='';
    if(table.find('#oscitas-pricing-table-class').val()!=''){
        cusclass= ' class="'+table.find('#oscitas-pricing-table-class').val()+'"';
    }
    var coltype=jQuery(pluginObj.hashId).find('#oscitas-pricing-table-type_circle').prop('checked')?'':' col_type="'+jQuery(pluginObj.hashId).find('#oscitas-pricing-table-coltype').val()+'"';
    shortcode ='['+$ebs_prefix+'pt_row'+cusclass+coltype+']<br/>';
    var col= jQuery('#oscitas-no-of-ptcolumns').val();

    cl=$columnnum/col;

    currency=jQuery('#oscitas-pricing-table-currency').val();

    currency=currency!=''?' currency="'+currency+'"':'';

    for( i=1; i<=col; i++){
        var color='';
        theme=jQuery('#theme'+i).val();
        bgcolor=jQuery('#bgcolor'+i).val();
        textcolor=jQuery('#textcolor'+i).val();
        hbgcolor=jQuery('#hbgcolor'+i).val();
        linkcolor=jQuery('#linkcolor'+i).val();
        hlinkcolor=jQuery('#hlinkcolor'+i).val();
        htextcolor=jQuery('#htextcolor'+i).val();
        var com_bgcolor=jQuery('#bgcolor_common').val();
        var com_textcolor=jQuery('#textcolor_common').val();
        var com_hbgcolor=jQuery('#hbgcolor_common').val();
        var com_linkcolor=jQuery('#linkcolor_common').val();
        var com_hlinkcolor=jQuery('#hlinkcolor_common').val();
        var com_htextcolor=jQuery('#htextcolor_common').val();
        premium=jQuery('#premium'+i).prop('checked')?' premium="true"':'';
        button=jQuery('#button'+i).val();
        heading=jQuery('#heading'+i).val();
        price=jQuery('#price'+i).val();
        fet=jQuery('#fet'+i).val();
        var arr=['lg','md','sm','xs']
        var cl='';
        jQuery(arr).each(function(ind,val){
            cl+=' '+val+'="'+jQuery('#'+val+i).val()+'"';
        })


        bgcolor=bgcolor!=''?bgcolor:com_bgcolor;
        textcolor=textcolor!=''?textcolor:com_textcolor;
        linkcolor=linkcolor!=''?linkcolor:com_linkcolor;

        linkspec= linkcolor!=''?' lcolor="'+linkcolor+'"':'';
        color+=bgcolor!=''?' bgcolor="'+bgcolor+'"':'';
        color+=textcolor!=''?' textcolor="'+textcolor+'"':'';



        if(jQuery(pluginObj.hashId).find('#oscitas-pricing-table-type_circle').prop('checked')){
            hbgcolor=hbgcolor!=''?hbgcolor:com_hbgcolor;
            htextcolor=htextcolor!=''?bgcolor:com_htextcolor;
            hlinkcolor=hlinkcolor!=''?hlinkcolor:com_hlinkcolor;

            color+=hbgcolor!=''?' hbgcolor="'+hbgcolor+'"':'';
            color+=htextcolor!=''?' htextcolor="'+htextcolor+'"':'';
            linkspec+= hlinkcolor!=''?' hlcolor="'+hlinkcolor+'"':'';


            shortcode +='['+$ebs_prefix+'pt_column_circle'+cl+color+currency+premium+' price="'+price+'" heading="'+heading+'"'+linkspec+' link="http://www.google.com" link_text="Sign Up"]<br/>';
//                shortcode +='[pt_column_circle_content]Column Description[/pt_column_circle_content]<br/>';
            shortcode +='['+$ebs_prefix+'pt_column_features_circle]<br/>'
            for( e=1;e<= fet; e++){
                shortcode +='['+$ebs_prefix+'feature_circle]Feature[/'+$ebs_prefix+'feature_circle]<br/>';
            }
            shortcode +='[/'+$ebs_prefix+'pt_column_features_circle]<br/>';
            shortcode +='[/'+$ebs_prefix+'pt_column_circle]<br/>';
        }else{
            var coltype=jQuery(pluginObj.hashId).find('#oscitas-pricing-table-coltype').val();
            if(coltype=='singlecol'){
                cl=' col="'+col+'"';
            }
            linkbgcolor=jQuery('#linkbgcolor'+i).val();
            var com_linkbgcolor=jQuery('#linkbgcolor_common').val();

            linkbgcolor=linkbgcolor!=''?linkbgcolor:com_linkbgcolor;
            linkspec+= linkbgcolor!=''?' lbgcolor="'+linkbgcolor+'"':'';


            shortcode +='['+$ebs_prefix+'pt_column'+cl+' col_type="'+coltype+'" '+color+linkspec+premium+']<br/>';
            button ='['+$ebs_prefix+'pt_button link="http://www.google.com"]Sign Up[/'+$ebs_prefix+'pt_button]<br/>';
            shortcode +='['+$ebs_prefix+'pt_column_head '+currency+' price="'+price+'"]'+heading+'[/'+$ebs_prefix+'pt_column_head]<br/>';
            //
            shortcode +='['+$ebs_prefix+'pt_column_features]<br/>'
            for( e=1;e<= fet; e++){
                shortcode +='['+$ebs_prefix+'feature]Feature[/'+$ebs_prefix+'feature]<br/>';
            }
            shortcode +='[/'+$ebs_prefix+'pt_column_features]<br/>';
            shortcode+=button;
            shortcode +='[/'+$ebs_prefix+'pt_column]<br/>';
        }



    }

    shortcode +='[/'+$ebs_prefix+'pt_row]<br/>';
    return shortcode;
}
function create_oscitas_pricingtable(pluginObj,ebsData){

    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

    __common_color_setting(ebsData);
    show_pricng_table(ebsData);


    jQuery('#oscitas-no-of-ptcolumns').change(function(){
        show_pricng_table(ebsData)

    });
    jQuery(pluginObj.hashId).find('.pt_type').click(function(){

        if(jQuery(this).val()=='circle'){
            jQuery(pluginObj.hashId).find('#oscitas-no-of-ptcolumns').html(jQuery('#num_pt_table_circle').html());
            jQuery(pluginObj.hashId).find('.ptcolumns_type').hide();
        } else{
            jQuery(pluginObj.hashId).find('#oscitas-no-of-ptcolumns').html(jQuery('#num_pt_table_box').html());
            jQuery(pluginObj.hashId).find('.ptcolumns_type').show();
        }
        __common_color_setting(ebsData);
        show_pricng_table(ebsData);

    })
    jQuery(pluginObj.hashId).find('#oscitas-pricing-table-coltype').change(function(){
        check_col_type();
    });
    var icons = {
        header: "fa fa-caret-down",
        activeHeader: "fa fa-caret-up"
    };
    jQuery( "#ebs_pt_accordion" ).accordion({
        icons:icons,
        collapsible: true,
        heightStyle: "content"
    });
    // handles the click event of the submit button

}

function __common_color_setting(ebsData){
    var ele='';
    var this_circle=jQuery(pricingtable.hashId).find('#oscitas-pricing-table-type_circle').prop('checked')?1:0;
    var col1=this_circle==0?'<th>'+pt_labels.linkbg+' '+pt_labels.color+' </th>':"";
    ele+= '<div><table class="common_color_setting"><thead><tr><th>'+pt_labels.type+'</th><th>'+pt_labels.bg+' '+pt_labels.color+'</th><th>'+pt_labels.text+' '+pt_labels.color+'</th><th>'+pt_labels.link+' '+pt_labels.color+'</th>'+col1+'</tr></thead>';

    var i='_common';
    var col1=this_circle==1?'<tr><td>'+pt_labels.hover+'</td>':"";
    var col2=this_circle==1?'<td><input type="text" name="hbgcolor" id="hbgcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val(ebsData['hbgcolor'])+'"></td>':"";
    var col3=this_circle==1?'<td><input type="text" name="htextcolor" id="htextcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val(ebsData['htextcolor'])+'"></td>':"";
    var col4=this_circle==1?'<td><input type="text" name="hlinkcolor" id="hlinkcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val(ebsData['hlinkcolor'])+'"></td>':"";
    var col5=this_circle==1?'':'<td><input type="text" name="linkbgcolor" id="linkbgcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val(ebsData['linkbgcolor'])+'"></td>';

    var col6=this_circle==1?'</tr>':"";

    var cols='<tr><td>'+pt_labels.default+'</td><td><input type="text" name="bgcolor" id="bgcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val(ebsData['bgcolor'])+'"></td><td>';
    cols+='<input type="text" name="textcolor" id="textcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val(ebsData['textcolor'])+'"></td><td>';
    cols+='<input type="text" name="linkcolor" id="linkcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val(ebsData['linkcolor'])+'"></td>'+col5+'</tr>'+col1+col2+col3+col4+col6;

    ele+=cols;
    ele+='</table></div>';
    jQuery('#insert_common_color').html(ele);
    ebs_color_picker(jQuery(pricingtable.hashId).find('.wp_colorpicker'));
    jQuery(pricingtable.hashId).find('table tr:visible:even').css('background', '#EFEFEF');
    jQuery(pricingtable.hashId).find('table tr:visible:odd').css('background', '#FFFFFF');
}
function show_pricng_table(ebsData){

    var ele='',e=0,theme,button,heading,fet,price;
    var col= jQuery(pricingtable.hashId).find('#oscitas-no-of-ptcolumns').val();

    var newcol='';
    var this_circle=jQuery(pricingtable.hashId).find('#oscitas-pricing-table-type_circle').prop('checked')?1:0;
    console.log(ebsData);
    var $ptable=ebsData['pricing_table'];


    var option={
        'lg':'LG',
        'md': 'MD',
        'sm': 'SM',
        'xs':'XS'
    },selcol,sel;
    for(var i=1;i<=col;i++){
        var $pData=pt_isSet($ptable[i])?$ptable[i]:'';
        ele+= '<div class="append_new_pt">';
        var appendcol='<table class="pt_layout_setting"><tr>' ;

        jQuery.each(option,function(index,val){

            var sm='<td><label>'+val+'</label><select name="pricing_table['+i+']['+index+']" id="'+index+i+'">';
            for( e=1;e<=$columnnum;e++){
                if(pt_isSet($pData[index])){
                    if(e==$pData[index]){
                        sel='selected="selected"';
                    } else{
                        sel='';
                    }

                } else{
                    if(index=='lg'){

                        selcol=$columnnum/col;
                        if(e==selcol){
                            sel='selected="selected"';
                        }
                        else{
                            sel='';
                        }
                    }
                    else{
                        if(e==$columnnum){
                            sel='selected="selected"';
                        }
                        else{
                            sel='';
                        }
                    }
                }
                sm+='<option value="'+e+'" '+sel+'>'+e+'</option>';
            }
            sm+='</select></td>';
            appendcol+=sm;
        });
        appendcol+= '</tr></table>';
        theme= '<input type="checkbox" name="pricing_table['+i+'][premium]" id="premium'+i+'" value="true" '+(pt_isSet($pData['premium']) && 'true'==$pData['premium']?'checked="checked"':'')+'>';

        fet='<select name="pricing_table['+i+'][fet]" id="fet'+i+'">';
        for( e=1;e<=6;e++){
            if(pt_isSet($pData['fet']) && e==$pData['fet']){
                sel='selected=selected';
            } else{
                sel='';
            }
            fet+='<option value="'+e+'" '+sel+'>'+e+'</option>';
        }
        fet+='</select>';
        var $colorsetting='<table class="pt_color_setting">';
        if( this_circle==1){
            $colorsetting+='<tr><th>'+pt_labels.default+'</th>' +
                '<td><label>'+pt_labels.bg+'</label><input type="text" name="pricing_table['+i+'][bgcolor]" id="bgcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val($pData['bgcolor'])+'"></td>' +
                '<td><label>'+pt_labels.text+'</label><input type="text" name="pricing_table['+i+'][textcolor]" id="textcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val($pData['textcolor'])+'"></td>' +
                '<td><label>'+pt_labels.link+'</label><input type="text" name="pricing_table['+i+'][linkcolor]" id="linkcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val($pData['linkcolor'])+'"></td>' +
                '</tr>';
            $colorsetting+='<tr><th>'+pt_labels.hover+'</th>' +
                '<td><label>'+pt_labels.bg+'</label><input type="text" name="pricing_table['+i+'][hbgcolor]" id="hbgcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val($pData['hbgcolor'])+'"></td>' +
                '<td><label>'+pt_labels.text+'<input type="text" name="pricing_table['+i+'][htextcolor]" id="htextcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val($pData['htextcolor'])+'"></td>' +
                '<td><label>'+pt_labels.link+'</label><input type="text" name="pricing_table['+i+'][hlinkcolor]" id="hlinkcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val($pData['hlinkcolor'])+'"></td>' +
                '</tr>';
        } else{
            $colorsetting+='<tr>' +
                '<td><label>'+pt_labels.bg+'</label><input type="text" name="pricing_table['+i+'][bgcolor]" id="bgcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val($pData['bgcolor'])+'"></td>' +
                '<td><label>'+pt_labels.text+'</label><input type="text" name="pricing_table['+i+'][textcolor]" id="textcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val($pData['textcolor'])+'"></td>' +
                '<td><label>'+pt_labels.link+'</label><input type="text" name="pricing_table['+i+'][linkcolor]" id="linkcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val($pData['linkcolor'])+'"></td>' +
                '<td><label>'+pt_labels.linkbg+'</label><input type="text" name="pricing_table['+i+'][linkbgcolor]" id="linkbgcolor'+i+'" class="wp_colorpicker" value="'+pt_text_val($pData['linkbgcolor'])+'"></td>' +
                '</tr>';
        }
        $colorsetting+='</table>';
        heading='<input type="text" name="pricing_table['+i+'][heading]" id="heading'+i+'" value="'+pt_text_val($pData['heading'])+'">';
        price='<input type="text" name="pricing_table['+i+'][price]" id="price'+i+'" value="'+pt_text_val($pData['price'])+'">';


        ele+= '<div class="pt_col">'+i+'</div><div class="ebspt_ui_tabs"> <ul>' +
            '<li><a href="#ebs_pt_feature'+i+'">'+pt_labels.fet+'</a></li>' +
            '<li><a href="#ebs_pt_color'+i+'">'+pt_labels.color+'</a></li>' +
            '<li><a href="#ebs_pt_layout'+i+'">'+pt_labels.layout+'</a></li>' +
            '</ul>';
        ele+='<div id="ebs_pt_feature'+i+'"><table><tr>' +
            '<td><label>Premium</label>'+theme+'</td>' +
            '<td><label>Heading</label>'+heading+'</td>' +
            '<td><label>Price</label>'+price+'</td>' +
            '<td><label>Features</label>'+fet+'</td>' +
            '</tr></table></div>';
        ele+='<div id="ebs_pt_color'+i+'">' +$colorsetting+'</div>';
        ele+='<div id="ebs_pt_layout'+i+'">' +appendcol+'</div>';
        ele+='</div>'
        ele+='</div>'


    }
    jQuery('#insert_pt_spec').html(ele);

    ebs_color_picker(jQuery(pricingtable.hashId).find('.wp_colorpicker'));
    jQuery(pricingtable.hashId).find('table tr:visible:even').css('background', '#EFEFEF');
    jQuery(pricingtable.hashId).find('table tr:visible:odd').css('background', '#FFFFFF');
    if(jQuery(pricingtable.hashId).find('#oscitas-pricing-table-type_circle').prop('checked')){
    }
    jQuery(pricingtable.hashId).find('.ptcol').css({width:'25%'});
    jQuery(pricingtable.hashId).find('.ptcol').find('select').css({width:'95%'});
    check_col_type();
    jQuery('.ebspt_ui_tabs').tabs();
}
function check_col_type(){
    if( jQuery(pricingtable.hashId).find('#oscitas-pricing-table-coltype').val()=='singlecol'){
        jQuery(pricingtable.hashId).find('.columns_new').hide();
    } else{
        jQuery(pricingtable.hashId).find('.columns_new').show();
    }
}
function pt_isSet($var){
    if( typeof $var !== "undefined" && $var!=null){
        return true;
    } else{
        return false;
    }
}
function pt_text_val($var){
    if(pt_isSet($var)){
        return $var
    } else{
        return '';
    }

}