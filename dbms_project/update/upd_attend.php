<?php

require_once "connection.php";

$attendance_id = $_POST['attendance_id'];
$member_id = $_POST['member_id'];
$class_id = $_POST['class_id'];
$date_attended = $_POST['date_attended'];

$stmt = $conn->prepare("UPDATE Attendance SET member_id = ?, class_id = ?, date_attended = ? WHERE attendance_id = ?");
$stmt->bind_param("iisi", $member_id, $class_id, $date_attended, $attendance_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Attendance updated successfully.";
} else {
  echo "Failed to update attendance.";
}

$stmt->close();
$conn->close();
?>
