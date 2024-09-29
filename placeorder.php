<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$con = new mysqli("localhost", "root", "", "saveddatabase");

if (isset($_POST['User_id'])) {
$user_id = $_POST['User_id'];
$sql = "UPDATE cart SET Status = 1 WHERE Status = 0 AND User_id = '$user_id'";
if ($con->query($sql) === TRUE) {
$sql = "SELECT * FROM `cart` WHERE Status = 1 AND User_id = '$user_id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_all($result, MYSQLI_NUM);
$len = count($row);
echo $len;
$sql1 = "SELECT * FROM registerform WHERE Id = '$user_id'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_all($result1, MYSQLI_NUM);
$name=$row1[0][1];
$email=$row1[0][2];
$mailcontent = "<table border='1'>
<tr>
<th>ID</th>
<th>MODEL NAME</th>
<th>PRICE</th>
<th>COLOUR</th>
<th>CAPACITY</th>
<th>BRAND ID</th>
<th>IMAGE</th>
<th>QUANTITY</th>
<th>USER ID</th>
</tr>";

for ($i = 0; $i < $len; $i++) {
$mailcontent.= "<tr>";
$mailcontent.="<td>" .  $row[$i][0] . "</td>";
$mailcontent.= "<td>" . $row[$i][1] . "</td>";
$mailcontent.=  "<td>" . $row[$i][2] . "</td>";
$mailcontent.= "<td>" . $row[$i][3] . "</td>";
$mailcontent.=  "<td>" . $row[$i][4] . "</td>";
$mailcontent.=  "<td>" . $row[$i][5] . "</td>";
$mailcontent.=  "<td>" . $row[$i][6] . "</td>";
$mailcontent.=  "<td>" . $row[$i][7] . "</td>";
$mailcontent.=  "<td>" . $row[$i][8] . "</td>";

$mailcontent.=  "</tr>";
}

$mailcontent.= "</table>";
$mailcontent.= "THANKYOU <br> HA";



// $to ="saravananit10297@gmail.com";
// $subject =$mailcontent;

// $body ="Order Placed";
// $header ="From:saravanankumar10297@gmail.com";
// $header.="MINE-Version: 1.0\r\n";
// $header.="Content-type: text/plain\r\n";

// $retval = mail($to,$subject,$body,$header);
// if($retval == true){

//     echo "Message sent successfully...";

// }else{
//     echo "Message could not be sent...";
// }
$mail = new PHPMailer(true);

try {
// Server settings
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Username = 'saravananit10297@gmail.com';
$mail->Password = 'vkmz coec pkpv gnux';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 25;

// Recipients
$mail->setFrom('saravanankumar10297@gmail.com', 'IT');
$mail->addAddress($email, 'ORDER PLACED');

// Content

$mail->isHTML(true);
$mail->Subject = 'Order Placed';
$mail->Body    = " DEAR,  ".$name. " <br> Your order with has been successfully placed.<br>".$mailcontent;

if ($mail->send()) {
echo "Order placed and email sent successfully.";
} else {
echo "Order placed but email sending failed.";
}
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
} else {
echo "Error updating record: " . mysqli_error($con);
}
} else {
//header('Location: view1.php');
exit(0);
}

// $con->close();

?>
