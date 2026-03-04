<?php
include "db.php";
session_start();
include "partials/header.php";

$user_id=$_SESSION['uid'];

$result=$conn->query("
SELECT products.name,products.price 
FROM cart 
JOIN products ON cart.product_id=products.id
WHERE cart.user_id=$user_id
");

$total=0;
?>

<div class="section">
<h2>Your Cart</h2>
<br>

<?php while($row=$result->fetch_assoc()): ?>
<div class="box">
  <?php echo $row['name']; ?> - ₹<?php echo $row['price']; ?>
</div>
<?php $total += $row['price']; ?>
<?php endwhile; ?>

<h3>Total: ₹<?php echo $total; ?></h3>
<br>

<form method="POST" action="payment.php">
<input type="hidden" name="total" value="<?php echo $total; ?>">
<button>Proceed to Payment</button>
</form>
</div>

<?php include "partials/footer.php"; ?>