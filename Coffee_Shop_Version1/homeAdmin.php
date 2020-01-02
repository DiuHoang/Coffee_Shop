<?php
    require "database.php";
    require "Model/CafeNormal.php";

    if(isset($_POST["id"])){
		$id = $_POST["id"];
		$sql = "DELETE from products where id = ".$id;
        $db->query($sql);
	}
    
    if(isset($_POST['edit-id'])){
		$sql = "SELECT * FROM products WHERE id =" .$_POST['edit-id'];
		$result = mysqli_query($db, $sql);
        $cofees = mysqli_fetch_array($result);
        
        //Update Information
        if(isset($_POST['btn-update'])){
            $name = $_POST['name-pro'];
            $price = $_POST['price-pro'];
            $size = $_POST['size-pro'];
            $update = "UPDATE products SET name='$name', price='$price', size='$size' WHERE id =".$_POST['edit-id'];
            echo $update;
            $up = mysqli_query($db, $update);
        }
    }

    $sql = "SELECT * from products";
	$result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
	$cofees = array();
	for($i = 0; $i < count($result); $i++) {
		$cofee = $result[$i];
			array_push($cofees, new Cafe($cofee['id'], $cofee['name'], $cofee['price'], $cofee['size'], $cofee['image']));
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <button>Order List</button>
        <form action="add.php" method="post"><button>Add Cafe</button></form>
    </div>

    <form action="" method="post">
        <h1>Edit Product</h1>
        <label>Name:</label><input type="text" name="name-pro" value="<?php echo $cofees['name']; ?>"><br/><br/>
        <label>Price:</label><input type="text" name="price-pro"  value="<?php echo $cofees['price']; ?>"><br/><br/>
        <label>Size:</label><input type="text" name="size-pro" value="<?php echo $cofees['size']; ?>"><br/><br/>
        <button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
    </form>
    
    <form action="" method="post">
        <div class="cafe-container">
            <?php 
                for($i = 0; $i < count($cofees); $i++){
            ?>
                <div class="item-cafe">
                    <img class="item-cafe-icon" src=<?php echo $cofees[$i]->getImagePath(); ?>>
                    <p class="item-cafe-name"><?php echo $cofees[$i]->name ?></p>
                    <p class="item-cafe-price"><?php echo $cofees[$i]->price." "."$" ?></p>
                    <p class="item-cafe-size"><?php echo "Size: ".$cofees[$i]->size ?></p>
                    <form method="post"><button class="item-cafe-edit" name="edit-id" value="<?php echo $cofees[$i]->id; ?>" onclick="onEditClicked()">Edit</button></form>
                    <button class="item-cafe-delete" name='id' value="<?php echo $cofees[$i]->id; ?>">Delete</button>
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