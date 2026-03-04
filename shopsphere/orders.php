<?php
include "db.php";
session_start();
include "partials/header.php";

$user_id=$_SESSION['uid'];
$result=$conn->query("SELECT * FROM orders WHERE user_id=$user_id");
?>

<div class="section">
<h2>Your Orders</h2>

<?php while($row=$result->fetch_assoc()): ?>
<div class="box">
Order ID: <?php echo $row['id']; ?> <br>
Total: ₹<?php echo $row['total']; ?> <br>
Status:
<span style="color:
<?php
if($row['status']=="Delivered") echo "green";
elseif($row['status']=="Shipped") echo "orange";
else echo "blue";
?>;">
<?php echo $row['status']; ?>
</span>
<br>
Date: <?php echo $row['created_at']; ?>
</div>
<?php endwhile; ?>

</div>

<?php include "partials/footer.php"; ?>