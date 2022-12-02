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
                        <form action="doctor_update.php" method="post">
                        <div class="form-group">
                                <label for="doc_id">Doctor Id</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="doc_id"
                                    name="doc_id"
                                    readonly
                                    value = "<?php echo $res['doc_id'] ; ?>"
                                />
                            </div>
                            <div class="form-group">
                                <label for="firstname">First Name </label>
                                <input
                                type="text"
                                class="form-control"
                                id="firstName"
                                name="firstName"
                                value = "<?php echo $res['doc_fname'] ; ?>"
                                />
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="lastName"
                                    name="lastName"
                                    value = "<?php echo $res['doc_lname'] ; ?>"
                                />
                            </div>
                            <div class="form-group">
                                <label for="doc_type">Doctor Type</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="doc_type"
                                    name="doc_type"
                                    value = "<?php echo $res['doc_type'] ; ?>"
                                />
                            </div>
                            <div class="form-group">
                                <label for="number">Phone Number</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="number"
                                    name="number"
                                    value = "<?php echo $res['doc_phone'] ; ?>"
                                />
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="location"
                                    name="location"
                                    value = "<?php echo $res['doc_location'] ; ?>"
                                />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value = "<?php echo $res['email'] ; ?>"
                                />
                            </div>
                            <input type="submit" name="done" value="Update" class="btn btn-primary" />
                            <a href="doctor_home.php" class="btn btn-success"  style="float:right;" style="color:white">Back</a>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>