<?php 
$con=mysqli_connect("localhost","root","","loop");
if($con->connect_error)
{
  die("error");
}
if(isset($_POST['button_in']))
{
  echo "hello";
$name=$_POST['sname'];
$pname=$_POST['pname'];
$saddress=$_POST['saddress'];
$password=$_POST['ppassword'];
$slpicture=$_POST['slpicture'];
$schoolDes=$_POST['schoolDes'];
$schoolEmail=$_POST['schoolEmail'];

$password=md5($password);
$sql=" INSERT INTO school (sname,pname,saddress,ppassword,slpicture,schoolDes,schoolEmail) VALUES ('$name','$pname','$saddress','$password','$slpicture','$schoolDes','$schoolEmail') ";
echo $name;
$verify=mysqli_query($con,$sql);
header('Location:cluster.php');
}


?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0"> 
 <link rel="stylesheet" type="text/css" href="mystyle.css"> 
</head>
<body>
<div class="container" id="container">
  
    <form action="#" method="POST">
      <h1>Register</h1>
      

      
      
      
      School Name:<input type=text placeholder="school name" name="sname" />
      Principal Name:<input type=text placeholder="Principal name" name="pname" />
      School Address:<textArea rows="4" cols="100" name="saddress" ></textArea>
      Password:<input type="password" placeholder="Password" name="ppassword" />
      School email <input type="email" name="schoolEmail">
      Upload Image<input type=file name="slpicture">
      School Description <textarea rows="4" cols="100" name="schoolDes"></textarea>
      <button name="button_in">Sign In</button>
    </form>
  
  </body>
 <script src="myscript.js">
      </script>
</html> 

  