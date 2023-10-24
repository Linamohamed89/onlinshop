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
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <nav class="navbar " >
<a id="aa" class="navbar-brand" href="card.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>|Mycard</a>
    </nav>
   <center>
    <h3>all products</h3>
    </center>
<?php
//تضمين واتصال  database
include('conn.php');
//انشانا متغير (res) مهمة هذا المتغير الأتصال مع قاعده البيانات (Mysqli_query)عن طريق المتغير ( $conn،أخطر كل شي من الجدول prod)
$res= mysqli_query($conn , "SELECT * FROM prod");
//نستخدم حلقه التكرار (while) ونضيف متغير نسميه (row)مهمته احضار بيانات المتغير (res) ك (array)
while($row =mysqli_fetch_array($res)){//أحضر المنتج الأول وإرجع وهكذا 
    echo "
   
    <center>
<div class='card'>
  <img src=admin/images$row[imge] class='card-imge-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'> $row[price]</p>
    <a href='val.php? id=$row[id]' class='btn-success'>Add the product to the cart</a>
  </div>
</div>
</center>

   ";
}
?>



</body>
</html>




