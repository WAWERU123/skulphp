<?php
@include('conn1.php');
$conn=new mysqli($localhost,$username,'',$marathon1);
if($conn->connect_error){
    die("connection failed:".$conn->$connect_error);
} 
$sql="SELECT id,firstname,middlename,country,age,gender FROM runners";
$result= $conn->query($sql);

?>