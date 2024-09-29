<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>USER REGISTER FORM</title>
<style>
h1 {
color: #792099;
}
button {
background-color: #792099;
color: white;
border: 1px solid #792099;
border-radius: 5px;
padding: 10px;
margin: 20px 0px;
cursor: pointer;
font-size: 16px;
width: 100;
}
button:hover {
background-color: #5e1a73;
}
input[type="text"],
input[type="email"],
input[type="password"] {
padding: 2px;
margin: 1px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 1px;
box-sizing: border-box;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
border-color: #792099;
outline: none;
}
label {
font-weight: bold;
margin-top: 10px;
display: block;
}
.gender-container {
display: flex;
align-items: center;
}
.gender-container label {
margin-right: 10px;
margin-top: 0;
}
</style>
</head>
<body>
<form id="registerform" onsubmit="return validateForm()">
<h1>USER REGISTER FORM</h1>
<label>NAME:</label>
<input type="text" id="name" placeholder="name" required><br><br>
<label>EMAIL:</label>
<input type="email" id="email" placeholder="email" required><br><br>
<label>PHONENUMBER:</label>
<input type="text" id="phonenumber" placeholder="phonenumber" required pattern="\d{10}"><br><br>
<label>GENDER:</label>
<div class="gender-container">
<input type="radio" id="male" name="gender" value="male" required>
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female" required>
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other" required>
<label for="other">Other</label>
</div>
<br><br>
<label>ADDRESS:</label>
<p><input type="text" id="address" placeholder="address" required></p>
<label>LANDMARK:</label>
<input type="text" id="landmark" placeholder="landmark" required><br><br>
<label>CITY:</label>
<input type="text" id="city" placeholder="city" required><br><br>
<label>STATE:</label>
<input type="text" id="state" placeholder="state" required><br><br>
<label>USERNAME:</label>
<input type="text" id="username" placeholder="username" required maxlength="10"><br><br>
<label>PASSWORD:</label>
<input type="password" placeholder="password" required id="password"><br><br>
<label>REENTER PASSWORD:</label>
<input type="password" id="reenterpassword" placeholder="reenterpassword" required><br><br>
<button type="button" onclick="Submit()">Submit</button>
</form>
<div id="demo"></div>
<script>
function validateForm() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var phonenumber = document.getElementById("phonenumber").value;
var gender = document.querySelector('input[name="gender"]:checked');
var address = document.getElementById("address").value;
var landmark = document.getElementById("landmark").value;
var city = document.getElementById("city").value;
var state = document.getElementById("state").value;
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
var reenterpassword = document.getElementById("reenterpassword").value;

var namePattern = /^[A-Za-z]+$/;
var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

if (!namePattern.test(name)) {
alert("Name must contain only letters.");
return false;
}

if (!emailPattern.test(email)) {
alert("Email must contain uppercase, lowercase, and special characters.");
return false;
}

if (!phonenumber || !/^\d{10}$/.test(phonenumber)) {
alert("Phone number is required and must be 10 digits.");
return false;
}

if (!gender) {
alert("Gender is required.");
return false;
}

if (!address) {
alert("Address is required.");
return false;
}

if (!landmark) {
alert("Landmark is required.");
return false;
}

if (!city) {
alert("City is required.");
return false;
}

if (!state) {
alert("State is required.");
return false;
}

if (!username) {
alert("Username is required.");
return false;
}

if (!password) {
alert("Password is required.");
return false;
}

if (password !== reenterpassword) {
alert("Passwords do not match.");
return false;
}

return true;
}

function Submit() {
if (!validateForm()) {
return;
}

var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var phonenumber = document.getElementById("phonenumber").value;
var gender = document.querySelector('input[name="gender"]:checked').value;
var address = document.getElementById("address").value;
var landmark = document.getElementById("landmark").value;
var city = document.getElementById("city").value;
var state = document.getElementById("state").value;
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;

var xhr = new XMLHttpRequest();
var val = "NAME=" + name +
"&EMAIL=" + email +
"&PHONENUMBER=" + phonenumber +
"&GENDER=" + gender +
"&ADDRESS=" + address +
"&LANDMARK=" + landmark +
"&CITY=" + city +
"&STATE=" + state +
"&USERNAME=" + username +
"&PASSWORD=" + password;

xhr.open("POST", "Usersubmit.php", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xhr.onreadystatechange = function() {
if (xhr.readyState == 4 && xhr.status == 200) {
document.getElementById("demo").innerHTML = xhr.responseText;
location.reload(); // Refresh the page
}
};

xhr.send(val);
}
</script>
</body>
</html>