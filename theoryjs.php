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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/theory.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
   include 'nav.htm';
   ?>  
   <div class="container">
    <div class="heading"><br><br>
        <h1>JavaScript</h1>
        <p>
        JavaScript Tutorial for beginners to learn JavaScript online for free.
        JavaScript is a client-side scripting language that is used to make web pages interactive. It is lightweight, free to use, easy to learn and cross-platform supported by all web browsers.
        This tutorial covers JavaScript basics, functions, objects, array, strings with examples. By using JS we can do DOM (HTML elements) manipulation, event handling, client-side validation as well.
        In this online JavaScript training course, you will use JavaScript in HTML & other applications. You will also find useful exercise, codes, Interview Questions to enhance your knowledge at the end of the most chapters.
        </p>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1>Introduction</h1>
            </div>
            <div class="card-body">
                <p>JS is a lightweight programming language that is used to make pages</p>
                <a href="js/intro.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Basic program</h1>
            </div>
            <div class="card-body">
                <p>This basic javascript program is used to output a message in the Browser.
               </p>
                <a href="js/basic.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Events</h1>
            </div>
            <div class="card-body">
                <p>Events are a part of the Document Object Model (DOM).
                </p>
                     <a href="js/event.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>functions</h1>
            </div>
            <div class="card-body">
                <p>A JavaScript function is a block of code designed to perform a task.
               </p>
                     <a href="js/function.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>variables</h1>
            </div>
            <div class="card-body">
                <p>Variables are containers for storing data (storing data values).</p>
                     <a href="js/variable.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>operator</h1>
            </div>
            <div class="card-body">
                <p>There are different types of JavaScript operators:
                </p>
                     <a href="js/operator.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Data Types</h1>
            </div>
            <div class="card-body">
                <p>Javascript has a 8 data types.The object data type contain.</p>
                     <a href="js/datatype.php" class="btn">Read more</a>
            </div>
        </div>
    </div>
   </div>
   <a href="frontend.php" class="next round next2">&#8249;</a>
    <a href="quiz/quizjava.php" class="next round next1">&#8250;</a>

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