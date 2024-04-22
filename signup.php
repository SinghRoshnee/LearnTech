<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login page</title>
    <link rel="stylesheet" href="css/sign.css">
  </head>
  <body>
  <div class="container">
    <div class="card">
      <div class="inner-box" id="card">
        <div class="card-front">
        <h1>SIGN UP-NOW</h1>
        <form action="php/process-signup.php" method="post">
          <input type="text" class="input-box" placeholder="Your username" required name="username">
          <input type="password" class="input-box" placeholder="Your password" required name="password">
          <button type="submit" class="submit-btn">Sign-up</button>
          <input type="checkbox"><span>Remember me</span>
        </form>
        <button type="button" class="btn" onclick="openlogin()"> I have an account</button>
        <a href="">Forgot password</a>
        </div>
        <div class="card-back">
        <h1>Login-Now</h1>
        <form action="php/process-login.php" method="post">
          <input type="text" class="input-box" placeholder="Your username" required name="username">
          <input type="password" class="input-box" placeholder="Your password" required name="password">
          <button type="submit" class="submit-btn">Login </button>
          <input type="checkbox"><span>Remember me</span>
        </form>
        <button type="button" class="btn" onclick="opensign()">I'am new here</button>
        <a href="">Forgot password</a>
        </div>
      </div>
    </div>
  </div>
  <script>
      var card = document.getElementById("card");
      function openlogin()
      {
        card.style.transform ="rotateY(-180deg)";
      }
      function opensign()
      {
        card.style.transform ="rotateY(0deg)";
      }
  </script>
  </body>
</html>