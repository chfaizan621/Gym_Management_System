<?php
require_once 'connection.php';

$attendance_id = $_POST['attendance_id'];

$stmt = $conn->prepare("DELETE FROM Attendance WHERE attendance_id = ?");
$stmt->bind_param("i", $attendance_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Attendance deleted successfully.";
} else {
  echo "Failed to delete attendance.";
}

$stmt->close();
$conn->close();
?>
