
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
        $conn = mysqli_connect("localhost:3306","root","root","loop");
        $sql = "select rid,rname,sname from resource r,school s where r.available=1 and r.verified=1 and r.sid=s.sid;";
        $result = mysqli_query($conn,$sql);
        ?>
        <table>
        <tr>
        <th>School name </th>
        <th>Resource name </th>
        <th>Resource id</th>
        <th>View Details</th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($result)){
            ?>
            
          
            

            <tr>
                <form action='viewDetails.php'>
                    <td><?php echo $row["sname"]?></td>
                    <td><?php echo $row["rname"]?></td>
                    <td><?php echo $row["rid"]?> <input type="button" name="name1" value="<?php echo $row["rid"]?>" hidden></td>
                    
                    <td><input type="submit" name="submit" value=""></td> 
                </form>
            </tr>
      <?php  } ?>
    
    </table>
</body>
</html>