<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "users");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['usr'];
$password_entered = $_POST['pwd'];

// Fetch hashed password from the database based on the entered username
$sql = "SELECT psswrd FROM user WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found
    $row = $result->fetch_assoc();
    $hashedPasswordFromDatabase = $row['psswrd'];

    // Check if the entered password matches the stored hash
    if (password_verify($password_entered, $hashedPasswordFromDatabase)) {
        // Password is correct, proceed with login
        // Redirect or set session variables, etc.
        echo "Login successful";
    } else {
        // Password is incorrect
        echo "Incorrect password";
    }
} else {
    // User not found
    echo "User not found";
}

$conn->close();
?>
