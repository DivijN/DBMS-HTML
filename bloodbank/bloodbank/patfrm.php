<!DOCTYPE html>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<style>
header {
    text-shadow: 4px 4px 10px black;
   text-align: center;
background-color: red;
   color: oldlace;
   padding: 20px;
   font-size:40px;
   font-family:helvetica;

width:96%;}


body{
background-image: url("pic.jpg");
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

}



.controls label {
    display: inline-block;
    width: 130px;
    height: 20px;
    text-align: center;
    vertical-align: top;
    padding-top: 40px;
}
.controls input {
    display: block;
    margin: 0 auto -40px;
}
    p{
      font-size: 20px;
    }

    .form1{
      position: absolute;
      top:7em;
      padding: 40px;
      background-color: rgba(256,256,256,0.5);
    box-shadow: 2px 5px 10px black;
    margin-left: 33.5%;
    height:87em;
    width: auto;
    }
    h1{
      text-align: center;
    }
    .form1 input[type=text],
      .form1 input[type=date],
      .form1 input[type=datetime-local],
      .form1 input[type=password],
      .form1 input[type=number],
      .form1 input[type=email]

    {
      width:20em;
      height: 2em;
      border-radius: 5em;
      text-align: center;
    font-size: 20px;
    }
      .form1 input[type=radio]
      {
        width:3em;
        height: 1em;
      font-size: 20px;
      }
    .form1 input[type=submit]
      {
        width:15em;
        height: 4em;
        border-radius: 5em;
        text-align: center;
    font-size: 18px;
    position: absolute;
    top: 77em;
    margin-left: 15%;
    cursor: pointer;
      }
    select{
        width:100%;
        padding: 10px;
        text-align:center;
      }
</style>
</head>


<body>

<header>BLOOD REQUEST</header>

<div class="form1">
<form action = "pc.php" method="POST">
  <p>Patient name:</p><br>
  <input type="text" name="name" placeholder="enter name" required>
  <br>


 <p>Gender:</p><br>
 <div class="controls">
   <label class="radio">
 <input type="radio" name="gender" value="male" required>
 MALE<br>

</label>
<label class="radio">
 <input type="radio" name="gender" value="female" required>
FEMALE<br>
</label>
<label class="radio">
 <input type="radio" name="gender" value="other" required>
OTHER<br>
</label>
</div>
  <br>
 <p>Date Of Birth:</p><br>
 <input type="date" name="dob" placeholder="DOBrequired">
 <br>

  <p>Contact number:</p><br>
  <input type="number" name="number" placeholder="enter number" required >
  <br>


<p>select blood group:</p><br>



  <select name="blood_group" required>
    <option value="AP" selected="selected">A+</option>
    <option value="AN">A-</option>
    <option value="BP">B+</option>
    <option value="BN">B-</option>
    <option value="ABP">AB+</option>
    <option value="ABN">AB-</option>
    <option value="OP">O+</option>
    <option value="ONN">O-</option>
   </select>
  <br><br>

<p> Units of blood required:</p><br>
 <input type="number" name="units" placeholder="ENTER A UNIT FROM 1-10" required value="10">
 <br>
 <br>


   <p>Email ID:</p><br>
   <input type="email" name="mailid" placeholder="Mail  id" required>
   <br><br>

 <br>
 
 <p>patient disease:</p><br>
 <input type="text" name="disease" placeholder="ENTER PATIENT DISEASE" required>
 <br>
 <br>


Select Location:<br>



  <select name="location" required>
    <option required="" selected="selected">-----SELECT LOCATION FOR BLOOD DELIVERY-----</option>
    <option value="Hesarghatta">Hesarghatta</option>
    <option value="Tumkur">Tumkur</option>
    <option value="Koramangala">Koramangala</option>
    <option value="Indiranagar">Indiranagar</option>
   </select>
  <br><br>


 <input type="submit" value="ORDER FOR BLOOD">







</div></form></div></body></html>
