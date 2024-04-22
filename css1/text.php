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
    <h1>CSS Text</h1>
   <hr>
    <p>
        Different CSS Text Properties are:
    </p>

    <table>
    <tr>
    <th>Properties</th>
    <th>Example & Syntax</th>
    </tr>

    <tr>
        <td>Text Color</td>
        <td>color: green;</td>
    </tr>

    <tr>
        <td>Text Alignment</td>
        <td>text-align: center;</td>
    </tr>

    <tr>
        <td>Text Decoration</td>
        <td>text-decoration: underline;</td>
     </tr>

    <tr>
        <td>Text Transformation</td>
        <td>text-transform:uppercase;</td>
    </tr>

    <tr>
        <td>Text Indentation</td>
        <td>text-indent: 20px;</td>
    </tr>

    <tr>
        <td>Letter Spacing</td>
        <td>letter-spacing: 3px;</td>
    </tr>

    <tr>
        <td>Word Spacing</td>
        <td>word-spacing: 3px;</td>
    </tr>

    <tr>
        <td>Text Direction</td>
        <td>text-direction: rtl;</td>
    </tr>

    <tr>
        <td>Text Shadow</td>
        <td>text-shadow: 4px 2px 8px red;</td>
    </tr>
</table>

<h2>Text color</h2>
<ul>
    <li>Set Text Color using Color name: color: green;</li>
    <li>Set Text Color using HEX Value: color: #00FF00;</li>
    <li>Set Text Color using RGB Value: color : rgb(255, 0, 0);</li>
</ul>

<h2>Example: CSS Text Color using Inline CSS</h2>

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
<p> Example: CSS Text Color using Inline CSS <br> </p>
<h1&gt style="color: red;">Heading Test<br></h1>
<p style="color: 00FF00;">This is sample paragraph text.<br></p>
<p style="color: rgb(0,0,255);"> This is another paragraph <br> </p>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br><br>

<h2>Text Alignment</h2>
The text-align property is used to set the alignment of a text. A text can be left or right-aligned, centred, or justified.
Text Align justify is used to stretch each line to the left and right corner so that every line has equal width. 
This enhances the reading experience for long paragraphs just like newspapers & books.
</p>
 <div class="text-boxes">
<div class="text-box HTMLalign">
<div class="topic">HTML Code:</div>
<textarea id="HTMLalign" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
<h1 style="text-align: center;"> Heading Center Text</h1>
<p style="text-align: left;">This is sample <br>with left alignment </p>
<p style="text-align: right;">This is sample<br>paragraph with right alignment</p>
<p>This is normal paragraph without any alignment. This is first line. </p>
<p style="text-align: justify;">This is normal <br>with right alignment. </p>
</body>
</html>
</textarea>
<button id="alignButton">Copy Codes</button>
</div>
</div>
<br><br>
<p>Four commonly used text-align properties given below:</p>
<ul>
    <li>Set Text Alignment Left: text-align: left;</li>
    <li>Set Text Alignment Right: text-align: right;</li>
    <li>Set Text Alignment Center: text-align: center;</li>
    <li>Set Text Alignment Justified: text-align: justify;</li>
</ul>


<h2>Text Decoration</h2>
<p>Five commonly used text-align properties given below:</p>
<ul>
    <li>Set Text Decoration as Underline: text-decoration: underline;</li>
    <li>Set Text Decoration as Overline: text-decoration: overline;</li>
    <li>Set Text Decoration as Line-Through: text-decoration: line-through;</li>
    <li>Set Text Decoration as Blink: text-decoration: blink;</li>
    <li>Remove Text Decoration as None: text-decoration: none;</li>
</ul>

<div class="text-boxes">
<div class="text-box HTMLdec">
<div class="topic">HTML Code:</div>
<textarea id="HTMLdec" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
<p style="text-decoration: underline;"> <br>
This is first paragraph. </p><br>
<p style="text-decoration: line-through;"> <br>
This is second paragraph. </p><br>
<p style="text-decoration: blink;">
This is third paragraph. </p><br>
<p style="text-decoration: overline;"><br>
This is fourth paragraph. </p><br>
<p style="text-decoration: none;"><br>
This is normal paragraph.</p><br>
</body>
</html>
</textarea>
<button id="decButton">Copy Codes</button>
</div>
</div>
<br><br>
<h2>Text Transformation</h2>
<p>Four commonly used text-transformation properties are given below:</p>
<ul>
<li>Set Text Transformation as Lower Case: text-transform: lowercase;</li>
<li>Set Text Transformation as Upper Case: text-transform:uppercase;</li>
<li>Set Text Transformation as Capitalize: text-transform: capitalize;</li>
<li>Set Text Transformation as None for no case conversion (default text as it is): text-transform: none;</li>
</ul>

