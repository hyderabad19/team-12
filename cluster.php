 <html>
 <head>
 	<title></title>
 	<link rel = "stylesheet" href = "mystyle.css" type = "text/css">s
 </head>
 <body style = 'background-color : #2D3561 '>


 <form action="dashboardSchool.php" method="POST">
 	
 	<?php 
 	$con=mysqli_connect("localhost","root","","loop");
 	$result1 = mysqli_query($con,"SELECT cno from cluster");
 	while($row1 = mysqli_fetch_array($result1)) {
 		
 		 $var = $row1['cno'];
 		 echo " "; 	?>
 		 <table>
 		 	<tr>
 		 		
 	
 	<input type = "radio" name = "<?php echo $row1['cno'];?>" value = "<?php echo $row1['cno'];?>" ><b>CLUSTER <?php echo $var;?></b>  <br>
 	
 	<?php 
 	$result = mysqli_query($con,"SELECT sname,saddress FROM school WHERE $var = school.cno");	
 	while ($row = mysqli_fetch_array($result)){?>
 		
 	school name:	<?php echo $row["sname"];?><br>
 	
 	school address: <?php echo $row["saddress"];?><br>
 	<br></tr></table>
 	<?php
 	}
 	}?>
 	
 	<input type="submit" name="submit"/>
 </form>
 </body>
 </html>