<script src="../script/scripts.js" type="text/javascript"></script>
<?php
$name=$_POST["Name"];
$company=$_POST["Company"];
$email=$_POST["E-mail"];
$message=$_POST["Message"];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
$mail = new PHPMailer(true);
require_once "vendor/autoload.php";
$mail = new PHPMailer;
//Enable SMTP debugging.
$mail->SMTPDebug = 3;                           
//Set PHPMailer to use SMTP.
$mail->isSMTP();        
//Set SMTP host name                      
$mail->Host = "smtp-relay.brevo.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                      
//Provide username and password
$mail->Username = "ajaysrao5@gmail.com";             
$mail->Password = "XZ1gtxFq0n6hzavm";                       
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                       
//Set TCP port to connect to
$mail->Port = 587;                    
$mail->From = "info@feniks.co.in";
$mail->FromName = "FCIPLwebMailer";
$mail->addAddress("ajaysrao5@gmail.com@gmail.com", "Ajay");
$mail->isHTML(true);
$mail->Subject = "New Form! AutomailerDoNotReply!";
$mail->Body = "New Entry detected<br><br>
                <table border=\"1\" cellspacing=\"0\" cellpadding=\"5px\">
                <tr><td>Name: </td><td> $name</td></tr>
                <tr><td>Company: </td><td> $company</td></tr>
                <tr><td>E-mail: </td><td> $email</td></tr>
                <tr><td>Message: </td><td> $message</td></tr></table>
                <br><br>Kindly take action.";
$mail->AltBody = "$name, $company, $email, $message";
if(!$mail->send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{ 
    echo "Message has been sent successfully";
    echo "<script>pop();</script>";
    echo "<script>window.location.replace(\"../index.html\");</script>";
}
?>
