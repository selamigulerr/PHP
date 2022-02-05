<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function Filters($Deger){
    $Step1 = trim($Deger);
    $Step2 = strip_tags($Step1);
    $Step3 = htmlspecialchars($Step2, ENT_QUOTES);
    return $Step3;
}
$FirstName = Filters($_POST["Firstnane"]);
$Email = Filters($_POST["Email"]);
$Message = Filters($_POST["Message"]);
$mail = new PHPMailer(true);
try {
    //SUNUCU AYARLARI
    $mail->SMTPDebug = 2;              //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true; //Enable SMTP authentication
    $mail->CharSet    = 'UTF-8';
    $mail->Username   = 'mailertesting00@gmail.com';                     //SMTP username
    $mail->Password   = 'Selcuk2000!';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Custom connection options //Note that these settings are INSECURE
    $mail->SMTPOptions = array(
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ],
    );

    //Recipients
    $mail->setFrom($Email, 'Contact Form');
    $mail->addAddress('selami.gulerr@gmail.com', 'Selami Güler');     //Add a recipient
    $mail->addReplyTo($Email, $FirstName);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "İLETİŞİM FORMU";
    $mail->Body    = $Message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Mail Gönderildi.';
} catch (Exception $e) {
    echo "Mail gönderim hatası: {$mail->ErrorInfo}";
}
?>