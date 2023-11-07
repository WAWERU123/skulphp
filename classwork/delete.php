<?php
@include('conn1.php');
$id = $_GET['id'];
$delete = "DELETE FROM authors WHERE id='$id'";
$success = mysqli_query($conn,$delete);


if($success){
    header('location:update.php');
}
?>