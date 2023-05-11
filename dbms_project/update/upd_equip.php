<?php

require_once "connection.php";

$equipment_id = $_POST['equipment_id'];
$name = $_POST['ename'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$equiptmentCondition = $_POST['equiptmentCondition'];

$stmt = $conn->prepare("UPDATE Equipment SET ename = ?, description = ?, quantity = ?, equiptmentCondition = ? WHERE equipment_id = ?");
$stmt->bind_param("ssisi", $name, $description, $quantity, $equiptmentCondition, $equipment_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Equipment updated successfully.";
} else {
  echo "Failed to update equipment.";
}

$stmt->close();
$conn->close();
?>