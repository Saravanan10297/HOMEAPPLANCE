<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Page</title>


<style>
  /* General Page Styling */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  /* Header Styling */
  header {
    background: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 20px;
    text-align: center;
    font-size: 28px;
    font-weight: bold;
  }

  /* Form Container Styling */
  .form-container {
    width: 50%;
    margin: 20px auto;
    background-color: white;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }

  /* Form Elements Styling */
  label {
    font-size: 16px;
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
  }

  input[type="text"], input[type="file"], select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
  }

  /* Button Styling */
  button {
    background-color: #ff5722;
    color: white;
    padding: 10px 16px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 8px;
    transition: background-color 0.3s ease;
    width: 100%;
  }

  button:hover {
    background-color: #e64a19;
  }

  /* Hide the form sections by default */
  #brand, #ModelForm {
    display: none;
  }
</style>
</head>
<body>

<header>ADMIN!</header>

<div class="form-container">
  <h1>Select Brand</h1>
  <?php
    session_start();
    $userid = $_SESSION['id'];
    $con = new mysqli("localhost", "root", "", "saveddatabase");
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }

    $sql = "SELECT * FROM brand WHERE status = '1'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
      die("Query failed: " . mysqli_error($con));
    }

    $row = mysqli_fetch_all($result, MYSQLI_NUM);
    $len = count($row);

    echo "<select name='Ulist' id='Ulist' onchange='check()'>";
    echo "<option value=''>Select Brand</option>";
    for ($i = 0; $i < $len; $i++) {
      echo "<option value='" . $row[$i][0] . "'>" . ($row[$i][1]) . "</option>";
    }
    echo "<option value='other'>Other Brand</option>";
    echo "</select>";

    mysqli_close($con);
  ?>

  <!-- Brand Form (Hidden by Default) -->
  <div id="brand">
    <form id="applianceForm" enctype="multipart/form-data">
      <label>Brand Name:</label>
      <input type="text" id="brandName" name="brand" required>

      <label>Certified ID:</label>
      <input type="text" id="certifiedid" name="certifiedid" required>

      <label>Supply Branch:</label>
      <input type="text" id="supplybranch" name="supplybranch" required>

      <button type="button" onclick="submitForm()">Next</button>
    </form>
  </div>

  <!-- Hidden Input for Brand ID -->
  <input type="text" id="BrandID" name="BrandID" style="display: none;">

  <!-- Model Form with Image Upload (Hidden by Default) -->
  <div id="ModelForm">
    <h2>Model Information</h2>
    <form id="modelForm" enctype="multipart/form-data">
      <label>Model Name:</label>
      <input type="text" id="modelname" name="modelname" required>

      <label>Price:</label>
      <input type="text" id="price" name="price" required>

      <label>Colour:</label>
      <input type="text" id="colour" name="colour" required>

      <label>Capacity:</label>
      <input type="text" id="capacity" name="capacity" required>

      <label>Quantity:</label>
      <input type="text" id="qty" name="qty" required>

      <label>Image:</label>
      <input type="file" id="image" name="image" required>


      <button type="button" onclick="submitModelForm()">Submit</button>
      <button type="button" onclick="window.location.href='dashborad.php'">Back</button>
    </form>
  </div>

  <div id="demo"></div>
</div>

<script>
  // Show the correct form based on brand selection
  function check() {
    var id = document.getElementById('Ulist').value;
    document.getElementById('BrandID').value = id;

    if (id == 'other') {
      document.getElementById('brand').style.display = "block";
      document.getElementById('ModelForm').style.display = "none";
    } else {
      document.getElementById('brand').style.display = "none";
      document.getElementById('ModelForm').style.display = "block";
    }
  }

  // Show Model form when "Next" button is clicked
  function submitForm() {
    document.getElementById('ModelForm').style.display = "block";
  }

  // Handle form submission with AJAX
  function submitModelForm() {
    var formData = new FormData();
    var id = document.getElementById('Ulist').value;

    if (id == "other") {
      formData.append("brand", document.getElementById("brandName").value);
      formData.append("certifiedid", document.getElementById("certifiedid").value);
      formData.append("supplybranch", document.getElementById("supplybranch").value);
    }

    formData.append("BrandID", document.getElementById("BrandID").value);
    formData.append("modelname", document.getElementById("modelname").value);
    formData.append("price", document.getElementById("price").value);
    formData.append("colour", document.getElementById("colour").value);
    formData.append("capacity", document.getElementById("capacity").value);
    formData.append("qty", document.getElementById("qty").value);
    formData.append("image", document.getElementById("image").files[0]);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "image.php", true);

    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        document.getElementById("demo").innerHTML = xhr.responseText;
      }
    };

    xhr.send(formData);
  }
</script>

</body>
</html>
