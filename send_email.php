<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Laden Sie die Autoloader Datei (bei Verwendung von Composer)
require 'vendor/autoload.php';

// Manuelle Einbindung (bei manueller Installation)
// require 'vendor/phpmailer/phpmailer/src/Exception.php';
// require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Server-Einstellungen
        $mail->SMTPDebug = 2;                                       // Debug-Modus für detaillierte Fehlermeldungen
        $mail->isSMTP();                                            // Setzen des Mailers auf SMTP
        $mail->Host       = 'smtp.freesmtpservers.com';             // SMTP-Server
        $mail->SMTPAuth   = false;                                  // Keine SMTP-Authentifizierung
        $mail->Port       = 25;                                     // TCP-Port für die Verbindung (normalerweise 25, 587 oder 465)
        // Empfänger
        $mail->setFrom('info@grillerei-stummbeck.de', 'Mailer');
        $mail->addAddress('info@grillerei-stummbeck.de', 'Empfaenger');  // Empfänger hinzufügen

        // Inhalt
        $mail->isHTML(false);                                       // E-Mail-Format auf reinen Text setzen
        $mail->Subject = 'Neue Kontaktanfrage von ' . $name;
        $mail->Body    = "Name: $name\nEmail: $email\nNachricht:\n$message";

        $mail->send();
        echo 'Nachricht erfolgreich gesendet.';
    } catch (Exception $e) {
        echo "Nachricht konnte nicht gesendet werden. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Ungültige Anfrage.';
}
?>
