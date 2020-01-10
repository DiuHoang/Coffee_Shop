<?php
    require "query.php";
    
    if(isset($_POST['id'])){
        $idProduct = $_POST['id'];
        $sql = "INSERT INTO order_list VALUES(null, ".$userIn->getIdUser().", ".$idProduct.", 1)";
        $db->query($sql); 
    }
    $sql = "SELECT * FROM order_list where id=".$idProduct ;
    $orders = $db->query($sql)->fetch_all();
    
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
        <form action="homeUser.php" method="post"><button name="btn-list">Home</button></form>
    </div>
    <div><h3>            ----------------List product ordered-----------</h3></div>
    
    <form action="" method="post" id="products-form">
        <div class="cafe-container">
            <?php 
                for($i = 0; $i < count($orders); $i++){
                    if($order[$i] == $idProduct){
            ?>
                <div class="item-cafe">
                    
                    <p class="item-cafe-name"><?php echo $orders[$i]?></p>
                    <p class="item-cafe-price"><?php echo $orders[$i]->quantity ?></p>
                    
                    <form action="listOrder.php" method="post"><button name="id" value="<?php echo $orders[$i]->id; ?>" class="item-cafe-save" onclick="onOrderClicked()">Order</button></form>
                </div>
            <?php
                }
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