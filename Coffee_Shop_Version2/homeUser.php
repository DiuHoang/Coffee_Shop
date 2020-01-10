<?php
    require "query.php";
    if(isset($_SESSION['user']) == false){
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
    <link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>
    <div class="header"></div>
    <div class="line-header">
        <a href="index.php"><h3>Home</h3></a>
        <a href="#"><h3>About Us</h3></a>
        <a href="#"><h3>Private Label</h3></a>
        <img src="Images/cafe-tron.jpg"/>
        <a href="#"><h3>Products</h3></a>
        <a href="#"><h3>Coffee HD</h3></a>
        <a href="#"><h3>Contact Us</h3></a>
        <b><h3 class="hello">Hello  <?php echo $userIn->getFullName(); ?></h3></b>
        <form action="listOrder.php" method="post"><button name="btn-list">Order List</button></form>
    </div>

    
    <form action="" method="post" id="products-form">
        <div class="cafe-container">
            <?php 
                for($i = 0; $i < count($cofees); $i++){
            ?>
                <div class="item-cafe">
                    <img class="item-cafe-icon" src=<?php echo $cofees[$i]->getImagePath(); ?>>
                    <p class="item-cafe-name"><?php echo $cofees[$i]->name ?></p>
                    <p class="item-cafe-price"><?php echo $cofees[$i]->price." "."$" ?></p>
                    <p class="item-cafe-size"><?php echo "Size: ".$cofees[$i]->size ?></p>
                    <form action="listOrder.php" method="post"><button name="id" value="<?php echo $cofees[$i]->id; ?>" class="item-cafe-save" onclick="onOrderClicked()">Order</button></form>
                </div>
            <?php
                }
            ?>
        </div>
    </form>

    <div class="line-footer">
        <h3>My Coffee Shop</h3>
    </div>
    <script src="index.js"></script>
</body>
</html>