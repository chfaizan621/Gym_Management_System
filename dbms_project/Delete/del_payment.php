<?php
require_once 'connection.php';

$payment_id = $_POST['payment_id'];

$stmt = $conn->prepare("DELETE FROM Payments WHERE payment_id = ?");
$stmt->bind_param("i", $payment_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Payment deleted successfully.";
} else {
  echo "Failed to delete payment.";
}

$stmt->close();
$conn->close();
?>
