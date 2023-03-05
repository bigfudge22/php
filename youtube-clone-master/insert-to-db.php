<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	
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

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (Qid, Qname,Qnum) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $Qid, $Qnmae, $Qnum);

// set parameters and execute
$Qid = null;
$Qname = $Name;
$Qnum =$phone ;
$stmt->execute();


?>
	
</body>

</html>
