<?php
include 'config.php';

$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$conn->query("INSERT INTO products (name, price, qty)
VALUES ('$name','$price','$qty')");

header("Location: index.php");
?>