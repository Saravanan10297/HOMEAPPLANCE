<html>
<head>
<title>Order Details</title>
<style>
button {
background-color: #4CAF50; /* Green */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
</style>
</head>
<body>
<form id="orderForm">
<h1>ORDER DETAILS</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
$modeln = $_GET['modelname'];
echo "MODEL NAME: <input type='text' id='modelname' name='modelname' value='{$modeln}'><br>";
$price = $_GET['price'];
echo "PRICE: <input type='text' id='price' name='price' value='{$price}'><br>";
$colour = $_GET['colour'];
echo "COLOUR: <input type='text' id='colour' name='colour' value='{$colour}'><br>";
$capacity = $_GET['capacity'];
echo "CAPACITY: <input type='text' id='capacity' name='capacity' value='{$capacity}'><br>";
$brandid = $_GET['brandid'];
echo "BRAND ID: <input type='text' id='brandid' name='brandid' value='{$brandid}'><br>";
$image = $_GET['image'];
echo "IMAGE: <input type='text' id='image' name='image' value='{$image}'><br>";
echo "<img src='image/uploads/{$image}' alt='Model Image' style='width:150px;height:auto;'><br>";
$quantity = $_GET['quantity'];
echo "QUANTITY: <input type='text' id='quantity' name='quantity' value='{$quantity}'><br>";
$userid = $_GET['userid'];
echo "USER ID: <input type='text' id='userid' name='userid' value='{$userid}'><br>";
}
?>
<button type="button" onclick="placeOrder()">Add To Cart</button>
<button type="button" onclick="window.location.href='order.php'">BACK</button>
<button type="button" onclick="window.location.href='orderview.php'">CART</button>
</form>
<script>
function placeOrder() {
var modelname = document.getElementById("modelname").value;
var price = document.getElementById("price").value;
var colour = document.getElementById("colour").value;
var capacity = document.getElementById("capacity").value;
var brandid = document.getElementById("brandid").value;
var image = document.getElementById("image").value;
var quantity = document.getElementById("quantity").value;
var userid = document.getElementById("userid").value;

var xhr = new XMLHttpRequest();
var val = "&modelname=" + modelname +
"&price=" + price +
"&colour=" + colour +
"&capacity=" + capacity +
"&brandid=" + brandid +
"&image=" + image +
"&quantity=" + quantity +
"&userid=" + userid;
alert(val);
xhr.open("POST", "orderpage1.php", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xhr.onreadystatechange = function() {
if (xhr.readyState == 4 && xhr.status == 200) {
alert(xhr.responseText);
}
};

xhr.send(val);
}
</script>
</body>
</html>