wpcolumns={
    title:"Columns Shortcode",
    id :'oscitas-form-wpcolumns',
    pluginName: 'wpcolumns'
};
if(window.ebsp_style=='icon'){
    (function() {
        _create_tinyMCE_options(wpcolumns, 1094);
    })();
}

function wpcolumns_generate_shortcode(pluginObj,form,table){
    var a_md=[],a_sm=[],a_xs=[],a_lg=[],j=0,a_md_off=[],a_sm_off=[],a_xs_off=[],a_lg_off=[],a_md_hide=[],a_sm_hide=[],a_xs_hide=[],a_lg_hide=[],sm='',md='',xs='',smoff='',mdoff='',xsoff='',lgoff='',smhide='',mdhide='',xshide='',lghide='',smclear='',mdclear='',xsclear='',lgclear='',a_animate=[],a_animatetime=[],animation,a_class=[],aclass;


    var noOfColumns = jQuery('#oscitas-no-of-wpcolumns').val();
    var shortcode = '';
    var cusclass='';
    if(table.find('#oscitas-column-class').val()!=''){
        cusclass+= ' class="'+table.find('#oscitas-column-class').val()+'"';
    }
    if(table.find('#oscitas-column-wrap').prop('checked')){
        cusclass+= ' wrap="true"';
        if(table.find('#oscitas-column-wrap_class').val()!=''){
            cusclass+= ' wrap_class="'+table.find('#oscitas-column-wrap_class').val()+'"';
        }
    }
    shortcode ='['+$ebs_prefix+'row'+cusclass+']';
    for(var i=1;i<=parseInt(noOfColumns);i++){

        a_md[i] = jQuery('#md'+i).val();
        a_sm[i] = jQuery('#sm'+i).val();
        a_xs[i] = jQuery('#xs'+i).val();
        a_lg[i] = jQuery('#lg'+i).val();
        a_md_off[i] = jQuery('#mdoff'+i).val();
        a_sm_off[i] = jQuery('#smoff'+i).val();
        a_xs_off[i] = jQuery('#xsoff'+i).val();
        a_lg_off[i] = jQuery('#lgoff'+i).val();
        a_animate[i] = jQuery('#am'+i).val();

        a_animatetime[i] = jQuery('#at'+i).val();

        var classval=jQuery('#cl'+i).val();
        a_class[i]='';
        if(classval!=''){
            a_class[i]=classval;
        }

        //if(a_md[i]!=12){
        if(a_md[i]== a_lg[i] ){
            md=' md="'+a_md[i]+'"';
        } else{
            md=' lg="'+a_lg[i]+'" md="'+a_md[i]+'"';
        }
        //} else{
        //    md='';
        //}
        //if(a_sm[i]!=12){
        sm=' sm="'+a_sm[i]+'"';
        //} else{
        //    sm='';
        //}
        //if(a_xs[i]!=12){
        xs=' xs="'+a_xs[i]+'"';
        //} else{
        //    xs='';
        //}
        if(a_md_off[i]!=0){
            mdoff=' mdoff="'+a_md_off[i]+'"';
        }
        else{
            mdoff='';
        }
        if(a_sm_off[i]!=0){
            smoff=' smoff="'+a_sm_off[i]+'"';
        }
        else{
            smoff='';
        }
        if(a_xs_off[i]!=0){
            xsoff=' xsoff="'+a_xs_off[i]+'"';
        }
        else{
            xsoff='';
        }
        if(a_lg_off[i]!=0){
            lgoff=' lgoff="'+a_lg_off[i]+'"';
        }
        else{
            lgoff='';
        }
        if(a_animate[i]!='' && a_animate[i]!='none'){
            animation=' animation="'+a_animate[i]+'"';
            animation+=' animationtime="'+a_animatetime[i]+'"';

        }else{
            animation='';
        }
        if(a_class[i]!=''){
            aclass=' class="'+a_class[i]+'"'
        } else{
            aclass='';
        }
        if(jQuery('#mdrowhide').is(':checked') || jQuery('#mdhide'+i).is(':checked')){
            mdhide=' mdhide="yes"';
        }
        else{
            mdhide='';
        }
        if(jQuery('#smrowhide').is(':checked') ||jQuery('#smhide'+i).is(':checked')){
            smhide=' smhide="yes"';
        }
        else{
            smhide='';
        }
        if(jQuery('#xsrowhide').is(':checked') ||jQuery('#xshide'+i).is(':checked')){
            xshide=' xshide="yes"';
        }
        else{
            xshide='';
        }
        if(jQuery('#lgrowhide').is(':checked') ||jQuery('#lghide'+i).is(':checked')){
            lghide=' lghide="yes"';
        }
        else{
            lghide='';
        }

        if(jQuery('#mdclear'+i).is(':checked')){
            mdclear=' mdclear="yes"';
        }
        else{
            mdclear='';
        }
        if(jQuery('#smclear'+i).is(':checked')){
            smclear=' smclear="yes"';
        }
        else{
            smclear='';
        }
        if(jQuery('#xsclear'+i).is(':checked')){
            xsclear=' xsclear="yes"';
        }
        else{
            xsclear='';
        }
        if(jQuery('#lgclear'+i).is(':checked')){
            lgclear=' lgclear="yes"';
        }
        else{
            lgclear='';
        }


        shortcode += '<br/>['+$ebs_prefix+'column '+md+sm+xs+mdoff+smoff+xsoff+lgoff+mdhide+smhide+xshide+lghide+mdclear+smclear+xsclear+lgclear+animation+aclass+' ]<br/>text<br/>[/'+$ebs_prefix+'column]';
    }

    shortcode += '<br/>[/'+$ebs_prefix+'row]';
    return shortcode;
}

