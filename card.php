<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mycart</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <center>
        <h3>
        Reserved products
        </h3>
        
  
    </center>
   <?php
   include("conn.php");
   $res=mysqli_query($conn, "SELECT * FROM addcart");
   while($row=mysqli_fetch_array($res)){
            echo "
            <center>
            <main class='row'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>Product name</ >
                            <th scope='col'>Product price</th>
                            <th scope='col'>Quantity</th>
                            <th scope='col'>Delete product</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td>$row[quantity]</td>
                        <td><a href='del_card.php?id=$row[id]'class='btn-danger'>Delete</a></td>
                    </tr>
                    </tbody>
                </table>
               
            </main>
        </center>";}
        ?>
       
            <center>
                <a href="shop.php" class='btn-success'>Return to the products page</a>
            </center>

  
</body>
</html>