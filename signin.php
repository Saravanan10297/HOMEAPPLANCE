<?php
session_start();


$con = new mysqli("localhost", "root", "", "saveddatabase");


// Get username and password from POST request
$username =  $_POST['username'];
$password =  $_POST['password'];

// Prepare and execute query
$sql = "SELECT * FROM registerform WHERE UserName='$username' AND Password='$password'";

$result = mysqli_query($con, $sql);
//echo $result;
$row=mysqli_fetch_all($result,MYSQLI_NUM);
//echo $row[0][0];
$_SESSION['id']=$row[0][0];

if (mysqli_num_rows($result) > 0) {
echo "success";
} else {
echo "Invalid username or password";
}
?>