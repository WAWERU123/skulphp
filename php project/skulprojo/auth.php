<?php
error_reporting(1);
@include('conn.php');

if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $select = "SELECT * FROM trainers WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($conn,$select);


    //colelct rows
    $row = mysqli_fetch_array($result);



    //check role
    if($row['usertype'] == 'admin'){
        $_SESSION['username'] = $username;
        header('location:adminhome.php');
        //echo 'login successfull';
    }
    elseif($row['usertype'] == 'student' ){
        $_SESSION['username'] = $username;
        echo 'login successful';
        //header('location:studenthome.php');
    }
    else{
        echo 'user email or passsword incorrect';

    }
}
?>