
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
    <h1>javascript Basic program</h1>
    <hr><br>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<head>
<title>my javascript</title>
</head>
<body>
<script language="javascript" style="text/javascript">
document.write("Hello World!!");
</script>
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
      <a href="intro.php" class="btn">&laquo; Previous</a>
      <a href="event.php" class="btn" id="next">Next &raquo;</a>
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
