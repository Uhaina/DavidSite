<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $sujet = $_POST["sujet"];

    $to = 'hello@davidvelten.fr';
    $subject = $sujet;
    $headers = 'From:' .$email. "\r\n";

    mail($to, $subject, $message, $headers);
?>