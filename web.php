<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
// Redirect to the login page if not logged in
    echo "Not logged in...!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Websites</title>
    <link rel="stylesheet" href="css/web.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
   include 'nav.htm';
   ?>

<section class="web-dev">
    <div class="row">
    <h1> Web Development<h1><br>
    <p class="wb">Web development refers to the creating, building, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.
    It is the creation of an application that works over the internet i.e. websites.
    Web development is the building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great,
    work fast and perform well with a seamless user experience
    </p>
    <br>

    <p class="wb">Web Development is made up of Two words:</p>
    <li class="web-d">Web:It refers to Websites, Webpages or anything that work on internet</li>
    <li class="web-d">Development:It refers to building the application from scratch </li><br>

    <p class="wb">Web Development can be classified into two ways:</p>
    <li class="web-d"> Frontend Development</li>
    <li class="web-d"> Backend Development</li></p>
    <b>Web Devloper</b>
    <p class="wb">
    Web developers, or ‘devs’, do this by using a variety of coding languages. The languages they use depends on the types of tasks they are preforming and the platforms on which they are working.
    Web developers can come from different educational disciplines because Web development is one of those fields where once a programming language is learned,
    much of the rest of the skill set can be acquired through practice.
    </p>
    </div>
    <br>
</section>

<div class="container">
    <div class="card">
        <div class="content">
            <h2>01</h2>
            <h3>frontend development</h3>
            <p> The part of a website where the user interacts directly is termed as front end.
                It is also referred to as the ‘client side’ of the application.</p>
            <a href="frontend.php">Read more</a>
        </div>
    </div>
    <div class="card">
        <div class="content">
            <h2>02</h2>
            <h3>Backend development</h3>
            <p>Backend is the server side of a website. It is part of the website that users cannot see and interact with. 
                It is the portion of software that does not come in direct contact with the users.It is used to store and arrange data..</p>
            <a href="backend.php">Read more</a>
        </div>
    </div>
</div>
<a href="home.php" class="next round next2">&#8249;</a>
    <a href="syllabus.php" class="next round next1">&#8250;</a>


<!-------About  Us-->

<section class="footer">
        <h4> About Us</h4>
             Coursera is a free learning site that offers MOOCs courses <br> 
                All Coursera courses contain pre-recorded video lectures that you can watch 
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>
          
            Made with <i class="fa fa-heart-o"></i> by RoshniRajput & SwatiPatel
    </section>

</body>
</html>