<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "pmsn");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Include connector.php (assuming it's in the same directory)
// include "connector.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record for editing
    $sql = "SELECT * FROM dtpmsn WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['nama'];
        $gender = $row['jk'];
        $email = $row['eml'];
        $phone = $row['ntlp'];
    } else {
        echo "Record not found";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update the record
    $name = $_POST['name'];
    $gender = $_POST['gender']; // Corrected name
    $email = $_POST['email'];   // Corrected name
    $phone = $_POST['phone'];   // Corrected name

    $updateSql = "UPDATE dtpmsn SET nama='$name', jk='$gender', eml='$email', ntlp='$phone' WHERE id=$id";

    if ($conn->query($updateSql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 400px;
            margin-top: 50px;
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <h2>Edit Data</h2>
        <form action="edit.php?id=<?php echo $id; ?>" method="POST"> <!-- Include id in the form action -->
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
            </div>
            <button type="submit" class="btn btn-primary"><a href="../phpfl/pmsn.php">Save</a> Changes</button>
        </form>
    </div>
</body>

</html>
