<!DOCTYPE html>
<html>
<head>
	<title>Gym Management System</title>
	<style>
		body {
			background-color: #D3D3D3;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			text-align: center;
		}

		.heading {
			font-size: 32px;
			font-weight: bold;
			margin-bottom: 20px;
		}

		.table-heading {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}

		.data-table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}

		.data-table th,
		.data-table td {
			padding: 10px;
			border: 1px solid #000;
		}

		.data-table th {
			background-color: #555;
			color: #fff;
		}

		.data-table tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		.data-table tr:hover {
			background-color: #ddd;
		}
        .gym-logo {
			position: absolute;
			top: 10px;
			left: 10px;
			max-width: 100px;
		}
	</style>
</head>
<body>
	<div class="container">
    <img src="gym-image.png" alt="Gym" class="gym-logo">
		<h1 class="heading">Gym Management System</h1>

		<div>
			<h2 class="table-heading">Members Table Data</h2>
			<?php
			require_once "connection.php";

			$sql = "SELECT * FROM Members";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo '<table class="data-table">';
				echo '<tr>
						<th>Member ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Membership Status</th>
					</tr>';

				while ($row = $result->fetch_assoc()) {
					echo '<tr>
							<td>' . $row["member_id"] . '</td>
							<td>' . $row["name"] . '</td>
							<td>' . $row["email"] . '</td>
							<td>' . $row["phone"] . '</td>
							<td>' . $row["membership_status"] . '</td>
						</tr>';
				}
				echo '</table>';
			} else {
				echo "No members found.";
			}

			
			?>
		</div>
		<div>
			<h2 class="table-heading">Equipments Table Data</h2>
			<?php
            // Fetch data from Equipment table
			$sql = "SELECT * FROM Equipment";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo '<table class="data-table">';
				echo '<tr>
						<th>Equipment ID</th>
						<th>Name</th>
						<th>Description</th>
						<th>Quantity</th>
						<th>Equipment Condition</th>
					</tr>';

				while ($row = $result->fetch_assoc()) {
					echo '<tr>
							<td>' . $row["equipment_id"] . '</td>
							<td>' . $row["ename"] . '</td>
							<td>' . $row["description"] . '</td>
							<td>' . $row["quantity"] . '</td>
							<td>' . $row["equiptmentCondition"] . '</td>
						</tr>';
				}
				echo '</table>';
			} else {
				echo "No equipment found.";
			}
			?>
		</div>
		<div>
    <h2 class="table-heading">Maintenance Table Data</h2>
    <?php

    // Fetch data from Maintenance table
    $sql = "SELECT * FROM Maintenance";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="data-table">';
        echo '<tr>
                <th>Maintenance ID</th>
                <th>Equipment ID</th>
                <th>Maintenance Date</th>
                <th>Maintenance Time</th>
                <th>Description</th>
            </tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row["maintenance_id"] . '</td>
                    <td>' . $row["equipment_id"] . '</td>
                    <td>' . $row["maintenance_date"] . '</td>
                    <td>' . $row["maintenance_time"] . '</td>
                    <td>' . $row["m_description"] . '</td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo "No maintenance records found.";
    }

    ?>
</div>
<div>
    <h2 class="table-heading">Instructors Table Data</h2>
    <?php

    // Fetch data from Instructors table
    $sql = "SELECT * FROM Instructors";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="data-table">';
        echo '<tr>
                <th>Instructor ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row["instructor_id"] . '</td>
                    <td>' . $row["i_name"] . '</td>
                    <td>' . $row["i_email"] . '</td>
                    <td>' . $row["i_phone"] . '</td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo "No instructors found.";
    }

    ?>
</div>
<div>
    <h2 class="table-heading">Classes Table Data</h2>
    <?php

    // Fetch data from Classes table
    $sql = "SELECT * FROM Classes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="data-table">';
        echo '<tr>
                <th>Class ID</th>
                <th>Name</th>
                <th>Instructor ID</th>
                <th>Schedule</th>
                <th>Capacity</th>
            </tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row["class_id"] . '</td>
                    <td>' . $row["cname"] . '</td>
                    <td>' . $row["instructor_id"] . '</td>
                    <td>' . $row["schedule"] . '</td>
                    <td>' . $row["capacity"] . '</td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo "No classes found.";
    }

    ?>
</div>
<div>
    <h2 class="table-heading">Attendance Table Data</h2>
    <?php

    // Fetch data from Attendance table
    $sql = "SELECT * FROM Attendance";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="data-table">';
        echo '<tr>
                <th>Attendance ID</th>
                <th>Member ID</th>
                <th>Class ID</th>
                <th>Date Attended</th>
            </tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row["attendance_id"] . '</td>
                    <td>' . $row["member_id"] . '</td>
                    <td>' . $row["class_id"] . '</td>
                    <td>' . $row["date_attended"] . '</td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo "No attendance records found.";
    }

    ?>
</div>
<div>
    <h2 class="table-heading">Payments Table Data</h2>
    <?php
    // Fetch data from Payments table
    $sql = "SELECT * FROM Payments";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="data-table">';
        echo '<tr>
                <th>Payment ID</th>
                <th>Member ID</th>
                <th>Amount</th>
                <th>Payment Date</th>
                <th>Payment Method</th>
            </tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row["payment_id"] . '</td>
                    <td>' . $row["member_id"] . '</td>
                    <td>' . $row["amount"] . '</td>
                    <td>' . $row["payment_date"] . '</td>
                    <td>' . $row["payment_method"] . '</td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo "No payment records found.";
    }

    $conn->close();
    ?>
</div>
</body>
</html>