<?php
$con = new mysqli("localhost", "root", "", "saveddatabase");

  
$CertifiedId = $_POST["certifiedid"];
$SupplyBranch = $_POST["supplybranch"];
$brandid = $_POST["brandid"]; 

//Update brand details
//$sql = "UPDATE brand SET CertifiedId = $CertifiedId, SupplyBranch = $SupplyBranch WHERE id = $brandid";
$sql="UPDATE `brand` SET `CertifiedId`='$CertifiedId',`SupplyBranch`='$SupplyBranch' WHERE id =".$brandid;
echo $sql;

$result = mysqli_query($con, $sql);
echo($result);

if ($result>0) {
$Price = $_POST["price"];
$Colour = $_POST["colour"];
$Capacity = $_POST["capacity"];
$qty=$_POST["Qty"];
$modelid = $_POST["modelid"]; 
//$Image = $_POST["image"]."PNG"; 



$target_dir = "image/uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
$Image = basename($_FILES["image"]["name"]);
} else {
echo "Error uploading the file.";
exit;
}
//Update model details
$sql = "UPDATE model SET Price = '$Price', Colour = '$Colour', Capacity = '$Capacity', Image = '$Image',Qty='$qty' WHERE id = ".$modelid;
$result = mysqli_query($con, $sql);

if ($result) {
echo "Model data updated successfully.<br>";
echo "<img src='image/uploads/$Image' alt='Model Image' style='width:200px;height:auto;'><br>";
} else {
echo "Error updating model data.";
}
} else {
echo "Error updating brand data.";
}

?>
