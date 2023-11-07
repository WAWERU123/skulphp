<?php
if($_SERVER{'REQUEST_METHOD'}=='POST' && isset($_POST['submit']))
{
    $conn= mysqli_connect('localhost','root','','marathon1')
    or die('connection failed:'.mysqli_connect_error());
    
    if(isset($_POST)['name']) && (isset($_POST)['email']) && (isset($_POST)['phone'])
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        
        $sql="INSERT INTO 'users' ('name', 'emai', 'phone') values ('$name','$email','$phone')";
        
        $query= mysqli_query($conn,$sql);
        if($query) {
            echo 'Entry successful';
        }
        else {
            echo 'error occurred';
        }
    }  
}


?>