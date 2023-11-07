<?php
if (isset($_POST["name"])){
    echo "welcome,".$_GET["name"]."";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <label for="password">password:</label>
    <input type="password" name="pass">
    <input type="submit" value="submit">
</form>
    
</body>
</html>

