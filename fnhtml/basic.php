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
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Copy Code To Clipboard | CodingLab</title>
    <link rel="stylesheet" href="css1.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <?php
   include 'nav.htm';
   ?>

    <div class="content"><br><br><br><br>
    <h1>Html Page Structure</h1>
    <hr>
    <h2>basic HTML page structure mainly consists of 4 HTML tags:</h2>
    <li>&lt!DOCTYPE html&gt: This is the Document Type Declaration that informs the web browser about the type and version of HTML used on a web page.
    <li>&lthtml&gt : A Web page begins & end with HTML tag
    <li>&lthead&gt: It includes the page title, scripts, styles & meta-information about website
    <li>&ltbody&gt : It will contain the main content of the web page.

       <h2> Document Type Declaration:</h2>
        <p>A document type declaration (DTD), &lt!DOCTYPE html&gt, is an instruction to the browser about the type of document. 
        The DTD specifies the rules for the markup language so that the browsers render the content correctly. It is always good to add a declaration to your HTML documents for proper standards.
        </p>
        <h2>&ltHtml&gt</h2>
        <p>HTML starting tag <html> indicates the browser that it is an
        HTML document begins and HTML closing tag </html> tells the browser that the HTML document is completed.
        </p>
        <h2>&lt Header&gt</h2>
        <p>The header section does not output text inside the browser, it is used to specify information about the web page. 
        It is used to display the page title, scripts, and style for the web page.
        </p>
        <h2>&ltBody&gt</h2>
        <p>This is the main part of the HTML document. The content which we want to display on the browser will be written inside body tags.
        The HTML body contains different types of content and tags. For example, we have used h1 heading and p paragraph tags inside body.</p>
        
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
<h1>hello</h1>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br>
<br>
    <div class="container">
    <h2>output:</h2>
    <img src="image/basic.PNG">
    </div>
    <!---------Button--------------->
    <div class="btn-2">
      <a href="intro.php" class="btn">&laquo; Previous</a>
      <a href="head.php" class="btn" id="next">Next &raquo;</a>
      </div>

     <!-----------About Us---------->
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
