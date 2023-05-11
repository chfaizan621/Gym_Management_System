<?php

require_once "connection.php";

// Set parameters
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$membership_status = $_POST['membership_status'];

// Prepare statement and bind parameters
$stmt1 = $conn->prepare("INSERT INTO Members (name, email, phone, membership_status) VALUES (?, ?, ?, ?)");
$stmt1->bind_param("ssss", $name, $email, $phone, $membership_status);
$stmt1->execute();
$stmt1->close();

$stmt2 = $conn->prepare("INSERT INTO Equipment (ename, description, quantity, equiptmentCondition) VALUES (?, ?, ?, ?)");
$stmt2->bind_param("ssis", $name, $description, $quantity, $equiptmentCondition);

// Set parameters
$name = $_POST['ename'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$equiptmentCondition = $_POST['equiptmentCondition'];
$stmt2->execute();

$stmt2->close();

$stmt3 = $conn->prepare("INSERT INTO Maintenance (equipment_id, maintenance_date, maintenance_time, m_description) VALUES (?, ?, ?, ?)");
$stmt3->bind_param("isss", $equipment_id, $maintenance_date, $maintenance_time, $description);

// Set parameters
$equipment_id = $_POST['equipment_id'];
$maintenance_date = $_POST['maintenance_date'];
$maintenance_time = $_POST['maintenance_time'];
$description = $_POST['m_description'];
$stmt3->execute();

$stmt3->close();

$stmt4 = $conn->prepare("INSERT INTO Instructors (i_name, i_email, i_phone) VALUES (?, ?, ?)");
$stmt4->bind_param("sss", $name, $email, $phone);

// Set parameters
$name = $_POST['i_name'];
$email = $_POST['i_email'];
$phone = $_POST['i_phone'];
$stmt4->execute();

$stmt4->close();

$stmt5 = $conn->prepare("INSERT INTO Classes (cname, instructor_id, schedule, capacity) VALUES (?, ?, ?, ?)");
$stmt5->bind_param("sisi", $name, $instructor_id, $schedule, $capacity);

// Set parameters
$name = $_POST['cname'];
$instructor_id = $_POST['instructor_id'];
$schedule = $_POST['schedule'];
$capacity = $_POST['capacity'];
$stmt5->execute();

$stmt5->close();

$stmt6 = $conn->prepare("INSERT INTO Attendance (member_id, class_id, date_attended) VALUES (?, ?, ?)");
$stmt6->bind_param("iis", $member_id, $class_id, $date_attended);

// Set parameters
$member_id = $_POST['member_id'];
$class_id = $_POST['class_id'];
$date_attended = $_POST['date_attended'];
$stmt6->execute();

$stmt6->close();

$stmt7 = $conn->prepare("INSERT INTO Payments (member_id, amount, payment_date, payment_method) VALUES (?, ?, ?, ?)");
$stmt7->bind_param("idss", $member_id, $amount, $payment_date, $payment_method);

// Set parameters
$member_id = $_POST['member_id'];
$amount = $_POST['amount'];
$payment_date = $_POST['payment_date'];
$payment_method = $_POST['payment_method'];
$stmt7->execute();

$stmt7->close();

echo "Registration successful";
// Close statement and connection
$conn->close();
?>