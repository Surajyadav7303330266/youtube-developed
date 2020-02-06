<?php  //////////////////////////to create connection
$sername="localhost";
$username="root";
$password="";
$dbname="youtube";
$conn=mysqli_connect($sername,$username,$password,$dbname);
if($conn)
{
   // echo "connection ok";
}
else
{
    die("connectin failed because ".mysqli_connect_error());
}
?>