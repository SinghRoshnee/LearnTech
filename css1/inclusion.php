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
    <h1> CSS Inclusion:</h1>
    <hr>
    <h2>There are four methods to include CSS in your HTML Document.</h2>
    <li> Inline CSS </li>
    <li> Embedded/Internal CSS </li>
    <li>External CSS </li>
    <li>Imported CSS</li><br><br>

   <h2>Inline Css</h2>
<p>We can define Inline CSS rules using the ‘style’ attribute of the HTML element. 
            Inline style rules are<br> applied to only HTML element where it is defined.<br>
We can specify multiple CSS rules separated by semicolons. 
These rules are placed using the ‘style’ attribute having property name and value.</p>

<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<p style="color:red; text-align:center;">
You are Learning CSS Inclusion at Tutorials Class.<br> This is an Inline CSS Example.
</p>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
  <br><br><br> 
    <p>In the above example, we have applied Inline CSS to paragraph element. 
    We have applied two style rules</p>
  <ol><li>text color has been specified to red </li>
        <li>text alignment has been specified as a center. </li>
     </ol>
   

 <h2>Internal Css</h2>
    <p>Internal CSS Example<br>
     The Internal CSS is written in the HEAD element usingtag.
    This is an Internal CSS Example<br>
     You are Learning CSS Inclusion at Tutorials Class</p>
<div class="text-boxes">
<div class="text-box HTMLinternal">
<div class="topic">HTML Code:</div>
<textarea id="HTMLinternal" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<p style="color:red; text-align:center;">
You are Learning CSS Inclusion at Tutorials Class.<br> This is an Inline CSS Example.
</p>
</body>
</html>
</textarea>
<button id="internalButton">Copy Codes</button>
</div>
</div>
<br><br>
    <h2>External Css</h2>
<p> In External CSS, we use <link> element to include an external style sheet file in the HTML document.
First of all, we write style rules in a separate file with a .css extension. <br>
Then we include this CSS file inside the head element of HTML Document.
This is the most common method CSS Inclusion method to the HTML document. Using this method, 
we can write CSS for multiple web pages into the single file and include the same CSS file on every page.</p>

<div class="text-boxes">
<div class="text-box HTMLexternal">
<div class="topic">HTML Code:</div>
<textarea id="HTMLexternal" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
<p>
This is a External CSS Example. Welcome to Tutorials Class.
</p>
</body>
</html>
</textarea>
<button id="externalButton">Copy Codes</button>
</div>
</div>
<br><br><br>
<p>In the above example, External CSS is included in head tags. External CSS rules<br> will be applied to 
    HTML elements of this web page as well as other web pages where external CSS will be included.</p>


<h2>Imported Css</h2>
<p> We can import one stylesheet into another stylesheet using @import rule.<br>
We can use it in two ways. One way is to use within the header of your HTML document and another way is to include in CSS file.<br><br>
Imported CSS Example inside HTML Head<br>
We can include CSS file inside a style tag using @import rule. However, this is not very useful.</p>


<div class="text-boxes">
<div class="text-box HTMLimport">
<div class="topic">HTML Code:</div>
<textarea id="HTMLimport" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>hello</h1>
</body>
</html>
</textarea>
<button id="importButton">Copy Codes</button>
</div>
</div>
<br><br>

<div class="btn-2">
    <a href="intro.php" class="btn">&laquo; Previous</a>
    <a href="syntax.php" class="btn" id="next">Next &raquo;</a>
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
      // HTML BOx JS Code
      let HTMLinternal = document.getElementById("HTMLinternal");
      let internalButton = document.getElementById("internalButton");

      internalButton.onclick = function () {
        HTMLinternal.select();
        document.execCommand("copy");
        internalButton.innerText = "Codes Copied";
      };
      // HTML BOx JS Code
      let HTMLexternal = document.getElementById("HTMLexternal");
      let externalButton = document.getElementById("externalButton");

      externalButton.onclick = function () {
        HTMLexternal.select();
        document.execCommand("copy");
        externalButton.innerText = "Codes Copied";
      };
      // HTML BOx JS Code
      let HTMLimport = document.getElementById("HTMLimport");
      let importButton = document.getElementById("importButton");

      importButton.onclick = function () {
        HTMLimport.select();
        document.execCommand("copy");
        importButton.innerText = "Codes Copied";
      };
    </script>
    
