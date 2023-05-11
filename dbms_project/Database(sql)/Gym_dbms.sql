CREATE DATABASE gym_management;

USE gym_management;

CREATE TABLE Members (
  member_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  membership_status ENUM('Active', 'Inactive') NOT NULL
);


CREATE TABLE Equipment (
  equipment_id INT AUTO_INCREMENT PRIMARY KEY,
  ename VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
  quantity INT NOT NULL,
  equiptmentCondition ENUM("Good", "Fair", "Poor") NOT NULL 
);

CREATE TABLE Maintenance (
  maintenance_id INT AUTO_INCREMENT PRIMARY KEY,
  equipment_id INT NOT NULL,
  maintenance_date DATE NOT NULL,
  maintenance_time TIME NOT NULL,
  m_description VARCHAR(255) NOT NULL,
  FOREIGN KEY (equipment_id) REFERENCES Equipment(equipment_id)
);

CREATE TABLE Instructors (
  instructor_id INT AUTO_INCREMENT PRIMARY KEY,
  i_name VARCHAR(255) NOT NULL,
  i_email VARCHAR(255) NOT NULL,
  i_phone VARCHAR(20) NOT NULL
);

CREATE TABLE Classes (
  class_id INT AUTO_INCREMENT PRIMARY KEY,
  cname VARCHAR(255) NOT NULL,
  instructor_id INT NOT NULL,
  schedule DATETIME NOT NULL,
  capacity INT NOT NULL,
  FOREIGN KEY (instructor_id) REFERENCES Instructors(instructor_id)
);

CREATE TABLE Attendance (
  attendance_id INT AUTO_INCREMENT PRIMARY KEY,
  member_id INT NOT NULL,
  class_id INT NOT NULL,
  date_attended DATE NOT NULL,
  FOREIGN KEY (member_id) REFERENCES Members(member_id),
  FOREIGN KEY (class_id) REFERENCES Classes(class_id)
);

CREATE TABLE Payments (
  payment_id INT AUTO_INCREMENT PRIMARY KEY,
  member_id INT NOT NULL,
  amount DECIMAL(10, 2) NOT NULL,
  payment_date DATE NOT NULL,
  payment_method ENUM('Credit Card', 'Debit Card', 'Cash') NOT NULL,
  FOREIGN KEY (member_id) REFERENCES Members(member_id)
);

drop table Members;
drop table Equipment;
drop table Maintenance;
drop table Instructors;
drop table Classes;
drop table Attendance;
drop table Payments;

SELECT * FROM Members;
SELECT * FROM Equipment;
SELECT * FROM Maintenance;
SELECT * FROM Instructors;
SELECT * FROM Classes;
SELECT * FROM Attendance;
SELECT * FROM Payments;