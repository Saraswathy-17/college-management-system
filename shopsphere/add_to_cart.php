<?php
include "db.php";
session_start();

$user_id=$_SESSION['uid'];
$product_id=$_POST['product_id'];

$conn->query("INSERT INTO cart (user_id,product_id) VALUES ($user_id,$product_id)");

header("Location: cart.php");
?>