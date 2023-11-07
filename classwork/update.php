<?php
@include('conn1.php');

$sql="SELECT * FROM authors";

$sql="SELECT* FROM authors LIMIT 2";
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
<h2>updating  authors data</h2>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">author</th>
      <th scope="col">bookname</th>
      <th scope="col">year</th>
      <th scope="col">country</th>
      
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
      <td><?php echo $row['author']?></td>
            <td><?php echo $row['bookname']?></td>
            <td><?php echo $row['year']?></td>
            <td><?php echo $row['country']?></td>
            <td><?php echo "<a href='formupadte.php?id=".$row['id']."' class='btn btn-warning btn-sm'>Update</a?>"?></td>
            <td><?php echo "<a href='delete.php ?id=".$row['id']."'class='btn btn-info btn-sm'>Delete</a?>"?></td>
    </tr>
    <?php } ?>
  </tbody>

</table>
    
</body>
</html>