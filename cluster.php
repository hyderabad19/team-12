<?php
session_start();
//$_SESSION['name']=$name;
$name="School1";

$con=mysqli_connect("localhost","root","","loop");
if(isset($_POST['submit']))
{
	$cluster= $_POST ['cluster'];
	echo $cluster;

	$sql="UPDATE school SET  cno= '$cluster' WHERE sname = '$name'";
	$verify=mysqli_query($con,$sql);
//header("Location:re.php");
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="#" method="post">
 	<?php 
 	$result = mysqli_query($con,"SELECT clstrname FROM cluster");
 	 while ($row = mysqli_fetch_array($result)) {
 	?>
 	<input type="radio" name="cluster" value="<?php echo $row['clstrname']; ?>"><?php echo $row['clstrname']; ?><br>
 	
 	<?php
 }
 	?>
 	<input type="submit" name="submit">
 </form>
 </body>
 </html>