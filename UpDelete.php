<?php
$con = new mysqli("localhost", "root", "", "saveddatabase");

if(isset($_GET['BrandName'])) {
    

$Brand_id = $_GET['BrandName'];
$sql = "SELECT * FROM model WHERE Brand_id='$Brand_id' AND Status=1";
$result = mysqli_query($con, $sql);
//echo  mysqli_fetch_assoc($result);
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
$data[] = implode(',', $row);
}

echo implode('*', $data);
}
?>