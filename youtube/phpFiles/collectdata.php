<?php
include("connection.php");
error_reporting(0);

///////collecting data from user
$uquery = "select * from users";
$udata = mysqli_query($conn,$uquery);
$uresult = mysqli_fetch_assoc($udata);
///////collecting data from video
$vquery = "select * from videos";
$vdata = mysqli_query($conn,$vquery);
$vresult = mysqli_fetch_assoc($vdata);
///////collecting data from comment
$cquery = "select * from comments";
$cdata = mysqli_query($conn,$cquery);
$cresult = mysqli_fetch_assoc($cdata);
?>