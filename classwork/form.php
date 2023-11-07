<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
</head>
<h1> marathon event</h1>

<body bgcolor="blue">
    <div><h2> registration form</h2></div>
    <form action="insert.php" method="post">
    <label for="user">name</label><br>
    <input type="text" name ='name' id="name" required/><br><br>


    <label for="email">Email</label><br>
    <input type="email" name='email' id="email" required/><br><br>

<label for="phone">Phone</label><br>
<input type="phone" name='phone' id="phone"required/> <br><br>

<input type="submit" name='submit' id="submit"/>
</form>

</body>
</html>