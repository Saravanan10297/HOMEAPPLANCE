<?php
$con = new mysqli("localhost", "root", "", "saveddatabase");
$id = $_GET["id"];
$sql = "SELECT * FROM model WHERE id = ".$id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_all($result, MYSQLI_NUM);
//print_r($row);
$id=$row[0][0];
$price =$row[0][2];
$colour =$row[0][3];
$capacity = $row[0][4];
$qty=$row[0][8];
$image = $row[0][6];
echo $id."*".$price."*".$colour."*".$capacity."*".$image."*".$qty;
?>