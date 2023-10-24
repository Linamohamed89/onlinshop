<?php

include('conn.php');

if(isset($_POST['submit'])){

   $Name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM user_info WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO user_info(name, email, password) VALUES('$Name', '$email', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">
</head>
<body>

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
      <h3>Create new account</h3>
      <input class=register type="text" name="name" required placeholder="user name"class="box">
      <input class=register type="email" name="email" required placeholder="email" class="box">
      <input class=register type="password" name="password" required placeholder="password" class="box">
      <input class=register type="password" name="cpassword" required placeholder="password" class="box">
      <input class=register type="submit" name="submit"  value="Register">
      <p>you have account? <br><a href="login.php" class="new">login</a></p>
   </form>

</div>
</center>
</body>
</html>