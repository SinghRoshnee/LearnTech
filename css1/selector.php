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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1.css">
</head>
<body>
<?php
   include 'nav.htm';
   ?>
    <div class="content"><br><br><br><br>
    <h1>CSS Selectors</h1>
    <hr>
    <p>Type of CSS Selectors</p>
    <b>CSS Selectors can select HTML elements based on their tag name, class, id, and attribute.</b>
    <ul>
    <li>CSS Element Selector</li>
    <li>CSS Id Selector</li>
    <li>CSS Class Selector</li>
    <li>CSS Universal Selector</li>
    <li>CSS Group Selector</li>
    </ul><br>

<h2>CSS Element/Tag Selectors</h2>
    The element selector finds elements based on the tag name. Sometimes we call it Tag or Type selector as well.<br> 
    This selector is used to apply some style formatting to particular tag types.
</p>
<p>Example of Element Selector:<br>
Let us check a simple example to change text color under paragraph tag. 
    Here we will use “p” as an Element selector</p>
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
<style>
p{color: red;}
</style>
<p> This is sample text</p>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br><br>
    <h2>CSS Id Selector</h2>
<p>
The Id Selector is used to select elements based on the id attribute of an HTML element. 
Id Selectors works in two-step:
</p>
<ul>
    <li>First Assign an id to HTML tag using id attribute:<br>
        Example: &ltp  id="blue-text"&gt</li><br>

    <li>To apply a style with id selector, write a hash (#) character, followed by the id of the element.<br>
        #blue-text { color : blue; }</li>
    </ul
<p>In any HTML Page, id should be uniquely assigned to one element only. For example: if you have assigned id “blue-text” to any tag,<br>
    do not use it with any other tag.An Id name cannot start with a number!</p>

 <p>Example of Id Selector:<br>
    Let us check a simple example to change text color under paragraph &ltp&gt tag. 
        We will use “#blue-text” as an Id selector to apply the CSS Rule:
</p>

<div class="text-boxes">
<div class="text-box HTMLid">
<div class="topic">HTML Code:</div>
<textarea id="HTMLid" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<style>
#blue-text{color: blue;}
</style>
<p id="blue-text"> This is an example of paragraph text.
</p>
</body>
</html>
</textarea>
<button id="idButton">Copy Codes</button>
</div>
</div>
<br><br>


<h2>CSS class Selector</h2>
    <ul>
<li>A class can be assigned to any HTML tag using class attribute: Example:<br>
&ltp class="green-text"&gt</li><br>
<li>Class Selector use dot (.) or period character followed by the class name to define CSS Rules. Example:<br>
    .green-text { color : green; }</li>
        </ul
   <p>Example of Class Selector:</p>
<div class="text-boxes">
<div class="text-box HTMLclass">
<div class="topic">HTML Code:</div>
<textarea id="HTMLclass" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<style>
.green-text{color: green;}
</style>
<p class="green-text">
This is an example of paragraph text.</p>
</body>
</html>
</textarea>
<button id="classButton">Copy Codes</button>
</div>
</div>
<br><br>
<h2>Universal Selector </h2>
The CSS Universal selector is used as a selection of all elements. It is defined by an asterisk character ( * ).</p>

<p>the following example, Universal Selector will select all HTML elements and 
    apply text color blue and font-size 30px including paragraph (p) and heading tag (h1).<br><br>
    Example of Universal Selector

</p>
<div class="text-boxes">
<div class="text-box HTMLuni">
<div class="topic">HTML Code:</div>
<textarea id="HTMLuni" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<style>
* {color: blue;font-size: 30px;}
</style>
</head>
<body>
<p> Sample text.</p>
<h1> This is Heading Text </h1>
</body>
</html>
</textarea>
 <button id="uniButton">Copy Codes</button>
</div>
</div>
<br><br>
<h2>Css Group Selector </h2>
<p>The grouping selector is used to combine all the elements that need the same style rules. 
You can apply a style to multiple selectors by separating the selectors with a comma. Example: p, h1 { color : blue; }<br>
Suppose we want to apply blue color to the text under paragraph (p) & heading (h1) tags.
 We can group them as given in the following example:
</p>
<div class="text-boxes">
<div class="text-box HTMLgroup">
<div class="topic">HTML Code:</div>
<textarea id="HTMLgroup" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
p, h1{color: blue;}
</style>
</head>
<body>
<p> Sample text.</p>
<h1> This is Heading Text </h1>
</body>
</html>
</textarea>
<button id="groupButton">Copy Codes</button>
</div>
</div>
<br>
<br>

<h2>Complete Example using Different Selectors:</h2>

<div class="text-boxes">
<div class="text-box HTMLex">
<div class="topic">HTML Code:</div>
<textarea id="HTMLex" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
body{background-color: green;}
*{text-decoration: underline; }
h1, p{font-size: 30px;color: skyblue;}
.class10{color: yellow;font-size: 12px;}
#id20{color: red;font-size: 30px;}
</style>
</head> 
<body>
<h1> Hello World! </h1>
<h2 class="class10">Small Heading Text </h2>
<p id="id20">  This sample text is defined under pragraph <br></p>
</body>
</html>
</textarea>
<button id="exButton">Copy Codes</button>
</div>
</div>
<br>
<br>

<div class="btn-2">
    <a href="syntax.php" class="btn">&laquo; Previous</a>
    <a href="color.php" class="btn" id="next">Next &raquo;</a>
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
      let HTMLid = document.getElementById("HTMLid");
      let idButton = document.getElementById("idButton");

      idButton.onclick = function () {
        HTMLid.select();
        document.execCommand("copy");
        idButton.innerText = "Codes Copied";
      };
      // HTML BOx JS Code
      let HTMLclass= document.getElementById("HTMLclass");
      let classButton = document.getElementById("classButton");

      classButton.onclick = function () {
        HTMLclass.select();
        document.execCommand("copy");
        classButton.innerText = "Codes Copied";
      };
      // HTML BOx JS Code
      let HTMLuni= document.getElementById("HTMLuni");
      let uniButton = document.getElementById("uniButton");

      uniButton.onclick = function () {
        HTMLuni.select();
        document.execCommand("copy");
        uniButton.innerText = "Codes Copied";
      };
      // HTML BOx JS Code
      let HTMLgroup= document.getElementById("HTMLgroup");
      let groupButton = document.getElementById("groupButton");

      groupButton.onclick = function () {
        HTMLgroup.select();
        document.execCommand("copy");
        groupButton.innerText = "Codes Copied";
      };
      // HTML BOx JS Code
      let HTMLex= document.getElementById("HTMLex");
      let exButton = document.getElementById("exButton");

      exButton.onclick = function () {
        HTMLex.select();
        document.execCommand("copy");
        exButton.innerText = "Codes Copied";
      };
    </script>

    
</body>
</html>