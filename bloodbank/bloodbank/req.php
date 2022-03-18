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
  BLOOD REQUESTS
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

$sql="CALL view();";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
?>
<div class="table">
<table width="850">
  <th>
       <td>NAME</td>
  </th>
  <th>
       <td>LOCATION</td>
  </th>
  <th>
       <td>UNITS</td>
  </th>

</div>
<?php
if($resultcheck>0)
{
 while($rows=mysqli_fetch_assoc($result))
{
  $name=$rows['name'];
  $location=$rows['location'];
 $units=$rows['unit'];


?>

<tr>
  <th><td><?php echo $name?></td></th>
    <th><td><?php echo $location?></td></th>
      <th><td><?php echo $units?></td></th>

      </div>
      </body>
<?php }
} ?>
