<?php
@include('conn1.php');

$sql="SELECT * FROM runners";
$result= mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<h2>updatind data</h2>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">middlename</th>
      <th scope="col">country</th>
      <th scope="col">age</th>
      <th scope="col">gender</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i =0;
  while($row = mysqli_fetch_assoc($result)){

    $i++;
    ?>
    
    <tr>
    <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row['firstname']?></td>
            <td><?php echo $row['middlename']?></td>
            <td><?php echo $row['country']?></td>
            <td><?php echo $row['age']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo "<a href='update.php' class='btn btn-warning btn-sm'>Update</a?>"?></td>
            <td><?php echo "<a href='' class='btn btn-info btn-sm'>Delete</a?>"?></td>
    </tr>
    <?php } ?>
  </tbody>

</table>
    
</body>
</html>