<?php
require_once "connection.php";

// Set parameters
$member_id = $_POST['member_id'];
$class_id = $_POST['class_id'];
$date_attended = $_POST['date_attended'];

// Prepare statement and bind parameters
$stmt = $conn->prepare("INSERT INTO Attendance (member_id, class_id, date_attended) VALUES (?, ?, ?)");
$stmt->bind_param("iis", $member_id, $class_id, $date_attended);
$stmt->execute();
$stmt->close();

echo "Attendance added successfully";

// Close the connection
$conn->close();
?>
