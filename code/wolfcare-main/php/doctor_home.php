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
</html>