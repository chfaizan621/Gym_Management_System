<?php
require_once "connection.php";

// Set parameters
$member_id = $_POST['member_id'];
$amount = $_POST['amount'];
$payment_date = $_POST['payment_date'];
$payment_method = $_POST['payment_method'];

// Prepare statement and bind parameters
$stmt = $conn->prepare("INSERT INTO Payments (member_id, amount, payment_date, payment_method) VALUES (?, ?, ?, ?)");
$stmt->bind_param("idss", $member_id, $amount, $payment_date, $payment_method);
$stmt->execute();
$stmt->close();

echo "Payment added successfully";

// Close the connection
$conn->close();
?>
