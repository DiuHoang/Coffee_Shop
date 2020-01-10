<?php
    require "query.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Shop - Hoang Diu</title>
    <link rel="stylesheet" type="text/css" href="sty.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <img id="header-img" src="Images/header.jpg"/>
    <div class="line-header">
        <a href="#"><h3>Home</h3></a>
        <a href="#"><h3>About Us</h3></a>
        <a href="#"><h3>Private Label</h3></a>
        <img src="Images/cafe-tron.jpg"/>
        <a href="#"><h3>Products</h3></a>
        <a href="#"><h3>Coffee HD</h3></a>
        <a href="#"><h3>Contact Us</h3></a>
    </div>
    <div class="container" id="modalLoginRegister" >
        <div class="row" style="margin-top:20px">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form role="form" action="" method="post">
                    <fieldset>
                        <h2>Please Sign In</h2>
                        <hr class="colorgraph">
                        <div class="form-group">
                            <input type="text" name="username" id="name" class="form-control input-lg" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                        </div>
                        <span class="button-checkbox">
                            <button type="button" class="btn" data-color="info">Remember Me</button>
                            <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
                            <a href="" class="btn btn-link pull-right">Forgot Password?</a>
                        </span>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input name="login" type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="register.php" class="btn btn-lg btn-primary btn-block">Register</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        
        </div>
    <div class="line-footer">
        <h3>My Coffee Shop</h3>
    </div>
</body>
</html>