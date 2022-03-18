<!DOCTYPE html>
<?php
session_start();
?>

<html>

<head>
   
 
    
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/main1.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travelhills</title>
    
    <style>
        
       
        /* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>
    
</head>

<body id="home" class="scrollspy">
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="tial">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:2333px "></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="main.php">HOME</a>
            </li>
            <li>
              <a href="main.php">SEARCH</a>
            </li>
            <li>
              <a href="main.php">POPULAR PACKAGES</a>
            </li>
            <li>
              <a href="main.php">GALLERY</a>
            </li>
            <li>
              <a href="main.php">CONTACT</a>
            </li>
             <li>
                <a class="btn red darken-4 z-depth-3 " href="loginmain.php">logout</a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-nav">
    <li>
      <a href="main.php">HOME</a>
    </li>
    <li>
      <a href="main.php">SEARCH</a>
    </li>
    <li>
      <a href="main.php">POPULAR PACKGES</a>
    </li>
    <li>
      <a href="mainphpl">GALLERY</a>
    </li>
    <li>
      <a href="main.php">CONTACT</a>
    </li>
    <li>
     <a href="loginmain.php">LOGOUT</a>
    </li>   
  </ul>

    <!-- TABS -->
   <section class="section container scrollspy" id="MENU">
    <div class="row">
      <div class="col s12 l16">
        <h2 class="indigo-text text-darken-4"> <?php
      echo "Welcome ", $_SESSION["fname"] ,"!! ^_^";
?> </h2>
     
      </div>
       </div>  
   </section>  
   <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'My Profile')">My Profile</button>
  <button class="tablinks" onclick="openCity(event, 'Bookings')">Bookings</button>
  
</div>

<div id="My Profile" class="tabcontent">
  <h3>My Profile</h3>
   <table class="striped">
     <tr>
       <td>
       <i class="medium material-icons blue-text">account_circle</i><strong> NAME</strong>  
       </td>  
       <td>
       <?php
          echo  $_SESSION["fname"]; echo  " ",$_SESSION["lname"];  
       ?>       
       </td>      
     </tr>
     <tr>
       <td>
       <i class="medium material-icons blue-text">phone_iphone</i><strong> CONTACT</strong>  
       </td>  
       <td>
       <?php
          echo  "+",$_SESSION["phcode"]; echo  " ",$_SESSION["mobile"]; 
       ?>       
       </td>      
     </tr>       
     <tr>
       <td>
       <i class="medium material-icons blue-text">cake</i><strong> DATE OF BIRTH</strong>  
       </td>  
       <td>
       <?php
          echo  $_SESSION["dob"];  
       ?>       
       </td>      
     </tr>     
     <tr>
       <td>
       <i class="medium material-icons blue-text">email</i><strong> EMAIL</strong>  
       </td>  
       <td>
       <?php
          echo  $_SESSION["email"]; 
       ?>       
       </td>      
     </tr>  
     <tr>
       <td>
       <i class="medium material-icons blue-text">group</i><strong> GENDER</strong>  
       </td>  
       <td>
       <?php
          echo  $_SESSION["gender"];  
       ?>       
       </td>      
     </tr>
   </table>
    
    
    
   
</div>

    <!-- BOOKINGS -->
    
<div id="Bookings" class="tabcontent">
  <h3>Bookings</h3>
  <div align="center">
    <table border="2" width="1300" >
      <tr>
        <th>Package Name</th> 
        <th>NO OF ADULT(s)</th> 
        <th>NO OF CHILDREN</th> 
        <th>DATE OF TRAVEL</th> 
        <th>MODE</th> 
        <th>EDIT</th> 
        <th>DELETE</th>
        </tr>
<?php
$host="localhost";
$user="root";
$password="";
$db="travelhills";


$con=mysqli_connect($host,$user,$password,$db);

if(isset($_GET['del']))
{
    $id=$_GET['del'];
   
    if(mysqli_query($con,"delete from booking where id= '$id' "))
    {
        echo  "<script> alert('Booking Info Deleted!!');window.location.assign('profile.php'); </script>"; 
        
    }
}
$run=mysqli_query($con,"select * from booking where email= '".$_SESSION["username"]."' ");
while($row=mysqli_fetch_array($run))
{   $r0=$row[0];
    $r1=$row[2];
    $r2=$row[3];
    $r3=$row[4];
    $r4=$row[5];
    $r5=$row[6];
   
  
    echo "<tr align='center'>
        <td>$r1</td>
        <td>$r2</td>
        <td>$r3</td>
        <td>$r4</td>
        <td>$r5</td>
        
        
        <td><a href='edit.php?ed=$row[0]'><i class=\"material-icons\">mode_edit</i></a></td>
        <td><a href='profile.php?del=$row[0]'><i class=\"material-icons\">delete_forever</i></a?</td>
    </tr>";}
?>
      </table>
    
    
    </div>   
</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script> 
 

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>var instance = M.Tabs.init(el, options);</script>
  <script>
    // Sidenav
    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });

    // Autocomplete
    const ac = document.querySelector('.autocomplete');
    M.Autocomplete.init(ac, {
      data: {
        "Golden Triangle": null,
        "FUN TRIP TO SHIMLA MANALI": null,
        "MINI NORTH INDIA": null,
        "KASHMIR SPECIAL": null,
        "California": null,
        "Jamacia": null,
        "Europe": null,
        "Agra": null,  
          "Mathura": null,
          "Brindavan": null,
          "Bengaluru": null,
      }
    });
    const aac =instance.selectOption(ac);
    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});


  </script>
     <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('.datepicker').datepicker({
        disableWeekends: true,
        yearRange: 1
      });
      $('.tooltipped').tooltip();
      $('.scrollspy').scrollSpy();
    });
  </script>
    
    <!-- Fixed button -->
    <div class="fixed-action-btn">
       <a class="btn-floating btn-large pulse waves-blue red" href="profile.php">
       <i class="large material-icons">home</i>
       </a>
    </div>
    </body>
</html>