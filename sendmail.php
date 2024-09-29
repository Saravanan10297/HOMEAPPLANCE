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
table.innerHTML = "";
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
<button onclick="deleteOrder('${row1[0]}')">Delete</button>
`;
}
}
}
Ajax.open("GET", "card1.php", true);
Ajax.send();
}

function deleteOrder(id) {
    //alert(id)
var xhr = new XMLHttpRequest();
xhr.open("POST", "deleteOrder.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
    alert(id)
if (xhr.readyState == 4 && xhr.status == 200) {
console.log(xhr.responseText);
fetchData(); 
}
};
xhr.send("id=" + id);
alert("DELETE SUCCESSFULLY");
}

function placeAllOrders() {
var xhr = new XMLHttpRequest();
xhr.open("POST", "placeorder.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
if (xhr.readyState == 4 && xhr.status == 200) {
console.log(xhr.responseText);
fetchData(); 
}
};
var id = document.getElementById("mytable1").rows[0].cells[0].innerHTML; // Assuming you want to send the first ID
xhr.send("id=" + id);
alert("ORDER SUCCESSFULLY");
}

fetchData();
</script>
</body>
</html>

<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// $id = $_POST['id'];

// // Save to database
// $conn = new mysqli("localhost", "root", "", "saveddatabase");
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }
// $sql = "INSERT INTO cart (id) VALUES ('$id')";
// if ($conn->query($sql) === TRUE) {
// echo "Order saved successfully";
// } else {
// echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $conn->close(); 

// // Send email
// $mail = new PHPMailer(true);
// try {
// //Server settings
// $mail->isSMTP();
// $mail->Host = 'smtp.example.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'kuttysss26110@gmail.com';
// $mail->Password = 'ipzcvjllhukagnec';
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port = 587;

// //Recipients
// $mail->setFrom('kuttysss26110@gmail.com', 'Mailer');
// $mail->addAddress('kuttysss26110@gmail.com', 'Recipient Name');

// // Content
// $mail->isHTML(true);
// $mail->Subject = 'Order Confirmation';
// $mail->Body    = 'Your order with ID ' . $id . ' has been placed successfully.';

// $mail->send();
// echo 'Message has been sent';
// } catch (Exception $e) {
// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    
    $stmt->close();
    $conn->close();

    // Send email
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com'; // Change this to your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'saravananit10297@gmail.com'; // Your email
        $mail->Password = getenv('SMTP_PASSWORD');  // Retrieve SMTP password from environment variable
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('saravananit10297@gmail.com', 'Mailer');
        $mail->addAddress('saravanankumar10297@gmail.com', 'Recipient Name');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Order Confirmation';
        $mail->Body    = 'Your order with ID ' . $id . ' has been placed successfully.';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

}
?>