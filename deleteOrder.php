<?php
$con = new mysqli("localhost", "root", "", "saveddatabase");
if (isset($_POST['id'])) {
$id = $_POST['id'];
$sql = "UPDATE cart SET Status = 2 WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_all($result, MYSQLI_NUM);
}
?>