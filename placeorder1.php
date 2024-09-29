<html>
<body>
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

tr:nth-child(even) {
background-color: #dddddd;
}
</style>
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
<th>ACTION</th>
</tr>
<tbody id="mytable1">
</tbody>
</table>
<br><br>
<center><button type="button" onclick="placeAllOrders()">PLACE ORDER</button></center>

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
var ACTION = row2.insertCell(8);

ID.innerHTML = row1[0];
MODELNAME.innerHTML = row1[1];
PRICE.innerHTML = row1[2];
COLOUR.innerHTML = row1[3];
CAPACITY.innerHTML = row1[4];
BRANDID.innerHTML = row1[5];
IMAGE.innerHTML = row1[6];
QUANTITY.innerHTML = row1[7];
ACTION.innerHTML = `
<button onclick="cancelOrder('${row1[0]}')">Cancel</button>
`;
}
}
}
Ajax.open("GET", "card1.php", true);
Ajax.send();
}

function cancelOrder(id) {
    //alert(id)
var xhr = new XMLHttpRequest();
xhr.open("POST", "cancelOrder.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
    alert(id)
if (xhr.readyState == 4 && xhr.status == 200) {
console.log(xhr.responseText);
fetchData(); // Refresh the table data
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

fetchData();
</script>
</body>
</html>
