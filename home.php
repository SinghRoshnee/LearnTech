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
<section class="header">     
<?php
   include 'nav.htm';
   ?>
        <div class="text-box">
            <h4> LearnTech.com</h4>
            <h2>Hello <?php echo $username?>..!</h2> 
            </div>
</section>
        

            <!-----Course-->
            
    <h1>
        <span>C</span>
        <span>o</span>
        <span>u</span>
        <span>r</span>
        <span>s</span>
        <span>e</span>
        <span>s</span>
    </h1>
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
    <!-------About  Us--->

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


</body>
</html>