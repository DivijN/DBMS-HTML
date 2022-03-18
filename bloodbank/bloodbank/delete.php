
<?php

$host="localhost";
$user="root";
$password="";
$db="bloodbank";
session_start();

$con=mysqli_connect($host,$user,$password,$db);
$var =  $_SESSION['mail'];
if(mysqli_query($con,"delete from donorreg where email = '$var'"))
{

  session_start();
  session_destroy();
  unset($_SESSION['uid']);
  echo "<script> alert('account deleted successfully');window.location.assign('minid1.html');</script>";
}
