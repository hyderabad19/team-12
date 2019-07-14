<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    

    $sname1=$_SESSION["aname"];
    $conn = mysqli_connect("localhost","root","","loop");
    if($conn->connect_error){
        die("COnnection Error!! ".$conn->connect_error);
    }
   
        // echo $l;

    if(isset($_POST['submit']))
     {
    
    $sql = "select sid from school where sname='$sname1';";
        $result = mysqli_query($conn,$sql);
       
        while ($row=mysqli_fetch_array($result)){
          $sid=$row['sid'];
        }
         $sql = "select resName from resourcelist;";
        $result = mysqli_query($conn,$sql);
        
        while ($row=mysqli_fetch_array($result)){
            if(isset($row['resName']))
            {
            $x=$row['resName'];
        $available="";
        $verified=1;
        $Repicture=NULL;
        $rid=$sid.'_'.$x;
        $sql="INSERT INTO resource  (sid,available,verified,rdescription,Repicture,rname,rid) VALUES ('$sid','$available','$verified','rdescription','$Repicture','$x','$rid')";
        $res=mysqli_query($conn,$sql);
        if(!$res)
        {
            $msg= "this resource already exits";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        }

}
       
         
    /*foreach ($l as $y) {

        if(isset($_POST[$y])){
            echo $y;
            $t=$sid."_".$y;
            echo $t;
            
            $des=$_POST[$y."_d"];
            echo $des;

            $sql="INSERT INTO resource (sid,rdescription,rid,rname) VALUES ('$sid','$des',$t,'$y')";
            $result = mysqli_query($conn,$sql);    
        }
    } */
    //echo "<script type='text/javascript'> alert('Succefully added!!')</script>";  
    // header("Location: dashboardSchool.php");  
}

?>
  
<html>


</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body >

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
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container">
  
</div>

<div style="align-content: center; margin-left: 40%;max-height: 95%">



    <form action='#' method="POST">

        <?php 
        $sql = "select resName from resourcelist;";
        $result = mysqli_query($conn,$sql);
        
        while ($row=mysqli_fetch_array($result)){

?><input type="checkbox" name="<?php echo $row['resName'];?> " value="<?php echo $row['resName'];?>"><?php echo $row['resName'];?><br>
<?php
}        ?>
        <input type="submit" name="submit" value="add Resources">
    </form>
<div>

</body>
</html>