<?php
$host="localhost";
$username="root";
$password="";
$db="multilogdb";

$conn= mysqli_connect($host,$username,$password,$db);
if(!$conn){
    echo"connection failed";
    exit();
}
?>