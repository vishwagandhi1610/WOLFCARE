<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="../stylesheets/bootstrap.css" />
    </head>
    <body>
        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>Doctor Profile</h1>
                    </div>
                    <div class="panel-body"> 
                        <?php
                            session_start();
                            //$user = isset($_SESSION['doctor_id']) ? $_SESSION['doctor_id'] : '';
                            $user = $_SESSION['doctor_id'];
                            $servername="localhost";
                            $username="root";
                            $password = "";
                            $dbname="kj_mini";
                            $conn = mysqli_connect($servername,$username,$password,$dbname);

                            $sql = "SELECT * FROM doctors WHERE doc_id = '$user'";

                            $query = mysqli_query($conn,$sql);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                        ?>
                </div>
            </div>
        </div>
    </body>
</html>