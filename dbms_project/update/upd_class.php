<?php

require_once "connection.php";

$class_id = $_POST['class_id'];
$name = $_POST['cname'];
$instructor_id = $_POST['instructor_id'];
$schedule = $_POST['schedule'];
$capacity = $_POST['capacity'];

$stmt = $conn->prepare("UPDATE Classes SET cname = ?, instructor_id = ?, schedule = ?, capacity = ? WHERE class_id = ?");
$stmt->bind_param("ssssi", $name, $instructor_id, $schedule, $capacity, $class_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Class updated successfully.";
} else {
  echo "Failed to update class.";
}

$stmt->close();
$conn->close();
?>
