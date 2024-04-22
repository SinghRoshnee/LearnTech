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
    <h1>Html Styles</h1>
    <hr>
    <p>HTML is primarily used to defines the structure of the web page While Cascaded style sheets (CSS) are a language that is used for the presentation of HTML Page.

        Using CSS in HTML, we can change colors, fonts and other kinds of formatting on a web page. There are many different ways to include CSS in an HTML page. We will see a simple way to apply CSS Rules in the HTML Document.</p>

    <h2>Syntax:</h2>
    <p>You can use style attributes to apply CSS in any HTML page.</p>
    <h3>style="property:value;"</h3>
    <h2>HTML Background Color</h2>
<p>We can set background colors for various HTML Elements.

The background-color property is used to define the background color.</p>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<body style="background-color:lightblue;">
<h1>This is a heading</h1>
<p>This is a paragraph.</p>
</body>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br>
<br>
  <div class="container">       
<h2>Output:</h2>
<img src="image/background.PNG" class="out">
</div>

<h2>HTML Text Color</h2>
<p>We can change the color of the text using color properties in any HTML element.</p>
<div class="text-boxes">
<div class="text-box HTMLtext">
<div class="topic">HTML Code:</div>
<textarea id="HTMLtext" readonly>
<h1 style="color:black;">This is a heading</h1>
<p style="color:red;">This is a paragraph.</p>
</textarea>
<button id="textButton">Copy Codes</button>
</div>
</div>
<br>
<br>
<div class="container">             
<h2>Output:</h2>
<img src="image/textcolor.PNG" class="out">
</div>
 
<h2>HTML Fonts</h2>
<p>The font-family property is used to defines the font types for an HTML elements.</p>
<div class="text-boxes">
<div class="text-box HTMLfonts">
<div class="topic">HTML Code:</div>
<textarea id="HTMLfonts" readonly>
<h1 style="font-family:arial;">This is a heading</h1>
<p style="font-family:Times New Roman;">This is a paragraph.</p>
</textarea>
<button id="fontsButton">Copy Codes</button>
</div>
</div>
<br>
<br>
<div class="container">        
<h2>Output:</h2>
<img src="image/fontfamily.PNG" class="out">
</div>

<h2>HTML Font-size</h2>
<p>The font-size property defines the text size for an HTML element.</p>
<div class="text-boxes">
<div class="text-box HTMLsize">
<div class="topic">HTML Code:</div>
<textarea id="HTMLsize" readonly>
<h1 style="font-size:15px;">This is a heading</h1>
<p style="font-size:20px;">This is a paragraph.</p>
</textarea>
<button id="sizeButton">Copy Codes</button>
</div>
</div>
<br>
<br>
<div class="container">  
<h2>Output:</h2>
<img src="image/fontsize.PNG" class="out">
</div>

<h2>HTML Text Alignment</h2>
<p>The text-align property is used to set horizontal text alignment for an HTML element.</p>
<div class="text-boxes">
<div class="text-box HTMLalign">
<div class="topic">HTML Code:</div>
<textarea id="HTMLalign" readonly>
<h1 style="text-align:right;">right heading</h1>
<p style="text-align:center;">This is a paragraph.</p>
</textarea>
<button id="alignButton">Copy Codes</button>
</div>
</div>
<br>
<br>
    <div class="container">  
<h2>Output:</h2>
<img src="image/align.PNG" class="out">
</div>
    <div class="btn-2">
    <a href="paragraphs.php" class="btn">&laquo; Previous</a>
    <a href="formatting.php" class="btn" id="next">Next &raquo;</a>
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

        // HTML  text BOx JS Code
        let HTMLtext = document.getElementById("HTMLtext");
        let textButton = document.getElementById("textButton");
  
        textButton.onclick = function () {
          HTMLtext.select();
          document.execCommand("copy");
          textButton.innerText = "Codes Copied";
        };

        // HTML  fonts BOx JS Code
        let HTMLfonts = document.getElementById("HTMLfonts");
        let fontsButton = document.getElementById("fontsButton");
  
        fontsButton.onclick = function () {
          HTMLfonts.select();
          document.execCommand("copy");
          fontsButton.innerText = "Codes Copied";
        };

        // HTML  fonts-size BOx JS Code
        let HTMLsize = document.getElementById("HTMLsize");
        let sizeButton = document.getElementById("sizeButton");
  
        sizeButton.onclick = function () {
          HTMLsize.select();
          document.execCommand("copy");
          sizeButton.innerText = "Codes Copied";
        };

        // HTML  alignments BOx JS Code
        let HTMLalign = document.getElementById("HTMLalign");
        let alignButton = document.getElementById("alignButton");
  
        alignButton.onclick = function () {
          HTMLalign.select();
          document.execCommand("copy");
          alignButton.innerText = "Codes Copied";
        };
  
      </script>
</body>
</html>