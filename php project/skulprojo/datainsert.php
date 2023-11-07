<?php
$host="localhost";
$user="root";
$password="";
$db="schooldb";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}
if(isset($_POST['APPLY']))
{
  $data_name=$_POST['name'];
  $data_name=$_POST['email'];
  $dat_name=$_POST['phone'];
  $data_name=$_POST['meassege'];

  
  $sql="INSERT INTO asdmission( name,email,phone,message) VALUES ('$data_name', '$data_email', '$data_phone', '$data_message')";
$$result=mysqli_query($data,$sql);

if($result){
echo"apply success";
}
else{
    echo"apply failed";
}
}
?>
