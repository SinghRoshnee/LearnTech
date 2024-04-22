


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
        <h1>Basic PHP Syntax</h1>
        <hr>
    <h2>Basic PHP Syntax</h2>
<li>The default file extension for PHP files is “.php”. For example: file1.php</li>
<li>A PHP file normally contains some PHP statements, variables, functions and some HTML tags as well.</li>



<h2> program to print “Hello World!”</h2>
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
     echo "Hello World!";
      ?>
        </body>
        </html>
      </textarea><br>
        <button id="HTMLButton">Copy Codes</button>
      </div>
    </div><br><br>

<h2>How to run PHP Program:</h2>
<li>If you have installed XAMPP, all of your PHP code files will be placed in “htdocs” folder. The full path of htdocs folder will be something  like D:\xampp\htdocs</li>
<li>Open notepad and create a simple program. You can copy the above example as well.</li>
<li>Then save your file with PHP extension such as sample.php. You need to place or Save your ‘sample.php’ file in htdocs folder.</li>
<li>Now you can open any web browser such as chrome and run your PHP file using the localhost URL.</li>
<li>For example, if your file is located: ‘D:\xampp\htdocs\sample.php’, You need to type in browser URL: ‘http://localhost/sample.php’ and hit enter. You PHP program will run and give output such as ‘Hello World’</li>

    <h2>Common problems during first PHP program execution</h2>
    <h2>PHP is not running</h2>
    <p>Sometimes we install PHP/XAMP but do not start it. Make sure that your web server (Apache) is running and PHP is working. If you installed PHP using XAMPP/WAMP, you can hit the localhost URL (http://localhost/) to verify that PHP is running

    <h2>File extension is not proper</h2>
<p>Most of the time we use ‘notepad’ to create our first PHP program. In some Windows, when we save our file in notepad as PHP, it actually save it as .txt extension (text file). If you try to run PHP file, it will not be located and give error 404 (Page not found). Make sure your file is saved as ‘.php’ extensio</p>

<h2>File location or Running URL/Path is not proper</h2>
<p>Make sure you place file in htdocs folder and your are using the right localhost or server URL.

You first PHP program provides base for your learning. Many users simply do not continue, if they are not able to run their first program.</p>
    <div class="container">
    <a href="installation.php" class="btn" id="next">Previous &raquo;</a>
    <a href="comment.php" class="btn" id="next">Next &raquo;</a>
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