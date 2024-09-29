<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CART PAGE</title>
<link rel="stylesheet" href="./css/orderStyles.css">
<?php require_once('Header.php'); ?>
<style>
  body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
    color: #333;
  }

  h1 {
    text-align: center;
    color: #ff5722;
    margin-bottom: 20px;
    font-weight: 700;
  }

  /* Container for the table */
  .table-container {
    width: 80%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  th, td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #ff5722;
    color: white;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  img {
    border-radius: 8px;
  }

  /* Button Styling */
  button {
    background-color: #ff5722;
    color: white;
    padding: 10px 16px;
    margin: 4px;
    border: none;
    cursor: pointer;
    font-size: 14px;
    border-radius: 8px;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #45a049;
  }

  /* Responsive Design */
  @media only screen and (max-width: 768px) {
    .table-container {
      width: 100%;
      padding: 10px;
    }

    table {
      font-size: 14px;
    }

    button {
      font-size: 12px;
      padding: 8px;
    }
  }
</style>
</head>
<body>
<h1>CARD PAGE</h1>

<!-- Input field for user ID -->
<center>
<?php
session_start();
$var=$_SESSION['id'];

echo "<input type='text' id='ID' name='ID' value = {$var} style = 'display: none;'><br>";
?>
<button type="button" onclick="confirmPlaceOrder()">PLACE ORDER</button>

</center>

<div id="demo"></div>
<table id="mytable">
<tr>
<th>ID</th>
<th>MODEL NAME</th>
<th>PRICE</th>
<th>COLOUR</th>
<th>CAPACITY</th>
<th>BRAND ID</th>
<th>IMAGE</th>
<th>QUANTITY</th>
<th>USERID</th>
<th>ACTION</th>
</tr>
<tbody id="mytable1"></tbody>
</table>
<br><br>

<script>
function fetchData() {
var Ajax = new XMLHttpRequest();
Ajax.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
var value = this.responseText;
console.log(this.response);
var rows = value.split("%");
var len = rows.length;
var table = document.getElementById("mytable1");
table.innerHTML = ""; // Clear existing rows
for (var i = 0; i < len - 1; i++) {
var row1 = rows[i].split("*");
var row2 = table.insertRow(-1);
var ID = row2.insertCell(0);
var MODELNAME = row2.insertCell(1);
var PRICE = row2.insertCell(2);
var COLOUR = row2.insertCell(3);
var CAPACITY = row2.insertCell(4);
var BRANDID = row2.insertCell(5);
var IMAGE = row2.insertCell(6);
var QUANTITY = row2.insertCell(7);
var USERID= row2.insertCell(8);
var ACTION = row2.insertCell(9);

ID.innerHTML = row1[0];
MODELNAME.innerHTML = row1[1];
PRICE.innerHTML = row1[2];
COLOUR.innerHTML = row1[3];
CAPACITY.innerHTML = row1[4];
BRANDID.innerHTML = row1[5];
IMAGE.innerHTML = `<img src="image/uploads/${row1[6]}" alt="Image" style="width:150px;height:auto;"><br>`;
QUANTITY.innerHTML = row1[7];
USERID.innerHTML = row1[8];

ACTION.innerHTML = `<button onclick="deleteOrder('${row1[0]}')">Delete</button>`;
}
}
};
Ajax.open("GET", "card1.php", true);
Ajax.send();
}

function deleteOrder(id) {
var xhr = new XMLHttpRequest();
xhr.open("POST", "deleteOrder.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
if (xhr.readyState == 4 && xhr.status == 200) {
console.log(xhr.responseText);
fetchData(); // Refresh the table data
}
};
xhr.send("id=" + id);
alert("DELETE SUCCESSFULLY");
}

function confirmPlaceOrder() {
if (confirm("Are you sure you want to place the order?")) {
placeAllOrders();
}
}

function placeAllOrders() {
var id = document.getElementById("ID").value; 
var xhr = new XMLHttpRequest();
xhr.open("POST", "placeorder.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
if (xhr.readyState == 4 && xhr.status == 200) {
console.log(xhr.responseText);

alert("ORDER SUCCESSFULLY");
}
};
xhr.send("User_id=" + id); 
}

fetchData(); 
</script>
</body>
</html>