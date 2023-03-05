<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
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
    <div class="wrapper">
        <div class="logo">
            <img src="AdsHub-logo.png">
        </div>
        <div class="text-center mt-4 name">
            AdsHub
        </div>
        <form class="p-3 mt-3" action="index.php" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="Name" id="Name" placeholder="Name">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="tel" name="phone" id="pwd" placeholder="Number">
            </div>
            <input class="btn mt-3" type="submit">
        </form>
       
    </div>
</body>
</html>