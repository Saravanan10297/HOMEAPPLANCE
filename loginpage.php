<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Login</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form id="loginForm" onsubmit="return login(event);">
                <div class="textbox">
                    <input type="text" id="username" placeholder="Username" required>
                </div>
                <div class="textbox">
                    <input type="password" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <p class="error" id="errorMsg"></p>
                <div class="link">
                    <a href="#">Forgot Password?</a>
                    <br>
                    <a onclick="window.location.href='signup.php'">Create an Account</a>
                </div>
            </form>
        </div>
    </div>
    <script>
function login(event) {
event.preventDefault();

var username = document.getElementById('username').value;
var password = document.getElementById('password').value;

if(username === "Admin" && password === "Admin") {
alert("Welcome Admin!");
   window.location.href = "dashborad.php";
return;
}

var xhr = new XMLHttpRequest();
var val = "username=" + (username) + 
"&password=" +(password);

xhr.open("POST", "signin.php", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xhr.onreadystatechange = function() {
if (xhr.readyState == 4 && xhr.status == 200) {
var response = xhr.responseText;

console.log(response);
if (response.trim() === "success") {
window.location.href = "order.php"; // Redirect on success
} else {
//document.getElementById("demo").innerHTML = "Invalid username or password";
}
}
};

xhr.send(val);
}
</script>
    <script src="script.js"></script>
</body>
</html>
