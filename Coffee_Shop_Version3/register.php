<?php
    require "database.php";

    if (isset($_POST["register"])){
    
        $username = $_POST["username"];
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    	$gender = $_POST["gender"];

		$sql= "INSERT INTO  users values(null, '$username', '$fullName', '$email', '$password', '$gender')";
        $db->query($sql);
        echo "<script> alert(' Registration Succesful'); </script>";
        header("Location: homeUser.php");
    }
    else if($username == "" || $fullName == "" || $email == "" || $password == "" || $gender == ""){
        echo "<script> alert(' Please Enter all Information!'); </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Shop - Hoang Diu</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
            <form action="" method="post" class="form-horizontal" role="form">
                <h2>Please create an account</h2>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">UserName</label>
                    <div class="col-sm-9">
                        <input type="text" id="username" name="username" placeholder="Username" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fullName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="fullName" name="fullName" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">Last Name First Name, eg.: Smith Harry</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="gender" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" name="gender" value="Male">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="uncknownRadio" name="gender" value="Unknown">Unknown
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button name="register" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
</body>
</html>