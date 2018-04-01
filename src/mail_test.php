<?php
//require 'C:\xampp\htdocs\PHPMailer-master\PHPMailer-master\PHPMailerAutoload.php';
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'vaibhavkhandelwal20@gmail.com';          // SMTP username
$mail->Password = '9457884107'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->From ='vaibhavkhandelwal20@gmail.com';
$mail->FromName = 'VIT EXCHANGE PORTAL';
//$mail->addReplyTo('info@codexworld.com', 'CodexWorld');
$mail->addAddress('divyanshi.mangal2015@vit.ac.in');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>BHAI NE KR DI HAI GYM SURU</h1>';
$bodyContent .= '<p>JISKO KAHE USKO LAPET DU</b></p>';

$mail->Subject = 'Email from Localhost by CodexWorld';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>