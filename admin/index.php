<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2>online shop</h2>
            <img src="images/logo.jpg" alt="" width="450px">
            <input type="text" name="name">
            <br>
            <input type="text" name="price">
            <br>
            <input type="file" id="file" name="imge" style="display:none;">
            <label for="file">upload imge</label>
            <button name="upload">upload product</button>
            <br><br>
            <a href="products.php">Show products</a>
            </form>
        </div>

        <p>Developer By Lina </p>
    </center>
</body>
</html>

