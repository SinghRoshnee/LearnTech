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
    <h1>Html Formatting</h1>
    <hr><br>
    <p>HTML Formatting tags are used to format the appearance of the text on your web page.

        When you use MS Word processor, you format text as bold, italic, or underlined. Similarly, HTML Formatting tags helps you to format text in different ways.
    </p>

    <h2>HTML Formatting Tags List:</h2>
    <table border="5px">
    <tr>
        <th>Formatting tags</th>
        <th>Syntax & Example</th>
    </tr>
    <tr>
        <td>Bold & Strong Tag</td>
        <td>&ltb&gt Sample Text &lt/b&gt &ltstrong&gt Sample Text &lt/strong&gt</td>
    </tr>
    <tr>
        <td>Italic & Emphasized Tag</td>
        <td>&lti&gt Sample Text &lt/i&gt &ltem&gt Sample Text &lt/em&gt</td>
    </tr>
    <tr>
        <td>Small Tag</td>
        <td>&ltsmall&gt Sample Text &lt/small&gt </td>
    </tr>
    <tr>
        <td>Big Tag</td>
        <td>&ltbig&gt Sample Text &lt/big&gt </td>
    </tr>
    <tr>
        <td>Marked (Highlighted) Tag</td>
        <td>&ltmark&gt Sample Text &lt/mark&gt </td>
    </tr>
    <tr>
        <td>Deleted (Removed) Tag</td>
        <td>&ltdel&gt Sample Text &lt/del&gt </td>
    </tr>
    <tr>
        <td>Inserted (Added) Tag</td>
        <td>&ltins&gt Sample Text &lt/ins&gt </td>
    </tr>
    <tr>
        <td>Subscript Tag</td>
        <td>&ltsub&gt Sample Text &lt/sub&gt </td>
    </tr>
    <tr>
        <td>Superscript Tag</td>
        <td>&ltsup&gt Sample Text &lt/sup&gt </td>
    </tr>
    </table>


    <!--------bold & strong-->
    <h2>HTML Bold & Strong Text Formatting</h2>
    <p>
        <b>HTML Bold Tag:</b> The HTML &ltb&gt element defines bold text, without any extra importance.
        <b>HTML Strong Tag:</b> The HTML &ltstrong&gt element defines strong text, with added semantic “strong” importance.
    </p>
    
         <!--------italic & emphasized-->
    <h2>HTML Italic and Emphasized Text Formatting</h2>
    <p>
        <b>HTML Italic Tag:</b> The HTML &lti&gt element defines italic text, without any extra importance.
        <b>HTML Emphasised Tag:</b>The HTML &ltem&gt element defines emphasised text, with added semantic importance.
    </p>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<!DOCTYPE html>
<html>
<head>
<title>Sample</title>
</head>
<body>
sample of Italic Text FormattingXHTML
Text is normal.
<i>Text is italic</i>
 1
2
<i>Text is normal/i>
Text is emphasized
</body>
</html>     
</textarea>
    <button id="HTMLButton">Copy Codes</button>
    </div>
    </div>
    <br>
    <br>
            <h2>Output:</h2>
            <img src="image/italicem.PNG" class="out">
        </div>
<!--------small---------->
    <h2>HTML Small Text Formatting</h2>
    <p>
        The HTML &ltsmall&gt element defines small text..
        </p>
<div class="text-boxes">
<div class="text-box TextFormat">
<div class="topic">HTML Code:</div>
<textarea id="TextFormat" readonly>
<!DOCTYPE html>
<html>
<head>
<title>Sample</title>
</head>
<body>
This is normal text
<small>This is Small Text</small>           
</body>
</html>                  
</textarea>
<button id="TextButton">Copy Codes</button>
</div>
</div>
<br>
<br>  
<div class="container">    
<h2>Output:</h2>
<img src="image/small.PNG" class="out">
</div>
<!--------big---------->
    <h2>HTML Big Text Formatting</h2>
    <p>
        The HTML &ltbig&gt element defines big text..
        </p>
<div class="text-boxes">
<div class="text-box BigBox">
<div class="topic">HTML Code:</div>
<textarea id="BigBox" readonly>
This is normal text
<big>This is Big Text</big>                                       
</textarea>
<button id="BigButton">Copy Codes</button>
</div>
</div>
<br>
<br>  
<div class="container">           
<h2>Output:</h2>
<img src="image/big.PNG" class="out">
</div>
<!--------mark---------->
<h2>HTML marked Formatting</h2>
<p>
    The HTML &ltmarked&gt element defines marked text. All content placed inside this tag will be marked (highlighted).
