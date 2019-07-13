<html>
<head>
</head>
<body>
<?php

if($_POST["book"])
{
    $conn = mysqli_connect("localhost:3306","root","root","loop");
    $sql = "insert into booked(sid,rid,startdate,enddate) values ('$_SESSION["ssid1"]','$_SESSION["srid1"]','$_POST["sdate"]','$_POST["edate"]')";
    mysqli_query($conn,$sql);
    $sql1 = "update resource set available="0" where rid=booked.rid ";
    mysqli_query($conn,$sql1);
    header("Location: dashboard.html");  
}

?>
<?php
$conn = mysqli_connect("localhost:3306","root","root","loop");
$rid2 = $_POST["name1"];
$sql = "select sid,rid,rname,sname,rdescription,Repicture from resource r,school s where r.rid='$rid2' and r.sid=s.sid;";
$result = mysqli_query($conn,$sql);
?>
<form action="viewDetails.php" method="POST">

<?php
while($row=mysqli_fetch_array($result)){
    echo $row["sname"];
    echo $row["rname"];
    echo $row["rid"];
    echo $row["rdescription"];
    $_SESSION["ssid1"] = $row["sid"];
    $_SESSION["srid1"] = $row["rid"];

    ?>
    Enter start date:<input type=date name="sdate">
    Enter end date:<input type=date name="edate">

    <input type="submit" name="book" value="Book">
    
    


}
?>
</form>
</body>


?>
</body>
</html>