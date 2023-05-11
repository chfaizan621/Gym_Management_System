<?php
require_once 'connection.php';

$member_id = $_POST['member_id'];

$stmt = $conn->prepare("DELETE FROM Members WHERE member_id = ?");
$stmt->bind_param("i", $member_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Member deleted successfully.";
} else {
  echo "Failed to delete member.";
}

$stmt->close();
$conn->close();
?>
