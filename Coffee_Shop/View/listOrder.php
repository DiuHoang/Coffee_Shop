<?php
require "../Controller/query.php";
if (isset($_POST["delete-list"])) {
    $id = $_POST["delete-list"];
    echo $id;
    $sql = "DELETE from orders where id = " . $id;
    $db->query($sql);
    echo "<script> alert('Delete Sucessful!')</script>";
}
$sql = "select o.id, o.name_cus, o.address_cus, o.phone_cus, p.name as name_product, o.size_product, o.quantity_product,  p.price*o.quantity_product as price_product from orders as o, products as p  where o.id = p.id ORDER BY price_product ASC";
$result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
$lists = array();
for ($i = 0; $i < count($result); $i++) {
    $list = $result[$i];
    array_push($lists, new Order($list['id'], $list['name_cus'], $list['address_cus'], $list['phone_cus'], $list['name_product'], $list['size_product'], $list['quantity_product'], $list['price_product']));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Shop - Hoang Diu</title>
    <link rel="stylesheet" type="text/css" href="../Css/styleOrder.css">
</head>

<body>
    <?php require "header.php"; ?>
    <table>
        <form action="" method="post">
            <div>
                <tr>
                    <th>Name_Cus</th>
                    <th>Address_Cus</th>
                    <th>Phone_Cus</th>
                    <th>Name_Product</th>
                    <th>Size_Product</th>
                    <th>Quantity_Product</th>
                    <th>Price_Product</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                <?php
                for ($i = 0; $i < count($lists); $i++) {
                ?>
                    <div>
                        <tr>
                            <td>
                                <p><?php echo $lists[$i]->name_cus ?></p>
                            </td>
                            <td>
                                <p><?php echo $lists[$i]->address_cus ?></p>
                            </td>
                            <td>
                                <p><?php echo $lists[$i]->phone_cus ?></p>
                            </td>
                            <td>
                                <p><?php echo $lists[$i]->name_product ?></p>
                            </td>
                            <td>
                                <p><?php echo "Size: " . $lists[$i]->size_product ?></p>
                            </td>
                            <td>
                                <p><?php echo $lists[$i]->quantity_product ?></p>
                            </td>

                            <td>
                                <p><?php echo number_format($lists[$i]->price_product) ?></p>
                            </td>
                            <td>
                                <p><?php echo date("Y-m-d h:i:sa"); ?></p>
                            </td>
                            <td>
                                <button name="delete-list" value="<?php echo $lists[$i]->id; ?>">Delete</button>
                            </td>
                        </tr>
                    </div>
                <?php
                }
                ?>
            </div>
        </form>
    </table>
    <form action="homeUser.php"><button><img src="../Images/backward.png" width="50px"></button></form>
    <?php require "footer.php"; ?>
    <script src="index.js"></script>
</body>

</html>