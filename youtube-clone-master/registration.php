<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php
    require('db.php');
   
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
       
       
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        //INSERT INTO `user` (`id`, `username`, `password`) VALUES (NULL, 'admin', '12345');
         $query    ="INSERT INTO `user` (`username`,`password`) VALUES ('$username','$password')";
         // "INSERT INTO `user` (`username`,` password`) VALUES ('$username', '$password')" ;
       
         $result   = mysqli_query($con, $query);

        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login copy.php'>Login</a></p>
                  </div>";
        } 
            else {
                $succesful =1 ;
            }
        }
    ?>
    
        <div class="wrapper">
            <?php if ($succesful ==1){
                ?>
    
        <div class='alert alert-warning alert-dismissible fade show' role='alert' >
                <strong>Sorry</strong> You should check in on some of those fields below.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      
                      </div>
    
                      <?php } ?>
 <div class="wrapper">
        <div class="logo">
            <img src="AdsHub-logo.png">
        </div>
        <div class="text-center mt-4 name">
            AdsHub
        </div>
   <form class="p-3 mt-3"  method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="password">
            </div>
            <input class="btn mt-3" type="submit">
        <p class="link">Already have an account? <a href="login copy.php">Login here</a></p>
    </form>

</body>
</html>
