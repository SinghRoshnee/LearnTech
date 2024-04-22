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
</head>
<body>
<?php
   include 'nav.htm';
   ?>
    <div class="content"><br><br><br><br>
    <h1>CSS Position Property</h1>
    <hr>
    <p>A web page has a number of HTML elements and sometimes different elements need to align a different kind of positioning for better page layout.

The CSS position property is used to specify the type of positioning for HTML Elements.</p>
<h2>Type of CSS position properties</h2>
<p>You can use four different positions for elements.
</p>
<li>Static
<li>Relative
<li>Fixed
<li>Absolute
    <p>
We will learn about each of them with example.</p>
<h2>CSS Position Static</h2>
<p>This is the default position of HTML elements. A static position element according to the normal flow of the HTML page. There is no use of CSS top, bottom, left, and right properties if the HTML element has a static position.</p>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<head>
</head>
<body>
<p>Next div is example of static html element</p>

<div style="position: static; border: 2px solid blue;">
This HTML div element has static position;
</div>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div> 
<br><br>
<h2>CSS Position Relative</h2>
<p>HTML Element with Relative Position is positioned relative to its normal position. By default relative positioning works similar to static unless positioning you add some extra properties. You can use the CSS top, bottom, left, and right properties to move the element from the adjacent element accordingly.</p>
<div class="text-boxes">
<div class="text-box HTMLrel">
<div class="topic">HTML Code:</div>
<textarea id="HTMLrel" readonly>
<html>
<head>
</head>
<body>
<p>Next div is example of relative html element</p>

<div style="position: relative; border: 2px solid blue; left: 20px; bottom: 20px;">
This div element has position relative;
</div>
</body>
</html>
</textarea>
<button id="relButton">Copy Codes</button>
</div>
</div> 
<br><br>
<h2>CSS Position Fixed</h2>
<p>A CSS fixed element is positioned relative to the viewport or browser window. Fixed positioned element always stays in the same place even if you scroll the page.

You can use CSS top, bottom, left, and right properties to fix element somewhere in the browser.</p>
<div class="text-boxes">
<div class="text-box HTMLfix">
<div class="topic">HTML Code:</div>
<textarea id="HTMLfix" readonly>
<html>
<head>
</head>
<body>
<p>Next div is example of relative html element</p>

<div style="position: relative; border: 2px solid blue; left: 20px; bottom: 20px;">
This div element has position relative;
</div>
</body>
</html>
</textarea>
<button id="fixButton">Copy Codes</button>
</div>
</div> 
<br><br>
<h2>CSS Position Absolute</h2>
<p>A CSS absolute element is positioned relative to the first parent element. If there is no parent element, position will be related to the page. Therefore, absolute positioned element works like fixed but its position is related to nearest positioned parent (ancestor) instead of relative to the viewport window.

You can use CSS top, bottom, left, and right properties to fix element related to the parent element.</p>
<div class="text-boxes">
<div class="text-box HTMLabs">
<div class="topic">HTML Code:</div>
<textarea id="HTMLabs" readonly>
<html>
<head>
</head>
<body>
<div style="position: relative; border: 2px solid blue; left: 20px; width: 400px; height: 200px;">
This is parent element of next element.
<div style="position: absolute; border: 2px solid blue; bottom: 20px; right: 0px;">
This HTML div element has fixed position;
</div>
</body>
</html>
</textarea>
<button id="absButton">Copy Codes</button>
</div>
</div> 
<br><br>
<div class="btn-2">
    <a href="border.php" class="btn">&laquo; Previous</a>
    <a href="float.php" class="btn" id="next">Next &raquo;</a>
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
       let HTMLrel = document.getElementById("HTMLrel");
      let relButton = document.getElementById("relButton");

      relButton.onclick = function () {
        HTMLrel.select();
        document.execCommand("copy");
        relButton.innerText = "Codes Copied";
      };
      // HTML BOx JS Code
      let HTMLfix = document.getElementById("HTMLfix");
      let relButton = document.getElementById("relButton");

      fixButton.onclick = function () {
        HTMLfix.select();
        document.execCommand("copy");
        fixButton.innerText = "Codes Copied";
      };
      // HTML BOx JS Code
      let HTMLabs = document.getElementById("HTMLabs");
      let absButton = document.getElementById("absButton");

      absButton.onclick = function () {
        HTMLabs.select();
        document.execCommand("copy");
        absButton.innerText = "Codes Copied";
      };

    </script>