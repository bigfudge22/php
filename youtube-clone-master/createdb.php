<?php
$servername = "localhost";
$username = "root";
$password = "mysql1234";
$dbname = "Quests";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Quests (
Qid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Qname VARCHAR(30) NOT NULL,
Qnum VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>