<?php
@include('connect.php');
session_start();


$select = "SELECT * FROM users";
$res = mysqli_query($conn,$select);

$id = $_GET['id'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $update = "UPDATE users SET name = '$name',username='$username',password = '$pass' WHERE id = $id";
    $success = mysqli_query($conn,$update);

    if($success){
        header('location:home.php');
    }
    else{
        echo "update failed";
    }
}
?>