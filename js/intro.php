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
  </head>
  <body>
  <?php
   include 'nav.htm';
   ?>
    <div class="content"><br><br><br><br>
    <h1>Javascript Introduction</h1>
    <hr>
    <p>JavaScript is a lightweight programming language that is used to make web pages interactive. It is an interpreted programming language that supports object-oriented properties as well.

      JavaScript is one of the three core technologies used in the majority of the websites along with HTML & CSS.</p>

       <h2>History javascript</h2>
        <p>JavaScript was created by Brendan Eich in 1995 when he was working on Netscape (a popular browser at that time). Initially, it was called as LiveScript and was later renamed as JavaScript.

          JavaScript and Java are totally different languages. Java is a full-featured programming language whereas JavaScript is mostly used as scripting (client side) language. The syntax of JavaScript is mostly taken from the C language.
        </p>
        <h2>Features javascript</h2>
        <li>JavaScript can interact with Web pages and able to change HTML content and attributes
<li>javaScript can interact with CSS and manipulate styles.
<li>JavaScript is used to validate user data in web browser.
<li>JavaScript can works with user-initiated events
<li>JavaScript is open & support cross-platform
<li>JavaScript is capable of performing oops based functionality like many other programming languages

<h2>
  Scope of javascript
</h2>
<p>Most of the time JavaScript works as a client-side programming because it can easily interact with clients (web browsers). However, nowadays it is being used to perform server-side tasks as well.

  There are many JavaScript-based libraries are popular today. They help integrating common Web elements like Menu, Gallery, Slider, Popup etc into websites. Currently, jQuery is the most popular JavaScript library based on JavaScript.
  
  JavaScript frameworks are also trending. They help you create faster & efficient applications using standardized code patterns. AngularJS (Google) & React (by Facebook) are two of them.
  
  As per W3Techs statistics, JavaScript is used by more than 94% of all the websites.
  
  So what are you waiting for? Tutorials Class provides online JavaScript tutorials, where you can learn JavaScript with examples.
  
  Go to Next Chapter & Start Learning.</p>
        
    <!---------Button--------------->
    <div class="btn-2">
      <a href="theoryjs.php" class="btn">&laquo; Previous</a>
      <a href="basic.php" class="btn" id="next">Next &raquo;</a>
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
