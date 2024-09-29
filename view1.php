<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cart</title>
<!-- Google Fonts for better typography -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
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


<!-- Main Header -->
<h1>Welcome Cart</h1>

<!-- Table Container -->
<div class="table-container">
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
      <th>USER ID</th>
      <th>ACTION</th>
    </tr>
    <tbody id="mytable1">
    </tbody>
  </table>
</div>

<script>
  var Ajax = new XMLHttpRequest();
  Ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var value = this.responseText;
      console.log(this.response);
      var rows = value.split("%");
      var len = rows.length;
      for (var i = 0; i < len - 1; i++) {
        var row1 = rows[i].split("*");
        var table = document.getElementById("mytable1");
        var row2 = table.insertRow(-1);
        var ID = row2.insertCell(0);
        var MODELNAME = row2.insertCell(1);
        var PRICE = row2.insertCell(2);
        var COLOUR = row2.insertCell(3);
        var CAPACITY = row2.insertCell(4);
        var BRANDID = row2.insertCell(5);
        var IMAGE = row2.insertCell(6);
        var QUANTITY = row2.insertCell(7);
        var USERID = row2.insertCell(8);
        var ACTION = row2.insertCell(9);

        ID.innerHTML = row1[0];
        MODELNAME.innerHTML = row1[1];
        PRICE.innerHTML = row1[2];
        COLOUR.innerHTML = row1[3];
        CAPACITY.innerHTML = row1[4];
        BRANDID.innerHTML = row1[5];
        IMAGE.innerHTML = `<img src="image/uploads/${row1[6]}" alt="Image" style="width:100px;height:auto;">`;
        QUANTITY.innerHTML = row1[7];
        USERID.innerHTML = row1[8];

        ACTION.innerHTML = `<button onclick="cancelorder('${row1[0]}')">Order Delete</button>`;
      }
    }
  };
  Ajax.open("GET", "cart.php", true);
  Ajax.send();

  function cancelorder(id) {
    alert("saro");
var xhr = new XMLHttpRequest();
xhr.open("POST", "cancel.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
if (xhr.readyState == 4 && xhr.status == 200) {
alert(xhr.responseText);
  window.location.href='view1.php';
}
};
xhr.send("id=" + id);
alert("CANCEL SUCCESSFULLY");
}

function placeAllOrders() {
var xhr = new XMLHttpRequest();
xhr.open("POST", "placeorder.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
if (xhr.readyState == 4 && xhr.status == 200) {
console.log(xhr.responseText);
fetchData(); // Refresh the table data
}
};
xhr.send();
alert("ORDER SUCCESSFULLY");
}

</script>

</body>
</html>
