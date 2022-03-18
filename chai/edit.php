<?php
$host="localhost";
$user="root";
$password="";
$db="travel";
$con=mysqli_connect($host,$user,$password,$db);
if(isset($_GET['ed']))
{
    $id=$_GET['ed'];
    $res=mysqli_query($con,"select * from details order by id desc limit 1;");
    while($row=mysqli_fetch_array($res))
    {
        $u0=$row[0];
        $u1=$row[1];
        $u2=$row[2];
        $u3=$row[3];
        $u4=$row[4];
        $u5=$row[5];
        $u6=$row[6];
        $u7=$row[7];
         
    }
}

?>
<html>
<head>
    
    <title>edit</title>
    <link rel="stylesheet" href="loginmain.css">
</head>
    
<body background="redback.jpg" >
      <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:2333px "></a>
           
<form action="#" method="GET">
    <marquee><h1><b>DETAILS.....!!!!!!</b></h1> </marquee><center>
    <table border="2" width="400" height="400" >
        <tr><td colspan="5" align="center" bgcolor="grey"><b>FILL IN DETAILS</b></td></tr>
        <input type="hidden" name="id" value="<?php echo $u0;?>">
        <tr> <td align="right"> <b>Package name:</b></td><td><select name="upr" value="<?php echo $u1;?>">
                <option>Golden Triangle</option>
                <option>Mini North India</option>
            <option>Fun trip to Shimla Manali</option></select></td></tr>
        <tr><td align="right"><b>first name:</b></td><td><input type="text" name="ufname" value="<?php echo $u2;?>" ></td></tr>
      <!-- <tr> <td align="right"><b>Duration:</b></td><td>10 Days</td></tr>-->
        <tr><td align="right"> <b>No of adults:</b></td><td><input type="number" name="uno" value="<?php echo $u3;?>"></td></tr>
        <tr><td align="right"> <b>No of children:</b></td><td><input type="number" name="uno1" value="<?php echo $u4;?>"></td></tr>
        
      <tr><td align="right"><b>Date:</b></td><td><input type="date" value="DD/MM/YYYY" name="udate" value="<?php echo $u5;?>" /></td></tr>
        <tr><td align="right"><b>Travelling:</b></td><td><input type="radio" value="<?php echo $u6;?>" name="utravel">Bus<input type="radio" name="utravel" value="<?php echo $u6;?>">Train</td></tr>
        <tr><td align="right"><b>Food:</b></td><td><input type="radio" value="<?php echo $u7;?>" name="ufood">Yes<input type="radio" name="ufood" value="<?php echo $u7;?>">No</td></tr>
       <!--<tr><td align="right"> <b>total:</b></td><td>onclick="cal(no)"</td></tr>-->
        
        <tr>  <td colspan="5" align="center"> <input type="submit" value="UPDATE" name="update" ></td></tr>
           
    </table>
        </center>
  </form> 
  <?php  
 
      
       if(isset($_GET['update']))
      {
          $u0=$_GET['id'];
          $u1=$_GET['upr'];
          $u2=$_GET['ufname'];
          $u3=$_GET['uno'];
          $u4=$_GET['uno1'];
          $u5=$_GET['udate'];
          $u6=$_GET['utravel'];
          $u7=$_GET['ufood'];
         if( mysqli_query($con,"update details set package='$u1',first_name='$u2',adult='$u3',child='$u4',date='$u5',travel='$u6',food='$u7' where id=$u0"))
         {
              echo "<script> window.location.assign('out.php'); </script>"; 
        exit();
         }   
          
          
          
          
          
          
          
          
      }
    
  ?>  
</body>
</html>
