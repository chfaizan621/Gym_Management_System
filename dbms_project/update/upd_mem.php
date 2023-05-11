<?php

require_once "connection.php";

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$member_id = $_POST['member_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$membership_status = $_POST['membership_status'];

$stmt = $conn->prepare("UPDATE Members SET name = ?, email = ?, phone = ?, membership_status = ? WHERE member_id = ?");
$stmt->bind_param("ssssi", $name, $email, $phone, $membership_status, $member_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Member updated successfully.";
} else {
  echo "Failed to update member.";
}

$stmt->close();
$conn->close();
?>