<div class="text-boxes">
<div class="text-box HTMLtrans">
<div class="topic">HTML Code:</div>
<textarea id="HTMLtrans" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
<p style="text-decoration: underline;"><br>
This is first paragraph.</p><br>
<p style="text-decoration: line-through;"><br>
This is second paragraph. </p><br>
<p style="text-decoration: blink;"><br>
This is third paragraph. </p><br>
<p style="text-decoration: overline;"><br>
This is fourth paragraph.</p><br>
<p style="text-decoration: none;"><br>
This is normal paragraph.</p><br>  
</body>
</html>
</textarea>
<button id="transButton">Copy Codes</button>
</div>
</div>
<br><br>
h2>Text Indentation</h2>
<p>CSS Text Indentation property is used to specify the indentation of the first line of a text. 
    Indentation is about setting text start position further.</p>
<div class="text-boxes">
<div class="text-box HTMLind">
<div class="topic">HTML Code:</div>
<textarea id="HTMLind" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
<p> <br>
This is normal paragraph text.<br>
</p><br>
<p style="text-indent: 50px;"><br>
This is example of indentation paragraph<br>
</p>
</body>
</html>
</textarea>
<button id="indButton">Copy Codes</button>
</div>
</div>
<br><br>
<h2>Letter Spacing</h2>
<p>Letter Spacing Property Syntax is: letter-spacing: 3px;</p>
<div class="text-boxes">
<div class="text-box HTMLletter">
<div class="topic">HTML Code:</div>
<textarea id="HTMLletter" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
<p><br>
This is normal paragraph text.
</p><br>
<p style="letter-spacing: 5px;"><br>
This is example of text having 5px letter spacing<br>
</p>
</body>
</html>
</textarea>
<button id="letterButton">Copy Codes</button>
</div>
</div>
<br><br>
<h2>Word Spacing</h2>
<p>Word Spacing Property Syntax is: word-spacing: 3px;</p>

<div class="text-boxes">
<div class="text-box HTMLword">
<div class="topic">HTML Code:</div>
<textarea id="HTMLword" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
<p>
This is normal paragraph text.<br>
</p><br>
<p style="word-spacing: 5px;"><br>
This is example of text having 5px word spacing<br>
</p>
</body>
</html>
</textarea>
<button id="wordButton">Copy Codes</button>
</div>
</div>
<br><br>
<h2>Text Direction</h2>
<p>CSS Text Direction property is used to change the direction of a text. Text Direction
     can be Right to Left (rtl) and Left to Right (ltr).</p>
<ul>
<li>Set Text Direction Left to Right (It is the default text direction): text-direction: ltr;</li>
<li>Set Text Direction Right to Left: text-direction: rtl;</li>
</ul>
<div class="text-boxes">
<div class="text-box HTMLtext">
<div class="topic">HTML Code:</div>
<textarea id="HTMLtext" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
<p>
This is normal paragraph text.<br>
</p><br>
<p style="direction:rtl;"><br>
This text have right to left direction.<br>
</p><br>
<p style="direction:ltr;"><br>
This text will have left to right direction.<br>
</p>
</body>
</html>
</textarea>
<button id="textButton">Copy Codes</button>
</div>
</div>
<br><br>
<div class="container">
    <a href="color.php" class="btn" id="next">Previous &raquo;</a>
    <a href="border.php" class="btn" id="next">Next &raquo;</a>
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
      //html box code 
      let HTMLalign = document.getElementById("HTMLalign");
      let alignButton = document.getElementById("alignButton");

      alignButton.onclick = function () {
      HTMLalign.select();
      document.execCommand("copy");
      alignButton.innerText = "Codes Copied";
      };
      //html box code 
      let HTMLdec = document.getElementById("HTMLdec");
      let decButton = document.getElementById("decButton");

      decButton.onclick = function () {
      HTMLdec.select();
      document.execCommand("copy");
      decButton.innerText = "Codes Copied";
      };
      //html box code 
      let HTMLtrans = document.getElementById("HTMLtrans");
      let transButton = document.getElementById("transButton");

      transButton.onclick = function () {
      HTMLtrans.select();
      document.execCommand("copy");
      transButton.innerText = "Codes Copied";
      };
      //html box code 
      let HTMLind = document.getElementById("HTMLind");
      let indButton = document.getElementById("indButton");

      indButton.onclick = function () {
      HTMLind.select();
      document.execCommand("copy");
      indButton.innerText = "Codes Copied";
      };
      //html box code 
      let HTMLletter = document.getElementById("HTMLletter");
      let letterButton = document.getElementById("letterButton");

      letterButton.onclick = function () {
      HTMLletter.select();
      document.execCommand("copy");
      letterButton.innerText = "Codes Copied";
      };
      //html box code 
      let HTMLword = document.getElementById("HTMLword");
      let wordButton = document.getElementById("wordButton");

      wordButton.onclick = function () {
      HTMLword.select();
      document.execCommand("copy");
      wordButton.innerText = "Codes Copied";
      };
      //html box code 
      let HTMLtext = document.getElementById("HTMLtext");
      let textButton = document.getElementById("textButton");

      textButton.onclick = function () {
      HTMLtext.select();
      document.execCommand("copy");
      textButton.innerText = "Codes Copied";
      };
    </script>
</body>
</html>