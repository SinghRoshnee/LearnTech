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
    <h1>Html List</h1>
    <hr><br>
    <p>HTML List Tags are used to specify information in the form of list.

        HTML Lists are very useful to group related information together. Often List items looks well-structured and they are easy to read for users. 
        A list can contain one or more list elements.</p>
    <h2>Html list type</h2>
    <p>HTML offers three type of lists.</p>
    <h2>Unorder list</h2>
    <p>Unordered lists are used to list set of items when they have no special order or sequence. It is also called as bulleted list.

        Undordered list is created using HTML &ltul&gt tag. Each item in the list start with the &ltli&gt tag&lt/p&gt</p>
        <h3>Example:&ltul&gt<br>
            &ltli&gtRed&lt/li&gt<br>
            &ltli&gtGreen&lt/li&gt<br>
          &lt/ul&gt</h3>
          <h2>HTML Unordered List Types</h2>
          <table border="5px">
            <tr>
                <th>List Style Type</th>
                <th>Description</th>
                <th>Example & Syntax</th>
            </tr>
            <tr>
                <td>disc</td>
                <td>Starts a list using discs type bullets (default)</td>
                <td>&ltul type="disc"&gt</td>
            </tr>
            <tr>
                <td>circle</td>
                <td>Starts a list using circle type bullets</td>
                <td>&ltul type="circle"&gt</td>
            </tr>
            <tr>
                <td>square</td>
                <td>Starts a list using square type bullets </td>
                <td>&ltul type="square"&gt</td>
            </tr>
            <tr>
                <td>none</td>
                <td>Starts a list without bullets </td>
                <td>&ltul type="none"&gt</td>
            </tr>
            <tr>
                <td>Marked (Highlighted) Tag</td>
                <td>&ltmark&gt Sample Text &lt/mark&gt </td>
            </tr>
          </table>

    <!----------Example--------->
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<title> Unordered List Example Test - Tutorials Class </title>
<body>
<h2>Unordered List of Fruits with Disc Bullets</h2>
<ul type="disc">
<li>Apple</li>
<li>Banana</li>
<li>Mango</li>
</ul>
<h2>Unordered List of Colors with Circle Bullets</h2>
<ul type="circle">
<li>Red</li>
<li>Green</li>
<li>Blue</li>
</ul>
<h2>Unordered List of Fruits with Square Bullets</h2>
<ul type="square">
<li>Apple</li>
<li>Banana</li>
<li>Mango</li>
</ul>
<h2>Unordered List of Colors without bullets</h2>
<ul type="none">
<li>Black</li>
<li>Green</li>
<li>Blue</li>
</ul>
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
        <img src="image/ul.PNG" class="out">
        </div>

    <h2>ordered list</h2>
        <p>Ordered list is used to list related items in a numbered or other specific order. This is useful when you want to show counts of items in some way.

            Ordered list is created using HTML &ltol&gt tag. Each item in the list start with the &ltli&gt tag</p>
                    <h3>Example:&ltol&gt<br>
                    &ltli&gtRed&lt/li&gt<br>
                    &ltli&gtGreen&lt/li&gt<br>
                  &lt/ol&gt</h3>
                  <h2>HTML ordered List Types</h2>
                  <table border="5px">
                    <tr>
                        <th>List Style Type</th>
                        <th>Description</th>
                        <th>Example & Syntax</th>
                    </tr>
                    <tr>
                        <td>Numbers</td>
                        <td>Starts a list using numbers (default)</td>
                        <td>&ltol type="1"&gt</td>
                    </tr>
                    <tr>
                        <td>Uppercase letters</td>
                        <td>Starts a list using uppercase letters</td>
                        <td>&ltol type="A"&gt</td>
                    </tr>
                    <tr>
                        <td>Lowercase letter</td>
                        <td>Starts a list using lowercase letters </td>
                        <td>&ltol type="a"&gt</td>
                    </tr>
                    <tr>
                        <td>Uppercase roman numbers</td>
                        <td>Starts a list using uppercase roman numbers </td>
                        <td>&ltol type="I"&gt</td>
                       
                    </tr>
                    <tr>
                        <td>lowercase roman numbers</td>
                        <td> Starts a list using lowercase roman numbers </td>
                        <td>&ltol type="i"&gt</td>
                    </tr>
                  </table>
        
<!----------Example--------->
<div class="text-boxes">
<div class="text-box HTMLol">
<div class="topic">HTML Code:</div>
<textarea id="HTMLol" readonly>
<html>
<title> Ordered List Example - Tutorials Class </title>
<body>            
<h2>Ordered List of Fruits with Numbers </h2>
<ol type="1">
<li>Banana</li>
<li>Apple</li>
<li>Grapes</li>
</ol>            
<h2>Ordered List of Fruits with Uppercase letters</h2>
<ol type="A">
<li>Apple</li>
<li>Banana</li>
<li>Mango</li>
</ol>            
<h2>Ordered List of Colors with Lowercase letters</h2>
<ol type="a">
<li>Red</li>
<li>Green</li>
<li>Blue</li>
</ol>            
<h2>Ordered List of Colors with Uppercase roman numbers</h2>
<ol type="I">
<li>Red</li>
<li>Green</li>
<li>Blue</li>
</ol>            
<h2>Ordered List of Colors with Lowercase roman numbers</h2>
<ol type="i">
<li>Red</li>
<li>Green</li>
<li>Blue</li>
</ol>            
</body>
</html>
</textarea>
      <button id="olButton">Copy Codes</button>
    </div>
  </div>
  <br>
  <br>                
                    
<div class="container">
<h2>Output:</h2>
<img src="image/ol.PNG" class="out">
</div>
<h2>Definition List</h2>
<p>Definition list is used to list items along with a description of each item.
<div class="text-boxes">
<div class="text-box HTMLdd">
<div class="topic">HTML Code:</div>
<textarea id="HTMLdd" readonly>
<dl>
<dt>Computer</dt>
<dd>Computer is an electronic device that is designed to work with Information.</dd>
<dt>HTML</dt>
<dd>HyperText Markup Language (HTML) is the standard markup language for creating web pages and web applications.</dd>
</dl>                             
</textarea>
<button id="ddButton">Copy Codes</button>
</div>
</div>
<br>
<br>

<div class="container">
<h2>Output:</h2>
<img src="image/dl.PNG" class="out">
</div>
                            
<!---------Button----------->
    <div class="btn-2">
    <a href="image.php" class="btn">&laquo; Previous</a>
    <a href="iframe.php" class="btn" id="next">Next &raquo;</a>
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

        // HTML ol BOx JS Code
        let HTMLol = document.getElementById("HTMLol");
        let olButton = document.getElementById("olButton");
  
        olButton.onclick = function () {
          HTMLol.select();
          document.execCommand("copy");
          olButton.innerText = "Codes Copied";
        };
        
        // HTML ol BOx JS Code
        let HTMLdd = document.getElementById("HTMLdd");
        let ddButton = document.getElementById("ddButton");
  
        ddButton.onclick = function () {
          HTMLdd.select();
          document.execCommand("copy");
          ddButton.innerText = "Codes Copied";
        };
        
        
  
      </script>
</body>
</html>