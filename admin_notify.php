<?php

$con=mysqli_connect("localhost","root","","loop");

 ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table style="width:100%">

    <?php

if(isset($_POST["verify"]))
{
    $conn = mysqli_connect("localhost:3306","root","root","loop");
    $rid11=$_POST["name123"];
    $rpic11=$_POST["pic1"];

        
    $sql3 = "update resource set 
              
              rpicture = '$slpicture1',
              
   
               where resource.rid='$rid11' " ;
   $result11 = mysqli_query($conn,$sql3);
   


    header("Location:Admin_notify.php");  
}

?>

    <?php
        $sql = "select rid,rname,sname from resource r,school s where r.available=1 and r.verified=0 and r.sid=s.sid;";
        $result = mysqli_query($con,$sql);
        ?>
        <table>
        <tr>
        <th>School name </th>
        <th>Resource name </th>
        <th>Resource id</th>
        <th>Upload Picture</th>
        <th> Verify</th>

        </tr>
        <?php
        while($row=mysqli_fetch_array($result)){
            ?>
            
          
            

            <tr>
                <form action='Admin_notify.php' method="POST">
                    <td><?php echo $row["sname"]?></td>
                    <td><?php echo $row["rname"]?></td>
                    <td><?php echo $row["rid"]?> <input type="button" name="name123" value="<?php echo $row["rid"]?>" hidden></td>
                    <td> <input type=file name1="pic1" value="choose-file">
                    
                    <td><input type="submit" name="verify" value="verify"></td> 
                </form>
            </tr>
      <?php  } ?>
    
    </table>


</body>
</html>