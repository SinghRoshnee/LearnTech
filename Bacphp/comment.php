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
        <h1>Comments</h1>
        <hr>
    <h2>PHP Comments</h2>
<p>PHP Comments is one of the most important parts of the code. By using comments, the developer can easily understand
     the code. These comments are simply a description of the PHP script or code. PHP comments don’t affect the code.
    <br><br>
    In HTML, we see there is only one type of comment. While PHP has two types of comments i.e
    <li>Single Line Comment</li>
    <li>Multiple Line Comment</li>
    </p>

    <h2>Single line comment</h2>
    <p>The Single-line comments are used to tell the developer to ignore everything which comes to the right side of that syntax of single-line comment.<br><br>
We can use single-line comments by the following two ways:
<li>//</li>
<li>#</li>
</p>

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
echo "Hello World!"; // This is single line comment
# This is also a single line comment
?>
        </body>
        </html>
      </textarea><br>
        <button id="HTMLButton">Copy Codes</button>
      </div>
    </div><br><br>

    <div class="container">
    <h2>Output:</h2>
    <img src="image/capture.PNG" class="out">
    </div>

<h2>Multiple line comment</h2>
<p>The Multiple PHP comment can be used to comment out large blocks of code(we can even comment paragraphs in PHP script).
The multiple line PHP comment begins with /* and ends with */.We must end the multiple line comment.</p>

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
/* This is a multiple line comment
here we print Hello World statement */
echo "Hello World!";
?>
        </body>
        </html>
      </textarea><br>
        <button id="HTMLButton">Copy Codes</button>
      </div>
    </div><br><br>
    <div class="container">
    <a href="syntax.php" class="btn" id="next">Previous &raquo;</a>
    <a href="variable.php" class="btn" id="next">Next &raquo;</a>
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