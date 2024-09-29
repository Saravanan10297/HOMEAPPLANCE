<?php
session_start();
$con = new mysqli("localhost", "root", "", "saveddatabase");


$modelname = $_POST['modelname'];
$Mid=$_POST['mid'];
$price = $_POST['price'];
$colour = $_POST['colour'];
$capacity = $_POST['capacity'];
$brandid = $_POST['brandid'];
$image = $_POST['image'];
$quantity = $_POST['Quanty'];
$userid = $_POST['userid'];


// Insert the data into the cart table
$sql = "INSERT INTO cart (Model_Name, Price, Colour, Capacity, Brand_id, Image, Quantity, User_id, Status) 
VALUES ('$modelname', '$price', '$colour', '$capacity', '$brandid', '$image', $quantity, '$userid',0)";
echo($sql);

$result = mysqli_query($con, $sql);
echo $result;
$Dqty=$quantity-1;
$sql1 = "Update model set Qty='$Dqty' where id='$Mid'";
echo($sql1);
$result = mysqli_query($con, $sql1);
echo $result;
//$row=mysqli_fetch_all($result,MYSQLI_NUM);
?>