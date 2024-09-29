<?php
    
//     //session_start();
//     use PHPMailer\PHPMailer\PHPMailer;
//     use PHPMailer\PHPMailer\Exception;
//         require "phpmailer/src/Exception.php";
//         require "phpmailer/src/PHPMailer.php";
//         require "phpmailer/src/SMTP.php"; 
//         if(isset($_POST["send"]))
//         { 
//                $email =$_POST['email'];
//                $subject = $_POST['subject'];
//                $message = $_POST['message'];


//         $mail = new PHPMailer(true);
    
//     try {
//         //Server settings
//         //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//         $mail->isSMTP(); 
//         $mail->SMTPAuth   = true;       
//         $mail->Host       = 'smtp.gmail.com';
//         $mail->Username   = 'kuttysss2610@gmail.com';                  
//         $mail->Password   = 'ipzcvjllhukagnec'; 
                                    
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
//         $mail->Port       = 587;                                   
//         $mail->setFrom('kuttysss2610@gmail.com', 'IT');
//         $mail->addAddress('kuttysss2610@gmail.com', 'IT');
    
//         //Content
//         $mail->isHTML(true);                               
//         $mail->Subject = "Order Canceled";
//         $mail->Body    = "Order with ID $id has been canceled.";

        
//                 if( $mail->send())
//                 {
//                     $_SESSION['status'] = "THANK YOU";
//                     header("Location:{$_SERVER["HTTP_REFERER"]}");
//                     exit(0);
//                 }
//                 else{
//                     $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//                     header("Location:{$_SERVER["HTTP_REFERER"]}");
//                     exit(0);
//                 }
       
//         echo 'Message has been sent';
//     } catch (Exception $e) {
//         echo "Message could not be sent. Mailer Error: {$email->ErrorInfo}";
//       }
// }
// else{
//     header('Location:view1.php');
//     exit(0);
//}
$body="This order was canceled";
$email =$_POST['email'];
//$subject = $_POST['subject'];
//$message = $_POST['message'];

require_once('class.phpmailer.php');
						$mail             = new PHPMailer();
						$body             = eregi_replace("[\]",'',$boby);
						$body             = str_replace("^","'",$body);
						$mail->IsSMTP();
						$mail->Host       = "localhost";
						$mail->Port       = 25;                  
						$mail->Subject="Order Canceled";
						$mail->SetFrom("saravanankumarit@gmail.com");
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						$mail->MsgHTML($body);
						$mail->AddAddress($email);
						//$mail->AddAddress($To1);
						while($j<$count){
							//$mail->AddAddress($To[$j]);
							$j++;
						} 
						$MailStatus=$mail->Send();
?>
