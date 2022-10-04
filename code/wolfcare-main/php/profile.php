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
                        <h1>Profile</h1>
                    </div>
                    <div class="panel-body"> 
                        <?php
                            session_start();
                            $user = $_SESSION['username'];
                            $servername="localhost";
                            $username="root";
                            $password = "";
                            $dbname="kj_mini";
                            $conn = mysqli_connect($servername,$username,$password,$dbname);

                            $sql = "SELECT * FROM users WHERE username = '$user'";

                            $query = mysqli_query($conn,$sql);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                        ?>
                        <form action="update.php" method="post">
                            <div class="form-group">
                                <label for="firstname">First Name </label>
                                <input
                                type="text"
                                class="form-control"
                                id="firstName"
                                name="firstName"
                                value = "<?php echo $res['first_name'] ; ?>"
                                />
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="lastName"
                                    name="lastName"
                                    value = "<?php echo $res['last_name'] ; ?>"
                                />
                            </div>
                            <div class="form-group">
                                <label for="userName">UserName</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="userName"
                                    name="userName"
                                    readonly
                                    value = "<?php echo $res['username'] ; ?>"
                                />
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="gender"
                                    value = "<?php echo $res['gender'] ; ?>"
                                    readonly
                                />
                            </div>
                            <div class="form-group">
                                <label for="number">Contact Details</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="number"
                                    name="number"
                                    value = "<?php echo $res['phone'] ; ?>"
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
                            <a href="temp_homepage2.php" class="btn btn-success"  style="float:right;" style="color:white">Back</a>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>