<?php
$servername = "localhost";
$username = "root";
$password = "NewPassword";
$dbname = "race";

// defining variables of registration




$Email = $_POST['email'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO Newsletter (Email)
VALUES ('$Email')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
