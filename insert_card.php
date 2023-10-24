<?php

include('conn.php');
$ID=$_GET['id'];
$up=mysqli_query($conn, 'SELECT * FROM prod WHERE  id=$ID');
$data=mysqli_fetch_array($up);

if(isset($_POST['add'])){
    $Name=$_POST['name'];
    $Price=$_POST['price'];
    $insert="INSERT INTO addcart (name,price) VALUES ('$Name','$Price')";
mysqli_query($conn, $insert);
header("location:card.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    
</body>
</html>