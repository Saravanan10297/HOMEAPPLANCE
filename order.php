<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Customer</title>
  <link rel="stylesheet" href="./css/orderStyles.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<?php require_once('Header.php'); ?>

  <main>
    <section class="welcome-section">
      <h1>Welcome, Customer!</h1>
      <p>Select your preferred brand from the dropdown below to view available appliances.</p>

      <div class="brand-selection">
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
          echo "</select>";

          mysqli_close($con);
        ?>
      </div>
    </section>

    <section class="appliance-section">
      <h2>Available Appliances</h2>
      <div class="appliance-cards" id="appliance_cards">
        <!-- Dynamic content will be injected here -->
      </div>
    </section>
  </main>

  <script>
    function check() {
      var value = document.getElementById('Ulist').value;

      // Check if the user selected a brand
      if (value === '') {
        document.getElementById('appliance_cards').innerHTML = ''; // Clear if no brand selected
        return;
      }

      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        var response = this.responseText;
        var Udata = response.split('*');

        var applianceCardsContainer = document.getElementById('appliance_cards');
        applianceCardsContainer.innerHTML = '';  // Clear existing cards before appending new ones

        for (var i = 0; i < Udata.length; i++) {
          var data = Udata[i].split(',');
          console.log(data);

          // Create a card container div
          const card = document.createElement('div');
          card.classList.add('appliance-card');

          // Create the HTML for the card
          card.innerHTML = `
            <img src="image/uploads/${data[6]}" alt="Image" style="width:150px;height:auto;">
            <h3>${data[1]}</h3>
            <p>Price: ${data[2]}</p>
            <p>Color: ${data[3]}</p>
            <p>Capacity: ${data[4]}</p>
            <button class="order-button" onclick="orderAppliance('${data[0]}', '${data[1]}', '${data[2]}', '${data[3]}', '${data[4]}','${data[5]}','${data[6]}','${data[8]}')">Order Now</button>
          `;

          // Append the card to the container
          applianceCardsContainer.appendChild(card);
        }
      }

      xhttp.open('GET', 'sign1.php?BrandName=' + value);
      xhttp.send();
    }

    function orderAppliance(id, modelName, price, color, capacity,brandid,image,qty) {
      alert("saro");
      var userid = <?php echo $userid; ?>;
      alert(id);
      var xhr = new XMLHttpRequest();
      var data = `&modelname=${modelName}&price=${price}&colour=${color}&capacity=${capacity}&userid=${userid}&image=${image}&mid=${id}&Quanty=${qty}&brandid=${brandid}`;
      console.log(data);
      xhr.open("GET", "orderpage1.php?" + data, true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          alert("ORDER SUCCESSFUL");
          window.location.href = 'order2.php?data=' + data;
        }
      };
      xhr.send();
    }


  </script>

</body>
</html>
