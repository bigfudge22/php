<?php
$servername = "localhost";
$username = "root";
$password = "mysql1234";
$dbname  = "Quests";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Quests (Qid, Qname,Qnum)
VALUES (null, '${Name}', '${phone}')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>