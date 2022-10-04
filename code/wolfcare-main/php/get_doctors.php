<?php
    $search = $_GET['search'];
    $servername="localhost";
    $username="root";
    $password = "";
    $dbname="kj_mini";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM Doctors 
            WHERE doc_location LIKE '%".$search."%'";
    $result = mysqli_query($conn,$sql);
    // $doctors = array();
    $i =0;
    
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $doc_name = $row['doc_fname']." ".$row['doc_lname'];
                $doc_type = " ".$row['doc_type'];
                $doc_yoe = "Years of experience: ".$row['doc_yoe'];
                $doc_location = "Clinic: ".$row['doc_location'];
                $doc_phone = "Contact: ".$row['doc_phone'];
                
                echo "<div class='container'>
                        
                            <div id='designation'>
                                <div class='name'><p id='name'>".$doc_name.",</p></div>
                                <div class='type'><p id='type'>".$doc_type."</p></div>
                            </div>

                            <div id='additional-info'>
                                <div class='location'><p id='location'>".$doc_location."</p></div>
                                <div class='yoe'><p id='yoe'>".$doc_yoe."</p></div>
                            </div> 
                            <div id='contact'>
                                <p id='phone'>".$doc_phone."</p>
                            </div> 
                            <button id='book-but' name='book-btn' value=".$row['doc_id'].">Book Appointment</button>
                            
                            
                        </div>";
                
            // array_push($doctors,$text);
            // $doctors[$i][0] = $row["doc_fname"];
            // $doctors[$i][1] = $row["doc_lname"];
            // $doctors[$i][2] = $row["doc_location"];
            // $doctors[$i][3] = $row["doc_phone"];
            // $doctors[$i][4] = $row["doc_type"];
            // $doctors[$i][5] = $row["doc_yoe"];
            $i = $i + 1;
            
        }           
        // return $doctors;
        
        
    }else{
        $sql = "SELECT * FROM Doctors 
            WHERE doc_type LIKE '%".$search."%'";
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
        
            while($row = mysqli_fetch_assoc($result)){
                $doc_name = $row['doc_fname']." ".$row['doc_lname'];
                $doc_type = " ".$row['doc_type'];
                $doc_yoe = "Years of experience: ".$row['doc_yoe'];
                $doc_location = "Clinic: ".$row['doc_location'];
                $doc_phone = "Contact: ".$row['doc_phone'];
                
                echo "<div class='container'>
                        
                        <div id='designation'>
                            <div class='name'><p id='name'>".$doc_name.",</p></div>
                            <div class='type'><p id='type'>".$doc_type."</p></div>
                        </div>
                        <div id='additional-info'>
                            <div class='location'><p id='location'>".$doc_location."</p></div>
                            <div class='yoe'><p id='yoe'>".$doc_yoe."</p></div>
                        </div> 
                        <div id='contact'>
                            <p id='phone'>".$doc_phone."</p>
                        </div> 
                        
                        <button id='book-but' name='book-btn' value=".$row['doc_id']." >Book Appointment</button>

                        
                        </div>";
                
                // array_push($doctors,$text);
                // $doctors[$i][0] = $row["doc_fname"];
                // $doctors[$i][1] = $row["doc_lname"];
                // $doctors[$i][2] = $row["doc_location"];
                // $doctors[$i][3] = $row["doc_phone"];
                // $doctors[$i][4] = $row["doc_type"];
                // $doctors[$i][5] = $row["doc_yoe"];
                $i = $i + 1;
            }
            // return $doctors;

        }else{
            echo "No Data Found";
        }

                    
    }
    // mysqli_close($conn);        
    
?>