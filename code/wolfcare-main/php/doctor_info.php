<?php
  
  include 'php\functions.php';
  $user = homepage_user_info();
  // $doctor_info = 
  // echo $doctor_info;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../stylesheets/doctor_info.css" />
</head>
<body>
    <header>My Doctor</header>
    <div class="topnav">
      <a href="../html/homepage.html" id="home-button">Home</a>
     
      <a href="#about"><?php echo $user[1]." ".$user[2];?></a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
      
    </div>
    <div class="doctor_info">
        
    </div>
</body>
</html>