<?php
$con = new mysqli("localhost", "root", "", "saveddatabase");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST["BrandID"]=="other"){
        $BrandName = $_POST["brand"];
        $CertifiedId = $_POST["certifiedid"];
        $SupplyBranch = $_POST["supplybranch"];
    
$Status = 1;

$sql = "INSERT INTO brand (BrandName, CertifiedId, SupplyBranch, Status) VALUES ('$BrandName', '$CertifiedId', '$SupplyBranch', '$Status')";
$result = mysqli_query($con, $sql);
$lastInsertedID = mysqli_insert_id($con);
    }

$Model_Name = $_POST["modelname"];
$Price = $_POST["price"];
$Colour = $_POST["colour"];
$Capacity = $_POST["capacity"];
$quanity = $_POST["qty"];
echo($quanity);
if($_POST["BrandID"]=="other"){
    $Brand_id = $lastInsertedID;
}else{
    $Brand_id= $_POST["BrandID"];
}
$Status = 1;

$target_dir = "image/uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
$Image = basename($_FILES["image"]["name"]);
} else {
echo "Error uploading the file.";
exit;
}

$sql = "INSERT INTO model (Model_Name, Price, Colour, Capacity, Brand_id, Image, Status,Qty) VALUES ('$Model_Name', '$Price', '$Colour', '$Capacity', '$Brand_id', '$Image', '$Status','$quanity')";
$result = mysqli_query($con, $sql);

if ($result) {
echo "Model data inserted successfully.<br>";
echo "<img src='image/uploads/$Image' alt='Model Image' style='width:200px;height:auto;'><br>";
} else {
echo "Error inserting model data.";
}
} else {
echo "Error inserting brand data.";
}

?>