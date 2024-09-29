<html>
        <head>
            <title>USER REGISTER FORM</title>
        </head>
        <body>
            <form id="registerform">
                <h1>USER REGISTER FORM</h1>
                <lable>NAME:</lable>
                <input type="text" id="name" name="name" required><br><br>
                <lable>EMAIL:</lable>
                <input type="text" id="email" name="email" required><br><br>
                <lable>PHONENUMBER:</lable>
                <input type="text" id="phonenumber" name="phonenumber" required><br><br>
                <lable>GENDER:</lable>
                <input type="text" id="gender" name="gender" required><br><br>
                <lable>ADDRESS:</lable>
               <p> <input type="text" id="address" name="address" required></p>
                <lable>LANDMARK:</lable>
                <input type="text" id="landmark" name="landmark" required><br><br>
                <lable>CITY:</lable>
                <input type="text" id="city" name="city" required><br><br>
                <lable>STATE:</lable>
                <input type="text" id="state" name="state" required><br><br>
                <lable>USERNAME:</lable>
                <input type="text" id="username" name="username" required><br><br>
                <lable>PASSWORD</lable>
                <input type="password" name="password" required="" id="password"><br><br>
                <lable>REENTERPASSWORD:</lable>
                <input type="password" id="reenterpassword" name="reenterpassword" required=""><br><br>
                <button type="button" onclick="Submit()">Submit</button>
               
            </form>
            <div id="demo"></div>
            <script>
                function Submit(){
                   
                    var name = document.getElementById("name").value;
                    var email = document.getElementById("email").value;
                    var phonenumber = document.getElementById("phonenumber").value;
                    var gender = document.getElementById("gender").value;
                    var address = document.getElementById("address").value;
                    var landmark = document.getElementById("landmark").value
                    var city = document.getElementById("city").value;
                    var state = document.getElementById("state").value;
                    var username = document.getElementById("username").value;
                    var password = document.getElementById("password").value;
                    //var reenterpassword = document.getElementById("reenterpassword").value;
                    
                    var xhr = new XMLHttpRequest();
                    var val =   "NAME=" +(name) +
                                "&EMAIL=" +(email) +
                                "&PHONENUMBER=" + (phonenumber)+
                                "&GENDER=" + (gender) +
                                "&ADDRESS=" + (address) +
                                "&LANDMARK=" + (landmark) +
                                "&CITY=" + (city) +
                                "&STATE=" + (state) +
                                "&USERNAME=" + (username) +
                                "&PASSWORD=" + (password );
                                //"&REENTERPASSWORD=" + (reenterpassword);
            alert(val);
            xhr.open("POST", "Usersubmit.php",true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("demo").innerHTML = xhr.responseText;
                    window.location.href="loginpage.php";

                }
            };

            xhr.send(val);
        }
                
                </script>
    </body>
    </html>