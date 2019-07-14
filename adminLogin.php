<?php

$con=mysqli_connect("localhost","root","","loop");
if(isset($_POST['submit']))
{
  $adname=$_POST['adname'];
  $adpassword=$_POST['adpassword'];
  $sql=" SELECT adname,adpassword FROM admin WHERE adname='$adname' AND adpassword='$adpassword' ";
$verify=mysqli_query($con,$sql);
if($verify)
{
  header('Location:dashboardAdmin.php');
 
}
}
?>
<!DOCTYPE html>
<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="adminPage.css">
<!------ Include the above in your HEAD tag ---------->
  <title>Admin Login</title>
</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img.jpg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="#" method="POST">
      <input type="text" id="login" class="fadeIn second" name="adname" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="adpassword" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>