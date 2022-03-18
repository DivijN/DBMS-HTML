
 <html>
     <head>
     <title>login travelhills</title>
    <link rel="stylesheet" href="loginmain.css">
</head>
     <style>
         table,th,td{
             width:80%
                 margin:auto;
             border:3px solid black;
             border-collapse: collapse;
             text-align:center;
             font-size: 25px;
             font-family: cursive;
             table-layout: fixed;
             
             color:black;
             margin-top: 100px;
                
         }
     
     
     </style>
<body background="redback.jpg">
  <div align="center">
    <table border="2" width="1300" >
      <tr>
       <th>Package Name</th> 
        <th>First Name</th> 
        <th>No of Adults</th> 
          <th>No of Child</th> 
          <th>Date</th> 
          <th>Travel</th> 
          <th>Food</th> 
          <th>Edit</th> 
          <th>Delete</th> 
        </tr>
<?php
$host="localhost";
$user="root";
$password="";
$db="travel";


$con=mysqli_connect($host,$user,$password,$db);

if(isset($_GET['del']))
{
    $del_id=$_GET['del'];
    if(mysqli_query($con,"delete from details where id='$del_id' "))
    {
        echo  "<script> window.location.assign('out.php'); </script>"; 
        
    }
}
$run=mysqli_query($con,"select * from details order by id desc limit 1");
while($row=mysqli_fetch_array($run))
{   $r0=$row[0];
    $r1=$row[1];
    $r2=$row[2];
    $r3=$row[3];
    $r4=$row[4];
    $r5=$row[5];
    $r6=$row[6];
    $r7=$row[7];
    echo "<tr align='center'>
        <td>$r1</td>
        <td>$r2</td>
        <td>$r3</td>
        <td>$r4</td>
        <td>$r5</td>
        <td>$r6</td>
        <td>$r7</td>
        <td><a href='edit.php?ed=$row[0]'>edit</a></td>
        <td><a href='out.php?del=$r0'>delete</td>
    </tr>";}

?>
      </table>
    
    
    </div>   
     
     
     </body></html>