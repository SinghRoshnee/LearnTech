
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Copy Code To Clipboard | CodingLab</title>
    <link rel="stylesheet" href="css1.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
  <?php
   include 'nav.htm';
   ?>
    <div class="content"><br><br><br><br>
    <h1>javascript Functions</h1>
    <hr><br>
    
<p>A JavaScript function is a block of code designed to perform a particular task.

A JavaScript function is executed when "something" invokes it (calls it).</p>
<h2>JavaScript Function Syntax</h2>
<p>A JavaScript function is defined with the function keyword, followed by a name, followed by parentheses ().

Function names can contain letters, digits, underscores, and dollar signs (same rules as variables).<br>

The parentheses may include parameter names separated by commas:
(parameter1, parameter2, ...)
<br>
The code to be executed, by the function, is placed inside curly brackets: {}</p>
<h3>example:
function name(parameter1, parameter2, parameter3) {
  // code to be executed
}</h3>
<p>
Function parameters are listed inside the parentheses () in the function definition.

Function arguments are the values received by the function when it is invoked.

Inside the function, the arguments (the parameters) behave as local variables.</p>

<h2>Function Invocation</h2>
<p>The code inside the function will execute when "something" invokes (calls) the function:</p>

<li>When an event occurs (when a user clicks a button)
<li>When it is invoked (called) from JavaScript code
<li>Automatically (self invoked)
<p>You will learn a lot more about function invocation later in this tutorial.</p>
<h2>Function Return</h2>
<p>When JavaScript reaches a return statement, the function will stop executing.

If the function was invoked from a statement, JavaScript will "return" to execute the code after the invoking statement.

Functions often compute a return value. The return value is "returned" back to the "caller":</p>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<head>
<title>my javascript</title>
</head>
<body>
<h1>JavaScript Functions</h1>

<p>Call a function which performs a calculation and returns the result:</p>

<p id="demo"></p>

<script>
let x = myFunction(4, 3);
document.getElementById("demo").innerHTML = x;

function myFunction(a, b) {
  return a * b;
}
</script>
</body>
</html
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br>
 <br>
 <h2>The () Operator</h2>
<p>The () operator invokes (calls) the function</p>
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<head>
<title>my javascript</title>
</head>
<body>
<h1>JavaScript Functions</h1>

<p>Invoke (call) a function that converts from Fahrenheit to Celsius:</p>
<p id="demo"></p>

<script>
function toCelsius(f) {
  return (5/9) * (f-32);
}

let value = toCelsius(77);
document.getElementById("demo").innerHTML = value;
</script>
</body>
</html
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br>
 <br>

    <!---------Button--------------->
    <div class="btn-2">
      <a href="event.php" class="btn">&laquo; Previous</a>
      <a href="variable.php" class="btn" id="next">Next &raquo;</a>
      </div>

     <!-----------About Us---------->
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
