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
    <h1>Html Head</h1>
    <hr><br>
    <p>HTML Head element mainly contains metadata (data about data) about the HTML Page.<br>
    You can place the HTML page title, scripts, styles, and other meta information in the head element.
    This information is helpful for search engines as well as provides additional data for HTML page.</p><br>
    <h2>Type of data in HTML Head element:</h2>
    <li>Title: HTML Head element contains title of the page that is displayed in browser title bar.
    <li>Scripts: All client-side scripts such as JavaScript often included in this Head section
    <li>Styles: Internal & External Style rules also included inside Head element
    <li>Meta: There are few meta tags such as description & keywords about HTML pages are included inside the head section. 
    These are useful for Search Engines.<br>
    <p>The above data placed in the head is never directly visible in the main browser window. Some of the head metadata is helpful for search engines like Google for better document understanding. While styles are used to extend page formatting. 
    Scripts are internally used to enhance HTML web pages functionality & event handling.</p>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<!DOCTYPE html>
<html>
<head>
<title> HTML Head Tutorial - TutorialsClass.com </title>
<meta charset="UTF-8">
<meta name="description" content="This website provides free online tutorials">
<meta name="keywords" content="HTML, CSS, PHP, SEO">
<meta name="author" content="TutorialsClass.com">
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
alert("Simple JavaScript Alert");
</script>
</head>    
<body>
This is sample content.
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
    <img src="image/head.PNG" class="out">
    </div>
            <p>When you run above example, you can see same title in Browser title bar as defined in title tag in head. 
                Meta keywords, description & author information is used by search engines.</p>
    <div class="btn-2">
    <a href="basic.php" class="btn">&laquo; Previous</a>
    <a href="element.php" class="btn" id="next">Next &raquo;</a>
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