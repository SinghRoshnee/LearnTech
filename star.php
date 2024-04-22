<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
// Redirect to the login page if not logged in
    echo "Not logged in...!";
    exit;
}
$mysqli = require __DIR__ . "/php/dbcon.php";

$sql = "select * from feedback";

$result = $mysqli->query($sql);

$mysqli->close();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Rating Form</title>
    <link rel="stylesheet" href="css/star.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
  <?php
   include 'nav.htm';
   ?>
<br><br><br><br>
  <div class="star-area">
  <form action="php/process-feedback.php" method="post">
    <div class="container">
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5" value="5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4" value="4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3" value="3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2" value="2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1" value="1">
        <label for="rate-1" class="fas fa-star"></label>
        <div class="innerform">
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="Describe your experience.." name="feedback"></textarea>
          </div>
          <div class="btn">
            <button type="submit">Post</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  </div>
    <div class="feedback-area">
    <h1 class="fb-head">User Feedbacks</h1>
    <?php
    while($row = $result->fetch_assoc()) {
    $username = $row['username'];
    $feedback = $row['feedback'];
    $stars = $row['stars'];
    
    echo "<div class='feedback-box'>
    <h2>$username</h2>
    <br>
    <h3>Rated: $stars <span class='fas fa-star show-star'</span></h3>
	<br>
    <p>$feedback</p>
    </div>";
    }
    ?>
    </div>
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