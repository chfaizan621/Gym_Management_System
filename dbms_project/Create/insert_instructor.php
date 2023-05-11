<?php
require_once "connection.php";

// Set parameters
$i_name = $_POST['i_name'];
$i_email = $_POST['i_email'];
$i_phone = $_POST['i_phone'];

// Prepare statement and bind parameters
$stmt = $conn->prepare("INSERT INTO Instructors (i_name, i_email, i_phone) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $i_name, $i_email, $i_phone);
$stmt->execute();
$stmt->close();

echo "Instructor added successfully";

// Close the connection
$conn->close();
?>
