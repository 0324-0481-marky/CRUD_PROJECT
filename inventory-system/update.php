<?php
include 'config.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $conn->query("UPDATE products SET 
        name='$name',
        price='$price',
        qty='$qty'
        WHERE id=$id");

    header("Location: index.php");
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id=$id");
$row = $result->fetch_assoc();
?>

<form method="POST">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input name="name" value="<?php echo $row['name']; ?>">
<input name="price" value="<?php echo $row['price']; ?>">
<input name="qty" value="<?php echo $row['qty']; ?>">
<button name="update">Update</button>
</form>