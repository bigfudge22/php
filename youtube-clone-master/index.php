<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>AdsHub</title>
    <link rel="shortcut icon" href="AdsHub-logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php
    session_start();
    
    
    $_SESSION["username"] =$username;
     if(!$_SESSION["login"]) {
         $url="http://localhost:8888/youtube-clone-master/login-copy.php";             
        
              
           } else{
           $url="https://www.youtube.com/watch?v=FNhjbNQ8Sik";

           }
    
?>
    <div class="header" style="background-color:#fff;">
        <div class="logo-container center"  >
            
            <div class="logo" >
              <!--  <div class="logo-img border" >
                    <img   src="AdsHub-logo.png" alt="">
                </div> -->
                <h1 style="color: #373737;" id="logo-txt">AdsHub</h1>
            </div>
        </div>
        
        
    </div>
    <div class="body-container" >
        <div class="sidebar" style="background-color:#ECF0F3;">
        <div class="sidebar-items" style="color: #080608;">
                <a class="sidebar-item"><i class="ri-home-5-line"></i></i>Home</a>
                <a class="sidebar-item"><i class="ri-compass-3-line"></i>Explore</a>
                
                
                <button class="dropdown-btn">MY Profile 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Subscription</a>
    <a href="#">Counter</a>
    <a href="#">Log out</a>
  </div>

            </div>
        </div>
        <div class="content">
        
            <div class="video-container" style="background-color:#c0d5e6 ;border-style: solid; border-color:#E7E1E1;">
                <div class="video-content-cover">
                    <div class="video-content">
                    
                    <a href="<?php echo $url;?>" class="video-box">

                            <img src="2.gif" alt="">
                 </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="7.jpeg" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title" >ZAIN</h3>
                                <div class="channel-name">Zain TM</div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="https://www.youtube.com/watch?v=FNhjbNQ8Sik" class="video-box">
                            <img src="./1.gif" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="6.jpeg" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">COCACOLA</h3>
                                <div class="channel-name">DAL TM</div>
                                

                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="https://www.youtube.com/watch?v=FNhjbNQ8Sik" class="video-box">
                            <img src="4.gif" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="arak.jpeg" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">PEPSI</h3>
                                <div class="channel-name">ARAK TM</div>
                                

                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="https://www.youtube.com/watch?v=FNhjbNQ8Sik" class="video-box">
                            <img src="3.gif" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="5.JPG" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">KFC</h3>
                                <div class="channel-name">KFC TM</div>
                                

                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="https://www.youtube.com/watch?v=FNhjbNQ8Sik" class="video-box">
                            <img src="8.gif" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="9.jpeg" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">JUST DO IT</h3>
                                <div class="channel-name">NIKE TM</div>
                               

                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="https://www.youtube.com/watch?v=FNhjbNQ8Sik" class="video-box">
                            <img src="pizza.gif" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="pizza.jpeg" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">PIZZA</h3>
                                <div class="channel-name">PizzaHut TM</div>
                               

                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="https://www.youtube.com/watch?v=FNhjbNQ8Sik" class="video-box">
                            <img src="2.gif" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="7.jpeg" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title" >ZAIN</h3>
                                <div class="channel-name">Zain TM</div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="https://www.youtube.com/watch?v=FNhjbNQ8Sik" class="video-box">
                            <img src="./1.gif" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="6.jpeg" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">COCACOLA</h3>
                                <div class="channel-name">DAL TM</div>
                                

                            </div>
                        </div>
                        
                    </div>
                </div>
               
               
            </div>
        </div>
    </div>
    <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</body>

</html>