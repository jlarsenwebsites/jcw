<?php
header("Content-type: text/javascript");
if(!session_id())
    session_start();
if(isset($_SESSION['ebs_carousel_css'])){
    foreach($_SESSION['ebs_carousel_css'] as $val){
        echo $_SESSION['ebs_carousel_each_js_'.$val];
    }
}