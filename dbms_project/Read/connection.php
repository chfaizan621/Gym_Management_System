<?php

// Create connection
$conn = new mysqli('localhost', 'root', '', 'gym_management');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>