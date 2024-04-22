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
    <title>Quiz Question</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
<?php
   include 'nav.htm';
   ?>

    <div class="app">
        <h1>Exercise</h1>
        <div class="quiz">
            <h2 id="question">Question goes here</h2>
            <div id="answer-buttons">
                <button class="btn">Answer 1</button>
                <button class="btn">Answer 2</button>
                <button class="btn">Answer 3</button>
                <button class="btn">Answer 4</button>
            </div>
            <button id="next-btn">Next</button>
        </div>
    </div>
    <a href="../frontend.php" class="next round next2">&#8249;</a>
    <a href="../theoryjs.php" class="next round next1">&#8250;</a>
    <script src="cssquiz.js"></script>
</body>
</html>