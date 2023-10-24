<?php

include('conn.php');
include('insert_card.php');
$IG=$_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm product</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<nav class="navbar " >
<a id="aa" class="navbar-brand" href="card.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>|Mycard</a>
    </nav>
    <center>
        <div class="head">
        <form action="insert_card.php"method="post">
<h3>Do you want to buy the product?</h3>
<input class="val" type="text" name="id" value="<?php echo $data['id']?>">
<input class="val" type="text" name="name"value="<?php echo $data['name']?>">
<input class="val" type="text" name="price"value="<?php echo $data['price']?>">
<button name="add" type="submit" class="btn-warning">Confirm adding the product to the cart</button>
<br>
<a href="shop.php"class='btn-success'>Return to the products page</a>
</form>
        </div>
      
    </center>
</body>
</html>