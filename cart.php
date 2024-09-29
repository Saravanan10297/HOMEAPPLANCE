<?php
session_start();
//$r = session_id();
$var =$_SESSION['id'];

$con = new mysqli("localhost", "root", "", "saveddatabase");

//$_SESSION['user_id'] = 1; 
$sql = "SELECT * FROM cart WHERE User_id = '$var' AND Status=1";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_all($result, MYSQLI_NUM);
$len = count($row);
$str = "";
for ($i = 0; $i < $len; $i++) {
foreach ($row[$i] as $res) {
$str .= $res . "*";
}
$str .= "%";
}
echo $str;
1
?>
