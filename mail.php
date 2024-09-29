
    <?php
    
    //session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
        require "phpmailer/src/Exception.php";
        require "phpmailer/src/PHPMailer.php";
        require "phpmailer/src/SMTP.php"; 
        if(isset($_POST["send"]))
        { 
               $email =$_POST['email'];
               $subject = $_POST['subject'];
               $message = $_POST['message'];


        $mail = new PHPMailer(true);
    
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP(); 
        $mail->SMTPAuth   = true;       
        $mail->Host       = 'smtp.gmail.com';
        $mail->Username   = 'kuttysss26110@gmail.com';                  
        $mail->Password   = 'ipzcvjllhukagnec'; 
                                    
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
        $mail->Port       = 587;                                   
        $mail->setFrom('kuttysss26110@gmail.com', 'IT');
        $mail->addAddress('kuttysss26110@gmail.com', 'IT');
    
        //Content
        $mail->isHTML(true);                               
        $mail->Subject = 'NEW ENQUIRY';
        $mail->Body    = '<h3>HAI </h3>
                <h4>Email:'.$email.'</h4> 
                <h4>Subject:'.$subject.'</h4> 
                <h4>Message: '.$message.'</h4> 
                ';    
                if( $mail->send())
                {
                    $_SESSION['status'] = "THANK YOU";
                    header("Location:{$_SERVER["HTTP_REFERER"]}");
                    exit(0);
                }
                else{
                    $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    header("Location:{$_SERVER["HTTP_REFERER"]}");
                    exit(0);
                }
       
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$email->ErrorInfo}";
      }
}
else{
    header('Location:index3.php');
    exit(0);
}
?>