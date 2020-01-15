<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Shop - Hoang Diu</title>
    <link rel="stylesheet" type="text/css" href="../Css/styleIndex.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <?php require "header.php"; ?>
    <div class="line-center">
        <div>
            <img src="../Images/capochino.jpg" /></br></br>
            <p>Capochino Korean</p>
        </div>
        <div>
            <img src="../Images/cacao-nalee-slim.jpg" /></br></br>
            <p>CaCao Nalee Slim</p>
        </div>
        <div>
            <img src="../Images/cafe-suanong.jpeg" /></br></br>
            <p>Coffee Sua Nong</p>
        </div>
        <div>
            <img src="../Images/matcah-tiramisu.jpg" /></br></br>
            <p>Matcha Tiramisu</p>
        </div>
    </div>
    <div class="see-more"><a href="login.php">
            <h3 onclick="seeMore()">See More</h3>
        </a></div>
    <?php require "footer.php"; ?>
    <script src="index.js"></script>
</body>

</html>