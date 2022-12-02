<?php
    session_start();
    include 'functions.php';
    // create_database();
    $email = $_POST['email'];
    $_SESSION['homepage'] = $email;
    $query = $email;
    homepage_doc_info();
    $passwords = $_POST['passwords'];
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,'kj_mini');
    $sql = "select * from doctors where email='$email' && pass_word='$passwords'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['doctor_id']  = $row['doc_id'];
    $_SESSION['fname']  = $row['doc_fname'];
    $_SESSION['lname']  = $row['doc_lname'];

?>