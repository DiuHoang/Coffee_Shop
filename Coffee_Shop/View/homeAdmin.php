<?php

require "../Controller/query.php";

if (isset($_SESSION['admin']) == false) {
    header("location:login.php");
}

if (isset($_POST["delete-id"])) {
    $id = $_POST["delete-id"];
    $sql = "DELETE from products where id = " . $id;
    $db->query($sql);
}

// DISPLAY HOME PAGE

$sql = "SELECT * from products";
$result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
$cofees = array();
for ($i = 0; $i < count($result); $i++) {
    $cofee = $result[$i];
    array_push($cofees, new Cafe($cofee['id'], $cofee['name'], $cofee['price'], $cofee['size'], $cofee['image']));
}

if (isset($_POST['edit-id'])) {
    $sql = "SELECT * FROM products WHERE id =" . $_POST['edit-id'];
    $result = mysqli_query($db, $sql);
    $cofees = mysqli_fetch_array($result);
}
//Update Information
if (isset($_POST['btn-update'])) {
    $id = $_POST['no'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $sql = "UPDATE products SET name='$name', price='$price', size='$size' where id = '$id'";
    if ($db->query($sql) === TRUE) {
        header("location:homeAdmin.php");
    } else {
        echo "Error updating record: " . $db->error;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Shop - Hoang Diu</title>
    <link rel="stylesheet" type="text/css" href="../Css/styleHeader.css">
    <link rel="stylesheet" type="text/css" href="../Css/styleContainer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php require "header.php"; ?>
    <b>
        <h3 class="hello">Hello <?php echo "Adminstrator"; ?></h3>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="#">
                            <form action="listOrder.php" method="post"><button>Order List</button></form>
                        </a></li>
                    <li><a href="#">
                            <form action="add.php" method="post"><button>Add Cafe</button></form>
                        </a></li>
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

    <form method="post" id="edit-form">
        <h1>Edit Product</h1>
        <label>No.</label><input readonly name="no" value="<?php echo $cofees['id']; ?>"><br /><br />
        <label>Name:</label><input type="text" name="name" value="<?php echo $cofees['name']; ?>"><br /><br />
        <label>Price:</label><input type="text" name="price" value="<?php echo number_format($cofees['price']) . "$"; ?>"><br /><br />
        <label>Size:</label><input type="text" name="size" value="<?php echo $cofees['size']; ?>"><br /><br />
        <button type="submit" name="btn-update"><strong>Update</strong></button>
    </form>

    <form action="" method="post">
        <div class="cafe-container">
            <?php
            for ($i = 0; $i < count($cofees); $i++) {
            ?>
                <div class="item-cafe">
                    <img class="item-cafe-icon" src=<?php echo $cofees[$i]->getImagePath(); ?>>
                    <p class="item-cafe-name"><?php echo $cofees[$i]->name ?></p>
                    <p class="item-cafe-price"><?php echo $cofees[$i]->price . "$" ?></p>
                    <p class="item-cafe-size"><?php echo "Size: " . $cofees[$i]->size ?></p>
                    <form method="post" class="item-cafe-button">
                        <button name="edit-id" value="<?php echo $cofees[$i]->id; ?>" onclick="onEditClicked()">Edit</button>
                        <button name="delete-id" value="<?php echo $cofees[$i]->id; ?>">Delete</button>
                    </form>
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