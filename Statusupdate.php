<?php
session_start();
$con = new mysqli("localhost", "root", "", "saveddatabase");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$cartId = $_POST['cartId'];

// Update the Status to 1 in the cart table
$sql = "UPDATE cart SET Status = 1 WHERE ID = '$cartId' AND User_id = '" . $_SESSION['id'] . "'";
$result = mysqli_query($con, $sql);

if ($result) {
echo "Order placed successfully!";
} else {
echo "Error placing order: " . mysqli_error($con);
}

mysqli_close($con);
}
?>
