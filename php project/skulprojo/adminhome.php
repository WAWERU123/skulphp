<?php
@include('conn.php');
 session_start();
 


  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin dashboard</title>
</head>
<body>
  <h1>Admin home</h1>
  <h3>Welcome <?php echo $_SESSION['username']?></h3>
  
  <a href="logout.php">Logout</a>


</body>
</html>
