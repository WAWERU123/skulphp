<?php
session_start();
if (!isset(_SESSION ['USERNAME']))
{
  header("location:login.php") ;
  
}
else if($_SESSION['usertype'] ==)
?>