<?php
$con=new mysqli("localhost","root","","saveddatabase");
//echo "sangami";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//$row = mysqli_fetch_all($result, MYSQLI_NUM);
$Name =$_POST["NAME"];
$Email = $_POST["EMAIL"];
$PhoneNumber = $_POST["PHONENUMBER"];
$Gender = $_POST["GENDER"];
$Address = $_POST["ADDRESS"];
$LandMark = $_POST["LANDMARK"];
$City = $_POST["CITY"];
$State = $_POST["STATE"];
$UserName = $_POST["USERNAME"];
$Password = $_POST["PASSWORD"];
$Status=1;
$sql = "INSERT INTO registerform (Name, Email, PhoneNumber,Gender,Address,LandMark,City,State,UserName,Password,Status)
 VALUES ('$Name', '$Email', '$PhoneNumber','$Gender','$Address','$LandMark','$City ','$State','$UserName','$Password','$Status')";
echo $sql;
$result=mysqli_query($con, $sql);
echo $result;
 }
?>
