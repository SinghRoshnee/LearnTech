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
    <h1>Html Attributes</h1>
    <hr><br>
    <p>HTML Attributes are part of the HTML Tags & elements. These attributes specify some additional style or special information about the HTML tags.
        <br>
        Most of the time attributes are specified as pairs. For example: <b>attribute="value"</b>.</p>
        <!------Syntax------>
    <h2>Syntax Of HTML Attributes</h2>
    <p>Attributes are always specified within a start tag. 
        First, we need to specify the name of the attribute and then, we assign a value to it (name=”value”)</p>
        <h3>Example: &lth1 title="My Title"&gt My Heading &lt/h1&gt tag.</h3>
        <!------Title Attribute------>
    <h2>Title Attribute</h2>
    <p>Each HTML Tag allows some specific attributes. Some HTML Attributes are used by many different elements. For example, Title attribute can be used in almost every HTML element.
        HTML Title attribute is used to display some titles to users when they mouse over that element.<br>
        <h3>For example: Example: &lth1 title="My Title"&gt My Heading &lt/h1&gt tag.</h3>
        In above example, when user will take his mouse to "My Heading" text a Title (like tooltip) "My Title" will be visible to user.</p>
        <!--------Align Attribute-->
    <h2>The Align Attribute</h2>
    <p>HTML align attribute can be used in paragraphs, images and few other tags for horizontal alignment. This align attribute can have 3 main values (left, right and centre). 
        By using those values you can align a paragraph content into left, right or centre in the browser window.</p>
        

<!----------src Attribute--------->
    <h2>The src Attribute</h2>
    <p>The &ltimg&gt tag is used to embed an image in an HTML page. The src attribute specifies the path to the image to be displayed:</p>
    <h3>&ltimg src="learntech.jpg"&gt</h3>

<!----Html Width And Height Attribute---------->
        <h2>Html Width And Height Attribute</h2>
            <p>You can set HTML images height & width using these HTML attributes. Images are defined using HTML images are defined with the
                tag. There is another attribute called “src” in this tag. It is used to specify the path of the image.</p>
                <h3>Example: &ltimg src="image/sign.jpg" width="200" height="300"&gt</h3>
<!-------------The Style Attribute--------->
        <h2>HTML Style Attribute</h2>
        <p>HTML style attribute is one of the most used attributes to specify the style rules for different HTML elements. 
            Using style attribute, we can set border, color, font size, background color, and many other styles.</p>
            <h3>Example: &ltp style="color:red;"&gt  This is Tutorials Class&lt/p&gt</h3>
<!--------href Attribute------->
        <h2>The href Attribute</h2>
        <p>The &lta&gt tag defines a hyperlink. The href attribute specifies the URL of the page the link goes to:</p> 
        <h3>&lta href="https://google.com"&gt Visit Google &lt/a&gt</h3> 
<!--------The lang Attribute------->
        <h2>The lang Attribute</h2>
        <p>You should always include the lang attribute inside the &lthtml&gt tag, to declare the language of the Web page. 
            This is meant to assist search engines and browsers.</p>
        <h3>Example: &lthtml lang="en-US"&gt &lt/h1&gt tag.</h3>
<!---------------Example------------>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<!DOCTYPE html>
<html>
<body>
<h1 title="My Title"> My Heading </h1>
<p align="center">This content is aligned center</p>
<p style="color:red;"> This is Tutorials Class's red content</p>
<img src="photo.jpg" width="300" height="200" alt="Alternate Text" title="Tutorials" />
<a href="http://google.com"> Go to Tutorials Class Website </a>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br>
<br>
  <div class="container">
    <h2>output:</h2>
    <img src="image/attribute.PNG">
    </div>
    <!---------Button--------------->
    <div class="btn-2">
    <a href="element.php" class="btn">&laquo; Previous</a>
    <a href="headings.php" class="btn" id="next">Next &raquo;</a>
    </div>
    
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