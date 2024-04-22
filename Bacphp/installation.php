

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
        <h1>Installation</h1>
        <hr>
    <h2>How to set up PHP on Your Own PC:</h2>
    <li>nstall a web server</li>
    <li>install PHP</li>
    <li>install a database, such as MySQL</li>
    <br><br>
<p>Instead of installing each software individually, we can use the combined environment package. There are various development environments available that can install Web-server/PHP/MySQL easily at once.</p>
<br><br>
<p>XAMPP is the most popular PHP development environment. XAMPP is a completely free, easy to install Apache distribution containing PHP, MySQL and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use.</p>

<h2>Learn PHP Installation step by step using XAMPP</h2>
<li>To download the XAMPP installer for windows, visit the URL https://www.apachefriends.org/download.html.</li>
<li>Go to the “Download” section in the page. Here, you will see XAMPP for Windows, Linux, and Mac OS X. We can easily download &nbsp &nbsp &nbsp the XAMPP installer for Windows.</li>
<li>Click on the Download link to download XAMPP as shown below. (Recommended XAMPP 5.6)</li>
<li>After downloading the installer, double click on the downloaded executable (.exe) file to start the XAMPP installation process. Click &nbsp &nbsp &nbsp Yes,  if User Account Control dialog box appears.</li>
<li>You should avoid installing XAMPP to C:\ Drive. Because when your reinstall windows, all you C drive project data will be lost. &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp Change installation directory to “D:\” or any other directory/drive</li>
<li>Click Next & Follow instructions if any.</li>
<li>You will see the installation progress. Please wait for all the process to complete. Then, click Finish to finish the installation process.</li>
<li>The dialog box asks: Do you want to start the Control Panel now? You can choose to start the Control Panel now.</li>
<li>If the XAMPP control panel is not already started, find the XAMPP control panel in the start menu or its desktop icon, right click &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbspon it and select “Run as administrator”. Click “Yes” on the “User Account Control” popup, and wait for the XAMPP control panel to start. You will see the XAMPP control panel running.</li>
<li>Click on the Start button next to Apache, and wait for Apache to start. After the Apache has started, click on the Start button next to MySQL. Wait for MySQL to start. Both Apache and MySQL are running now.</li>
<li>Now, your PHP installation is done and you can run your first PHP program.</li>

<div class="btn-2">
    <a href="terminology.php" class="btn">&laquo; Previous</a>
    <a href="syntax.php" class="btn" id="next">Next &raquo;</a>

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