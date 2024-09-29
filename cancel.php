<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

session_start();

$con = new mysqli("localhost", "root", "", "saveddatabase");

if (isset($_POST['id'])) {
$id = $_POST['id'];

// Update database
$sql = "UPDATE cart SET Status = 3 WHERE id = $id";
if (mysqli_query($con, $sql)) {
// Fetch updated data (if needed)
$sql = "SELECT * FROM cart WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_all($result, MYSQLI_NUM);
$uid = $row[0][8]; // Assuming the email is in the third column


echo $uid;
$sql1="select * from registerform where id=".$uid;
echo $sql1;
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_all($result1, MYSQLI_NUM);

$email = $row1[0][2]; // Assuming the email is in the third column
echo"<h1>".$email."</h1>";

// Send email
$mail = new PHPMailer(true);

try {
// Server settings
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Username = 'saravananit10297@gmail.com';
$mail->Password = 'vkmz coec pkpv gnux';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

// Recipients
$mail->setFrom('saravanankumar10297@gmail.com', 'IT');
$mail->addAddress($email, 'IT');

// Content
$mail->isHTML(true);
$mail->Subject = 'Order Canceled';
$mail->Body    = "Order with ID $id has been canceled.";

if ($mail->send()) {
echo "Order canceled and email sent successfully.";
} else {
echo "Order canceled but email sending failed.";
}
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
} else {
echo "Error updating record: " . mysqli_error($con);
}
} else {
header('Location: view1.php');
exit(0);
}
?>
