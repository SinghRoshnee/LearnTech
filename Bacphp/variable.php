

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
    <h1>PHP Variables</h1>
    <hr>
<p>A PHP Variable is simply an element or data item that may take on more than one value during the run-time of a program.

In other words, a PHP variable store a value that can change, depending on conditions or on information passed to the program.</p>

    <h2>PHP Variables Rules:</h2>
<li>In PHP, variable names are case-sensitive.</li>
<li>Variables in PHP are represented by a dollar sign followed by the name of the variable.</li>
<li>A valid variable name starts with a letter or underscores, followed by any number of letters, numbers, or underscores.</li>
<li>After declaring a variable it can be reused throughout the code.</li>
<li>A variable does not need to be declared before adding a value to it.</li>
<li>PHP automatically converts the variable to the correct data type, depending on its value.</li>
<li>The assignment operator (=) used to assign value to a variable.</li>


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
    $content = "Hello PHP!";
    $a = 10;
    $_msg = 'Hello again';
    echo $content;
    echo "<br>".$a;
     echo "<br>".$_msg;
    ?></body>
        </html>
      </textarea><br>
        <button id="HTMLButton">Copy Codes</button>
      </div>
    </div><br><br>

    <div class="container">
    <h2>Output:</h2>
    <img src="image/capture1.PNG" class="out">
    </div>


    <div class="container">
    <a href="comment" class="btn" id="next">Previous &raquo;</a>
    <a href="operators.php" class="btn" id="next">Next &raquo;</a>
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