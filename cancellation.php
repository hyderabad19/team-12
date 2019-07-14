<?php
$conn = mysqli_connect("localhost","root","","loop");
if($conn->connect_error()){
	die("Error");
}

if(isset($_POST['cancel']){
	$sql = "UPDATE resource SET available = 1 WHERE rid = $_POST['$var3']";
mysqli_query($conn,$sql);
}


>?

<html>
<head>
 	<title></title>
 	<link rel = "stylesheet" href = "mystyle.css" type = "text/css">s
 </head>
 <body style = 'background-color : #2D3561'>
 <form action="cancellation.php" method="POST">
 	
 	<?php 
 	$con=mysqli_connect("localhost","root","","loop");
 	$result1 = mysqli_query($con,"SELECT resource.rid as rid1,rname,rdescription from resource,school WHERE resource.sid = school.sid ");
 	$var3=<?php echo $row1['rid1'];?>
 	while($row1 = mysqli_fetch_array($result1)) {
 		<input type = "radio" name = "$var3"  value = "<?php echo $row1['rid1'];?>" >  <br> 
 		 $var = $row1['rid1'];
 		 $var1= $row1['rname'];
 		 $var2= $row1['rdescription'];
 		 echo " ".$var.$var1.$var2;
 		  	?>
 		 
 	
 	<input type="cancel" name="cancel"/>
 </form>
 </body>
</html>
