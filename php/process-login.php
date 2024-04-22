<?php
session_start();

$mysqli = require __DIR__ . "/dbcon.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Check if the user exists in the database
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $mysqli->query($sql);

if ($result->num_rows == 1) {
    // Store user data in session variables
    $_SESSION['username'] = $username;

    // Redirect to the dashboard page after successful login
    header("Location: ../home.php");
    exit;
} else {
    echo "Invalid username or password.";
}

$mysqli->close();
?>