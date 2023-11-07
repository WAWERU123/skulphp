<?php
@include('conn1.php');
$id = $_GET['id'];


$sql ="SELECT * FROM authors WHERE id = '$id'";
// $sql="SELECT* FROM authors ";
$result= mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

//update
if(isset($_POST['submit'])){
    $author = $_POST['author'];
    $book = $_POST['bookname'];

    //carry out the update query
    $update = "UPDATE authors SET author='$author',bookname='$book' WHERE id='$id'";
    $success = mysqli_query($conn,$update);

    if($success){
        header('location:update.php');
    }
    else{
        echo "data updatge failed";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> authors</h1>

<body bgcolor="green">
    <div><h2> AUTHORS form</h2></div>
    <form action="" method="post">
    <label for="user">author</label><br>
    <input type="text" name ='author' id="author" value="<?php echo $row['author']?>" *required/><br><br>


    <label for="text">bookname</label><br>
    <input type="text" name='bookname' id="bookname" value="<?php echo $row ['bookname']?>" *required/><br><br>

    <label for="year">year</label><br>
    <input type="year" name='year' id="year" value="<?php echo $row['year']?>" *required/><br><br>

<label for="country">country</label><br>
<input type="country" name='country' id="country" value= "<?php  echo $row['country']?>" *required/> <br><br>


<input type="submit" name='submit' id="submit"/>
</form>
    
</body>
</html>