<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail de réception
    $destinataire = "a.briand.osteo@gmail.com";

    // Sujet du message
    $sujet = "Nouveau message de $nom";

    // En-têtes pour l'e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envoi de l'e-mail
    mail($destinataire, $sujet, $message, $headers);

    // Redirection vers une page de confirmation
    header("Location: confirmation.html");
}
?>
