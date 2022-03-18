<?php
session_start();
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bloodbank";

$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);



$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$number=$_POST['number'];
$bloodgroup=$_POST['blood_group'];
$mailid=$_POST['mailid'];
$password=$_POST['password'];



$sql_u ="select * from donorreg where email='$mailid';";
$res=mysqli_query($conn,$sql_u);
if(mysqli_num_rows($res) >0)
{
echo "<script> alert('EMAIL TAKEN.YOU ARE ALREADY REGISTERED'); window.location.assign('registereduser.html');</script>";

}

else{
$sql="insert into donorreg (name,gender,dob,number,bloodgroup,email,password) values('$name','$gender','$dob','$number','$bloodgroup','$mailid','$password');";

mysqli_query($conn,$sql);

$_SESSION['NAME']=$name;
$_SESSION['dob']=$dob;
$_SESSION['bloodgroup']=$bloodgroup;
$_SESSION['mailid']=$mailid;
$_SESSION['password']=$password;

header("LOCATION:registereduser.html?echo='success'");
}
?>
