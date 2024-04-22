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
    <h1>Html Paragraph</h1>
    <hr><br>
    <p>HTML paragraph tags are used to define the text paragraphs.

        When we create any document, we divide text content into multiple paragraphs. Similarly, HTML documents can be divided into HTML paragraphs.
        
        HTML &ltp&gt the tag defines a paragraph. This Paragraph tag automatically adds some margin (white space) before and after a paragraph.</p>
<h3>Example:&ltp&gtThis is a sample paragraph.&lt/p&gt</h3> 
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<head>  
</head>
<body>
<p>This is a first paragraph. You can add any kind of text here. </p>
<p>This is a second paragraph. This is some sample text. </p>
<p>This is another paragraph. You can add multiple lines of text in this paragraph. </p>
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
<img src="image/paragraph.PNG" class="out">
</div>

    <!-------button---------->
    <div class="btn-2">
    <a href="headings.php" class="btn">&laquo; Previous</a>
    <a href="style.php" class="btn" id="next">Next &raquo;</a>
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