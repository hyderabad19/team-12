<?php
session_start();
$con=mysqli_connect("localhost","root","","loop");
if(isset($_POST['submit']))
{ 

  $sname=$_POST['sname'];
  $password=$_POST['ppassword'];
  $ppassword=md5($password);
  $sql=" SELECT sname,ppassword,sid FROM school WHERE sname='$sname' AND ppassword='$ppassword' ";
$verify=mysqli_query($con,$sql);
// echo $verify;
if($verify){
  // $_SESSION['aid']=$row['sid'];
  $_SESSION['aname']=$sname;

  header('Location:dashboardSchool.php');
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
  <title>School Login</title>
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
      <input type="text" id="login" class="fadeIn second" name="sname" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="ppassword" placeholder="password">
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