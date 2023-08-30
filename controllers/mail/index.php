<?php
require $_SERVER["DOCUMENT_ROOT"] . '/MadisonGrantPhoto/library/PHPMailer/src/PHPMailer.php';
require $_SERVER["DOCUMENT_ROOT"] . '/MadisonGrantPhoto/library/PHPMailer/src/SMTP.php';


$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->Username = 'your_username';
$mail->Password = 'your_password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('from@example.com', 'Your Name');
$mail->addAddress('to@example.com', 'Recipient Name');
$mail->isHTML(true);
$mail->Subject = 'Subject';
$mail->Body = 'Email body';

if ($mail->send()) {
    echo 'Message sent!';
} else {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
