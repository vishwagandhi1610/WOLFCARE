
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="stylesheets/first.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script>
      alert("<?php echo 'Kedar';?>");
    </script>
  </head>
  <body>
    <header>My Doctor</header>
    <div class="topnav">
      <a href="../html/index.html" id="home-button">Home</a>
      <a href="#about">Name</a>

      <a href="#news">News</a>
      <a href="#contact">Contact</a>
    </div>
    <div class="user-info">
      <p><img src="../images/user2.png" id="user-profile" /></p>
      <a href="../html/userinfo.html" id="user-name">Name</a>
      <a href="../html/upcoming.html" id="upcoming-appintments">Upcoming</a>
      <a href="../html/previous.html" id="previous-appointments">Previous</a>
      <a href="../html/homepage.html">Log-out</a>
    </div>
    <div class="main">
      <?php 
        for($i=0;$i<=4;$i++){
          echo "<div id='container-doctor'></div>";
        }
      ?>
    </div>
  </body>
</html>
