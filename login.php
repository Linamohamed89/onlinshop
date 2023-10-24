<?php

include('conn.php');
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM user_info WHERE email = '$email' AND password = '$pass'") /*or die('query failed')*/;

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      $message[] = 'incorrect password or email!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">
</head>
<body>
<nav class="navbar " >
<a id="aa" class="navbar-brand" href="card.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>|Mycard</a>
    </nav>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   <center>
<div class="form-container">

   <form action="" method="post">
      <h3>Login</h3>
      <label>EMAIL</label>
      <input type="email" name="email" required placeholder="example@test.com"class="box">
      <label>PASSWORD</label>
      <input type="password" name="password" required placeholder="Min 6 charaters long" class="box">
      <!--<button type="submit">LOGIN</button>-->
      <input type="submit" name="submit" id="login" value="login">
      
      <p>Do you have an account? <br><br><a class="new" href="register.php">new account</a></p>
   </form>

</div>
</center>
</body>
</html>