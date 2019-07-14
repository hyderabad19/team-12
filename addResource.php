<?php
    session_start();
    $sid=$_SESSION["sid"];
    $conn = mysqli_connect("localhost","root","","loop");
    if($conn->connect_error){
        die("COnnection Error!! ".$conn->connect_error);
    }
    else{
        $sql = "select rid from resources where sid=1 and available=1;";
        $result = mysqli_query($conn,$sql);
        $l=array();
        while ($row=mysqli_fetch_array($result)){
          array_push($l,$row["rid"]);
        }
        // echo $l;
    }

    if(isset($_POST['submit']))
?>     {
    <?php
    $des=$_POST['rdes'];
    $l=array("library","playground","labs");
    $sql = "select cid from school where sid='$sid';";
    $result = mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result)){
        $cid=$row["cid"];
      }
    foreach ($l as $y) {
        if(isset($_POST[$y])){
            $sql=(INSERT INTO resource (sid,rdescription,cid,rid,rname) VALUES ($sid,$des,$cid,$sid."_".$y,$y));
            $result = mysqli_query($conn,$sql);    
        }
    }
    echo "<script type='text/javascript'> alert('Succefully added!!')</script>";  
    header("Location: dashboard.html");  
}
?>
  
<html>
    <form action='#' method="POST">
        <?php
        if (!in_array("library", $l)) {
        ?>   
            <input type="checkbox" name="library" value="library">library<br>
        <?php
        }   
       
        if (!in_array("playground", $l)) {
            ?>
            <input type="checkbox" name="playground" value="playground">playground<br>
            <?php
        }
        if (!in_array("lab", $l)) {
            ?>
            <input type="checkbox" name="labs" value="labs">labs<br>
            <?php
        }
        ?>
        <input type="text" name="rdes" >
        <input type="submit" value="add Resources">
    </form>
</html>