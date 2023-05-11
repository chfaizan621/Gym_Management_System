<?php
require_once 'connection.php';

$equipment_id = $_POST['equipment_id'];

$stmt = $conn->prepare("DELETE FROM Equipment WHERE equipment_id = ?");
$stmt->bind_param("i", $equipment_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Equipment deleted successfully.";
} else {
  echo "Failed to delete equipment.";
}

$stmt->close();
$conn->close();
?>
