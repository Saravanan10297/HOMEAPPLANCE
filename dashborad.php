<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<style>
body {
background-color: #f0f8ff;
font-family: Arial, sans-serif;
color: #333;
}
h1 {
color: #4CAF50;
}
button {
background-color: #007BFF; /* Blue */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 10px;
border-radius: 5px;
cursor: pointer;
transition: background-color 0.3s ease;
}
button:hover {
background-color: #0056b3;
}
center {
margin-top: 50px;
}
.logout-container {
text-align: right;
padding: 10px 20px;
}
</style>
</head>
<body>
<div class="logout-container">
<button type="button" onclick="confirmLogout()">Log Out</button>
</div>
<center>
<h1>DASHBOARD...!</h1>
<button type="submit" onclick="window.location.href='Addpage.php'">ADD Brand & Model</button>
<button type="submit" onclick="window.location.href='Update.php'">UPDATE Brand & Model</button>
<button type="submit" onclick="window.location.href='Udelete.php'">DELETE Brand & Model</button>
</center>

<script>
function confirmLogout() {
if (confirm("Are you sure you want to log out?")) {
window.location.href = 'loginpage.php';
}
}
</script>
</body>
</html>