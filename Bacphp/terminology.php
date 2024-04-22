

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
        <h1>PHP Terminology</h1>
        <hr>
        <h2>Explorer php</h2>
    <table>
        <tr>
            <th>Term</th>
            <th>Description</th>
        </tr>

        <tr>
            <td>PHP</td>
            <td>PHP is a server-side scripting language widely used for web development.</td>
        </tr>

        <tr>
            <td>Variables</td>
            <td>PHP variable is an data element or item, whose value can change during the program execution.</td>
        </tr>

        <tr>
            <td>String</td>
            <td>A string is a sequence or combination of characters, like “Hello PHP!”</td>
        </tr>

        <tr>
            <td>Array</td>
            <td>An array stores multiple values in one single variable.</td>
        </tr>

        <tr>
            <td>Functions</td>
            <td>A function is a piece of code which takes one more input in the form of parameter and does some processing and returns a value.</td>
        </tr>

        <tr>
            <td>Loops</td>
            <td>PHP Loops are used to execute the same block of code again and again with some condition.</td>
        </tr>

        <tr>
            <td colspan="20px">Other Technical Terms Description</td>
        </tr>

        <tr>
            <td>HTML</td>
            <td>HyperText Markup Language, commonly abbreviated as HTML, is the standard markup language used to create web pages. HTML defines the structure of website such header, footer, content area, sidebar etc.</td>
        </tr>

        <tr>
            <td>CSS</td>
            <td>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language. Using CSS, You can change text colour, add borders, format fonts etc on web pages.</td>
        </tr>

        <tr>
            <td>JavaScript</td>
            <td>An object-oriented computer programming language commonly used to create interactive effects within web browsers.</td>
        </tr>

    <tr>
        <td>DBMS</td>
        <td>Database Management System is a software application used to store and manage data from the database.</td>
    </tr>
    </table>

    <div class="btn-2">
    <a href="intro.php" class="btn">&laquo; Previous</a>
    <a href="installation.php" class="btn" id="next">Next &raquo;</a>
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
</body>
</html>