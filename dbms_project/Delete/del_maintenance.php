<?php
require_once 'connection.php';

$maintenance_id = $_POST['maintenance_id'];

$stmt = $conn->prepare("DELETE FROM Maintenance WHERE maintenance_id = ?");
$stmt->bind_param("i", $maintenance_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Maintenance deleted successfully.";
} else {
  echo "Failed to delete Maintenance.";
}

$stmt->close();
$conn->close();
?>
 
