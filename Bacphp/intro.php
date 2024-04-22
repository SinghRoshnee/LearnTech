
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
// Redirect to the login page if not logged in
    echo "Not logged in...!";
    exit;
}

$username = $_SESSION['username'];
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

    <div class="content"><br><br><br>
        <h1>Introduction</h1>
        <hr>
    <h2>What is PHP?</h2>
    <p>
    PHP is a server side programming language that is mostly used for web applications.
There are many advantages of choosing PHP language over others. <br>
In this PHP Tutorial, you will learn more about PHP Usage, Feature, History, and Future scope.</p>

<h2>Uses of PHP:</h2>
<ul>
    <li>PHP is able to perform various arithmetic and logical operations on the given data.</li>
    <li>PHP can store and retrieve data from the database.</li>
    <li>You can create dynamic functionality on any website using PHP. A few examples are Login, Registration, Gallery, Survey, Forums and many more.</li>
    <li>PHP can transfer data among different web pages in a website.</li>
    <li>You can create almost any kind of website using PHP. Some of the examples are Business, personal, shopping, blogging, etc</li>
    <li>PHP is widely used for web applications but it can be used as general-purpose programming to manage data offline as well.</li>
</ul>

<h2>Features of PHP:</h2>
<ul>
    <li>PHP is easy to learn for beginners</li>
    <li>PHP Language runs on almost all operating systems. For example Windows, Linux, Unix, Mac OS X.</li>
    <li>PHP is compatible with various web servers. For example Apache, NGNIX, IIS, etc</li>
    <li>PHP supports a wide range of database management systems like MySQL, PostgreSQL, Oracle, MS SQL.</li>
    <li>PHP is open-source and free. We can download it from the official PHP website: www.php.net</li>
</ul>

<h2>PHP Facts:</h2>
<ul>
    <li>The full form of PHP is “PHP: Hypertext Preprocessor”</li>
    <li>Initially, the PHP term stood for Personal Home Page.</li>
    <li>Rasmus Lerdorf has developed PHP language initially in 1995.</li>
    <li>PHP is used as a procedural programming as well as object-oriented programming.</li>
    <li>Some of the biggest online brands use PHP in some form or functionality. Some examples are: Facebook, WhatsApp, Wikipedia, Flickr, jQuery Blog, and WordPress are powered by PHP.</li>
</ul>

<h2>What is the future of PHP?</h2>
<p>Today, PHP totally dominates the web applications on the internet. W3Techs says that PHP is used by more than 80% among the all top websites in the world.<br>
    Therefore, PHP is likely to remain strong in the market for the various upcoming years.</p>

<h2>Why PHP is widely used programming language in the world?</h2>
<ul>
    <li>As PHP is open-source, it becomes affordable to purchase web hosting for PHP website. Also, PHP web development cost is low as compared to many other languages.</li>
    <li>PHP language is easy to set up in different environments using software like XAMPP, WAMP, LAMP.</li>
    <li>PHP programming syntax is easy to learn and understand.</li>
    <li>There is huge support available on the internet for PHP to find solutions for any problem. There are more than 100000 PHP questions has been answered on StackOverFlow</li>
    <li>You can find many PHP scripts online for your projects or websites.</li>
</ul>

<h2>Example of a Simple PHP program:</h2>
<div class="text-boxes">
      <div class="text-box HTMLBox">
        <div class="topic">HTML Code:</div>
        <textarea id="HTMLBox" readonly>
        <!DOCTYPE html>
        <html lang="en">
        <head>
           <title>Document</title>
        </head>
        <body>
        &lt?php
        echo "Hello, This is a simple PHP program!";
        ?>
        </body>
        </html>
      </textarea><br>
        <button id="HTMLButton">Copy Codes</button>
      </div>
    </div><br><br><br>



    <div class="container">
    <a href="../bctheory.php" class="btn" id="next">Previous &raquo;</a>
    <a href="terminology.php" class="btn" id="next">Next &raquo;</a>
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

<script>
      // HTML BOx JS Code
      let HTMLBox = document.getElementById("HTMLBox");
      let HTMLButton = document.getElementById("HTMLButton");

      HTMLButton.onclick = function () {
        HTMLBox.select();
        document.execCommand("copy");
        HTMLButton.innerText = "Codes Copied";
      };
    </script>
    
</body>
</html>