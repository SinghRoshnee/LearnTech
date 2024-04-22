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
        <h1>CSS</h1>
        <p>
        CSS Tutorial for beginners to learn CSS online for free.
        CSS stands for “Cascading Style Sheet”. It is used to control the styles of web pages. CSS is one the essential part of websites along with HTML and JavaScript. HTML takes care of page structure while CSS specify design & formatting for websites.
        CSS Tutorial covers CSS basic syntax, text formatting, colours, selectors, border, display, float, and other properties to style web pages. This also includes the latest CSS3 Properties.
        In this online CSS course, you will learn how to use style and design your websites step by step. You will also find useful exercise, codes, Interview Questions to enhance your knowledge at the end of each chapter.</p>   
        </p>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1>Introduction</h1>
            </div>
            <div class="card-body">
                <p>CSS stands for “Cascading Style Sheet”.CSS works with HTML tags.</p>
                <a href="css1/intro.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>CSS Inclusion</h1>
            </div>
            <div class="card-body">
                <p>CSS plays an important role in the presentation of Web pages.
               </p>
                <a href="css1/inclusion.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>CSS syntax</h1>
            </div>
            <div class="card-body">
                <p>CSS is the language we use to style an HTML document.
                </p>
                     <a href="css1/syntax.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>CSS Selector</h1>
            </div>
            <div class="card-body">
                <p>CSS Selectors are used to finding HTML elements to apply some style.
               </p>
                     <a href="css1/selector.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>CSS Color</h1>
            </div>
            <div class="card-body">
                <p>CSS provides different options to define colors for HTML Page.
                </p>
                     <a href="css1/color.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>CSS Text</h1>
            </div>
            <div class="card-body">
                <p>CSS provides many options for defining the styles of text.
                </p>
                     <a href="css1/text.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>CSS Borders</h1>
            </div>
            <div class="card-body">
                <p>The CSS Border allows you to specify the border around HTML.</p>
                     <a href="css1/border.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Position property</h1>
            </div>
            <div class="card-body">
                <p>The position property specifies type positioning method used element.</p>
                     <a href="css1/position.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Float and clear property</h1>
            </div>
            <div class="card-body">
                <p>CSS Float property is used for positioning on web pages.</p>
                     <a href="css1/float.php" class="btn">Read more</a>
            </div>
        </div>
    </div>
   </div>
   <a href="frontend.php" class="next round next2">&#8249;</a>
    <a href="quiz/quizcss.php" class="next round next1">&#8250;</a>

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