<?php
    if (isset($_POST['done'])){
        session_start();
        $user = $_SESSION['doctor_id'];
        $servername="localhost";
        $username="root";
        $password = "";
        $dbname="kj_mini";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        //$username = $_POST['userName'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $doc_type = $_POST['doc_type'];
        $location = $_POST['location'];
        $sql = "UPDATE doctors SET doc_fname='$firstName',doc_lname='$lastName',doc_phone='$number',email='$email', doc_location='$location',doc_type='$doc_type' WHERE doc_id='$user'";
        $query = mysqli_query($conn,$sql);
        
        echo $query;
        echo '<script type="text/javascript">'; 
        echo 'alert("Profile Updated");'; 
        echo 'window.location.href = "doctor_profile.php";';
        echo '</script>';
    }
    
?>