<?php
header("Content-type: text/css");
if(!session_id())
    session_start();
echo $_SESSION['ebsp_dynamic_css'];
if(isset($_SESSION['EBS_PAGINATION'])){
    echo  $_SESSION['EBS_PAGINATION'];
}


if(isset($_SESSION['ebs_pricing_table'])){
    foreach($_SESSION['ebs_pricing_table'] as $val){
        echo $_SESSION['ebs_ptable_css_'.$val];
    }
}

if(isset($_SESSION['ebs_slider_css'])){
    foreach($_SESSION['ebs_slider_css'] as $val){
        echo $_SESSION['ebs_slider_each_'.$val];
    }
}

if(isset($_SESSION['ebs_carousel_css'])){
    foreach($_SESSION['ebs_carousel_css'] as $val){
        echo $_SESSION['ebs_carousel_each_'.$val];
    }
}
if(isset($_SESSION['ebs_res_tabs'])){
    foreach($_SESSION['ebs_res_tabs'] as $val){
        echo $val;
    }
}
