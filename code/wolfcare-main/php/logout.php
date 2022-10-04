<?php
    session_start();
    session_destroy();
    //echo 'You have been logged out.';

    echo '<script type="text/javascript">'; 
    echo 'alert("Logout sucessfullly");'; 
    echo 'window.location.href = "../html/main.html";';
    echo '</script>';
    //header('location: ../html/index.html');
?>