<?php
    require "database.php";
    require "Model/User.php";
    require "Model/CafeNormal.php";
    require "Model/OrderList.php";
    session_start(); 

// DISPLAY HOME PAGE
	$sql = "SELECT * from products";
    $result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
	$cofees = array();
	for($i = 0; $i < count($result); $i++) {
		$cofee = $result[$i];
			array_push($cofees, new Cafe($cofee['id'], $cofee['name'], $cofee['price'], $cofee['size'], $cofee['image']));
    }

// QUERY LOGIN
                                  
    $user = null;
	if(isset($_POST["username"]) && isset($_POST["password"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
        $sql = "SELECT * from users where username='$username' and password='$password'";
        $user = $db->query($sql)->fetch_object();
            if($username== "" || $password == ""){
                echo "<script> alert(' Please enter full information!'); </script>";
            }
            else if($username != $user->username || $password != $user->password){
                echo "<script> alert(' Username or Password wrong!'); </script>";
            }	
            else if($user->username == "admin"){
                $_SESSION['admin'] = new User($user->id, null, $user->fullName, $user->email, $user->password, $user->gender);
                header("Location: homeAdmin.php");
            }
            else if($user->username != "admin") {
                $_SESSION['user'] = new User($user->id, null, $user->fullName, $user->email, $user->password, $user->gender);
                header("Location: homeUser.php");
            }
	} 
// QUERY ORDER
   
    $sql = "SELECT * from order_list";
    $listOrder = $db->query($sql)->fetch_object();
    $listOrders = array();
    if(isset($_POST['btn-list'])){
        for($i = 0; $i < count($listOrder); $i++) {
            array_push($listOrders, new Order($listOrder->id, $listOrder->id_user, $listOrder->id_product, $listOrder->quantity));
        }
    }
    $userIn = $_SESSION['user'];
    
?>