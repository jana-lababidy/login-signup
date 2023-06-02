<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('Location: login.php');
   exit;
}

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('Location: login.php');
   exit;
}

if(isset($_POST['add_to_cart'])){
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die(mysqli_error($conn));

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'Product already added to cart!';
   } else {
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die(mysqli_error($conn));
      $message[] = 'Product added to cart!';
   }
}

if(isset($_POST['update_cart'])){
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die(mysqli_error($conn));
   $message[] = 'Shopping cart quantity updated successfully!';
}

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die(mysqli_error($conn));
   header('Location: index.php');
   exit;
}
  
if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die(mysqli_error($conn));
   header('Location: index.php');
   exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shopping Cart</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="container">

<div class="user-profile">
   <?php
   $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die(mysqli_error($conn));
   if(mysqli_num_rows($select_user) > 0){
      $fetch_user = mysqli_fetch_assoc($select_user);
      echo '<p>Current user: <span>'.$fetch_user['name'].'</span></p>';
   }
   ?>
   <div class="flex">
      <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are you sure you want
