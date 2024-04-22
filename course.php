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
    <title>Learning Websites</title>
    <link rel="stylesheet" href="css/hhome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
   include 'nav.htm';
   ?>
<!--------------course-->

<section class="course"><br><br><br><br><br>
    <h1>
         <span>C</span>
         <span>o</span>
         <span>u</span>
         <span>r</span>
         <span>s</span>
         <span>e</span>
         <span>s</span>
</h1>
    <br>
    <br>
    <div class="container">
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>01</h2>
                    <h3>Web Development</h3>
                    <img src="image/web.png">  
                         <a href="web.php"> Read More</a>
                </div>
            </div>
        </div>

        
       
    </div>
    <a href="home.php" class="next round next2">&#8249;</a>
    <a href="syllabus.php" class="next round next1">&#8250;</a>
</section>

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
            <br>
            <br> 
            Made with <i class="fa fa-heart-o"></i> by abc 
    </section>
</body>
</html>