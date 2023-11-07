<?php
$conn = mysqli_connect('localhost','root','','schooldb');

if($conn){
    echo "connction successful";
}else{
   echo  "connection failed";
}
$sqlquery = "SELECT * FROM `Students`;";



if( $conn->query( $sqlquery) == true){
    echo " fetched successfully";

}else{
    echo "error:";
}


?>
