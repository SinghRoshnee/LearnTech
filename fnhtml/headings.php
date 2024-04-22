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
    <h1>Html Headings</h1>
    <hr><br>
    <p>HTML specifies six levels of headings. All heading element has its own font size and spacing before and after the heading.
        Headings are defined with the &lth1&gt to &lth6&gt tags. 
        &lth1&gt defines the most important (highest level) heading. &lth6&gt defines the least important heading.HTML specifies six levels of headings. All heading element has its own font size and spacing before and after the heading.
        Headings are defined with the &lth1&gt to &lth6&gt tags.
        &lth1&gt defines the most important (highest level) heading. &lth6&gt defines the least important heading..</p>
        <h2>Why HTML Headings Are Important?</h2>
        <li>Heading tags helps users to pay attention to the main headings.
        <li>Search engines (such as Google) also use your headings to understand the important components of your website.
        <li>We should use HTML headings to define headings content only. It should not be used just to make text big or bold.
    <!----------Example--------->
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<!DOCTYPE html>
<html>
<head>
<title>HTML Headings Example</title>
</head>
<body>
<h1>First Heading</h1>
This is simple content
<h2>Second Heading</h2>
This is simple content
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
        <img src="image/headings.PNG" class="out">
      </div>    
<!---------Button----------->
    <div class="btn-2">
    <a href="attributes.php" class="btn">&laquo; Previous</a>
    <a href="paragraphs.php" class="btn" id="next">Next &raquo;</a>
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