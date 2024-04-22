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
    <h1>Html Element & Tags</h1>
    <hr><br>
    <p>A Website page is made up of multiple HTML elements and HTML element is made of HTML tags.</p>
    <h2>HTML Tags</h2>
    <p>HTML tags are like labels or keywords to define web page. These tags tells the browser about the format or structure of the content.<br>
        Most of the tags comes in pair. One is called opening tag and other is closing tag. Tags begin with a less-than sign “&lt" and end with a greater-than sign "&gt“. For example: &ltp&gt tags is used to create paragraph content. While &lth1&gt tags are used to create headings.
    <h2>HTML Element</h2>
        <p>An element in HTML generally consists of an opening tag, content, and a closing tag. We can see the HTML element as an individual component of web-page.
        <br><br>
        <b>Start/Opening Tag:</b><br>
        HTML elements starts with opening tags. For example: &ltp&gt&ltb&gt&lth1&gt etc.
        <br><br>
        <b>End/Closing Tag:</b><br>
        HTML elements ends with closing tags. For example: &lt/p&gt&lt/b&gt&lt/h1&gt etc.
        <br><br>
        <b>Content:</b><br>
        We place content between the opening and closing tags. For example: &ltp&gt This is sample content.&lt/p&gt</p>
        <h2>HTML Empty Elements</h2>
        <p>HTML elements with no content are called empty elements. There are many empty elements that do not have closing tag.
            <br>
            For example: &ltbr&gt is an empty element without a closing tag. It is used to create line break.
            <br><br>
            It is good to close every tags. Empty elements can be “closed” in the same Opening tag. For example: &ltbr /&gt
            <br><br>
            HTML5 does not require empty elements to be closed. But if you want strict validation, 
            or if you need to make your document readable by XML parser, you must close all HTML elements properly.
            </p>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<!DOCTYPE html>
<html>
<body>
<h1>My First Heading</h1>
<p>My sample paragraph content.</p>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br>
<br>
<div class="container">
<h2>Output:</h2>
    <img src="image/head.PNG">
</div>
    <div class="btn-2">
    <a href="head.php" class="btn">&laquo; Previous</a>
    <a href="attributes.php" class="btn" id="next">Next &raquo;</a>
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
  
      </script>
</body>
</html>