
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
    <h1>CSS Colors</h1>
    <hr>
    <ul>
        <li>CSS Color can be applied to text or fonts in HTML Tags</li>
        <li>CSS Color can be applied to background areas of HTML Tags & page.</li>
        <li>CSS Color can be applied to borders of various HTML Elements</li>
    </ul>

    <h2> CSS Colors value can be specified in various formats</h2>

    <table >
    <tr>
      <th>Format Name</th>
      <th>Color Value</th>
      <th>CSS Example</th>
    </tr>

    <tr>
        <td>Color Name</td>
        <td>red</td>
        <td>p { color: red }</td>
       
    </tr>

    <tr>
        <td>Hexadecimal (Hex)</td>
        <td>#RRGGBB</td>
        <td>p { color: #00FF00; }</td>
       
    </tr>

    <tr>
        <td>Short Hex Code</td>
        <td>#RGB</td>
        <td>p { color : #F00; }</td>
        
    </tr>

    <tr>
        <td>RGB %</td>
        <td>rgb(rrr%,ggg%,bbb%)</td>
        <td>p { color : rgb(255, 0, 0); }</td>
    </tr>

    <tr>
        <td>RGB Absolute</td>
        <td>rgb(rrr,ggg,bbb)</td>
        <td>p { color : rgb(255,0,0); }</td>
    </tr>
</table>
<h2>Some color codes</h2>
    <table>
        <tr>
        <th>Color Output</th>
        <th>RGB Value</th>
        <th>Hex CodeHex Code</th>
        <th>Short Hex</th>
        <th>Color Name</th>
        </tr>

        <tr>
            <td>Sample</td>
            <td>rgb(0,0,0)</td>
            <td>#00000</td>
            <td>#000</td>
            <td>black</td>
        </tr>

        <tr>
            <td></td>
            <td>rgb(255,255,255)</td>
            <td>#FFFFFF</td>
            <td>#FFF</td>
            <td>white</td>
        </tr>

       
        <tr>
            <td> Sample</td>
            <td>rgb(255,0,0)</td>
            <td>#FF0000</td>
            <td>#F00</td>
            <td>red</td>
        </tr>

        <tr>
            <td> Sample</td>
            <td>rgb(0,255,0)</td>
            <td>#00FF00</td>
            <td>#0F0</td>
            <td>lime</td>
        </tr>

        <tr>
            <td>Sample</td>
            <td>rgb(0,0,255)</td>
            <td>#0000FF</td>
            <td>#00F</td>
            <td>blue</td>
        </tr>

        <tr>
            <td>Sample</td>
            <td>rgb(0,255,255)</td>
            <td>#00FFFF</td>
            <td>#0FF</td>
            <td>cyan</td>
        </tr>

        <tr>
            <td>sample</td>
            <td>rgb(255,255,0)</td>
            <td>#FFFF00</td>
            <td>#FF0</td>
            <td>yellow</td>
        </tr>

        <tr>
            <td>Sample </td>
            <td>rgb(255,0,255)</td>
            <td>#FF00FF</td>
            <td>#F0F</td>
            <td>magenta</td>
        </tr>
    </table>

    <h2>Example of HTML Program using CSS Colors</h2>
    <div class="text-boxes">
      <div class="text-box HTMLBox">
        <div class="topic">HTML Code:</div>
        <textarea id="HTMLBox" readonly>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body  style="background-color:black">
<h1 style="background-color:blue"><br>
Color Names Examples&lt/h1&gt
<h2 style="background-color: red"> Background Color is defined red using color name.
</h2>
<h2 style="color:yellow">This heading color name is set yellow.
</h2>
<h2 style="background-color:rgb(0,128,0)">RGB value of Green Color is (0,128,0).<br> This background Color is set using RGB
</h2>
<h2 style="color:#FFA500">This heading color orange is defined by Hex value #FFA500.
</h2>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div> 
<br><br>
<div class="btn-2">
    <a href="selector.php" class="btn">&laquo; Previous</a>
    <a href="text.php" class="btn" id="next">Next &raquo;</a>
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


    

