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
    <div class="content"><br><br><br>
        <h1>Introduction</h1>
        <hr>
        <h2>What is CSS?</h2>
        <ul>
            <li>CSS stands for “Cascading Style Sheet”.</li>
            <li>Cascading Style Sheets (CSS) is a language used to specify design & formatting of web pages. In other words, CSS is used to control the style of a web document</li>
            <li>CSS works with HTML tags.</li>
        </ul>
    
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
body{
background-color: blue;}
p {
font-family: "Times New Roman";
font-size: 22px;
}
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br><br>
<div class="container">
<a href="../theorycss.php" class="btn">&laquo; Previous</a>
<a href="inclusion.php" class="btn" id="next">Next &raquo;</a>
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
  </script>
</body>
</html>