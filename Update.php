<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Brand & Model</title>
<style>
    body {
        background-color: #fff; /* Black background */
        color: #000; /* White text color */
        font-family: Arial, sans-serif;
        text-align: center;
        padding: 20px;
    }
    h1 {
        color: #ff5722; /* Orange for heading */
    }
    label, select, input {
        display: block;
        margin: 10px auto;
        padding: 10px;
        width: 80%;
        max-width: 500px;
        background-color: #333;
        border: 1px solid #555;
        border-radius: 5px;
        color: #fff;
    }
    select {
        cursor: pointer;
    }
    input[type="file"] {
        background-color: #444;
    }
    button {
        background-color: #ff5722; /* Orange button */
        border: none;
        padding: 10px 20px;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        margin: 10px;
        transition: background-color 0.3s ease;
    }
    button:hover {
        background-color: #e64a19; /* Darker orange on hover */
    }
</style>
</head>
<body>
<h1>UPDATE BRAND & MODEL</h1>

<!-- Brand Dropdown -->
<?php
$con = new mysqli("localhost", "root", "", "saveddatabase");
$sql = "SELECT * FROM brand";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_all($result, MYSQLI_NUM);
$len = count($row);
echo "<select name='Blist' id='Blist' onchange='Brand()'>";
echo "<option value=''>Select Brand</option>";
for ($i = 0; $i < $len; $i++) {
    echo "<option value='" . $row[$i][0] . "'>" . $row[$i][1] . "</option>";
}
echo "</select>";
?>
<br><br>

<!-- Form Fields -->
<form id="updateform">
    <input type="text" id="brandid" name="brandid" style="display: none;"><br>
    <label>CERTIFIEDID:</label>
    <input type="text" id="certifiedid" name="certifiedid" style="display: none;"><br><br>
    <label>SUPPLYBRANCH:</label>
    <input type="text" id="supplybranch" name="supplybranch" style="display: none;"><br><br>

    <!-- Model Dropdown -->
    <div id="Model">
        <select name='Mlist' id='Mlist' onchange='ShowModel()'>
            <option value=''>Select Model</option>
        </select>
    </div>
    <br><br>
    <input type="text" id="modelid" name="modelid" style="display: none;"><br>
    <label>PRICE:</label>
    <input type="text" id="price" name="price" style="display: none;"><br><br>
    <label>COLOUR:</label>
    <input type="text" id="colour" name="colour" style="display: none;"><br><br>
    <label>CAPACITY:</label>
    <input type="text" id="capacity" name="capacity" style="display: none;"><br><br>
    <label>Quantiy:</label>
    <input type="text" id="Qty" name="Qty" style="display: none;"><br><br>
    <label>IMAGE:</label>
    <input type="file" id="image" name="image" style="display: none;"><br><br>
    <button type="button" id="Submit" onclick="update()">UPDATE</button>
</form>

<button type="button" onclick="window.location.href='dashborad.php'">BACK</button>

<!-- JavaScript to handle model loading and form fields -->
<script>
function Brand() {
    var Brandid = document.getElementById('Blist').value;
    document.getElementById('certifiedid').style.display = "block";
    document.getElementById('supplybranch').style.display = "block";

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        var Bdata = this.responseText.split("@");
        alert(this.responseText);
        var brandDetails = Bdata[0].split("&");
        document.getElementById('brandid').value = brandDetails[0];
        document.getElementById('certifiedid').value = brandDetails[1];
        document.getElementById('supplybranch').value = brandDetails[2];

        var modelOptions = "<option value=''>Select Model</option>";
        var models = Bdata[1].split("%");
        for (var i = 0; i < models.length - 1; i++) {
            var model = models[i].split("*");
            modelOptions += "<option value='" + model[0] + "'>" + model[1] + "</option>";
        }
        document.getElementById('Mlist').innerHTML = modelOptions;
    }
    xhttp.open("GET", "modelupdate.php?id=" + Brandid);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

function ShowModel() {
    var ModelId = document.getElementById('Mlist').value;
    document.getElementById('price').style.display = "block";
    document.getElementById('colour').style.display = "block";
    document.getElementById('capacity').style.display = "block";
    document.getElementById('Qty').style.display = "block";
    document.getElementById('image').style.display = "block";

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        var ModelDetails = this.responseText.split("*");
        document.getElementById('modelid').value = ModelDetails[0];
        document.getElementById('price').value = ModelDetails[1];
        document.getElementById('colour').value = ModelDetails[2];
        document.getElementById('capacity').value = ModelDetails[3];
        document.getElementById('Qty').value = ModelDetails[4];
    }
    xhttp.open("GET", "getmodel.php?id=" + ModelId);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

function update() {
    var formData = new FormData();
    formData.append("brandid", document.getElementById("brandid").value);
    formData.append("certifiedid", document.getElementById("certifiedid").value);
    formData.append("supplybranch", document.getElementById("supplybranch").value);
    formData.append("modelid", document.getElementById("modelid").value);
    formData.append("price", document.getElementById("price").value);
    formData.append("colour", document.getElementById("colour").value);
    formData.append("capacity", document.getElementById("capacity").value);
    formData.append("Qty", document.getElementById("Qty").value);
    formData.append("image", document.getElementById("image").files[0]);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "Aupdate.php", true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    };

    xhr.send(formData);
}
</script>
</body>
</html>
