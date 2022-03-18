<!DOCTYPE html>
<?php
$host="localhost";
$user="root";
$password="";
$db="bloodbank";
session_start();

$con=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['donate']))
{
  $email = $_SESSION['mail'];
  $bg =$_POST['bg'];
  $units = $_POST['units'];
  if($res=mysqli_query($con,"insert into donate (email,bg,units) values('$email','$bg','$units')"))
  {
    $sql = "select '$bg' from blood_avail";
    $res1 = mysqli_query($con,$sql);
    $result = mysqli_fetch_assoc($res1);
    $pres = $result[$bg]+$units;
    $i =$_POST['bg'];

    if($ures = mysqli_query($con,"update blood_avail set $i = '$pres' where id =1"))
    {
      echo '<script> alert("THANK YOU!YOU ARE A SUPER HERO");window.location.assign("disp.php");</script>';
    }


  }
} ?>
<html lang="en" dir="ltr">
  <head>

    <style media="screen">
    body{
      background-color: rgba(244,252,189,0.5);
    }

  form input[type=submit]
      {
        width:15em;
        height: 4em;.
        border-radius: 5em;
        text-align: center;
    font-size: 18px;
    position: absolute;
    top: 35em;
    margin-left: -8%;
    cursor: pointer;
      }

  form input
    {
      width: 50%;
      font-size: 25px;
      border-bottom: 2px solid black;
      border-top: none;
      border-left: none;
      border-right:none;
      text-align: left;
    }
    select{
        width:50%;
        padding: 10px;
        text-align:left;
      }
      .form1{
        width: 50%;
        height: 35em;

        background: rgba(255,255,255,0.8);
        box-shadow: 2px 2px 5px black;
      margin-left: 25%;
      }
      p{
        font-size: 20px;
            margin-left: -15em;
      }
      header{
        background-color: black;
        padding:30px;
        width: 95.8%;
      }
      h2{
      
    margin-left: -10em;
      }
        h3{
            color: snow;
            text-transform: uppercase;
            text-align: center;
        }
      </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<header>
<H3>Tears of a mother cannot save her Child. But your Blood can. </H3>
</header>
<div class="form1">
<form action="" method="POST">

<center>
  <div class="input-field">
    <p>BLOOD GROUP </p><br>

      <select name="bg" required>
        <option value="" required>---CHOOSE YOUR BLOODGROUP---</option>
        <option value="AP" required>A+</option>
        <option value="AN">A-</option>
        <option value="BP">B+</option>
        <option value="BN">B-</option>
        <option value="ABP">AB+</option>
        <option value="ABN">AB-</option>
        <option value="OP">O+</option>
        <option value="ONN">O-</option>
       </select>
      <br><br>
  </div>

  <div class="input-field">
    <p>EMAIL </p><br> <h2><?php  echo $_SESSION['mail']; ?></h2>
  </div>
</br>
  <div class="input-field">
    <p>units </p><br> <input type="text" name="units"  required>
  </div>


   <center> <input type="submit" value="donate" class="btn" name="donate"></center>

 </form></center>
 </div>
</div>



</body>
</html>
