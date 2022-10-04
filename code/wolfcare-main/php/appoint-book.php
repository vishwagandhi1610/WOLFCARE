<?php
    session_start();
    $date = $_POST['date'];
    $time = $_POST['time'].":00";
    $servername="localhost";
    $username="root";
    $password = "";
    $dbname="kj_mini";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $doc_id = $_SESSION['doc_info']['doc_id'];
    $user_name = $_SESSION['username'];

    $sql = "INSERT INTO appointment (username,doc_id,apoin_date,apoin_time) VALUES ('$user_name','$doc_id','$date','$time');";
    $result = mysqli_query($conn,$sql);
    header('location: ../html/Success.html');

?>