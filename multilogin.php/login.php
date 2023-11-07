<?php 
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['id'])){
?>
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
    <div class="container d-flex justify-content-center align-content-center " style="min-height:100vh ">

     <form class="border shadow p-3 rounded"
     action="checklogin.php"
     method="post"
     style="width: 450px;">

   <h1 class=" text-center p-3">LOGIN </h1>
   <?php if (isset($_GET ['error']))
   {?>
    <div class="alert alert-danger" role="alert">
    <?=$_GET['error']?>
   </div>
  <?php }
   ?>

        <div class="mb-3">
            <label for="username" class="form-label" name="username" id="username">
             user name   
            </label>
<input type="text" class="form-control" name="username" id="username">
        </div>

        <div class="mb-1">
            <label for="password" class="form-label">password</label>
<input type="text" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label class="form-label">select user type</label>
             
        </div>
<select class="form-select mb-3" 
name="role"
aria-label="default select example">
    <option selected value="user">user</option>
    <option value="admin">admin</option>
</select>

<button type="submit" class="btn btn-secondary" name="submit">Submit</button>
     </form>   
</div>
</body>
</html>
<?php } else{
    header("location:home.php");

} ?>