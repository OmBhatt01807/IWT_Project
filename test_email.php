<html>
    <head></head>
    <body>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

require("./include/PHPMailer.php");
require("./include/SMTP.php");

$mail = new PHPMailer(true);
                              
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "sapraharsh9604@gmail.com";                 
$mail->Password = "Hs@2532002";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "sapraharsh9604@gmail.com";
$mail->FromName = "HARSH";

$mail->addAddress("sapraharsh9604@gmail.com", "Harsh");//recip


$mail->Subject = "Forgot Password Email";
$mail->Body = "your new password :".rand(111111,999999);
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>

</body>
</html>
