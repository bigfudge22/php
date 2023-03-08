<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script differ src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<?php

    require('db.php');
   
    session_start();
    $succesful =0 ;

    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        
        $password = mysqli_real_escape_string($con,$password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `user` WHERE username='$username'
                     AND password='$password'";
                    
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows >0) {
            $_SESSION["username"] = $username;
            $_SESSION["login"] =1;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            $succesful =1 ;
        }
    } else 
?>

    <div class="wrapper">
        <?php if ($succesful ==1){
            ?>

    <div class='alert alert-warning alert-dismissible fade show' role='alert' >
            <strong>Sorry</strong> You should check in on some of those fields below.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  
                  </div>

                  <?php } ?>
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
            <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>

        </form>
       
    </div>
</body>
</html>