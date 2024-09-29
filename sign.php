<html>
<head>
    <center>
<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 60%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child() {
background-color: #dddddd;
}
</style>
</head>
<body>
<h1>WELCOME CUSTOMER!</h1><br>

<div id="dropdown"></div>

<h2>Selected Appliances</h2>
<table id="appliance_table">
<tr>
<th>ID</th>
<th>Model Name</th>
<th>Price</th>
<th>Colour</th>
<th>Capacity</th>
<th>Brand ID</th>
<th>Image</th>
<th>Action</th>
</tr>
</table>
<br>
</center>

<script>
document.addEventListener('DOMContentLoaded', function() {
var brands = ['Samsung', 'LG', 'Whirlpool', 'Dell'];
var dropdown = document.getElementById('dropdown');
var select = document.createElement('select');
select.name = 'Ulist';
select.id = 'Ulist';
select.onchange = check;

var defaultOption = document.createElement('option');
defaultOption.value = '';
defaultOption.disabled = true;
defaultOption.selected = true;
defaultOption.textContent = 'Select a brand';
select.appendChild(defaultOption);

brands.forEach(function(brand) {
var option = document.createElement('option');
option.value = brand;
option.textContent = brand;
select.appendChild(option);
});

dropdown.appendChild(select);
});

function check() {
var value = document.getElementById('Ulist').value;

const xhttp = new XMLHttpRequest();
xhttp.onload = function() {
var response = this.responseText;
var Udata = response.split('*');

var table = document.getElementById('appliance_table');
table.innerHTML = `<tr>
<th>ID</th>
<th>Model Name</th>
<th>Price</th>
<th>Colour</th>
<th>Capacity</th>
<th>Brand ID</th>
<th>Image</th>
<th>Action</th>
</tr>`;

for (var i = 0; i < Udata.length; i++) {
var data = Udata[i].split(',');
var row = table.insertRow();
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
var cell7 = row.insertCell(6);
var cell8 = row.insertCell(7);

cell1.innerHTML = data[0];
cell2.innerHTML = data[1];
cell3.innerHTML = data[2];
cell4.innerHTML = data[3];
cell5.innerHTML = data[4];
cell6.innerHTML = data[5];
cell7.innerHTML = data[6];
cell8.innerHTML = `<button onclick="order('${data.join(',')}')">Order</button>`;
}
}

xhttp.open('POST', 'sign1.php?BrandName=' + value);
xhttp.send();
}

function order(data) {
window.location.href = 'order.php?data=' +data;
alert("ORDER SUCCEFULLY");

}
</script>
</body>
</html>
