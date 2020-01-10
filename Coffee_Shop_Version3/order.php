<?php
    require "query.php";
    $userIn = $_SESSION['user'];

    $orders = array();
    $idProduct = 0;
    if(isset($_POST['order-id'])){
        $idProduct = $_POST['order-id'];
        $sql = "SELECT * FROM products where id=".$idProduct;
        $orders = $db->query($sql)->fetch_all();
        
    }  
    
    if(isset($_POST['btn-pay'])){
        
        $name_cus = $_POST['name-cus'];
        $address_cus = $_POST['address-cus'];
        $phone_cus = $_POST['phone-cus'];
        $size_product = $_POST['size-product'];
        $quantity_product = $_POST['quantity-product'];

        $sql = "INSERT INTO orders VALUES (null, '".$name_cus."', '".$address_cus."', ".$phone_cus.", '".$size_product."', ".$quantity_product.", ".$_POST['btn-pay'].")";
        $ordered = $db->query($sql);
        
    }
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
        <a href="homeUser.php"><h3>Home</h3></a>
        <a href="#"><h3>About Us</h3></a>
        <a href="#"><h3>Private Label</h3></a>
        <img src="Images/cafe-tron.jpg"/>
        <a href="#"><h3>Products</h3></a>
        <a href="#"><h3>Coffee HD</h3></a>
        <a href="#"><h3>Contact Us</h3></a>
        <b><h3 class="hello">Hello  <?php echo $userIn->getFullName(); ?></h3></b>
    </div>
    <form action="" method="post">
    <h1>You chose this product!!</h1>
        <div class="cafe-order ">
            <?php 
                for($i = 0; $i < count($orders); $i++){
            ?>
                <div >
                    <img class="cafe-order-icon" src=<?php echo $orders[$i][4]; ?>>
                    <p ><?php echo $orders[$i][1] ?></p>
                    <p ><?php echo $orders[$i][2]."$" ?></p>
                    <p ><?php echo "Size: ".$orders[$i][3] ?></p>
                    <h1>Enter your information to order!!</h1>
                    <label>Your Name <b style="color: red;">(*)</b>:</label><input type="text" name="name-cus" placeholder="Enter your name"><br/><br/>
                    <label>Your Address <b style="color: red;">(*)</b>:</label><input type="text" name="address-cus" placeholder="Enter your address"><br/><br/>
                    <label>Your Phone <b style="color: red;">(*)</b>:</label><input type="text" name="phone-cus" placeholder="Enter your phone"><br/><br/>
                    <label>Size of Product:</label><input type="text" name="size-product" value="<?php echo "Size ".$orders[$i][3] ?>"><br/><br/>
                    <label>Quantity of Product:</label><input type="text" name="quantity-product" placeholder="Enter quantity of product"><br/><br/>
                    <button type="submit" name="btn-pay" value="<?php echo $idProduct; ?>"><strong>Payment</strong></button>
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