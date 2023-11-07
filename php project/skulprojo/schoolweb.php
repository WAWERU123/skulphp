<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body> 
    <nav >
        <label class="logo">sky school</label>
        <ul>
            <li> <a href="">Home</a></li>
            <li> <a href="">contact</a></li>
            <li> <a href="">Admission</a></li>
            <li> <a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav> 
    <div class= "section1">
        <label class="img_text"> learn to code </label>
        <img  class="main_img" src="background.jpg" alt="">
         
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="skulmagement.jpeg" alt="">

            </div>

            <div class=" col-md-8">
<h1> WELCOME TO SKY CODING ACADEMY</h1>
<P>It’s been a summer full of fun. Now it’s time to get back to your routine and have fun as you learn.
We are ready for you! We hope you are ready for us! Let us begin with partnering our
 way through new discoveries in education. Let’s enjoy the ride together!So you think you are back 
 to the same old routine? Nah! This year is going to bring out your creative potential. Gear up for an awesome year ahead!</P>
            </div>
        </div>

</div>
            <center>
             <h1>Teachers in our school</h1>
            </center>

  <div class="container">
    <div class="row">
        <div class="col-md-4">
<img src="teacher1.jpeg" alt="">
<p class="lead text-primary">Remote Learning: With the rise of online learning, coding tutors may offer remote sessions through video conferencing and screen-sharing tools.

Coding Communities: Tutors might encourage students to join coding communities, attend meetups, and collaborate with other learners to foster a sense 
of belonging and growth</p>
        </div>
        <div class="col-md-4"> 
            <img class="teacher" src="teacher2.jpeg" alt="">
        <p class="lead text-primary">
        Feedback and Assessment: Regular feedback on assignments and projects helps students understand their strengths and areas for improvement.

Stay Updated: Tutors stay up-to-date with the latest programming trends, languages, and technologies to provide accurate and relevant guidance. 
        </p>
        </div>
<div class="col-md-4">
    <img class="teacher"src="teacher3.jpeg" alt="">
    <p class="lead text-primary">Feedback and Assessment: Regular feedback on assignments and projects helps students understand their strengths and areas for improvement.

Stay Updated: Tutors stay up-to-date with the latest programming trends, languages, and technologies to provide accurate and relevant guidance.</p>
</div>
     

    </div>

  </div>



  <center>
             <h1>Courses offered</h1>
            </center>

  <div class="container">
    <div class="row">
        <div class="col-md-4">
<img src="skulgraphic.jpeg" alt="">
<p class="lead text-danger ">Graphic design</p>
        </div>
        <div class="col-md-4"> 
            <img class="" src="webskul.jpeg" alt="">
        <p class="lead text-danger">
     web development
        </p>
        </div>
<div class="col-md-4">
    <img class=""src="digital.jpeg" alt="">
    <p  class="lead text-danger">Digital marketing</p>
</div>
     

    </div>

  </div>
 


  <center>
    <h2 > Admission Form </h2>
  </center>

  <div align="center" class="admission_form">

  <form action="datainsert.php" method="POST" >

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">name:</label>
    <input type="text"  id="name" placeholder="Enter name" name="name">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">email:</label>
    <input type="email" id="email" placeholder="Enter email" name="email">
  </div>

  <div class="mb-3 mt-3">
    <label for="phone" class="form-label">phone:</label>
    <input type="phone"  id="phone" placeholder=" enter phone" name="phone">
  </div>

  <div class="mb-3 mt-3">
    <label for="message" class="form-label">message:</label>
    <textarea class="input_txt" name="message"> </textarea>
  </div>

  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>

  <button type="submit" class="btn btn-secondary">APPLY</button>
 
</form>
  </div>

<footer>
    <h3 class="footer_test">All@copyright reserved by waweru</h3>
</footer>


</body>
</html>