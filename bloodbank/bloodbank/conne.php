<?php
session_start();
$servername = "localhost" ;
$username = "root";
$password = "";
$dbname = "bloodbank";

$conn = mysqli_connect($servername,$username,$password,$dbname);

  if(isset($_POST['submit']))
  {
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $pid = mysqli_real_escape_string($conn,$_POST['pid']);
    if(empty($uid) || empty($pid))
    {
      header("LOCATION:registereduser.html");
      exit();
    }
    else{
      $sql = "select * from donorreg where email='$uid'";
      $res = mysqli_query($conn,$sql);
      $resultcheck = mysqli_num_rows($res);

      if($resultcheck < 1)
      {

          echo "<script> alert('ENTER VALID USERNAME.YOUR REGISTERED EMAIL IS YOUR USERNAME');window.location.assign('registereduser.html');</script>";

      }

      else{

        if($row = mysqli_fetch_assoc($res))
        {
          if($uid == $row['email'] && $pid == $row['password'])
          {
            $_SESSION['mail']=$row['email'];
            $_SESSION['uid'] = $row['name'];

            header("LOCATION: disp.php");
          }

          else {

echo "<script> alert('INVALID PASSWORD');window.location.assign('registereduser.html');</script>";
            }
          }

        }
      }
    }


 ?>
