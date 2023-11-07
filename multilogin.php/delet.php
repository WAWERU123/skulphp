<?php
@include('connect.php');
$id = $_GET['id'];
$delete = "DELETE FROM users WHERE id='$id'";
$success = mysqli_query($conn,$delete);


if($success){
    header('location:home.php');
}
?>
