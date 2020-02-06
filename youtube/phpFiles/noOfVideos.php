<?php
include("connection.php");//to create connection
error_reporting(0);//to remove warnings
//to know number of records
$query = "select * from videos";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $total;
?>