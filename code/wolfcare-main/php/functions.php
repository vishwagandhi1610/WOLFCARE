<?php
    session_start();
    $homepage_user = " no data yet";
    $_SESSION['search-results'] = "";
    $_SESSION['doctor-info'] ="jksanj";
    //Function that creates database and tables
    function create_database(){
        $home_page_user = "";
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "CREATE DATABASE kj_mini";
        mysqli_query($conn, $sql);
        $conn = mysqli_connect($servername, $username, $password,"kj_mini");
        $sql = "CREATE TABLE Users(
            username VARCHAR(25) PRIMARY KEY,
            first_name VARCHAR(25) NOT NULL,
            last_name VARCHAR(25) NOT NULL,
            phone int(10) NOT NULL,
            gender varchar(7) NOT NULL,
            email varchar(25) NOT NULL,
            pass_word varchar(25) NOT NULL
        )";
        

        if(mysqli_query($conn,$sql)){
            $sql = "CREATE TABLE Doctors(
                doc_id int(6) PRIMARY KEY,
                doc_fname VARCHAR(25) NOT NULL,
                doc_lname VARCHAR(25) NOT NULL,
                doc_type VARCHAR(25) NOT NULL,
                doc_phone VARCHAR(25) NOT NULL,
                doc_location VARCHAR(25) NOT NULL,
                -- doc_degree VARCHAR(25) NOT NULL,
                doc_yoe int(3) NOT NULL
            )";
            mysqli_query($conn,$sql);
    
            $sql = "CREATE TABLE Appointment( 
                id INT(6), 
                username VARCHAR(25), 
                doc_id int(6), 
                apoin_date DATE NOT NULL, 
                apoin_time TIME NOT NULL,
                CONSTRAINT fk_doc_id FOREIGN KEY (id)
                REFERENCES Doctors(doc_id),
                CONSTRAINT fk_username FOREIGN KEY (username)
                REFERENCES Users(username)
            )";
            
    
            mysqli_query($conn,$sql);
            mysqli_close($conn);
        }
      
        
    }

    function get_doc_info($doc_id,$search_results){
        $servername="localhost";
        $username="root";
        $password = "";
        $dbname="kj_mini";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        $sql = "SELECT * FROM Doctors
                WHERE doc_id='$doc_id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION['search-results'] = $search_results;
        $row = array($row['doc_fname'],$row['doc_lname'],$row['doc_type'],$row['doc_yoe'],$doc['doc_phone'],$row['doc_location']);
        $_SESSION['doctor-info']=$row;      
        header('location: doctor_info.php');
        
    }

    

    function homepage_user_info(){
        $servername="localhost";
        $username="root";
        $password = "";
        $dbname="kj_mini";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        // echo $_SESSION['homepage'];
        $homepage = $_SESSION['homepage'];
        $sql = "SELECT * FROM Users
                WHERE email = '$homepage'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $user = array($row['username'],$row['first_name'],$row['last_name']);
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['first_name']." ".$row['last_name'];
        
    }

    function check_working($check_text){
        echo $check_text;
    
        
    }

    function set_result(){
        return -1;
    }
?>