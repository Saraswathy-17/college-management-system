<?php
include "db.php";
session_start();

$id = $_GET['id'];

$product = $conn->query("SELECT * FROM products WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $product['name']; ?></title>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="product-detail">

<div class="product-image">
<img src="assets/images/<?php echo $product['image']; ?>">
</div>

<div class="product-info">

<h1><?php echo $product['name']; ?></h1>

<p><?php echo $product['description']; ?></p>

<h2>₹<?php echo $product['price']; ?></h2>

<form method="POST" action="add_to_cart.php">
<input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
<button>Add to Cart</button>
</form>

</div>

</div>

</body>
</html>