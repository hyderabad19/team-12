<?php
session_start();

?>
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
  <li><a href="profileedit.php"><span class="glyphicon glyphicon-log-in"></span> Profile</a></li>
      <li><a href="addResource.php"><span class="glyphicon glyphicon-log-in"></span> AddResource</a></li>
            <li><a href="availableResource.php"><span class="glyphicon glyphicon-log-in"></span> AvailableResources</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container">
  
</div>

</body>
</html>
