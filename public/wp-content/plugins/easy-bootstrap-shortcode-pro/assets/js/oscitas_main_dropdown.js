if(ebs_editor_opt=='dropdown'){
    (function(){
        tinymce.create('tinymce.plugins.oscitas_main_dropdown', {
            init: function(ed, url){},
            createControl: function(button, e){


                if(button == "oscitas_main_dropdown_button"){
                    var current_object = this;
                    var button = e.createSplitButton('osc_ebsp_d_button', {
                        title: "EBSP Shortcode",
                        image: ebs_asseturl+'images/icon_dropdown.png',
                        icons: true,
                        role: 'presentation',
                        "class": "osc_ebsp_dropdown",
                        onclick:function(){

                        }
                    });
                    button.onRenderMenu.add(function(c, b){
                        var prefix='oscitas';
                        //Design Elements
                        c = b.addMenu({title:"Basic Elements", icon_src: ebs_asseturl+'images/elements.png'});
                        current_object.osc_element_call(c, "Button", prefix+"buttons",800);
                        current_object.osc_element_call(c, "Button Group", prefix+"btngrp",1200);
                        current_object.osc_element_call(c, "Button Group Toolbar", prefix+"btngrptool");
                        current_object.osc_element_call(c, "Notifications", prefix+"notifications");
                        current_object.osc_element_call(c, "Tooltip", prefix+"tooltip");
                        current_object.osc_element_call(c, "Popover", prefix+"oscpopover");
                        current_object.osc_element_call(c, "Button Dropdown", prefix+"dropdown");
                        current_object.osc_element_call(c, "Progress Bar", prefix+"progressbar",800);
                        current_object.osc_element_call(c, "Testimonial", prefix+"testimonial");
                        //Advanced
                        c = b.addMenu({title:"Interactive", icon_src: ebs_asseturl+'images/interaction.png'});
                        current_object.osc_element_call(c, "Accordion", prefix+"toggles",980);
                        current_object.osc_element_call(c, "Tabs", prefix+"tabs",1170);
                        current_object.osc_element_call(c, "Tables", prefix+"tables");
                        current_object.osc_element_call(c, "Panel", prefix+"panel");
                        current_object.osc_element_call(c, "Slider", prefix+"slider",1100);
                        current_object.osc_element_call(c, "Carousel", prefix+"carousel",800);
                        current_object.osc_element_call(c, "Video", prefix+"video");
                        current_object.osc_element_call(c, "Google Map", prefix+"gmaps");
                        current_object.osc_element_call(c, "Horizontal Rule", prefix+"rule");
                        current_object.osc_element_call(c, "Pricing Table", prefix+"pricingtable",1220);
                        //Content
                        c = b.addMenu({title:"Content", icon_src: ebs_asseturl+'images/content.png'});
                        current_object.osc_element_call(c, "List", prefix+"lists",800);
                        current_object.osc_element_call(c, "Icon Heading", prefix+"iconhead",800);
                        current_object.osc_element_call(c, "Label", prefix+"labels");
                        current_object.osc_element_call(c, "Well", prefix+"well");
                        current_object.osc_element_call(c, "Description List", prefix+"deslist");
                        current_object.osc_element_call(c, "Section Heading", prefix+"sectionhead");
                        current_object.osc_element_call(c, "Dropcap", prefix+"dropcaps",800);
                        current_object.osc_element_call(c, "Separator", prefix+"separator");
                        current_object.osc_element_call(c, "Lead", prefix+"lead");
                        current_object.osc_element_call(c, "Page Header", prefix+"pageheader",800);
                        current_object.osc_element_call(c, "Servicebox", prefix+"servicebox",800);
                        current_object.osc_element_call(c, "Highlights", prefix+"highlights");
                        c = b.addMenu({title:" Miscellaneous", icon_src: ebs_asseturl+'images/misc.png'});
                        current_object.osc_element_call(c, "Responsive Image", prefix+"thumbnail",800);
                        current_object.osc_element_call(c, "Icon", prefix+"icon",800);
                        current_object.osc_element_call(c, "Image Effects", prefix+"image",800);
                        current_object.osc_element_call(c, "Boxframe", prefix+"boxesframes",800);
                        current_object.osc_element_call(c, "Widget", prefix+"widget",950,400);
                        current_object.osc_element_call(c, "Animation Shortcode", prefix+"animation",800);
                        current_object.osc_element_call(c, "Pagination Shortcode", prefix+"pagination",800);
                        if(ebs_post_inc==1){
                            current_object.osc_element_call(c, "Recent Post", prefix+"recentpost");
                        }
                        if(ebs_project_inc==1){
                            current_object.osc_element_call(c, "Recent Projects", prefix+"recentwork");
                        }
                        if(ebs_test_inc==1){
                            current_object.osc_element_call(c, "Custom Post Testimonial", prefix+"wptestimonial");
                        }
                        current_object.osc_element_call(b, "Columns", prefix+"wpcolumns",1094);
                        current_object.osc_element_call(b, "Social", prefix+"social",800);

                    });
                    return button;
                }
                return null;
            },
            osc_element_call: function(ed, title, value,width,height){
               var classt = 'osc_ebsp_dropdown_item';
                if(typeof(width)==='undefined') width = 'auto';
                if(typeof(height)==='undefined') height = 'auto';
                var prefix='oscitas';
                var func = value.replace(prefix, '');
                ed.add({
                    title: title,
                    class:classt,
                    icons: true,
                    icon_src: ebs_url+'/lib/shortcode/'+func+'/icon.png',
                    role: 'presentation',
                    onclick: function (){

                        //Retrieve selected content
                        var selected_content = tinyMCE.activeEditor.selection.getContent();
                        if(!selected_content)
                            var selected_content = 'Your Content';
                        //Design Elements
if(func=='pagination'){
    tinyMCE.activeEditor.selection.setContent('<img src="' + ebs_url+'/lib/shortcode/'+func+'/trans.gif" class="mce-wp-custompagination mceItemNoResize"  title="OscNextPage"/>');

} else{
    eval('_create_tinyMCE_dropdown('+func+',"'+width+'","'+height+'")');
}



                        return false;
                    }
                })
            }

        });
        tinymce.PluginManager.add("oscitas_main_dropdown", tinymce.plugins.oscitas_main_dropdown);
    })();
}

//var func = value.replace(prefix, '');
//eval('create_oscitas_'+func+'(); open_dialogue(g'+func+');');
