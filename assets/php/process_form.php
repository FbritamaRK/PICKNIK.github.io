<!-- process_form.php -->
<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "pmsn");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Include connector.php (assuming it's in the same directory)
include "connector.php";

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numberOfPeople = $_POST["numberOfPeople"];

    for ($i = 1; $i <= $numberOfPeople; $i++) {
        $name = $_POST["name$i"];
        $gender = $_POST["gender$i"];
        $email = $_POST["email$i"];
        $phone = $_POST["phone$i"];

        // Insert data into the database
        $sql = "INSERT INTO dtpmsn (nama, jk, eml, ntlp) VALUES ('$name', '$gender', '$email', '$phone')";

        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

header("Location: ../phpfl/pmsn.php");

$conn->close();
?>
