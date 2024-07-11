<?php
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "brandy_auto_co";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO customers (name, phone, email, vehicle) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phone, $email, $vehicle);

// Set parameters and execute
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$vehicle = $_POST['vehicle'];
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>