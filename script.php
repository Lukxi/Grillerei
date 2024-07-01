<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

header('Content-Type: application/json'); // Setzt den Content-Type Header auf JSON

$response = [
    "status" => "error",
    "message" => "Nachricht konnte nicht verschickt werden."
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = htmlspecialchars($_POST["email"]);
    $option = htmlspecialchars($_POST["option"]);
    $betreff = htmlspecialchars($_POST["betreff"]);
    $nachricht = htmlspecialchars($_POST["nachricht"]);

    $mail = new PHPMailer(true);

    try {  
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
        
        $response["status"] = "success";
        $response["message"] = "Nachricht erfolgreich gesendet.";
    } catch (Exception $e) {
        $response["message"] = "Nachricht konnte nicht verschickt werden. Fehler E-Mail: " . $e->getMessage();
    }
}

echo json_encode($response);
?>
