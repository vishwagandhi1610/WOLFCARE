<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="../stylesheets/temp_homepage2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <script>
      function showUser(str) {
        
        if (str == '') {
          document.getElementById("initial").innerHTML = "Try entering something in the search bar";
          return;
        } else { 
          if (window.XMLHttpRequest) {
            // script for browser version above IE 7 and the other popular browsers (newer browsers)
            xmlhttp = new XMLHttpRequest();
          } else {
            // script for the IE 5 and 6 browsers (older versions)
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              // get the element in which we will use as a placeholder and space for table
              document.getElementById("main").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "get_doctors.php?search="+str, true);
          xmlhttp.send();
        }
      }
    </script>
    


  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Wolf Care</h3>
      </div>
      <div class="right_area">
        <form method="post">
        <input type="text" name="search-bar" id="search-bar" placeholder="Enter location or type" onkeyup="showUser(this.value)">
        <!-- <input type="submit" name="search" value="Search" id="search"> -->
      </form>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="1.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-user-circle"></i><span>My Profile</span></a>
        <a href="#"><i class="fas fa-diagnoses"></i><span>Symptoms</span></a>
        <a href="#"><i class="far fa-calendar-check"></i><span>Appointments</span></a>
        <!-- <a href="#"><i class="fas fa-info-circle"></i><span>About us</span></a> -->
        <a href="#"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="../images/user2.png" class="profile_image" alt="">
        <h4><?php echo $_SESSION['name'];?></h4>
      </div>
      <a href="profile.php"><i class="fas fa-user-circle"></i><span>My Profile</span></a>
      <a href="http://127.0.0.1:5500/code/medical-rules/index.html"><i class="fas fa-diagnoses"></i><span>Symptoms</span></a>
      <a href="show_appointments.php"><i class="far fa-calendar-check"></i></i><span>Appointments</span></a>
      <a href="https://demowolf.000webhostapp.com/#c68e2"><i class="far fa-calendar-check"></i><span>Call the Doctor</span></a>
      <!-- <a href="#"><i class="fas fa-info-circle"></i><span>About us</span></a> -->
      <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->


    <!--Content-->
    <form action="get-doctor-info.php" method="get">
    <div class="main" id="main">
      <!-- <i><p id="initial">Try Searching Something</p></i> -->

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
