<?php
	include 'functions.php';
	create_database();
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$username = $_POST['userName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$passwords = $_POST['password'];
	$number = $_POST['number'];
	
	$conn = mysqli_connect("localhost","root","","kj_mini");
	// Check connection
	if($conn){
    	echo "<h1>Connected to MYSQL</h1>";
	}
	else{
	    echo "<h1>Not connected</h1>";
	}
	if($gender=="m"){
		$gender="Male";
	}else{
		if($gender=="f"){
			$gender="Female";
		}else{
		$gender="Others";
		}
	}	
	$sql = "INSERT INTO Users VALUES ('$username','$firstName','$lastName','$number','$gender','$email','$passwords')";


	if (mysqli_query($conn, $sql)) 
	{
		header('Location: ../html/login.html');
  		echo "Registration Successful";
	}else{
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>