</p>
<div class="text-boxes">
<div class="text-box MarkBox">
<div class="topic">HTML Code:</div>
<textarea id="MarkBox" readonly>
This is normal text
<mark>This is Marked or Highlighted Text</mark>         
</textarea>
<button id="MarkButton">Copy Codes</button>
</div>
</div>
<br>
<br>   
<div class="container">
<h2>Output:</h2>
<img src="image/mark.PNG" class="out">
</div>        
<!--------delete---------->
<h2>HTML Deleted Text Formatting</h2>
<p>
    The HTML &ltdel&gt element defines deleted (removed) text.
</p>
<div class="text-boxes">
<div class="text-box DeleteBox">
<div class="topic">HTML Code:</div>
<textarea id="DeleteBox" readonly>
This is normal text
<del>This is Deleted or Removed Text</del>         
</textarea>
    <button id="DeleteButton">Copy Codes</button>
    </div>
    </div>
    <br>
    <br>   
<div class="container">
<h2>Output:</h2>
<img src="image/del.PNG" class="out">
</div>        
<!--------inserted---------->
<h2>HTML Inserted Text Formatting</h2>
<p>
    The HTML &ltins&gt element defines inserted (added) text.
</p>
<div class="text-boxes">
<div class="text-box InsBox">
<div class="topic">HTML Code:</div>
<textarea id="InsBox" readonly>
This is normal text
<ins>This is Inserted or Added Text</ins>      
</textarea>
    <button id="InsButton">Copy Codes</button>
    </div>
    </div>
    <br>
    <br>   
<div class="container">    
<h2>Output:</h2>
<img src="image/ins.PNG" class="out">
</div>        
<!--------subscript---------->
<h2>HTML Subscript Text Formatting</h2>
<p>
    The HTML &ltsub&gt element defines inserted (added) text.
</p>
<div class="text-boxes">
<div class="text-box SubBox">
<div class="topic">HTML Code:</div>
<textarea id="SubBox" readonly>
This is normal but this is text
This is <sub> sub-scripted Text</sub>    
</textarea>
    <button id="SubButton">Copy Codes</button>
    </div>
    </div>
    <br>
    <br>   
<div class="container">     
    <h2>Output:</h2>
    <img src="image/sub.PNG" class="out">
    </div>        
<!--------superscript---------->
<h2>HTML Superscript Text Formatting</h2>
<p>
    The HTML &ltsub&gt element defines inserted (added) text.
</p>
<div class="text-boxes">
<div class="text-box SupBox">
<div class="topic">HTML Code:</div>
<textarea id="SupBox" readonly>
This is normal but this is text
This is <sup> super-scripted Text</sup>     
</textarea>
    <button id="SupButton">Copy Codes</button>
    </div>
    </div>
    <br>
    <br>   
<div class="container">    
        <h2>Output:</h2>
        <img src="image/sup.PNG" class="out">
    </div>        

    <div class="btn-2">
    <a href="style.php" class="btn">&laquo; Previous</a>
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

        // Text BOx JS Code
        let TextFormat = document.getElementById("TextFormat");
        let TextButton = document.getElementById("TextButton");
  
        TextButton.onclick = function () {
        TextFormat.select();
        document.execCommand("copy");
        TextButton.innerText = "Codes Copied";
        };

        // Big BOx JS Code
        let BigBox = document.getElementById("BigBox");
        let BigButton = document.getElementById("BigButton");
  
        BigButton.onclick = function () {
        BigBox.select();
        document.execCommand("copy");
        BigButton.innerText = "Codes Copied";
        };

         // Marked BOx JS Code
         let MarkBox = document.getElementById("MarkBox");
        let MarkButton = document.getElementById("MarkButton");
  
        MarkButton.onclick = function () {
        MarkBox.select();
        document.execCommand("copy");
        MarkButton.innerText = "Codes Copied";
        };

        // Deleted BOx JS Code
        let DeleteBox = document.getElementById("DeleteBox");
        let DeleteButton = document.getElementById("DeleteButton");
  
        DeleteButton.onclick = function () {
        DeleteBox.select();
        document.execCommand("copy");
        DeleteButton.innerText = "Codes Copied";
        };

        // Inserted BOx JS Code
        let InsBox = document.getElementById("InsBox");
        let InsButton = document.getElementById("InsButton");
  
        InsButton.onclick = function () {
        InsBox.select();
        document.execCommand("copy");
        InsButton.innerText = "Codes Copied";
        };

        // Subscript BOx JS Code
        let SubBox = document.getElementById("SubBox");
        let SubButton = document.getElementById("SubButton");
  
        SubButton.onclick = function () {
        SubBox.select();
        document.execCommand("copy");
        SubButton.innerText = "Codes Copied";
        };

        // Superscript BOx JS Code
        let SupBox = document.getElementById("SupBox");
        let SupButton = document.getElementById("SupButton");
  
        SupButton.onclick = function () {
        SupBox.select();
        document.execCommand("copy");
        SupButton.innerText = "Codes Copied";
        };

      </script>
</body>
</html>
