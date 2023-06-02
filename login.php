<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='main.css' >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      $message[] = 'incorrect password or email!';
   }

}

?>




    <form action="#" method="POST">
   <center> <h1>Welcome!</h1> </center>
    <div>
    <h1>Log in</h1>
    <p>username</p>
    <input type="email" name="email" id="email" placeholder="enter here your email">
    <p>password</p>
    <input type="password" name="password" id="password" placeholder="password">
    <br><br>
    <input type="submit" name="submit" id="submit" value="Log in"><br>
     <h3>or</h3>
    <a href="signup.php">sign up</a>
    </div>
   
    </form>

</body>
</html>
