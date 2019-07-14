<?php 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    

    $sname1=$_SESSION["aname"];
    $conn = mysqli_connect("localhost","root","","loop");
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="adminPage.css">
    <script src="main.js"></script>
</head>
<body>
<?php

    if(isset($_POST["submit"]))
{
    $x=$_POST['submit1'];
    $sid=$x[0];
    $sd=$_POST["sd"];
    $ed=$_POST["ed"];
    
    $sql = "insert into booked_resources(sid,rid,startdate,enddate) values ('$sid','$x','$sd','$ed')";
    mysqli_query($conn,$sql);
    $sql1 = "update resource set available=1 where rid='$x' ";
    mysqli_query($conn,$sql1);
    header("Location: dashboardSchool.php");  
}
/*
$rid2 = $_POST["name1"];
$sql = "select sid,rid,rname,sname,rdescription,Repicture from resource r,school s where r.rid='$rid2' and r.sid=s.sid";
$result = mysqli_query($conn,$sql); */
?>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Loop Education</a>
    </div>
    <ul class="nav navbar-nav">
      <li> <a href="#">Welcome !! <?php echo $_SESSION['aname']; ?></a>
        </li>
     
    
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
  <li><a href="profileedit.php"><span class="glyphicon glyphicon-log-in"></span> Profile</a></li>
      <li><a href="addResource.php"><span class="glyphicon glyphicon-log-in"></span> AddResource</a></li>
            <li><a href="availableResource.php"><span class="glyphicon glyphicon-log-in"></span> AvailableResources</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
      
    </ul>
  </div>
</nav>
    <table style="width:100%">
    <?php
        $conn = mysqli_connect("localhost","root","","loop");
        $sql = "select rid,rname,sname from resource r,school s where r.available=0 and r.verified=1 and r.sid=s.sid;";
        $result = mysqli_query($conn,$sql);
        ?>
        <table>
        <tr>
        <th>School name </th>
        <th>Resource name </th>
        <th>startdate</th>
        <th>enddate</th>
        <th>View Details</th>
        <th></th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($result)){
            $c=0;
            ?>
            
          
            

            <tr>
                <form action='#' method="POST">
                    <?php
                    



                    ?>
                    <td ><?php echo $row["sname"]?></td>
                    <td><?php echo $row["rname"]?></td>
                    <td><input type="date" name="sd" placeholder="startdate"></td>
                    <td><input type="date" name="ed" placeholder="enddate"></td>
                    <td><input type="submit" name="submit" value="submit"></td> 
                    <td ><input type="hidden"  name="submit1" value="<?php echo $row['rid']?>"> </td>
                </form>
            </tr>
      <?php  } ?>
    
    </table>
</body>
</html>