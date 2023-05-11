<?php

require_once "connection.php";

$payment_id = $_POST['payment_id'];
$member_id = $_POST['member_id'];
$amount = $_POST['amount'];
$payment_date = $_POST['payment_date'];
$payment_method = $_POST['payment_method'];

$stmt = $conn->prepare("UPDATE Payments SET member_id = ?, amount = ?, payment_date = ?, payment_method = ? WHERE payment_id = ?");
$stmt->bind_param("idssi", $member_id, $amount, $payment_date, $payment_method, $payment_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Payment updated successfully.";
} else {
  echo "Failed to update payment.";
}

$stmt->close();
$conn->close();
?>