<?php

include("conn.php");

$ID=$_GET['id'];
mysqli_query($conn, "DELETE  FROM addcart WHERE id=$ID");
header("location:card.php");
?>