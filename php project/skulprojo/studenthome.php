 <?php
 @include('conn.php');
 session_start();
 
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentdashboard</title>
</head>
<body>
  <h1>student home</h1>  
  <a href="logout.php">Logout</a> 
  
  <?php
  echo $_SESSION["username"]
  ?>
</body>
</html>
