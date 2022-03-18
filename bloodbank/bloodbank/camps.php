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
  $id = $_POST['id'];
  if($res=mysqli_query($con,"select * from camps where id=$id"))
  {
    $result = mysqli_fetch_assoc($res);
    if($result)
    {
  $_SESSION['id']=$id;
  header("Location:book.php");
}

else {
  echo "<script> alert('enter place id from the table'); window.location.assign('camps.php');</script>";
}
}
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
    body{

    }
    .form1 input[type=submit]

  {
    width:8em;
    height: 2em;
    border-radius: 5em;
    text-align: center;
  font-size: 20px;
  position: absolute;
  top:30em;
  margin-left: 32%;
  cursor: pointer;
  }
  .form1 input[type=number]
    {
      width:15em;
      height: 4em;
      border-radius: 5em;
      text-align: center;
  font-size: 18px;
  position: absolute;
  top: 27em;
  background-color: black;
  color: white;
  margin-left: 25%;

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
        header img{
  position: absolute;
   top:0.6em;
   margin-left: -20em;
}
    </style>
  </head>
  <body>
<header>
  camps
     <a href="logout.php"> <img src="logout.jpg" alt=""  width="60px"></a>
  </header>





<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bloodbank";

$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

$sql="select LOCATION,ID,START,END from CAMPS;";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
?>
<div class="table">
<table width="850">
  <th>
       <td>ID</td>
  </th>
  <th>
       <td>LOCATION</td>
  </th>
  <th>
       <td>START_DATE</td>
  </th>
  <th>
       <td>END_DATE</td>
  </th>
</div>
<?php
if($resultcheck>0)
{
 while($rows=mysqli_fetch_assoc($result))
{
  $ID=$rows['ID'];
  $LOCATION=$rows['LOCATION'];
 $START=$rows['START'];
 $DEST=$rows['END'];

?>

<tr>
  <th><td><?php echo $ID?></td></th>
    <th><td><?php echo $LOCATION?></td></th>
      <th><td><?php echo $START?></td></th>
        <th><td><?php echo $DEST?></td></th>
      </div>
  <?php }} ?>
  <div class="form1">
      <form  action="" method="POST">
        <input type="number" name="id" placeholder="enter the place id " required>
        <input type="submit" name="donate" value="donate">

      </form>
    </div>
      </body>
