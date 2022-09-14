<?php
date_default_timezone_set("Asia/Kathmandu");
$db = mysqli_connect("raffles.hostns.io:2083","visuddha_appu","malaiktha1290","visuddha_app");

if(!$db){
    die("Connection failed: " . mysqli_connect_error());
}
?>