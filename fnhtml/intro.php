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
    <title>Document</title>
    <link rel="stylesheet" href="css1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
   include 'nav.htm';
   ?>

    <div class="content"><br><br><br><br>
    <h1>Introduction</h1>
    <hr>
    <h2>What is HTML?</h2>
    <li>HTML stands for Hypertext Markup Language.</li>
    <li>Hypertext is more than simple text. Hypertext can works as a link.</li>
    <li> A markup language is a computer language that uses tags to define elements within a document.</li>

    <h2>History of HTML:</h2>
    <li>HTML was initially created by Berners-Lee in late 1991</li>
    <li>“HTML 2.0” was the first standard HTML specification which was published in 1995.</li>
    <li>In late 1999, HTML 4.01 version was published and it was widely used over the web.</li>
    <li>Currently we are having HTML-5 version which was published in 2012.</li>

    <h2> How HTML works:</h2>
    <p>HTML consists of collection of markup tags into a text file. When we save this text file with html extension (like sample.html), it becomes html file. 
    This html file can be viewed through a browser (like Firefox/chrome).
    The web browser simply read file and translates the tags into visible elements. 
    Every tag has a meaning and it tells the browser to do something.
    For an example, any website is simply a collection of web pages and a web page is made up of HTML tags. 
    You can create your own website if you have basic knowledge of HTML.</p>
    <div class="container">
    <a href="../theory1.php" class="btn">&laquo; Previous</a>
    <a href="basic.php" class="btn" id="next">Next &raquo;</a>
    </div>
    </div>
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
</body>
</html>