<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "pmsn");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Include connector.php (assuming it's in the same directory)
include "connector.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record
    $deleteSql = "DELETE FROM dtpmsn WHERE id=$id";

    if ($conn->query($deleteSql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: ../phpfl/pmsn.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request";
    exit();
}
?>
