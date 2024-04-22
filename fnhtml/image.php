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
    <h1>Html Images</h1>
    <hr><br>
    <p>You can insert HTML images in a web page.

        Images plays an important part to make a web page attractive and beautiful. 
        You can add multiple images with variety of sizes in HTML page. Some of the mostly used image formats and extensions are: .jpg, .png, .jpeg & .gif.
        
        Till now, we have used text along with different formatting options. Now we will see how to add images, graphics and even icons on our web page.</p>
    <h2>Insert Html images:</h2>
    <p>Images can be inserted with the <img> tag in HTML.

        The source (src) attribute specifies the image URL (address). The &ltimg&gt tag is an empty tag, so it does not have any closing tag.
         However you can optionally close it like this: &ltimg&gt /></p>

         <h3>Example to simply include “photo.jpg”: &ltimg src="photo.jpg"&gt</h3>

         <h2>Example using Relative Image URL:</h2>
         <p>Relative URL specify path that is relative to current folder/page. When you have have image in the same or nearby folder, you need not to specify full domain or path of the image. 
            You can only specify image name in source, if image exists in the same folder.</p>
            <h3>Example:&ltimg src="photo.jpg"&gt</h3>

        <p>If image is in any sub-folder, you can mention folder name with slash “/” and then image name. 
            Suppose image “myphoto.jpg” is available in “pictures” folder, We can include it as given in following example:</p>
            <h3>Example:&ltimg src="image/photo.jpg"&gt</h3>
        <h2>Example using Absolute Image URL:</h2>
        <p>Absolute URL refers to the full Image URL/Path for the image location.
             You can include images from external website using absolute URL in source. See example below:</p>
            <h3>Example: &ltimg src="http://google.com/wp-content/uploads/2016/04/photo.png"&gt</h3>
        <h2>Image Alternate Text Attribute</h2>
        <p>The alt attribute is used to specify an alternate text for an image. This text will be displayed if image not found at given location. You can test it by using wrong image URL in source. Use example below:</p>
            <h3>Example: &ltimg src="http://google.com/wp-content/uploads/2016/04/photo.png"&gt</h3>
        <h2>Image Title Attribute</h2>
        <p>The title attribute is used to specify the title of an image. This title is visible when you point your mouse over any image. Use example below:
        </p>
        <h3>Example:&ltimg src="http://google.com/wp-content/uploads/2016/04/photo.png" title="This is photo" &gt</h3>

        <h2>Image Size (Width & Height Attribute)</h2>
        <p>Width and Height attributes are available to specify the image width and height. The values for Height and Width attributes are specified in pixels (px) by default.</p>
        <h3>Example:&ltimg src="www.google.com/photo.jpg" height="300" width="500" &gt
        </h3>

        <h2>Image Border Attribute</h2>
        <p>You can set border around the image using “border” attribute. By default border thickness will be measured in pixels (px) and images will have 0 or no border if not specified.</p>
        <h3>Example:&ltimg src="www.google.com/photo.jpg" border="5px" &gt
        </h3>

        <h2>Image Alignment Attribute</h2>
        <p>You can align image horizontally using “align” attribute of “img” tag. Images are aligned left be default. To test image alignment in better way, you can add some text or paragraph as well.</p>
        <h2>Commonly used align properties given below:</h2>
        <li>Set Image Alignment Left: align="left"</li>
        <li>Set Image Alignment Right: align="right“</li>
        <li>Set Image Alignment Center: align="center"</li>
        <h3>Example:&ltimg src="www.google.com/photo.jpg" align="center" &gt
        </h3>

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
<p>This is a test paragraph.</p>
<img src="image/photo.jpg" alt="Sample Image Text" border="5" align="left" />
<p>This is sample text. We will add image in html page.</p>
<img src="photo.jpg" height="300" width="400" title="Sample title" />
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
    <img src="image/img.PNG" class="out">
</div>
<!----Button---->
    <div class="btn-2">
    <a href="links.php" class="btn">&laquo; Previous</a>
    <a href="list.php" class="btn" id="next">Next &raquo;</a>
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