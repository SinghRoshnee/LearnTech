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
    <div class="content"><br><br><br><br>
    <h1>Html Forms</h1>
    <hr><br>
    <p>HTML Forms are used to collect some data from users on a webpage.
    Forms contain special control elements like input text box, check boxes, radio-buttons and submit buttons. Using form elements, you can take different type of data from users. This data can be used for different purposes.

<h2>Example of HTML Forms:</h2>
You must have seen different kind of forms on websites. For example, User Registration form is used to collect user data to store in a database. Simple Contact form allows user send message or contact website owners. HTML works with Server side programming languages (like PHP or ASP) to send this form into the database or in email..</p>
        <h2>Form Element</h2>
        <p>HTML &ltform&gt tag is used to defines an HTML form. All other form elements are defined inside this tag. Different types of form elements includes: input text elements, check boxes, radio buttons, submit buttons and many more.</p>
        <h2>Form-attribute list</h2>
        <h2>Action attribute</h2>
        <p>The action attributes specifies the action to be performed after form submission. Mostly, we pass a page URL into the action.

That action page usually created with some server side programming that can perform some action on form data. Action can be related to inserting form data into database or sending that data into some email. 
</p>
<h3>
For Example: &ltform action="page2.php"&gt</h3>

<h2>Method attribute</h2>
The method attribute tells which HTTP method to use for submitting form data. You can use GET & POST method.
<li>The GET method sends for data along with page URL.</li>
 <h3>For Example: &ltform method="GET"&gt</h3>
    <li>
The POST method transfers information via HTTP headers.</li>
<h3> For Example: &ltform method="POST"&gt</h3>
<h2>Target attribute</h2>
<p>The target attribute works in the similar way as in anchor tag. After form submission, action will directed to another page. This action page can be opened in the same window, new window or some frame.</p>
<h3> Example: &ltform target="_blank"&gt</h3>
<li>_blank will open a new page after form is submitted.</li>
<li>_self will open action page in the same window.</li>
<li>_parent will open action page in the parent frame.</li>

<h2>Enctype Attribute</h2>
<p>The enctype attribute is used to specify how the browser encodes the form data after submission. Example of Enctype attribute using default values is:</p>
<h3>&ltform enctype="application/x-www-form-urlencoded"&gt</h3>
<p>When you need to send/upload some media file such as pdf or image, set enctype as a multipart.</p>
 <h3>For example: &ltform enctype="mutlipart/form-data"&gt</h3>
 <div class="text-boxes">
<div class="text-box HTMLBox">
<div class="topic">HTML Code:</div>
<textarea id="HTMLBox" readonly>
<html>
<head>
</head>
<body>
<form action="page2.php" method="POST" enctype="mutlipart/form-data" target="_blank" >
<input type="text">
</form>
</body>
</textarea>
<button id="HTMLButton">Copy Codes</button>
</div>
</div>
<br>
<br>
<h2>Form input element</h2>
<p>Input element is the most commonly used elements in the form. Input elements are defined by &ltinput&gt tag. There are many input type elements available in the form. Depending upon the type attribute different input elements can be displayed. Some of the examples of input elements are: text, buttons, check-box and radio-button.</p>
<h2>Form – Input Text Field & Attributes</h2>
<p>Input Text field defines a single line input field for users. <h3>Example: &ltinput type="text"&gt</h3>

<b>Attributes:</b> You can use following attributes with text field:</p>

<li>type=”text” defines the text box/field where user can enter some text.</li>
<li>name defines a unique name for every form element to get their data after submission.</li>
<li>value specify default or initial value in text field. User can change it.</li>
<h2>Radio Button</h2>
<p>
Radio Button defines radio button where user can select one option from multiple choices in forms.</p>
<h3> Example: &ltinput type="radio"&gt</h3>
<p>
<b>Attributes:</b>You can use following attributes with text field:
</p>
<li>type="radio" defines the Form’s input element as a radio button
<li>name that defines a unique name for every radio button element to get their data after submission.
<li>value The value that will be transferred as data after submission if the radio box is selected.
<li>checked It will set current checkbox checked by default.
    <h2>Check Box</h2>
    <p>Check Boxes are used when you want to allow the selection of more than one options by user.
    <h3> Example: &ltinput type="check"&gt</h3>

