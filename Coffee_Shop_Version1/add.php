<?php
    require "database.php";
    if(isset($_POST["add"])){
		$name = $_POST["name"];
		$price = $_POST["price"];
        $size = $_POST["size"];
        $target_file = "Images/" . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1; 
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
   
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
		$sql = "INSERT INTO products VALUES (null,'$name',$price, '$size', '$target_file')";
		$db->query($sql);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
		<div>
			<input type="text" name="name" placeholder="Name Product">
			<input type="text" name="price" placeholder="Price Product">
            <input type="text" name="size" placeholder="Size Product"> 
            <input type="file" name="fileToUpload" id="fileToUpload">
			<button name="add" type="submit"> Add Product</button>
		</div>
    </form>
	<?php 
		if(isset($_POST["add"])){
	?>
		<h1>Ban da them <?php echo json_encode($name) ?> </h1>
	<?php 
		} 
    ?>
    </br></br></br></br></br>
    <form action="homeAdmin.php"><button>Home</button></form>
</body>
</html>