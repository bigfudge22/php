<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<?php include 'login copy.php';?>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "mysql1234", "Quests");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Name = $_REQUEST['Name'];
		$phone = $_REQUEST['phone'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO Quests VALUES (null,'$Name',
			'$phone')";
		
		
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
