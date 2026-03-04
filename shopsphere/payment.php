<?php
include "db.php";
session_start();

if(!isset($_SESSION['uid'])){
    header("Location: login.php");
}

$total = $_POST['total'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment - ShopSphere</title>
<link rel="stylesheet" href="assets/css/style.css">

<style>
.payment-box{
width:400px;
margin:80px auto;
background:white;
padding:40px;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,0.1);
text-align:center;
}

.payment-box input{
width:100%;
padding:10px;
margin:10px 0;
border-radius:8px;
border:1px solid #ccc;
}

.payment-box button{
background:#111827;
color:white;
padding:12px 20px;
border:none;
border-radius:8px;
cursor:pointer;
width:100%;
}

.payment-box button:hover{
background:#2563eb;
}
</style>
</head>

<body>

<div class="payment-box">

<h2>Payment Details</h2>

<p>Total Amount: <b>₹<?php echo $total; ?></b></p>

<form method="POST" action="process_order.php">

<input type="hidden" name="total" value="<?php echo $total; ?>">

<input type="text" placeholder="Card Number" required>
<input type="text" placeholder="Card Holder Name" required>
<input type="text" placeholder="Expiry Date" required>
<input type="text" placeholder="CVV" required>

<button type="submit">Pay Now</button>

</form>

</div>

</body>
</html>