<?php
$mysqli = require __DIR__ . "/dbcon.php";

$username = $_POST['username'];
$password = $_POST['password'];		

// Check if the email is already registered
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
	echo "User name is already registered.";
exit;
}
		
// Insert user data into the database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
		
if ($mysqli->query($sql) === TRUE) {
	header("Location: ../success.php");
} 
else {
	$signupError = "Error: " . $sql . "<br>" . $mysqli->error;
	echo $signupError;
}
		
$mysqli->close();
?>