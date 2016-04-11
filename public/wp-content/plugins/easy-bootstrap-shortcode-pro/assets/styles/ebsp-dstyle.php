<?php
header("Content-type: text/css");
if(!session_id())
session_start();
if(isset($_SESSION['ebs_servicebox_css'])){
    foreach($_SESSION['ebs_servicebox_css'] as $val){
        echo $val;
    }
}
if(isset($_SESSION['EBS_BUTTON'])){
echo  $_SESSION['EBS_BUTTON'];
}

