<?php
@include('conn1.php');
//detect a button click
if(isset($_POST['submit'])){
    //create variables to store the entered data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    //insert data into the databas eusing the INSERT query
    $insert = "INSERT INTO users(name,email,phone)VALUES('$name','$email','$phone')";
    //create a connection between the query and the database
    $result = mysqli_query($connect,$insert);

    //check if data has been saved
    if($result){
        echo "data saved";
    }
    else{
        echo "data saving failed";
    }


}

?>