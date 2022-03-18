<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
    body{

    }
      .table{
        position: absolute;
        top:5em;
        line-height: 50px;
        font-size: 25px;
      padding: 30px;

        margin-left: 20%;
  background-color: rgba(255,255,153,0.6);
box-shadow: 0 0 50px #ffffff;
      }
      .icon{
        position: absolute;
        top:1.5em;
        margin-left: 3em;
      }

header{
  width: 97%;
  padding: 20px;
  font-size: 30px;
  font-style: Sans-serif;
  text-align: center;
  text-shadow: 1px 1px black;
  background-color: rgba(255,51,51,0.6);
box-shadow: 0 0 10px #ffffff;

}
    </style>
  </head>
  <body>
<header>
  BLOOD AVAILABILITY
  </header>
  <div class=icon>
  <a href="minid1.html"><img src="home.png" height=45px></a>
</div>




<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bloodbank";

$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

$sql="select * from blood_avail;";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
?>
<div class="table">
<table width="850">
  <th>
       <td>A+</td>
  </th>
  <th>
       <td>A-</td>
  </th>
  <th>
       <td>B+</td>
  </th>
  <th>
       <td>B-</td>
  </th>
  <th>
       <td>AB+</td>
  </th>
  <th>
       <td>AB-</td>
  </th>
  <th>
       <td>O+</td>
  </th>
  <th>
       <td>O-</td>
  </th>
</div>
<?php
if($resultcheck>0)
{
 while($rows=mysqli_fetch_assoc($result))
{
  $AP=$rows['AP'];
  $AN=$rows['AN'];
 $BP=$rows['BP'];
 $BN=$rows['BN'];
 $ABP=$rows['ABP'];
  $ABN=$rows['ABN'];
   $OP=$rows['OP'];
    $ONN=$rows['ONN'];
?>

<tr>
  <th><td><?php echo $AP ;?></td></th>
    <th><td><?php echo $AN  ;?></td></th>
      <th><td><?php echo $BP ;?></td></th>
        <th><td><?php echo $BN ;?></td></th>
        <th><td><?php echo $ABP ;?></td></th>
        <th><td><?php echo $ABN ;?></td></th>
        <th><td><?php echo $OP ;?></td></th>
        <th><td><?php echo $ONN ;?></td></th>
      </div>
      </body>
<?php }
} ?>
