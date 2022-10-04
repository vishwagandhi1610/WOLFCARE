<?php
    if (isset($_POST['done'])){
        session_start();
        $user = str_replace(' ', '', $_SESSION['username']);
        $servername="localhost";
        $username="root";
        $password = "";
        $dbname="kj_mini";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $username = $_POST['userName'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $sql = "UPDATE users SET first_name='$firstName',last_name='$lastName',phone='$number',email='$email' WHERE username='$user'";
        $query = mysqli_query($conn,$sql);
        //header('location: profile.php');

        echo '<script type="text/javascript">'; 
        echo 'alert("Profile Updated");'; 
        echo 'window.location.href = "profile.php";';
        echo '</script>';
    }
    
?>