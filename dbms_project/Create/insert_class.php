<?php
require_once "connection.php";

// Set parameters
$cname = $_POST['cname'];
$instructor_id = $_POST['instructor_id'];
$schedule = $_POST['schedule'];
$capacity = $_POST['capacity'];

// Prepare statement and bind parameters
$stmt = $conn->prepare("INSERT INTO Classes (cname, instructor_id, schedule, capacity) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sisi", $cname, $instructor_id, $schedule, $capacity);
$stmt->execute();
$stmt->close();

echo "Class added successfully";

// Close the connection
$conn->close();
?>
