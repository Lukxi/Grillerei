<?php

use PHPMailer\PHPMailer;
use PHPMailer\Exception;

require "vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = htmlspecialchars($_POST["email"]);
    $option = htmlspecialchars($_POST["option"]);
    $betreff = htmlspecialchars($_POST["betreff"]);
    $nachricht = htmlspecialchars($_POST["nachricht"]);

    $mail = new PHPMailer(true);

    try {  
            
            $mail->SMTPDebug = 2;
            
            $mail->isSMTP();
          
            $mail->SMTPAuth = false;
              
            $mail->Host = "smtp.freesmtpservers.com";
          
            $mail->Port = 25;
          
            $mail->setFrom("andreas.kergel@gmail.com", "Absender");
          
            $mail->addAddress("andreas.kergel@gmail.com", "Empfänger");
        
            $mail->IsHTML(false);
          
            $mail->Subject = $betreff;
        
            $mail->Body = $nachricht;
        
            $mail->AltBody = $nachricht;

            $mail->send();

            echo "Nachricht erfolgreich gesendet.";

        }

    catch (Exception $e) {
        echo "Nachricht konnte nicht verschickt werden. Fehler E-Mail: ".$e->getMessage();
    }
}    

?>