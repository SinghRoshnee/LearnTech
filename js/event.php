
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
    <h1>javascript Event</h1>
    <hr><br>
    <h2>DOM (Document Object Model):</h2>
<p>The Document Object Model (DOM) is a programming API for HTML and XML documents. It defines the logical structure of documents and the way a document is accessed and manipulated.
Source: https://www.w3.org/TR/WD-DOM/introduction.html</p>

<h2>JavaScript Events:</h2>
<p>Events are a part of the Document Object Model (DOM). Every HTML page contains a set of events associated with tags/elements. JavaScript has the ability to deal with those events.
Here are few examples of events:</p>
<li>When the user clicks a button
<li>Whenever the webpage loads
<li>Whenever pressing any key
<li>closing a window
<li>Mouse Over HTML elements
  <p>
There are many more events. When these events occur in HTML page, JavaScript can interact with them and perform some action.

Using a simple example, we will call a JavaScript function when the user clicks on the button.</p>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<head>
<title>my javascript</title>
<script type="text/javascript">
function mytest() {
alert("JavaScript Click Test")
}
</script>
</head>
<body>
<p>Click the following button and see result</p>
<form>
<input type="button" onclick="mytest()" value="Click Test" />
</form>
</body>
</html
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br>
 <br>
<div class="container">
h2>output:</h2>
<img src="image/basic.PNG">
</div>
    <!---------Button--------------->
    <div class="btn-2">
      <a href="basic.php" class="btn">&laquo; Previous</a>
      <a href="function.php" class="btn" id="next">Next &raquo;</a>
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
