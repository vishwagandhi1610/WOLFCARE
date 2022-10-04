<?php
    $host="localhost";
    $user="root";
    $password="";
    $con=mysqli_connect($host,$user,$password);

    if($con){
        echo '<h1>Connected to MySQL Server</h1>';
    }
    else{
        echo '<h1>Not Connected to MySQL Server</h1>';
    }

    $sql = "CREATE DATABASE php_sql";
    $retval = mysqli_query($con,$sql);
    if($retval){
        echo "hi";
    }
    else{
        echo "bye";
    }
    mysqli_close($con);
?>