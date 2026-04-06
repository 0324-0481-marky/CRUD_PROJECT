<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Inventory System</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="layout">

<!-- SIDEBAR -->
<aside class="sidebar">
    <h2>IMS</h2>

    <nav>
        <a href="index.php" class="active">Dashboard</a>
        <a href="about.php">About</a>
        <a href="developers.php">Developers</a>
    </nav>
</aside>

<!-- MAIN -->
<main class="main">

<h1>Dashboard</h1>

<!-- ADD FORM -->
<form action="create.php" method="POST">
    <input name="name" placeholder="Product Name" required>
    <input name="price" type="number" placeholder="Price" required>
    <input name="qty" type="number" placeholder="Quantity" required>
    <button class="btn">Add Product</button>
</form>

<!-- TABLE -->
<div class="card">
<table>
<tr>
<th>Name</th>
<th>Price</th>
<th>Qty</th>
<th>Total</th>
<th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM products");

$totalValue = 0;
$count = 0;

while($row = $result->fetch_assoc()){
    $total = $row['price'] * $row['qty'];
    $totalValue += $total;
    $count++;

    echo "<tr>
        <td>{$row['name']}</td>
        <td>₱{$row['price']}</td>
        <td>{$row['qty']}</td>
        <td>₱{$total}</td>
        <td>
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>

</table>
</div>

<!-- STATS -->
<div class="card">
    <p>Total Products: <?php echo $count; ?></p>
    <p>Total Value: ₱<?php echo $totalValue; ?></p>
</div>

</main>
</div>

</body>
</html>