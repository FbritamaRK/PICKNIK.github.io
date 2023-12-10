<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "users");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Include connector.php (assuming it's in the same directory)
// include "connector.php";

// Retrieve form data
$username = $_POST['usr'];
$telephone = $_POST['notelp'];
$dob = $_POST['tgl'];
$email = $_POST['em'];
$password = password_hash($_POST['pwd'], PASSWORD_BCRYPT);

// Insert user data into the database
$sql = "INSERT INTO user (username, noTelp, dob, email, psswrd) VALUES ('$username', '$telephone', '$dob', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../phpfl/login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
