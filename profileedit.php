<html>
<head>
</head>
<body>
<form action="#" method="POST">
      <h1>Profile edit</h1>
      
      <?php  
      $getid =  $_SESSION["email"];


$conn = mysqli_connect("localhost:3306","root","root","loop");
$sql = "select * from school where schoolEmail='$getid'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
 
?>
      <form action="profileedit.php" method="POST">
     
      <br>
      <br>
      School Name:<input type=text  name="sname" value="<?php echo $row["sname"]?>"/>
      Principal Name:<input type=text  name="pname" value="<?php echo $row["pname"]?>"/>
      School Address:<textArea rows="4" name="saddress" value="<?php echo $row["saddress"]?>"></textArea>
      Password:<input type="password"  name="ppassword" value="<?php echo $row["ppassword"]?>"/>
      School email <input type="email" name="schoolEmail" value="<?php echo $row["schoolEmail"]?>">
      Upload Image<input type=file name="slpicture" value="<?php echo $row["slpicture"]?>">
      School Description <textarea rows="4" cols="100" name="schoolDes" value="<?php echo $row["schoolDes"]?>"></textarea>>
      <input type="submit"  name="submit" value="submit">
    </form>
<?php } ?>

<?php 
    if(isset($_POST['submit'])){
        $sname1=$_POST["sname"];
        $pname1=$_POST["pname"];
        $saddress1=$_POST["saddress"];
        $ppassword=$_POST["ppassword"];
        $slpicture1 = $_POST["slpicture"];
        $schoolDes=$_POST["schoolDes"];
        $smail=$_POST["schoolEmail"];


        
 $sql3 = "update school set sname= '$sname1',
           pname = '$pname1',
           saddress = '$saddress1',
           ppassword = '$ppassword',
           
           slpicture = '$slpicture1',
           schoolDes='$schoolDes' 

            where school.schoolEmail='$smail' " ;
$result11 = mysqli_query($conn,$sql);
header("Location:dashboard.html");
    }



?>


</body>
</html>