
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

<div class="content"><br><br><br><br>
<h1>CSS Syntax</h1>
<hr>
<h2>Basic Syntax</h2>
<p>Each CSS rule made up of Selector part and Declaration part. Declaration part is a combination of CSS Property and Value.<br>
To write a CSS Rule, we start with a "selector", and then have a bracket {} containing a sequence of declarations.</p>
<b> Syntax is defined as:</b><br>
<b>selector { property : value; }
Description of CSS Syntax</b>
<h2>selector</h2>
    <p>We place HTML tag name here. You can specify which tag you want to style, for example:<br>
         "body", "h1", "div", and "p".</p>

<h2>Property</h2>
<p>A property is a type of attribute (like a feature) of HTML tag. An example of HTML property are: <br>
    color, font-size & border.</p>

<h2>Values</h2>
<p>Each property has a set of value. We can specify that value here.<br> 
    For example, “color” attribute value will be color name: "red" or "green".</p>
<b>CSS Syntax Example:</b><br>
    <b>p{color: red;}</b>

        <b>Complete CSS Example in HTML Program:</b>
        <p>You can define Different CSS rules for multiple tags in the same documents.
            Each CSS Rule declaration block can contain one or more declarations separated by semicolons.</p>
    
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
<style>
body{background-color: green;}
p{
color: yellow;
font-size: 25px;
}
</style>
</head>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br><br>
<h2>Output:</h2>
<img src="image/basic.PNG" class="out">
</div>
<br><br>
<p> In the above example, we have created a CSS rule that defines all text inside the paragraph tag will 
 have font-size 25px and text color will be red. There is another CSS Rule that will set the 
 <br>HTML Page body’s background color green.
We have used a paragraph (p) element as a selector to select an HTML Element.
 This is called Element Selector. There are many other CSS Selectors available such as class Selector and id Selector.</p>

 <div class="btn-2">
    <a href="inclusion.php" class="btn">&laquo; Previous</a>
    <a href="selector.php" class="btn" id="next">Next &raquo;</a>
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