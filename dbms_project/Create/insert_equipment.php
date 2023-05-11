<?php
require_once "connection.php";

// Set parameters
$ename = $_POST['ename'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$equiptmentCondition = $_POST['equiptmentCondition'];

// Prepare statement and bind parameters
$stmt = $conn->prepare("INSERT INTO Equipment (ename, description, quantity, equiptmentCondition) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $ename, $description, $quantity, $equiptmentCondition);
$stmt->execute();
$stmt->close();

echo "Equipment added successfully";

// Close the connection
$conn->close();
?>
