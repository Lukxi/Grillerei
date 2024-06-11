<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $empfaenger = "andreas@kergel.de";
        $absender = filter_var($_POST["mailE-Mail"], FILTER_VALIDATE_EMAIL);
        $option = $_POST["optOption"];
        $betreff = filter_var($_POST["tfBetreff"], FILTER_SANITIZE_STRING);
        $nachricht = filter_var($_POST["msgNachricht"], FILTER_SANITIZE_STRING);

        $ignore_fields = array("submit");

        $header = "Von: $absender\r\nContent-Type: text/plain; charset=UTF-8\r\n"; 
    
        foreach($_POST as $name => $value) {
            if ($name == $ignore_fields) {
                continue; // ignore Felder wird nicht angezeigt
            } 
        $nachricht .= "\n$name: $value";
        }

        $senden = mail($empfaenger, $option, $betreff, $nachricht, $header);
    }
?>