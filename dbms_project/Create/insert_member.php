<?php
require_once "connection.php";

// Set parameters
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$membership_status = $_POST['membership_status'];

// Prepare statement and bind parameters
$stmt = $conn->prepare("INSERT INTO Members (name, email, phone, membership_status) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $membership_status);
$stmt->execute();
$stmt->close();

echo "Member added successfully";

// Close the connection
$conn->close();
?>
