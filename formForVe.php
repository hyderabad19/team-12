<?php
 session_start();
 $conn=mysqli_connect('localhost','root','','data');
 if(isset($_POST['button_up']))
			{
				$name=$_POST['name'];
				$_SESSION['name']=$name;
				$password=$_POST['password'];
				$email=$_POST['email']; 
				//echo "<p>Addiig</p>";
        //echo "<p>$name</p>";
        //echo "<p>$password</p>";
        //echo "<p>$email</p>";
        $password=md5($password);
        $vkey=md5(time().$name);
				$sql = "INSERT INTO credit (s_name, s_email,s_password,vkey) VALUES ('$name', '$email','$password','$vkey')";
 			   // execute query
    			$verify=mysqli_query($conn,$sql);
    			if($verify)
    			{
    				echo "login successful";
            $sub = "Email Verification";
            $msg = "Click on the below link to confirm <a href='http://localhost/php_buttons/insert.php?vkey=$vkey'></a>" ;
            $rec =$email;
            if(mail($rec,$sub,$msg))
            {
              echo "ji mata di";
            }
    			}


					/*if($row['s_name']=='Ashok Ghokale' && $row['s_pass']=='ashok')
					{
						header("Location:hod.php");
					}*/
					else
					{

						
					}
			}
			
if(isset($_POST['button_in']))
			{
				$password=$_POST['in_password'];
				$email=$_POST['in_email'];
        echo $password;
        echo $email;
        $password=md5($password);
				$sql="SELECT s_password,s_email,verify FROM credit where   s_password='$password' and s_email='$email' and verify=1";
				$record=mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($record);
				if($row['s_password']==$password && $row['s_email']==$email)
					{
						echo "login successful";
						header("Location:home.php");
					}
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
  <div class="form-container sign-up-container">
    <form action="#" method="POST">
      <h1>Create Account</h1>
      <!--<div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div> -->
      <span>use your email for registration</span>
      <input type="text" placeholder="Name" name="name" />
      <input type="email" placeholder="Email" name="email" />
      <input type="password" placeholder="Password" name="password" />
      <button name="button_up">Sign Up</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form action="#" method="POST">
      <h1>Sign in</h1>
      <!--<div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div> -->
      <span> use your account</span>
      <input type="email" placeholder="Email" name="in_email" />
      <input type="password" placeholder="Password" name="in_password" />
      <a href="#" class="forgot-password">Forgot your password?</a>
      <button name="button_in">Sign In</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>To keep connected with us please login with your personal info</p>
        <button class="ghost" id="signIn">Sign In</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello, Friend!</h1>
        <p>Enter your personal details and start journey with us</p>
        <button class="ghost" id="signUp">Sign Up</button>
      </div>
    </div>
  </div>
</div>
</body>
 <script src="myscript.js">
      </script>
</html> 