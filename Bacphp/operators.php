

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
    <link rel="stylesheet" href="css1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
   include 'nav.htm';
   ?>

    <div class="content"><br><br><br>
    <h1>PHP Operators</h1>
    <hr><br>
    <p>Types of operator:</p>
    <li>Arithmetic operators</li>
    <li>Assignment operators</li>
    <li>Comparison operators</li>
    <li>Increment/Decrement operators</li>
    <li>Logical operators</li>
    <li>String operators</li>
    <li>Array operators</li>

    <h2>Arithmetic operators</h2>
<li>Operator Name Example Result</li>
<li>+ Addition $x + $y Sum of $x and $y</li>
<li>- Subtraction $x - $y Difference of $x and $y</li>
<li>* Multiplication $x * $y Product of $x and $y</li>
<li>/ Division $x / $y Quotient of $x and $y</li>
<li>% Modulus $x % $y Remainder of $x divided by $y</li>
<li>** Exponentiation $x ** $y Result of raising $x to the $y'th power</li>

<div class="text-boxes">
      <div class="text-box HTMLBox">
        <div class="topic">HTML Code:</div>
        <textarea id="HTMLBox" readonly>
        <!DOCTYPE html>
        <html lang="en">
        <head>
           <title>Document</title>
        </head><body>
        &lt?php
        $x = 8;
        $y = 2;
        echo $x + $y."\n";
        echo $x - $y."\n";
        echo $x * $y."\n";
        echo $x / $y."\n";
        echo $x % $y."\n";
        echo $x ** $y."\n"; ?>
        </html>
      </textarea><br>
        <button id="HTMLButton">Copy Codes</button>
      </div>
    </div><br><br>

    <div class="container">
    <h2>Output:</h2>
    <img src="image/capture3.PNG" class="out">
    </div>

    <h2>Assignment operators</h2>
<p>The PHP assignment operators are used with numeric values to write a value to a variable.
The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.</p><br>

<li>x = y x = y The left operand gets set to the value of the expression on the right</li>
<li>x += y x = x + y Addition</li>
<li>x -= y x = x - y Subtraction</li>
<li>x *= y x = x * y Multiplication</li>
<li>x /= y x = x / y Division</li>
<li>x %= y x = x % y Modulus</li>

<div class="text-boxes">
      <div class="text-box HTMLBox">
        <div class="topic">HTML Code:</div>
        <textarea id="HTMLBox" readonly>
        <!DOCTYPE html>
        <html lang="en">
        <head>
           <title>Document</title>
        </head><body>
        &lt?php
        $x = 10;
        $y = 20;

        $res=$x = $y;
        echo $res."<br>";

        $res= $x += $y;
        echo $res."<br>"; ?>
        </html>
      </textarea><br>
        <button id="HTMLButton">Copy Codes</button>
      </div>
    </div><br><br>

    <div class="container">
    <h2>Output:</h2>
    <img src="image/capture4.PNG" class="out">
    </div>

    <h2>Comparison Operators</h2>
    <li>Operator Name Example Resul</li>
    <li>== Equal $x == $y Returns true if $x is equal to $y</li>
    <li>=== Identical $x === $y Returns true if $x is equal to $y, and they are of the same type</li>
    <li>!= Not equal $x != $y Returns true if $x is not equal to $y</li>
    <li><> Not equal $x <> $y Returns true if $x is not equal to $y</li>
    <li>!== Not identical $x !== $y Returns true if $x is not equal to $y, or they are not of the same type</li>
    <li>> Greater than $x > $y Returns true if $x is greater than $y</li>
    <li>< Less than $x < $y Returns true if $x is less than $y</li>
    <li>>= Greater than or equal to $x >= $y Returns true if $x is greater than or equal to $y</li>
    <li><= Less than or equal to $x <= $y Returns true if $x is less than or equal to $y</li>

    <h2>Increment / Decrement Operators</h2>
    <li>Operator Name Description</li>
    <li>++$x Pre-increment Increments $x by one, then returns $x</li>
    <li>$x++ Post-increment Returns $x, then increments $x by one</li>
    <li>--$x Pre-decrement Decrements $x by one, then returns $x</li>
    <li>$x-- Post-decrement Returns $x, then decrements $x by one</li>

 <div class="container">
    <a href="variable.php" class="btn" id="next">Previous &raquo;</a>
    <a href="../backend.php" class="btn" id="next">Next &raquo;</a>
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
        var navLinks = document.getElementById("navLinks");
        function showMenu()
        {
            navLinks.style.right="0";
        }
        function hideMenu()
        {
            navLinks.style.right="-200px";
        }
    
    </script>
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