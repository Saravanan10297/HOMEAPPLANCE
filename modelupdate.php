<?php
$con = new mysqli("localhost", "root", "", "saveddatabase");
$id = $_GET["id"];
$sql = "SELECT * FROM brand WHERE id = ".$id;
//echo $sql;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_all($result, MYSQLI_NUM);
//print_r($row);
$Brand_id=$row[0][0];
$certifiedid =$row[0][2];
$supplybranch =$row[0][3];
$branddetails= $Brand_id. "&".$certifiedid."&".$supplybranch;
$sql = "SELECT * FROM model WHERE Brand_id = ".$id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_all($result, MYSQLI_NUM);
//print_r($row);
$len = count($row);
$str="";
$str .= $branddetails."@";
for ($i = 0; $i < $len; $i++) {
foreach ($row[$i] as $res) {
$str .= $res . "*";
}
$str .= "%";

}
echo $str;
?>