<?php
    session_start();
    $doc_id = $_GET['book-btn'];
    $servername="localhost";
    $username="root";
    $password = "";
    $dbname="kj_mini";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $sql = "SELECT * FROM doctors 
            WHERE doc_id = '$doc_id'";
    $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
    $_SESSION['doc_info'] = $row;
    echo $_SESSION['doc_info']['doc_lname'];
    header('location: doctor-info-admin.php'); 
?>
