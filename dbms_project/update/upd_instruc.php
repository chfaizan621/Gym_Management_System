<?php

require_once "connection.php";

$instructor_id = $_POST['instructor_id'];
$name = $_POST['i_name'];
$email = $_POST['i_email'];
$phone = $_POST['i_phone'];

$stmt = $conn->prepare("UPDATE Instructors SET i_name = ?, i_email = ?, i_phone = ? WHERE instructor_id = ?");
$stmt->bind_param("sssi", $name, $email, $phone, $instructor_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "Instructor updated successfully.";
} else {
  echo "Failed to update instructor.";
}

$stmt->close();
$conn->close();
?>