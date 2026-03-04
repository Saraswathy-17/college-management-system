<?php
include "db.php";
session_start();

$user_id=$_SESSION['uid'];
$total=$_POST['total'];

$conn->query("INSERT INTO orders (user_id,total) VALUES ($user_id,$total)");
$conn->query("DELETE FROM cart WHERE user_id=$user_id");

header("Location: orders.php");
?>