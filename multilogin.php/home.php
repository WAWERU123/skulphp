<?php
session_start();
@include('connect.php');
error_reporting(1);


$query="SELECT* FROM users";
    $result=mysqli_query($conn,$query);

    

if( isset($_SESSION['username']) && isset($_SESSION['id']))
{?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center"
    style="min-height :100vh;">
    <?php if($_SESSION['role'] == 'admin') {?>
        <!-- admin -->
        <div class="card" 
        style="width: 18rem;">
  <img src="admin.jpeg" class="card-img-top" alt="admin image">
  <div class="card-body text-center">
    <h5 class="card-title">
        <?=$_SESSION['name']?>
    </h5>
    
    <a href="logout.php" class="btn btn-primary">log out</a>
  </div>
  </div> 
  <div class="p-3">
    <?php @include ('members.php');
    if(mysqli_num_rows($result)>0)
     {?>

    
    <h1 class= "display-4 fs-1"> </h1>
  <table class="table"
  style="width: 32rem;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">username</th>
      <th scope="col">role</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
  while( $rows=mysqli_fetch_assoc($result))
  {?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$rows['name']?></td>
      <td><?=$rows['username']?></td>
      <td><?=$rows['role']?></td>
      <td><?php echo "<a href='update.php?id=".$rows['id']."' class='btn btn-success'>Update</a>"?></td>
      <td><?php echo "<a href='delet.php?id=".$rows['id']."'' class='btn btn-danger'>Delete</a>"?></td>
      <td></td>
    </tr>
  
    <?php $i++; }?>
   
  </tbody>
</table>
<?php }?>
  </div>
<?php }else {?>
   <!-- for users -->
   <div class="card" 
        style="width: 18rem;">
  <img src="user.png" class="card-img-top" alt="admin image">
  <div class="card-body text-center">
    <h5 class="card-title">
        <?=$_SESSION['name']?>
    </h5>
    
    <a href="logout.php" class="btn btn-primary">log out</a>
  </div>
  </div> 
  <?php }?>

    </div>
</body>
</html>
<?php }else{
header("location:login.php");
}?>