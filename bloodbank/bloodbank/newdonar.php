<!DOCTYPE html>
<html>
<head>
<style>


body{
background-image: url("mini11.png");
background-repeat: no-repeat;
background-size: cover;

}
.but input{
  text-align: left;
  display: inline;
  border: none;
}
    p{
      font-size: 20px;
    }
    header{
      padding: 20px;
      width:96%;
      background-color: rgba(57.65,0,0,0.6);
      color: white;
      text-align: center;
      font-size:40px;
      position: absolute;

    }
    .form1{
      position: absolute;
      top:7em;
      padding: 40px;
      background-color: rgba(100,28.24,28.24,0.7);
    box-shadow: 2px 5px 10px black;
    margin-left: 33.5%;
    height:63em;
    width: auto;
    }
    h1{
      text-align: center;
    }
    .form1 input[type=text],
      .form1 input[type=date],
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
    top: 55em;
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

<header>DONOR REGISTRATION</header>

<div class="form1">


<form action="donarinsert.php" method="POST" autocomplete="on">
  <p>Donor name:<br></p>
  <input type="text" name="name" placeholder="ENTER NAME"required>
  <br>



 <p>Gender:<br></p>
<div class="but">
  MALE:<input type="radio" name="gender" value="male" required>
FEMALE  <input type="radio" name="gender" value="female"required>
OTHER  <input type="radio"name="gender" value="other" required>
</div>
  <br>
 <p>Date Of Birth:<br></p>
 <input type="date" name="dob" required>
 <br>

  <p>Contact number:<br></p>
  <input pattern=".{10}" type="number" name="number" placeholder="ENTER VALID PHONE NUMBER"   required>
  <br>


<p>select blood group:<br></p>



  <select name="blood_group">
    <option value=""required>---CHOOSE YOUR BLOOD GROUP---</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
   </select>
  <br><br>


  <p> Email ID:</p><br>
   <input type="email" name="mailid" placeholder="EMAIL ID"  required>

   <br><br>

   <p>Enter password:</p><br>
   <input type="password" name="password" placeholder="PASSWORD"required>
   <br><br>


   <input type="submit"  value="register">


</div>

</form>
</body>
</html>
