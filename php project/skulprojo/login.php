 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <title>login form</title>
 </head>
 <body background="school2.jpeg" class="body_deg">
    <center>
        <div class="form_deg">
         <center class="title_deg">
            login form
         
         </center>
            <form action="auth.php" method="POST" class="login_form">

         
            <div>
                   <label class="label_deg">username</label> <br>
                   <input type="text" name="username">
                </div>
                <div>
                   <label class="label_deg">password</label> <br>
                   <input type="password" name="password">
                </div>
                <div>
                 
                   <input class="btn btn-success" type="submit" name="submit" value="login"><br>
                </div> 
               

            </form>
        </div>
    </center>
    
 </body>
 </html>