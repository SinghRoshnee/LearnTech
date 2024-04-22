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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/theory.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
   include 'nav.htm';
   ?>  
   <div class="container">
    <div class="heading"><br><br>
        <h1>Html</h1>
        <p>
                HTML Tutorial for beginners to learn HTML online for free.<br>
                HTML is the most popular language to create web pages. Using HTML along with CSS, you can design beautiful layouts for website.<br>
                Here, you will learn HTML basic to advanced concepts step by step.<br>
                HTML Tutorial covers HTML basic syntax, page structure, text formatting, heading, paragraph, comments, fonts, marquees, images, links, list, table, form, frame and other tags.<br> 
                Each chapter will provide you with an easy example, program, and exercise.<br>
            </p>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1>Introduction</h1>
            </div>
            <div class="card-body">
                <p>Html is hyper text markup languages.
                Hypertext is more than simple text.Html</p>
                <a href="fnhtml/intro.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Page structure</h1>
            </div>
            <div class="card-body">
                <p>The basic Html page structure mainly consists of 4 Html tags.Html is hyper text markup languages.
               </p>
                <a href="fnhtml/basic.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Html Head</h1>
            </div>
            <div class="card-body">
                <p>Html Head element mainly contains metadata about the Html page.Html is hyper text markup languages.
                </p>
                     <a href="fnhtml/head.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Element & tags</h1>
            </div>
            <div class="card-body">
                <p>A website page is made up of multiple Html element and Html elements is made of Html.
               </p>
                     <a href="fnhtml/element.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Attributes</h1>
            </div>
            <div class="card-body">
                <p>Html Attributes are part of thr html tags & elements.Html is hyper text markup languages.
                </p>
                     <a href="fnhtml/attributes.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Headings</h1>
            </div>
            <div class="card-body">
                <p>Html headings are titles or subtitles that you want to display on a webpage.
                </p>
                     <a href="fnhtml/headings.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>paragraph</h1>
            </div>
            <div class="card-body">
                <p>Html paragraph tags are used to define the text paragraph.Html is hyper text markup languages.</p>
                     <a href="fnhtml/paragraphs.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Styles</h1>
            </div>
            <div class="card-body">
                <p>The html style attribute is used to add styles to an element such as color,font & more</p>
                     <a href="fnhtml/style.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Formatting</h1>
            </div>
            <div class="card-body">
                <p>Html Formatting tags are used to format the appearance og the text on your web page.</p>
                     <a href="fnhtml/formatting.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Comments</h1>
            </div>
            <div class="card-body">
                <p>Html comment tags are used to insert some useful comments in the Html documents.</p>
                     <a href="fnhtml/comment.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Links</h1>
            </div>
            <div class="card-body">
                <p>Links are used to connect multiple Html pages. Html Links are hyperlink</p>
                     <a href="fnhtml/links.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Images</h1>
            </div>
            <div class="card-body">
                <p>Images can improve a design and appearance of web page.image can embed image in page</p>
                     <a href="fnhtml/image.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Lists</h1>
            </div>
            <div class="card-body">
                <p>Html List tags are used to specify information in the form of list.list can contain one or more list</p>
                     <a href="fnhtml/list.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Iframes</h1>
            </div>
            <div class="card-body">
                <p>An html Iframes is used to include and display one web page within another web page.</p>
                     <a href="fnhtml/iframe.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Forms</h1>
            </div>
            <div class="card-body">
                <p>Html Forms are used to collect some data from users on a webpage.forms store data</p>
                     <a href="fnhtml/forms.php" class="btn">Read more</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Tables</h1>
            </div>
            <div class="card-body">
                <p>Html tables are used to organise information into rows and columns. tables is Formatting of data</p>
                     <a href="fnhtml/table.php" class="btn">Read more</a>
            </div>
        </div>
    </div>
   </div>
   <a href="frontend.php" class="next round next2">&#8249;</a>
    <a href="quiz/quiz.php" class="next round next1">&#8250;</a>

    <!-------About  Us-->

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
          
            Made with <i class="fa fa-heart-o"></i> by RoshniRajput & SwatiPatel
    </section>

</body>
</html>