function create_oscitas_wpcolumns(pluginObj,ebsData){
    var form = jQuery(pluginObj.hashId);
    var table = form.find('table');
    jQuery("#oscitas-table tr:not(#appended tr):visible:even").css('background-color', '#FFFFFF');
    jQuery("#oscitas-table tr:not(#appended tr):visible:odd").css('background-color', '#EFEFEF');

    function show_table(){

        var ele='',e=0,sm,smoff,md,mdoff,lg,lgoff,xs,xsoff,sel,val=0,selcol,hidecol;
        var col= form.find('#oscitas-no-of-wpcolumns').val();
        ele = '';


        var option=jQuery.parseJSON(ebs.screen_type);

        ele+= '<table id="appended" class="tb_multiple_column"><thead><tr>'+jQuery('#osc_column_headings_2').html();

        for(var i=1;i<=col;i++){
            jQuery('#osc_column_headings').find('span.colnum').html(i)
            var newele='<th>'+jQuery('#osc_column_headings').html()+'</th>';



            ele+=newele;



        }
        ele+= '</tr></thead><tbody class="column_tbody">';
        jQuery.each(option,function(index,val){
            if(index=='am'){
                ele+='<tr><th class="column_td_first">'+val+'</th><td style="min-width:50px;max-width:50px"></td>';
                for(var i=1;i<=col;i++){
                    sm='<select name="'+index+'_'+i+'" id="'+index+i+'">';
                    jQuery.each(effects,function(eff,effval){
                        var sel=index+'_'+i in ebsData?(ebsData[index+'_'+i]==eff?' selected="selected"':''):'';
                        sm+='<option value="'+eff+'"'+sel+'>'+effval+'</option>';
                    })
                    sm+='</select>';
                    ele+='<td><div>'+sm+'</div></td>';
                }
            }  else if(index=='at'){
                ele+='<tr><th class="column_td_first">'+val+'</th><td style="min-width:50px;max-width:50px"></td>';
                for(var i=1;i<=col;i++){

                    sm='<select name="'+index+'_'+i+'" id="'+index+i+'">';
                    sm+='<option value="everytime" '+(index+'_'+i in ebsData ?(ebsData[index+'_'+i]=='everytime'?' selected="selected"':''):'')+'>'+ebs.everytime+'</option>';
                    sm+='<option value="onetime" '+(ebsData[index+'_'+i]=='onetime'?' selected="selected"':'')+'>'+ebs.onetime+'</option>';
                    sm+='</select>';

                    ele+='<td><div>'+sm+'</div></td>';
                }
            }else if(index=='cl'){
                ele+='<tr><th class="column_td_first">'+val+'</th><td style="min-width:50px;max-width:50px"></td>';
                for(var i=1;i<=col;i++){
                    sm='<input type="text" name="'+index+'_'+i+'" id="'+index+i+'" value="'+(index+'_'+i in ebsData?ebsData[index+'_'+i]:'')+'" >';

                    ele+='<td><div>'+sm+'</div></td>';
                }
            }else{
                ele+='<tr><th class="column_td_first">'+val+'</th><td style="min-width:50px;max-width:50px"><input type="checkbox"  name="'+index+'rowhide" id="'+index+'rowhide" value="yes" '+( index+'rowhide' in ebsData?( ebsData[index+'rowhide']=="yes"?' checked="checked"':''):'')+'></td>';
                for(var i=1;i<=col;i++){
                    sm='<select name="'+index+'_'+i+'" id="'+index+i+'">';
                    for( e=1;e<=$columnnum;e++){
                        if(index+'_'+i in ebsData ){
                             sel=ebsData[index+'_'+i]==e?' selected="selected"':'';
                        } else{
                        if(index=='lg'){

                            selcol=$columnnum/col;
                            if(e==selcol){
                                sel='selected=selected'
                            }
                            else{
                                sel='';
                            }
                        } else{
                            if(e==$columnnum){
                                sel='selected=selected'
                            }
                            else{
                                sel='';
                            }
                        }
                        }
                        sm+='<option value="'+e+'" '+sel+'>'+e+'</option>';
                    }
                    sm+='</select>';
                    smoff='<select name="'+index+'off_'+i+'" id="'+index+'off'+i+'">';
                    for( e=0;e<$columnnum;e++){
                        var selc='';

                        if(index+'off_'+i in ebsData ){
                        selc= ebsData[index+'off_'+i]==e?' selected="selected"':'';
                        }
                        smoff+='<option value="'+e+'" '+selc+'>'+e+'</option>';
                    }
                    smoff+='</select>';

                    clearleft='<input type="checkbox"  name="'+index+'clear_'+i+'" id="'+index+'clear'+i+'" value="yes" '+( index+'clear_'+i in ebsData?( ebsData[index+'clear_'+i]=="yes"?' checked="checked"':''):'')+'>';

                    hidecol='<input type="checkbox"  name="'+index+'hide_'+i+'" id="'+index+'hide'+i+'" value="yes" '+(  index+'hide_'+i in ebsData?(ebsData[index+'hide_'+i]=="yes"?' checked="checked"':''):'')+'>';


                    ele+='<td><div class="head_division head_division_check">'+clearleft+'</div><div class="head_division">'+sm+'</div><div class="head_division">'+smoff+'</div><div class="head_division head_division_check right">'+hidecol+'</div></td>';



                }
                ele+='</tr>';
            }
        });

        ele +='</tbody></table>';
        table.find('#append_column_table').html(ele);
        jQuery("#oscitas-table tr:not(#appended tr):visible:even").css('background-color', '#FFFFFF');
        jQuery("#oscitas-table tr:not(#appended tr):visible:odd").css('background-color', '#EFEFEF');
    }
    function chnage_col_value(type){

        var col= form.find('#oscitas-no-of-wpcolumns').val(),str,arr=[],i=0;
        if(col==2 || col==3){
            if(col==2){
                str=form.find('#oscitas-two-columns').val();
                jQuery("#wpthree").hide();
                jQuery("#wptwo").show();
            } else if(col==3){
                str=form.find('#oscitas-three-columns').val();
                jQuery("#wptwo").hide();
                jQuery("#wpthree").show();
            }
            else{
                jQuery("#wptwo").hide();
                jQuery("#wpthree").hide();

            }
            arr=str.split('$');
            if(type!='true'){
            jQuery.each(arr,function(index,val){
                i=parseInt(index)+1;
                jQuery('#lg'+i).val(val);
            })
            }

        }
        jQuery("#oscitas-table tr:not(#appended tr):visible:even").css('background-color', '#FFFFFF');
        jQuery("#oscitas-table tr:not(#appended tr):visible:odd").css('background-color', '#EFEFEF');
    }
    chnage_col_value('true');
    show_table();

    jQuery('#oscitas-no-of-wpcolumns').change(function(){
        var noOfColumns = jQuery(this).val();


        show_table();
        chnage_col_value('false');


    });
    form.find('.osc-change-col').change(function(){
        chnage_col_value('false');
    })
    var arr={
        1:'lg',
        2: 'md',
        3:'sm',
        4:'xs'
    };


    var value1 =0,valueoff=0,lastSel,previous;
    jQuery.each(arr,function(i,valuenum){
        jQuery.each(arr,function(tt,index){

            jQuery('#'+index+i).live('focus',function(){
                previous = this.value;
            }).live('change',function(){
                    value1= parseInt(jQuery(this).val());
                    valueoff =parseInt(jQuery('#'+index+'off'+i).val());
                    value1=value1+valueoff;
                    if(value1<=$columnnum){
                        previous = this.value;
                    }
                    else{
                        jQuery('#'+index+i).val(previous);
                        alert(ebs.cant_change);
                    }
                });

            jQuery('#'+index+'off'+i).live('focus',function(){
                previous = this.value;
            }).live('change',function(){
                    value1= parseInt(jQuery(this).val());
                    valueoff = parseInt(jQuery('#'+index+i).val());
                    value1=value1+valueoff;
                    if(value1<=$columnnum){
                        previous = this.value;
                    }
                    else{
                        jQuery('#'+index+'off'+i).val(previous);
                        alert(ebs.cant_change);
                    }
                })
        })
    });
    check_wrap_required(form);
    form.find('#oscitas-column-wrap').click(function(){
        check_wrap_required(form);
    });
    jQuery("#oscitas-table tr:not(#appended tr):visible:even").css('background-color', '#FFFFFF');
    jQuery("#oscitas-table tr:not(#appended tr):visible:odd").css('background-color', '#EFEFEF');
    // handles the click event of the submit button

}

function check_wrap_required(form){
    if(jQuery('#oscitas-column-wrap').prop('checked')){
        form.find('#osc_add_column_wrapper').show();
    } else{
        form.find('#osc_add_column_wrapper').hide();
    }
    jQuery("#oscitas-table tr:not(#appended tr):visible:even").css('background-color', '#FFFFFF');
    jQuery("#oscitas-table tr:not(#appended tr):visible:odd").css('background-color', '#EFEFEF');
}
