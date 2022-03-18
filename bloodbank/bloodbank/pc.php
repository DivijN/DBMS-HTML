<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bloodbank";

$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);



$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$number=$_POST['number'];
$blood_group=$_POST['blood_group'];
$units=$_POST['units'];
$mail_id=$_POST['mailid'];

$disease=$_POST['disease'];
$location=$_POST['location'];


$sql="insert into patreg (name,gender,dob,num,bloodgrp,unit,email,disease,location) values ('$name','$gender','$dob','$number','$blood_group','$units','$mail_id','$disease','$location');";


$res=mysqli_query($conn,$sql);
if($res)
{
  $sql1 = "select $blood_group from blood_avail";
  $res1 = mysqli_query($conn,$sql1);
  $result = mysqli_fetch_assoc($res1);
  if($units <= $result[$blood_group])
  {
    echo $result[$blood_group];
  $pres = $result[$blood_group]-$units;
  echo $pres;


  if( mysqli_query($conn,"update blood_avail set $blood_group = '$pres' where id =1")){

echo "<script> window.location.assign('minid1.html');</script>";
}
}
else {
echo "<script> alert('SORRY REQUESTED BLOOD IS NOT AVAILABLE');window.location.assign('bloodavailability.php');</script>";
}
}

?>
