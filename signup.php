<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        #demo {
            margin-top: 20px;
            text-align: center;
            color: green;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Register</h1>
    <form id="registerform">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phonenumber">Phone Number:</label>
        <input type="text" id="phonenumber" name="phonenumber" required>

        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="landmark">Landmark:</label>
        <input type="text" id="landmark" name="landmark" required>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="reenterpassword">Re-enter Password:</label>
        <input type="password" id="reenterpassword" name="reenterpassword" required>

        <button type="button" onclick="Submit()">Submit</button>
    </form>

    <div id="demo"></div>
</div>

<script>
    function Submit() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phonenumber = document.getElementById("phonenumber").value;
        var gender = document.getElementById("gender").value;
        var address = document.getElementById("address").value;
        var landmark = document.getElementById("landmark").value;
        var city = document.getElementById("city").value;
        var state = document.getElementById("state").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var reenterpassword = document.getElementById("reenterpassword").value;

        if (password !== reenterpassword) {
            alert("Passwords do not match!");
            return;
        }

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

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("demo").innerHTML = xhr.responseText;
                window.location.href = "loginpage.php";
            }
        };

        xhr.send(val);
    }
</script>

</body>
</html>
