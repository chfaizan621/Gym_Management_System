<?php
require_once "connection.php";

// Set parameters
$equipment_id = $_POST['equipment_id'];
$maintenance_date = $_POST['maintenance_date'];
$maintenance_time = $_POST['maintenance_time'];
$m_description = $_POST['m_description'];

// Prepare statement and bind parameters
$stmt = $conn->prepare("INSERT INTO Maintenance (equipment_id, maintenance_date, maintenance_time, m_description) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $equipment_id, $maintenance_date, $maintenance_time, $m_description);
$stmt->execute();
$stmt->close();

echo "Maintenance added successfully";

// Close the connection
$conn->close();
?>
