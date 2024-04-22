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
    <h1>Html Links</h1>
    <hr><br>
    <p>Links are used to connect multiple HTML pages.
        A Website is a collection of web pages and these web pages are connected with each other using HTML links. 
        User can visit one page to another HTML web page by clicking on the links.</p>
    <h2>More information link:</h2>
    <li>HTML links are also called Hyperlinks.</li>
    <li>Link can be in the form of text as well as images or other media</li>
    <li>You can provide a link to any section of the same page, any other page within a website or any external website as well.</li>

    <h2>Html Links Syntax</h2>
    <p>We can create HTML links using anchor <a> tag.
        For example: &lta href="https://www.google.com"> Google </a>
        The href attribute is used to specify link address of the web page. The text between the anchor tags “Google” is visible to the user. 
        User can click on this and it will take you to the another page.</p>

<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<body>        
<a href="http://google.com" target="_blank">Go to google</a>        
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
<img src="image/link.JPG">
</div>

        <h2>Types of link Url</h2>
        <p><b>Absolute URLs:</b> These are full address to the destination page/link.</p>
            <h3>Example of Absolute URL is: &lta href="http://www.Google.com/page1.html"&gt Page 1 Link &lt/a&gt</h3>
            </h3>
            <p><b>Relative URLs:</b> A relative URL links to a file in relation to the present directory.
            
            For example, if you want to create a link on “page1.html” to “page2.html” and both files in same folder, you can simply provide file name in href. It is called the relative URL.</p>
            <h3>Example of Relative URL: &lta href="page2.html"&gt Page 2 Link &lt/a&gt </h3>
        <h2>Html links Target</h2>
        <p>We can set HTML Links Target to open into the new window or same window. The target attribute is used with one of the following values:
        </p>
        <h3>Example of HTML Target Attribute: &lta href="page2.html" target="_top"&gt Link with New Window &lt/a&gt </h3>
        <h2>Html Target Attribute</h2>
        <table>
            <tr>
                <th>Target Value</th>
                <th>Purpose</th>
            </tr>
            <tr>
                <td>_blank</td>
                <td>It opens linked page in a new window or tab</td>
            </tr>
            <tr>
                <td>_self</td>
                <td>It opens linked page in the same window/tab in which we clicked on link. (This is default link target)</td>
            </tr>
            <tr>
                <td>_parent	</td>
                <td>It opens linked page in the parent frame</td>
            </tr>
            <tr>
                <td>_top</td>
                <td>It opens linked page in the full body of the window</td>
            </tr>
            <tr>
                <td>framename</td>
                <td>It opens linked page in a named frame</td>
            </tr>
            </table>

            <h2>Complete Example of HTML Links</h2>
            <p>Let us create two files “page1.html” & “page2.html”.
             We will create a link between these two files using relative URL. We will also test a link using absolute url as well.</p>
    
<div class="text-boxes">
<div class="text-box HTMLpage1">
<div class="topic">HTML Code:</div>
<textarea id="HTMLpage1" readonly>
<html>
<body>       
<a href="page2.html" >Example of Relative Link</a>       
<a href="http://google.com" target="_blank">Example of Absolute Link</a>       
</body>
</html>           
</textarea>
<button id="page1Button">Copy Codes</button>
</div>
</div>
<br>
<br>
<div class="container">
<h2>Output:</h2>
<img src="image/page1.png">
</div>

<div class="text-boxes">
<div class="text-box HTMLpage2">
<div class="topic">HTML Code:</div>
<textarea id="HTMLpage2" readonly>
<html>
<body>
<a href="page1.html" >Example of Relative Link</a>
<a href="http://google.com" target="_blank">Example of Absolute Link</a>
</body>
</html>           
</textarea>
    <button id="page2Button">Copy Codes</button>
    </div>
    </div>
    <br>
    <br>
    <div class="container">
    <h2>Output:</h2>
    <img src="image/page1.png">
    </div>
    


<!----Button---->
    <div class="btn-2">
    <a href="comment.php" class="btn">&laquo; Previous</a>
    <a href="image.php" class="btn" id="next">Next &raquo;</a>
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

        // HTML page1 box JS Code
        let HTMLpage1 = document.getElementById("HTMLpage1");
        let page1Button = document.getElementById("page1Button");
  
        page1Button.onclick = function () {
          HTMLpage1.select();
          document.execCommand("copy");
          page1Button.innerText = "Codes Copied";
        };
        
        // HTML BOx JS Code
        let HTMLpage2 = document.getElementById("HTMLpage2");
        let page2Button = document.getElementById("page2Button");
  
        page2Button.onclick = function () {
          HTMLpage2.select();
          document.execCommand("copy");
          page2Button.innerText = "Codes Copied";
        };
      </script>
</body>
</html>