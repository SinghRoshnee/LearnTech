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
    <link rel="stylesheet" href="css/theory.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>  
<?php
   include 'nav.htm';
   ?>
        <!---------Point Box-->

        <div class="container">
    <div class="heading"><br><br>
        <h1>PHP</h1>
        <p>PHP Tutorial for beginners to learn PHP online for free.

PHP is a server-side programming language that is used to develop dynamic websites. PHP is free to use and easy to learn. This PHP tutorial is well crafted for beginners as well as professionals.

Today, PHP is the most used programming language for web development. As per W3Techs, PHP is used by more than 80% of all top websites.

Our PHP Tutorials covers PHP basics & advanced concepts with examples. “Tutorials Class” provides you PHP tutorials, exercises, codes, articles, and interview questions all at one place.

What are you waiting for? Learn PHP programming step by step here.<br>
               
            </p>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1>Introduction</h1>
            </div>
            <div class="card-body">
                <p>Html is hyper text markup languages.
                Hypertext is more than simple text.Html</p>
                <a href="Bacphp/intro.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Terminology</h1>
            </div>
            <div class="card-body">
                <p>The basic Html page structure mainly consists of 4 Html tags.Html is hyper text markup languages.
               </p>
                <a href="Bacphp/terminology.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Installation</h1>
            </div>
            <div class="card-body">
                <p>Html Head element mainly contains metadata about the Html page.Html is hyper text markup languages.
                </p>
                     <a href="Bacphp/installation.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Syntax</h1>
            </div>
            <div class="card-body">
                <p>Html Head element mainly contains metadata about the Html page.Html is hyper text markup languages.
                </p>
                     <a href="Bacphp/syntax.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Comments</h1>
            </div>
            <div class="card-body">
                <p>A website page is made up of multiple Html element and Html elements is made of Html.
               </p>
                     <a href="Bacphp/comment.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Variable</h1>
            </div>
            <div class="card-body">
                <p>Html headings are titles or subtitles that you want to display on a webpage.
                </p>
                     <a href="Bacphp/variable.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Opertor</h1>
            </div>
            <div class="card-body">
                <p>Html paragraph tags are used to define the text paragraph.Html is hyper text markup languages.</p>
                     <a href="Bacphp/operators.php" class="btn">Read more</a>
            </div>
        </div>
    </div>
   </div>
        <a href="backend.php" class="next round next2">&#8249;</a>
    <a href="quiz/quiz.php" class="next round next1">&#8250;</a>
</section>


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
          
            Made with <i class="fa fa-heart-o"></i> by <b>RoshniRajput & SwatiPatel</b> 
    </section>

<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu()
    {
        navLinks.style.right="0";
    }
    function hideMenu()
    {
        navLinks.style.right="-200px";
    }

</script>
</body>
</html>