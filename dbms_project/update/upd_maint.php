<?php

require_once "connection.php";

$maintenance_id = $_POST['maintenance_id'];
$equipment_id = $_POST['equipment_id'];
$maintenance_date = $_POST['maintenance_date'];
$maintenance_time = $_POST['maintenance_time'];
$description = $_POST['m_description'];

$stmt = $conn->prepare("UPDATE Maintenance SET equipment_id = ?, maintenance_date = ?, maintenance_time = ?, m_description = ? WHERE maintenance_id = ?");
$stmt->bind_param("isssi", $equipment_id, $maintenance_date, $maintenance_time, $description, $maintenance_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Maintenance record updated successfully.";
} else {
  echo "Failed to update maintenance record.";
}

$stmt->close();
$conn->close();
?>