<?php
$host = "localhost";
$user="root";
$password="";
$d = "php_sql";
$con=mysqli_connect($host,$user,$password,$d);
if($con){
    echo "<h1>Connected to MYSQL</h1>";
}
else{
    echo "<h1>Not connected</h1>";
}
$sql="CREATE TABLE persons(
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    passwords VARCHAR(30) NOT NULL,
    phone_number BIGINT(10)
    )";
$retval = mysqli_query($con,$sql);
if($retval){
    echo "<h7>table created</h7>";
}
else{
    echo "<h7> table already created</h7>";
}

?>
