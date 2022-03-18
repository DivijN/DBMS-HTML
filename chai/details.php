<?php
$host="localhost";
$user="root";
$password="";
$db="travel";
$con=mysqli_connect($host,$user,$password,$db);
if(isset($_GET['submit1']))
{
  $f1=$_GET['pr'];
   $f2=$_GET['fname'];
   $f3=$_GET['no'];
   $f4=$_GET['no1'];
    $f5=$_GET['date'];
       $f6=$_GET['travel'];
       $f7=$_GET['food'];
    $query="INSERT INTO details(package,first_name,adult,child,date,travel,food)  VALUES('$f1','$f2','$f3','$f4','$f5','$f6','$f7');";
    $data=mysqli_query($con,$query);
    if($data)
    {echo "<script> window.location.assign('out.php'); </script>"; 
        exit();}
} 
?>


<html>
<head>
    
    <title>login travelhills</title>
    <link rel="stylesheet" href="loginmain.css">
</head>
    
<body background="redback.jpg" >
      <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:2333px "></a>
           
<form action="" method="GET">
    <marquee><h1><b>DETAILS.....!!!!!!</b></h1> </marquee><center>
    <table border="2" width="400" height="400" >
        <tr><td colspan="5" align="center" bgcolor="grey"><b>FILL IN DETAILS</b></td></tr>
        <tr> <td align="right"> <b>Package name:</b></td><td><select name="pr">
                <option>Golden Triangle</option>
                <option>Mini North India</option>
            <option>Fun trip to Shimla Manali</option></select></td></tr>
        <tr><td align="right"><b>first name:</b></td><td><input type="text" name="fname" ></td></tr>
      <!-- <tr> <td align="right"><b>Duration:</b></td><td>10 Days</td></tr>-->
        <tr><td align="right"> <b>No of adults:</b></td><td><input type="number" name="no" ></td></tr>
        <tr><td align="right"> <b>No of children:</b></td><td><input type="number" name="no1" ></td></tr>
        
      <tr><td align="right"><b>Date:</b></td><td><input type="date" value="DD/MM/YYYY" name="date" /></td></tr>
        <tr><td align="right"><b>Travelling:</b></td><td><input type="radio" value="bus" name="travel">Bus<input type="radio" name="travel" value="Train">Train</td></tr>
        <tr><td align="right"><b>Food:</b></td><td><input type="radio" value="yes" name="food">Yes<input type="radio" name="food" value="No">No</td></tr>
       <!--<tr><td align="right"> <b>total:</b></td><td>onclick="cal(no)"</td></tr>-->
        
      <tr>  <td colspan="5" align="center"> <input type="submit" value="Continue" name="submit1" ></td></tr>
           
    </table>
        </center>
  </form> 
    
    
    
    
</body>
</html>
