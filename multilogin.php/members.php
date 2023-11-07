<?php
if( isset($_SESSION['username']) && isset($_SESSION['id']))
{
    $query="SELECT* FROM users ORDER BY id ASC";
    $result=mysqli_query($conn,$query);

}else{
    header("location:login.php");
}
?>