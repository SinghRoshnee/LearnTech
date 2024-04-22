
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
    <h1>CSS Borders
    <hr>
    <p>The CSS Border allows you to specify the border around HTML elements.</p>

<h2>CSS Border Properties</h2>
<P>The following table will list mostly used CSS border properties:</p>
    <table >
    <tr>
      <th>Properties</th>
      <th>syntax & Example</th>
    </tr>

    <tr>
        <td>Border Color</td>
        <td>border-color: blue;</td>
       
    </tr>

    <tr>
        <td>Border Style</td>
        <td>border-style: solid;</td>
       
    </tr>

    <tr>
        <td>Border Width</td>
        <td>border-width: 2px;</td>
        
    </tr>

    <tr>
        <td>Border Shorthand Property</td>
        <td>border: 2px solid blue</td>
    </tr>
</table>
<h2>Border-Color Property</h2>
<p>The border-color attribute allows you to define the color of the box’s border. You can individually change the color of the bottom, left, top and right border of HTML element.

There is shorthand property available to set the color of all four sides in the single attribute border-colour . Shorthand property works in this order: top, right, bottom, and then left.</p>

<h3>Here are different examples to set border color:<br>
border-top-color: green;<br>
border-right-color: blue;<br>
border-bottom-color: black;<br>
border-left-color: red;<br>
border-color: green blue black red;</h3>
<h2>Border-style property</h2>
<P>The border-style attribute allows you to define the style of a box’s border such as solid or dotted. You can individually set the style of the bottom, left, top and right border of HTML element. There is shorthand property available to set the style of all four sides.

Border style property can have different values for different styles. Mostly used border styles are: dotted, solid, double, and dashed. Here are some examples to set border-style:</p>
<h3>Example:<br>
border-top-style: solid;<br>
border-right-style: dotted;<br>
border-bottom-style: double;<br>
border-left-style: dashed;<br>
border-style: solid dotted double dashed;</h3>
<h2>Border-width Property</h2>
<p>The border-width attribute allows you to set the width of CSS borders. You can set the width of each border (bottom, left, top and right) individually. There is shorthand property available to set the width of all four sides of an HTML element.
</p>
<h3>Here are some examples to set CSS border-width:<br>
border-top-width: 2px;<br>
border-right-width: 4px;<br>
border-bottom-width: 2px;<br>
border-left-width: 1px;<br>
border-width: 2px 4px 2px 1px;</h3>
<h2>Border shorthand property</h2>
<p>CSS shorthand property allows you to set border style, width, and color in a single property. Therefore, you do not need to deal with a lot of border properties most of the time.

Here is an example to set CSS border style, width and color using shorthand property: border: 2px solid red;</p>

<h2>Example of HTML Program using CSS Colors</h2>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<head>
</head>
<body>
<p style="border-top-style: dashed; border-left-style:solid; border-right-style: solid; border-bottom-style: dotted;">
This is the example of CSS Border Style property.
</p>
<p style="border-style:solid solid dashed dotted;">
This is the example of CSS Border Style Shorthand property. The border style defines with order: top, right, bottom and then left side of HTML element.
</p>
<p style="border-width:2px; border-style: dotted; border-color: megento;">
This is the example of CSS Border Width, Style and Color properties.
</p>
<p style="border-style:solid;">
This is the example of CSS Border Style Shorthand property. Please note that border style is the only mandatory thing to set border. Border width & color is optional and those values can be taken from browsers default.
</p>
<p style="border:2px solid blue;">
This is the example of CSS Border Shorthand property.
</p>
<p style="border:2px solid green; border-right-color: blue; border-bottom-style: dotted;">
You can override one border property with another or individual border property. Latest defined border property will override existing one.
</p>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div> 
<br><br>
<div class="btn-2">
    <a href="text.php" class="btn">&laquo; Previous</a>
    <a href="position.php" class="btn" id="next">Next &raquo;</a>
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


    

