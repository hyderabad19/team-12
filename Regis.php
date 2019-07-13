<?php 
$con=mysqli_connect("localhost","root","","loop");
if(isset($_POST['button_in']))
{
$name=$_POST['sname'];
$pname=$_POST['pname'];
$saddress=$_POST['saddress'];
$password=$_POST['ppassword'];
$slpicture=$_POST['slpicture'];
$schoolDes=$_POST['schoolDes'];
$schoolEmail=$_POST['schoolEmail'];
$password=md5($password);
$sql=" INSERT INTO school (sname,pname,saddress,ppassword,slpicture,schoolDes,schoolEmail) VALUES $name,$pname,$saddress,$password,$slpicture,$schoolDes,$schoolEmail ";
$verify=mysqli_query($con,$sql);

}


?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<div class="container" id="container">
  <div >
    <form action="#" method="POST">
      <h1>Register</h1>
      <!--<div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div> -->
      <span> Register School</span>
      <br>
      <br>
      School Name:<input type=text placeholder="school name" name="sname" />
      Principal Name:<input type=text placeholder="Principal name" name="pname" />
      School Address:<textArea rows="4" cols="100" name="saddress" ></textArea>
      Password:<input type="password" placeholder="Password" name="ppassword" />
      School email <input type="email" name="schoolEmail">
      Upload Image<input type=file name="slpicture">
      School Description <textarea rows="4" cols="100" name="schoolDes"></textarea>>
      <button name="button_in">Sign In</button>
    </form>
  </div>
  </body>
 <script src="myscript.js">
      </script>
</html> 

  