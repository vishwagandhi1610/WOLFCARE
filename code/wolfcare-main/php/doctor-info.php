<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/doctor_info.css"/>
    <title><?php echo $_SESSION['doc_info']['doc_fname']." ".$_SESSION['doc_info']['doc_lname']; ?></title>
</head>
<body>
    <header>Wolf Care</header>
    <div class="topnav">
        <a href="temp_homepage2.php" id="back-btn">Back</a>
        <form method="post">
        <!-- <input type="text" name="search-bar" id="search-bar" placeholder="Enter location or type" onkeyup="showUser(this.value)"> -->
        <!-- <input type="submit" name="search" value="Search" id="search"> -->
        </form>
        <a href="profile.php"><?php echo $_SESSION['name'];?></a>
      
    </div>
    
    <!-- Div that displays the doctors info -->
    <div class="container"> 
        <div class="details">Doctor - Info</div>
        <div id="doc-img"><img src="../images/doc-img.jpg" /></div>
        <p id="name">Doctor : &nbsp &nbsp<b><?php echo $_SESSION['doc_info']['doc_fname']." ".$_SESSION['doc_info']['doc_lname']; ?></b></p>
        <p id="desig">Type : &nbsp &nbsp<b><?php echo $_SESSION['doc_info']['doc_type']; ?></b></p>
        <p id="yoe">Experience : &nbsp &nbsp<b><?php echo $_SESSION['doc_info']['doc_yoe']; ?></b></p>
        <p id="phone">Phone : &nbsp &nbsp<b><?php echo $_SESSION['doc_info']['doc_phone']?></b></p>
        <p id="loc">Location : &nbsp &nbsp<b><?php echo $_SESSION['doc_info']['doc_location']; ?></b></p>
        <!-- <p id="head">Book Appointment</p> -->
        <form action="appoint-book.php" method="post">
            <label for="time" id="time">Enter Time :</label>
            <input type="time" id="appt" name="time" min="08:00" max="17:00"  required>
            <br>
            <label for="date" id="date">Enter date:</label>
            <input type="date" id="start" name="date"
                min="2020-11-12" max="2024-12-31" required>
            <br><br>
            <input type="submit" id="book-btn" value="Book Appointment">
        </form>    
    </div>


</body>
</html>
