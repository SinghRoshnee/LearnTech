<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
// Redirect to the login page if not logged in
    echo "Not logged in...!";
    exit;
}
?>
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
    <h1>Html Table</h1>
    <hr><br>
    <p>HTML Tables are used to organise information into rows and columns.
    In HTML tables you can arrange data such as text, images or links. Using Tables you can get better formatting of data.</p>
    <h2>List of table tags</h2>
    <table border="1">
    <tr>
        <th>Attribute</th>
        <th>Description</th>
        <th>Syntax & Example</th>
    </tr>
    <tr>
        <td>Table tag</td>
        <td>Used to define table. All other table tags and data placed within Table tag.</td>
        <td>&lttable&gt&lt/table&gt</td>
    </tr>
    <tr>
        <td>Table Heading</td>
        <td>Used to define table heading row. Mostly used for first table row</td>
        <td>&ltth&gt&lt/th&gt</td>
    </tr>
    <tr>
    <td>Table Row</td>
        <td>Used to define each table row.</td>
        <td>&lttr&gt&lt/tr&gt</td>
    </tr>
    <tr>
    <td>Table Data</td>
        <td>Used to define table data in cells</td>
        <td>&lttd&gt&lt/td&gt</td>
    </tr>
    </table>
    <h2>Example of simple table</h2>
   <p> HTML Table is created using &lttable&gt tag. All other table tags are placed under this tag.
  First row often contains heading in tables. A row starts with &lttr&gt tag and then each heading is created using &ltth&gt tag for each column.
  Then we create another row for data. Again, A new row starts with &lttr&gt tag while data is created using &lttd&gt tag for each column.</p>       
<div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<body>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Subject</th>
  </tr>
  <tr>
    <th>101</th>
    <th>Robin</th>
    <th>Maths</th>
  </tr>
  <tr>
    <th>102</th>
    <th>John</th>
    <th>English</th>
  </tr>
</table>
</body>
</html>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br>
<br>
    <div class="container">
    <h2>output:</h2>
    <img src="image/table1.PNG">
    </div>
    <h2>Table tag & attribute</h2>
    <p>You can make some changes in Table styles using given attributes.

For example, above simple html table program have a border attribute that draws border around the table. Here, is the list of common table attributes.</p>
<h2>table of attribute</h2>
<table border="1">
    <tr>
        <th>Attribute</th>
        <th>Description</th>
        <th>Syntax & Example</th>
    </tr>
    <tr>
        <td>Border</td>
        <td>used to specify border around the table & cells</td>
        <td>border="2"</td>
    </tr>
    <tr>
        <td>Cell Padding</td>
        <td>specify amount of spacing between cell border and cell content.</td>
        <td>cellpadding="5"</td>
    </tr>
    <tr>
    <td>Cell Spacing</td>
        <td>specify amount of spacing between two adjacent cells.</td>
        <td>cellspacing="3"</td>
    </tr>
    <tr>
    <td>Width</td>
        <td>used to set the width of the table.</td>
        <td>width="80%"</td>
    </tr>
    <tr>
    <td>align	</td>
        <td>used to set the alignment of table horizontally.</td>
        <td>align="centre"</td>
    </tr>
    <tr>
    <td>bgcolor	</td>
        <td>used to set the background color of the table.</td>
        <td>bgcolor="blue"</td>
    </tr>
    <tr>
    <td>background</td>
        <td>used to set image in the table background.</td>
        <td>background="image.jpg"</td>
    </tr>
    </table>
    <div class="text-boxes">
<div class="text-box HTMLtable">
<div class="topic">HTML Code:</div>
<textarea id="HTMLtable" readonly>
<!DOCTYPE html>
<html>
<head>
<title> Table Attributes</title>
</head>
<body>

<table width="80%" border="2" bgcolor="skyblue" align="center" cellspacing="3" cellpadding="5">
  <tr>
    <th>Name</th>
    <th>City</th>
    <th>Phone</th>
  </tr>
  <tr>
    <td>Robin</td>
    <td>Delhi</td>
    <td>9876459089</td>
  </tr>
  <tr>
    <td>Rocky</td>
    <td>New York</td>
    <td>9876459089</td>
  </tr>
</table>
</body>
</html>
</textarea>
<button id="tableButton">Copy Codes</button>
</div>
</div>
<br>
<br>
    <div class="container">
    <h2>output:</h2>
    <img src="image/table2.PNG">
    </div>

    <!---------Button--------------->
    <div class="btn-2">
      <a href="form.php" class="btn">&laquo; Previous</a>
      <a href="../frontend.php" class="btn" id="next">Next &raquo;</a>
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

      // HTML BOx JS Code
      let HTMLtable = document.getElementById("HTMLtable");
      let tableButton = document.getElementById("tableButton");

      tableButton.onclick = function () {
        HTMLtable.select();
        document.execCommand("copy");
        tableButton.innerText = "Codes Copied";
      };

    </script>
  </body>
</html>
