<?php
//تضمين واتصال  database
include('conn.php');
//اظهر لي البيانات [id]
 $ID = $_GET['id'];
 //اتصل مع قاعده البيانات ثم تحذف من الجدول (prod)ال-(id)الذي يتم اختياره 
 mysqli_query($conn ,"DELETE FROM prod WHERE id=$ID");
 //ثم عود لصفحه المشار اليها 
 header('location:products.php');


?>