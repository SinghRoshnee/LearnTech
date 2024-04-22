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
    <link rel="stylesheet" href="css/frontend.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
   include 'nav.htm';
   ?>
        <div class="wraper"><br><br><br><br>
            <h1>Frontend Development</h1>
            <div class="container">
                <div class="box">
                    <img src="image/ht.png">
                    
                <div class="accordion">
                   <hr>
                    <div class="cont">
                        <div class="label"> Html </div>
                       <div class="content">
                        <li><a href="fnhtml/intro.htm">Introduction</a></li><br>
                        <li><a href="fnhtml/basic.htm">Page Structure</a></li><br>
                        <li><a href="fnhtml/head.htm">Html Head</a></li><br>
                        <li><a href="fnhtml/element.htm">Html Elements and Tags</a></li><br>
                        <li><a href="fnhtml/attribute.htm">Html Attribute</a></li><br>
                        <li><a href="fnhtml/headings.htm">Html Heading</a></li><br>
                        <li><a href="fnhtml/paragraphs.htm">Html Paragraph</a></li><br>
                        <li><a href="fnhtml/style.htm">Html Style</a></li><br>
                        <li><a href="fnhtm/formttings.htm">Html Formatting</a></li><br>
                        <li><a href="#">Html Links</a></li><br>
                        <li><a href="#">Html Images</a></li><br>
                        <li><a href="#">Html Lists</a></li><br>
                        <li><a href="#">Html Iframe</a></li><br>
                        <li><a href="#">Html Forms</a></li><br>
                        <li><a href="#">Html Tables</a></li><br>
                        <li><a href="#">Html Frame</a></li><br>
                       </div>
                    </div>
                  <hr>
                </div>
                    <a href="theory.php" class="btn">Theory</a><br>
                    <a href="quiz/quiz.php" class="btn">Exercise</a><br>
                </div>
                <div class="box">
                    <img src="image/cs.png">
                    <div class="accordion">
                        <hr>
                         <div class="cont">
                             <div class="label">  Css </div>
                            <div class="content">
                             <li><a href="css1/def.php">Introduction</a></li><br>
                             <li><a href="css1/inclusion.php">CSS Inclusion</a></li><br>
                             <li><a href="css1/syntax.php">CSS Syntax</a></li><br>
                             <li><a href="css1/selector.php">CSS Selector</a></li><br>
                             <li><a href="css1/color.php">CSS Color</a></li><br>
                             <li><a href="css1/text.php">CSS Text</a></li><br>
                             <li><a href="#">CSS Borders</a></li><br>
                             <li><a href="#">CSS Position Property</a></li><br>
                             <li><a href="#">CSS Float and clear Property</a></li><br>

                            </div>
                         </div>
                       <hr>
                     </div>
                         <a href="theorycss.php" class="btn">Theory</a><br>
                         <a href="quiz/quizcss.php" class="btn">Exercise</a><br>
                     </div>
                    
                    
                <div class="box">
                    <img src="image/java.png">
                    <div class="accordion">
                        <hr>
                         <div class="cont">
                             <div class="label">  JS </div>
                            <div class="content">
                             <li><a href="#">Introduction</a></li><br>
                             <li><a href="#"></a>javascript Basic Program</li><br>
                             <li><a href="#"></a>javascript Events</li><br>
                            </div>
                         </div>
                       <hr>
                     </div>  
                    
                    <a href="theoryjs.php" class="btn">Theory</a><br>
                    <a href="quiz/quizjava.php" class="btn">Exercise</a><br>
                </div>
            </div>
        </div>
        <a href="web.php" class="next round next2">&#8249;</a>
        <a href="backend.php" class="next round next1">&#8250;</a>
</section>
        <!------About Us------>
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

        <script type="text/javascript" src="frontend.js">

        </script>
</body>
</html>