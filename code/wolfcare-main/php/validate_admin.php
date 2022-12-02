<?php
    session_start();
    include 'functions.php';
    create_database();
    $email = $_POST['email'];
    $_SESSION['homepage'] = $email;
    $query = $email;
    homepage_user_info();
    $passwords = $_POST['passwords'];
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,'kj_mini');
    $sql = "select email,pass_word from admin where email='$email' && pass_word='$passwords'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        header('location: admin_home.php');
    }
    else{
        // echo "<script>alert('wrong password');</script>";
        // header('location: ../html/login.html');
        echo '<script type="text/javascript">'; 
        echo 'alert("Wrong Password");'; 
        echo 'window.location.href = "../html/login.html";';
        echo '</script>';
    }

?>