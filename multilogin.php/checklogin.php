<?php
session_start();
include"connect.php";

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])){
function test_input($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
        
}
$username=test_input($_POST['username']);
$password=test_input($_POST['password']);
$role=test_input($_POST['role']);

if( empty($username)) {
    header("location:login.php?error= username is required");
}elseif(empty($password)){
    header("location:login.php?error=password is required");
}else{
    $query="SELECT* FROM users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result );
        if($row['password'] === $password && $row['role']==$role){
$_SESSION['name']=$row['name'];
$_SESSION['id']=$row['id'];
$_SESSION['role']=$row['role'];
$_SESSION['username']=$row['username'];

header("location:home.php");
        } else{
            header("location:login.php?error=incorrect name or password");
        }
    }else{
        header("location:login.php?error=incorrect username or password");
    }
}
    

}else{ header("location:login.php");

}
?>