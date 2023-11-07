<?php
error_reporting(1);
$host="localhost";
$user="root";
$password="";
$db="schooldb";

session_start();


$data=mysqli_connect($host,$user,$password, $db);
if (
    $data===false
)
{die ("connection error"); 
}
if ($_SERVER["REQUEST_METHOD"] =="POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
     
    $sql= "SELECT*FROM trainers where username= '".$username."'AND password= '".$password."'";
  $result=mysqli_query($data,$sql);

 $row=mysqli_fetch_array($result);

if ($row["usertype"]=="student")

{
    $_SESSION["username"]==$username;
   header("location:student.php");

}
elseif ($row["usertype"]=="admin")

{ 
    $_SESSION["username"]==$username;
    header("location:adminhome.php");

}
else
{
    echo "usernameor passw";
}
}
?>