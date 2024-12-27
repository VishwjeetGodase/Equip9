<?php
$servername = "localhost"; // Change to your database host
$username = "mydata"; // Change to your MySQL username
$password = "mydata"; // Change to your MySQL password
$dbname = "datastore"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
