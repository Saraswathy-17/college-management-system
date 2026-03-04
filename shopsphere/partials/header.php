<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
include "db.php";

$cart_count = 0;
if(isset($_SESSION['uid'])){
    $uid = $_SESSION['uid'];
    $result = $conn->query("SELECT COUNT(*) as total FROM cart WHERE user_id=$uid");
    if($result){
        $data = $result->fetch_assoc();
        $cart_count = $data['total'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>ShopSphere</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="navbar">
  <div class="logo">ShopSphere</div>
  <div class="nav-links">
    <a href="index.php">Home</a>
    <a href="cart.php">
      Cart
      <?php if($cart_count > 0): ?>
        <span class="cart-badge"><?php echo $cart_count; ?></span>
      <?php endif; ?>
    </a>
    <a href="orders.php">Orders</a>
    <a href="logout.php">Logout</a>
  </div>
</div>