<b>Attributes:</b> You can use following attributes with check boxes:</p>

<li>type="radio" defines the Form’s input element as a radio button
<li>name defines a unique name for every radio button element to get their data after submission.
<li>value The value that will be transferred as data after submission if the radio box is selected.
<li>checked It will set current checkbox checked by default.
    <h2>Submit and reset button</h2>
    <p>You can create buttons in Form. Depending upon the type of button, it perform some action on form data

<b>Type of buttons: There are 3 commonly used buttons in Form:</b>
<li>
Simple button defines the regular button with no action. We can add some specific action later using JavaScript.
<h3>Example: &ltinput type="button"&gt</h3>
<li>Submit button defines the submit button. When user click on submit button, it will submit form to transfer data.
<h3>Example: &ltinput type="submit"&gt</h3>
<li>Reset button is used to create reset button. When user click on reset button, all form data will reset to default values.
<h3>Example: &ltinput type="reset"&gt</h3>
<b>
Attributes
</b>
<li>value specify the button value.
<li>name defines a unique name for every button to identify later.

<h2>Form – Select Menu</h2>
<p>Select Element is used to create a drop down list. User can select any item from the list. All list items specified in using option tag.</p>

<h2>Select Attributes</h2>

<li>name defines a unique name for every select menu to identify later get its list data
<li>size scrolling list box
<li>multiple attribute allows users to select multiple items form the list at the same time.

<h2>Option Attributes<h2>

<li>value specify the value of list item. After submission, this value will be sent if user selected a item.
<li>name defines a unique name for every button to identify later.
<li>selected attribute in any option set itself as a default selected item in the drop down list.
    <h2>Example</h2>
    <div class="text-boxes">
<div class="text-box HTMLform">
<div class="topic">HTML Code:</div>
<textarea id="HTMLform" readonly>
<html>
<head>
<title>HTML Forms Element Example - TutorialsClass.com </title>
</head>
<body>
<form action="page2.php" method="POST" enctype="mutlipart/form-data" target="_blank" >
User Name: <input type="text" name="username" value="Enter your Name" >
<br><br/>
Mobile:  <input type="text" name="mobile">
<br/><br/>
Select Your Country:
<input type="radio" name="nationality" value="india"> India
<input type="radio" name="nationality" checked value="australia"> Australia
<br/><br/>
Select Your Hobby:
<input type="checkbox" name="hobbies" value="singing"> Singing
<input type="checkbox" name="hobbies" value="dancing"> Dancing
<input type="checkbox" name="hobbies" value="book-reading" checked> Book Reading
<br/><br/>
Select Your City:
<select name="dropdown">
<option value="" selected>Select your favorite city</option>
<option value="newdelhi" selected>New Delhi</option>
<option value="newyork">New York</option>
<option value="paris">Paris</option>
</select>
<br/><br/><br/>
<input type="button" value="Button">
<input type="reset" value="Reset Form">
<input type="submit" value="Submit">
</form>
</body>
</html>
</textarea>
<button id="formButton">Copy Codes</button>
</div>
</div>
<br>
<br> 
<div class="container">
    <h2>output:</h2>
    <img src="image/form.PNG">
    </div>
<!---------Button----------->
    <div class="btn-2">
    <a href="iframe.php" class="btn">&laquo; Previous</a>
    <a href="table.php" class="btn" id="next">Next &raquo;</a>
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
        // HTML BOx JS Code
        let HTMLBox = document.getElementById("HTMLBox");
        let HTMLButton = document.getElementById("HTMLButton");
  
        HTMLButton.onclick = function () {
          HTMLBox.select();
          document.execCommand("copy");
          HTMLButton.innerText = "Codes Copied";
        };
         // HTML BOx JS Code
         let HTMLform = document.getElementById("HTMLform");
        let formButton = document.getElementById("formButton");
  
        formButton.onclick = function () {
          HTMLform.select();
          document.execCommand("copy");
          formButton.innerText = "Codes Copied";
        };
  
      </script>
</body>
</html>