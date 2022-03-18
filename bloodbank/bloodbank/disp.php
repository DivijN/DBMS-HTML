<!DOCTYPE html>

<?php

$host="localhost";
$user="root";
$password="";
$db="bloodbank";
session_start();

$con=mysqli_connect($host,$user,$password,$db);
$var =  $_SESSION['mail'];
$sql = "select * from donorreg where email = '$var';";
$res=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($res);
$sql1 = "select time from userlog where mail = '$var';";
$res1=mysqli_query($con,$sql1);
$result1=mysqli_fetch_assoc($res1);
if(isset($_POST['update']))
{
  $name = $_POST['name'];
  $gender = $_POST['gender'];
   $dob=$_POST['dob'];
    $number = $_POST['phno'];
$bloodgroup = $_POST['bg'];
$mailid = $_POST['email'];
$password =$_POST['pass'];

if( mysqli_query($con,"update donorreg set name='$name',gender='$gender',dob='$dob',number='$number',bloodgroup='$bloodgroup',email='$mailid',password='$password' where email ='$var'"))
{
echo "<script> alert('updation successful'); window.location.assign('disp.php'); </script>";
exit();
}
}
if(isset($_POST['donate']))
{
  header("Location:camps.php");
}
?>
<html>

<head>
<style media="screen">
body{
  background-color: rgba(244,252,189,0.5);
}
header{
  background-color: rgba(250, 81, 55, 0.5);
  padding: 8px;
}
.container{
  text-align: center;
  font-size: 20px;

}
p1{
  position: absolute;

  top: 140%;
margin-left: -12em;
}
form input
{
  width: 50%;
  font-size: 25px;
  border-bottom: 2px solid black;
  border-top: none;
  border-left: none;
  border-right:none;
}
p{
margin-left: -38%;
}
form input[type=submit]
{
   width:20%;
   position: absolute;
   top: 145%;
   margin-left: -10%;
}
.second{
  position: absolute;
  top: 62em;
  margin-left: 18em;
  width: 50%;
}
h3{
  text-transform: uppercase;
}
header img{
  position: absolute;
   top:0.8em;
   margin-left: -20em;
}
.del{
  position: absolute;
   top:.8em;
   margin-left: 20em;

}
</style>


  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>update</title>
</head>

<body>




   <div class="container">
              <header><center><h3> <?php  echo 'HELLO &nbsp &nbsp' . $_SESSION['uid'];  ?> </h3></center>
               <a href="logout.php"> <img src="logout.jpg" alt=""  width="60px"></a>
               <a href="delete.php"> <img class="del" src="delete.jpg" alt=""  width="60px"></a>

                 </header>
                 <br>
                 <br>
           <form action="" method="POST">


             <div class="input-field">
        <p>NAME</p><br> <input  type="text" name="name"  value= "<?php echo $result['name'];?>" required>
        </div>

       <div class="input-field">
          <p>GENDER</p> <br><input type="text" name="gender" value="<?php  echo $result['gender'];?>" required>
       </div>



       <div class="input-field">
          <p>DATE OF BIRTH</p><br> <input type="date" name="dob" value ="<?php echo $result['dob']; ?>" required >
       </div>
          <div class="input-field">
             <p> PHONE NUMBER </p> <br><input type="number" name="phno"  value ="<?php echo $result['number']; ?>" required >
          </div>
             <div class="input-field">
               <p>BLOOD GROUP </p><br><br> <input type="text" name="bg" value ="<?php echo $result['bloodgroup']; ?>" required>
             </div>

             <div class="input-field">
               <p>EMAIL </p><br><br> <input type="email" name="email" value ="<?php echo $result['email']; ?>" required>
             </div>
             <div class="input-field">
               <p>PASSWORD </p><br><br> <input type="text" name="pass" value ="<?php echo $result['password']; ?>" required>
             </div>
             <div class="input-field">
               <p1>ACCOUNT CREATED ON : "<?php echo $result1['time']; ?>" </p1>
             </div>
          <center> <input type="submit" value="update" class="btn" name="update"></center>
          <div class ="second">
              <center> <input type="submit" value="donate" class="btn" name="donate"></center>
            </div>
              </form>
            </div>




    </body>
</html>
