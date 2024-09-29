<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Details</title>
<link rel="stylesheet" href="./css/orderStyles.css">

<!-- Adding Google Fonts for better typography -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<!-- External FontAwesome link for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="./css/orderStyles.css">
<style>
    body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    color: #333;
  }

  h1 {
    text-align: center;
    color: #ff5722;
    margin-bottom: 20px;
    font-weight: 700;
  }

  center {
    padding: 20px;
    background-color: #fff;
    margin: 20px auto;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    border-radius: 8px;
  }

  img {
    border-radius: 8px;
    margin-bottom: 20px;
  }

  /* Buttons Styling */
  button {
    background-color: #ff5722;
    color: white;
    padding: 10px 20px;
    margin: 10px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }
 




  /* Container for the table */
  /* .table-container {
    width: 80%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  th, td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #ff5722;
    color: white;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  img {
    border-radius: 8px;
  }

  /* Button Styling */
  /* button {
    background-color: #ff5722;
    color: white;
    padding: 10px 16px;
    margin: 4px;
    border: none;
    cursor: pointer;
    font-size: 14px;
    border-radius: 8px;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #45a049;
  }

  /* Responsive Design */
  /* @media only screen and (max-width: 768px) {
    .table-container {
      width: 100%;
      padding: 10px;
    }

    table {
      font-size: 14px;
    }

    button {
      font-size: 12px;
      padding: 8px;
    }
  }  */ 

    </style>

</head>
<body>

<!-- Header with navigation -->
<?php require_once('Header.php'); ?>

<!-- Main content -->
<form id="orderForm">
  <center>
    <h1>ORDER DETAILS</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $modeln = $_GET['modelname'];
      $price = $_GET['price'];
      $colour = $_GET['colour'];
      $capacity = $_GET['capacity'];
      $brandid = $_GET['brandid'];
      $image = $_GET['image'];
      $quantity = $_GET['Quanty']; // Default quantity is 1
      $mid=$_GET['mid'];

      $userid = $_GET['userid'];

      echo "<img src='image/uploads/{$image}' alt='Model Image'     width: 300px;
              border: 1px solid #ddd;
              border-radius: 10px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
              padding: 20px;
              margin: 10px;
              font-family: Arial, sans-serif;
              text-align: center;'><br><br>";
      echo "<strong>MODEL NAME:</strong> {$modeln}<br><br>";
      echo "<strong>PRICE:</strong> {$price}<br><br>";
      echo "<strong>COLOUR:</strong> {$colour}<br><br>";
      echo "<strong>CAPACITY:</strong> {$capacity}<br><br>";
      echo "<strong>BRAND ID:</strong> {$brandid}<br><br>";
      echo "<strong>QUANTITY:</strong> {$quantity}<br><br>";
      echo "<strong>USER ID:</strong> {$userid}<br><br>";
    }
    ?>
    <button type="button" onclick="placeOrder()">Add To Cart</button>
    <button type="button" onclick="window.location.href='order.php'">BACK</button>
    <!-- <button type="button" onclick="window.location.href='orderview.php'">CART</button> -->
  </center>
</form>

<script>
function placeOrder() {
  var modelname = "<?php echo $modeln; ?>";
  var price = "<?php echo $price; ?>";
  var colour = "<?php echo $colour; ?>";
  var capacity = "<?php echo $capacity; ?>";
  var brandid = "<?php echo $brandid; ?>";
  var image = "<?php echo $image; ?>";
  var quantity = "<?php echo $quantity; ?>";
  var userid = "<?php echo $userid; ?>";
  var Mid="<?php echo $mid; ?>";

  var xhr = new XMLHttpRequest();
  var val = "&modelname=" + modelname +
            "&price=" + price +
            "&colour=" + colour +
            "&capacity=" + capacity +
            "&brandid=" + brandid +
            "&image=" + image +
            "&Quanty=" + quantity +
            "&userid=" + userid+
            "&mid="+Mid;

  xhr.open("POST", "orderpage1.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      alert(xhr.responseText);
      alert("Added to cart successfully!");
       // Refresh the table data
       return false;
      
    }
  };

  xhr.send(val);
}
</script>

</body>
</html>
