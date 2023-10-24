<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
//تضمين واتصال  database
include('conn.php');
//اظهر لي البيانات [id]
$ID=$_GET['id'];
//اتصل مع قاعده البيانات ثم أحضر من الجدول (prod)ال-(id)الذي يتم اختياره 
$up=mysqli_query($conn ,"SELECT * FROM prod WHERE id=$ID");
//أحضر جميع البيانات المحفوضه دخل (up)...انشانا متغير(data) مهمته
$data=mysqli_fetch_array($up);
?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
            <h2>Modify the product</h2>
            <!--<img src="img/logo.jpg" alt="" width="450px">-->
            <input type="text" name="id" value="<?php echo $data['id'] ?>">
            <br>
            <input type="text" name="name" value="<?php echo $data['name'] ?>">
            <br>
            <input type="text" name="price" value="<?php echo $data['price'] ?>">
            <br>
            <input type="file" id="file" name="imge" style="display:none;">
            <label for="file">Update imge</label>
            <button name="update" type="submit">Update product</button>
            <br><br>
            <a href="products.php">Show products</a>
            </form>
        </div>

        <p>Developer By Lina </p>
    </center>
</body>
</html>