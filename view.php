<?php
session_start();
$con = new mysqli("localhost", "root", "", "saveddatabase");
echo ("sangami");

$modelname = $_POST['modelname'];
echo $modelname;
$price = $_POST['price'];
$colour = $_POST['colour'];
$capacity = $_POST['capacity'];
$brandid = $_POST['brandid'];
$image = $_POST['image'];
$quantity = $_POST['quantity'];
$userid = $_POST['userid'];
echo $userid;

// Insert the data into the cart table
$sql = "UPDATE orderview SET  Status = 1 WHERE Status = 0";
echo $sql;
$result = mysqli_query($con, $sql);
echo $result;
$row=mysqli_fetch_all($result,MYSQLI_NUM);
?>