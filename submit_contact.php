<?php
$servername = "localhost";
$username = "your_db_username";
$password = "";
$dbname = "brandy_auto_co";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contacts (name, phone, email, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phone, $email, $message);

// Set parameters and execute
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$stmt->execute();

echo "Your message has been sent successfully";

$stmt->close();
$conn->close();
?>