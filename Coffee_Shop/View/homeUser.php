<?php
require "../Controller/query.php";
if (isset($_SESSION['user']) == false) {
    header("location:login.php");
}
$userIn = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Shop - Hoang Diu</title>
    <link rel="stylesheet" type="text/css" href="../Css/styleContainer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php require "header.php"; ?>
    <b>
        <h3 class="hello">Hello <?php echo $userIn->getFullName(); ?></h3>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="#">
                            <form action="login.php" method="post"><button>Login</button></form>
                        </a></li>
                    <li><a href="#">
                            <form action="register.php" method="post"><button>Register</button></form>
                        </a></li>
                    <li><a href="#">
                            <form action="index.php" method="post"><button>Log Out</button></form>
                        </a></li>
                </ul>
            </div>
        </nav>
    </b>

    <form action="" method="post" id="products-form">
        <div class="cafe-container">
            <?php
            for ($i = 0; $i < count($cofees); $i++) {
            ?>
                <div class="item-cafe">
                    <img class="item-cafe-icon" src=<?php echo $cofees[$i]->getImagePath(); ?>>
                    <p class="item-cafe-name"><?php echo $cofees[$i]->name ?></p>
                    <p class="item-cafe-price"><?php echo number_format($cofees[$i]->price) . "$" ?></p>
                    <p class="item-cafe-size"><?php echo "Size: " . $cofees[$i]->size ?></p>
                    <form action="order.php" method="post" class="item-cafe-button"><button name="order-id" value="<?php echo $cofees[$i]->id; ?>" onclick="onOrderClicked()">Buy Now</button></form>
                </div>
            <?php
            }
            ?>
        </div>
    </form>

    <?php require "footer.php"; ?>
    <script src="index.js"></script>
</body>

</html>