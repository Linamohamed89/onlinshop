<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <center>
    <h3>all products</h3>
   </center>
   <?php
//تضمين واتصال  database
include('conn.php');
//انشانا متغير (res) مهمة هذا المتغير الأتصال مع قاعده البيانات (Mysqli_query)عن طريق المتغير ( $conn،أخطر كل شي من الجدول prod)
$res= mysqli_query($conn, "SELECT * FROM prod");
//نستخدم حلقه التكرار (while) ونضيف متغير نسميه (row)مهمته احضار بيانات المتغير (res) ك (array)
while($row =mysqli_fetch_array($res)){//أحضر المنتج الأول وإرجع وهكذا 
    echo "
    <center>
    <main>
<div class='card'>
  <img src='$row[imge]' class='card-imge-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete product</a> 
    <a href='update.php? id=$row[id]' class='btn btn-primary'>Modify product</a>
  </div>
</div>
</main>
    <center>
   ";
}

?>








</body>
</html>




