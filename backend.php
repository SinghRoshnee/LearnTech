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
            <h1>Backend Development</h1>
            <div class="container">
                <div class="box">
                    <img src="image/php.png">
                    
                <div class="accordion">
                   <hr>
                    <div class="cont">
                        <div class="label"> PHP </div>
                       <div class="content">
                        <li><a href="">Introduction</a></li><br>
                        <li><a href="">Syntax</a></li><br>
                        <li><a href="">Output</a></li><br>
                        <li><a href="">Comments</a></li><br>
                        <li><a href="">Datatypes</a></li><br>
                        <li><a href="">Variable</a></li><br>
                        <li><a href="">Opertor</a></li><br>
                       </div>
                    </div>
                  <hr>
                </div>
                    <a href="bctheory.php" class="btn">Theory</a><br>
                    <a href="quiz/quiz.php" class="btn">Exercise</a><br>
                </div>
                <div class="box">
                    <img src="image/java1.png">
                    <div class="accordion">
                        <hr>
                         <div class="cont">
                             <div class="label">  Java </div>
                            <div class="content">
                            <li><a href="">Introduction</a></li><br>
                        <li><a href="">Syntax</a></li><br>
                        <li><a href="">Output</a></li><br>
                        <li><a href="">Comments</a></li><br>
                        <li><a href="">Datatypes</a></li><br>
                        <li><a href="">Variable</a></li><br>
                        <li><a href="">Opertor</a></li><br>
                            </div>
                         </div>
                       <hr>
                     </div>
                         <a href="bcjava.php" class="btn">Theory</a><br>
                         <a href="quiz/quizcss.php" class="btn">Exercise</a><br>
                     </div>
                    
                    
                <div class="box">
                    <img src="image/C.jpg">
                    <div class="accordion">
                        <hr>
                         <div class="cont">
                             <div class="label">  C# </div>
                            <div class="content">
                            <li><a href="">Introduction</a></li><br>
                        <li><a href="">Syntax</a></li><br>
                        <li><a href="">Output</a></li><br>
                        <li><a href="">Comments</a></li><br>
                        <li><a href="">Datatypes</a></li><br>
                        <li><a href="">Variable</a></li><br>
                        <li><a href="">Opertor</a></li><br>
                            </div>
                         </div>
                       <hr>
                     </div>  
                    
                    <a href="bcsharp.php" class="btn">Theory</a><br>
                    <a href="quiz/quizjava.php" class="btn">Exercise</a><br>
                </div>
            </div>
        </div>
        <a href="web.php" class="next round next2">&#8249;</a>
        <a href="syllabuswb.php" class="next round next1">&#8250;</a>
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