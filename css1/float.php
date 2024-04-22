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
</head>
<body>
<?php
   include 'nav.htm';
   ?>
    <div class="content"><br><br><br><br>
    <h1>CSS Float and Clear Property</h1>
    <hr>
    <p>CSS Float property is used for positioning on web pages. This is used to float or move HTML element to the right or left side of its container.

The Float property allows us to position block-level elements side-by-side instead of on top of each other. As HTML elements are placed along the left or right side of its container, this allows text to wrap around it.
</p>
<h2>Important Key Points:</h2>

<li>Absolutely positioned HTML elements ignore the float property!
<li>After float elements, the next elements will flow around it. To avoid this, clear float using a clear property.
    <p>
CSS Float property is one of the difficult or confusing concepts of all positioning properties. Its behaviour can be unexpected for beginners. Because float not only applies to the current HTML element but also influences its surrounding elements.

You will be able to understand ‘float’ better once we will work with an example..</p>
<h2>CSS Float Property Types:</h2>
<p>CSS float property can have the following values:</p>
<li>left – floats element to the left of its container
<li>right- floats element to the right of its container
<li>none – The element does not float. This is the default value
<li>inherit – It will inherit the float direction from its parent
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<head>
</head>
<body>
<p>In this example, the image will float to the right in the paragraph, and the text in the paragraph will wrap around the image.</p>

<hr />

<div>
<img src="https://i2.wp.com/tutorialsclass.com/wp-content/uploads/2018/03/tc-sidebanner-v2.png?w=100" style="float:right; margin-left:15px;">

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae molestie nibh, a molestie arcu. Duis placerat mauris quis felis fermentum iaculis. Fusce vestibulum, arcu sit amet varius consequat, ante leo congue felis, eu blandit tellus diam vel tortor. Praesent eget diam nec metus lobortis vestibulum ut ut felis. Donec sollicitudin velit nec consectetur porttitor. Etiam metus magna, tempus et luctus ut, suscipit vel dolor. Nulla consequat urna et finibus mattis. Morbi eget ex nisi. Vestibulum ipsum ipsum, accumsan nec molestie ac, sagittis quis massa. Sed auctor tellus at aliquet venenatis.

Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu ligula sollicitudin, vestibulum justo in, cursus dui. Etiam vitae ante tristique, commodo erat et, bibendum leo. Praesent mollis efficitur felis non elementum. Fusce ut fringilla ex. Nunc quis lorem nec nisl maximus finibus. Praesent facilisis nunc in risus hendrerit vulputate. Vivamus diam arcu, tempus nec nibh tristique, pretium fringilla ligula. Etiam molestie mi vitae metus dignissim pretium. Cras tincidunt dolor ut lacus bibendum volutpat.
</div>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div> 
<br><br>
<div class="btn-2">
    <a href="position.php" class="btn">&laquo; Previous</a>
    <a href="../frontend.php" class="btn" id="next">Next &raquo;</a>
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


    

