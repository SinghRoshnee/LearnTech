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
    <link rel="stylesheet" href="intro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<?php
   include 'nav.htm';
   ?>
    <div class="content"><br><br><br><br>
    <h1>Html Iframes</h1>
    <hr><br>
    <p>An HTML Iframe is used to include and display one web page within another web page.

        Iframe is also called Inline Frame. Using HTML Iframes, you can embed one or more external HTML documents or web pages into your web page.</p>
            <h2>Iframe Synatx:</h2>
            <h3>&ltiframe src="http://google.com/"&gt &lt/iframe&gt</h3>

            <p>HTML <iframe>tag is used to create Iframe in webpage. The src attribute specifies the webpage address which you want to display in frame.</p>
            <h2>Iframe–Attributes List</h2>
                <p>There are many Iframe Tag Attributes available to use for different purposes. We have set Iframe source using The src attribute in previous example. You can also use attributes to set Iframe height and width as well. See more attributes in following table:</p>
                <table border="5px">
                    <tr>
                        <th>Attribute</th>
                        <th>Description</th>
                        <th>Syntax & Example</th>
                    </tr>
                    <tr>
                        <td>Source (src)</td>
                        <td>used to give the webpage URL that need to load in the frame.</td>
                        <td>src="page.html"</td>
                    </tr>
                    <tr>
                        <td>Height</td>
                        <td>used to set height of the frame.</td>
                        <td>height="400"</td>
                    </tr>
                    <tr>
                        <td>Width</td>
                        <td>used to set width of the frame</td>
                        <td>width="500"</td>
                    </tr>
                    <tr>
                        <td>No Resize</td>
                        <td>used to enable or disable resizing of frame by users</td>
                        <td>noresize="noresize"</td>
                    </tr>
                    <tr>
                        <td>Frame Border</td>
                        <td>used to define the border of the frame</td>
                        <td>frameborder="1"</td>
                    </tr>
                    <tr>
                        <td>Scrolling</td>
                        <td>used to enable or disable scrolling</td>
                        <td>scrolling="yes"</td>
                    </tr>
                </table>
            <h2>Iframe – Height and Width</h2>
            <p>Iframe height and width attributes are used to specify the size of the iframe. By default, the value of these attribute are specified in pixels, but you can specify in percentage as well.</p>

   
        
        <h2>Iframe Border</h2>
        <p>You can set border width using frameborder attribute. iframe always has a border by default, but we can remove it by setting frameborder="0"

            You can set and remove border using CSS attribute as well. We can read about that in CSS border tutorial.</p>

        <h2>Iframe as a Target for a Link</h2>
        <p>A HTML iframe can be used as the target frame for a html link. This works in two simple steps:
        <ol type="1">
            <li>Assign a name to the Iframe using name attribute.
            <li>Create an HTML Link using anchor tag and give above Iframe name to this link’s target attribute.</p>
        </ol>
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
                 
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br>
<br> 

<!---------Button----------->
    <div class="btn-2">
    <a href="list.php" class="btn">&laquo; Previous</a>
    <a href="forms.php" class="btn" id="next">Next &raquo;</a>
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