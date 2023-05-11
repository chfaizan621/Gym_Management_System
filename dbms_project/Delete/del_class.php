<?php
require_once 'connection.php';

$class_id = $_POST['class_id'];

$stmt = $conn->prepare("DELETE FROM Classes WHERE class_id = ?");
$stmt->bind_param("i", $class_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Class deleted successfully.";
} else {
  echo "Failed to delete class.";
}

$stmt->close();
$conn->close();
?>
