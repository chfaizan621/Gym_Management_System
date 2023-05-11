<?php
require_once 'connection.php';

$instructor_id = $_POST['instructor_id'];

$stmt = $conn->prepare("DELETE FROM Instructors WHERE instructor_id = ?");
$stmt->bind_param("i", $instructor_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Instructor deleted successfully.";
} else {
  echo "Failed to delete instructor.";
}

$stmt->close();
$conn->close();
?>
