


<?php
function sendContact()
{
    if (isset($_POST['submit'])) {

        // Validation des données d'entrée
        $nom = htmlspecialchars($_POST['nom']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $objet = htmlspecialchars($_POST['objet']);
        $detail = htmlspecialchars($_POST['detail']);
        $message = htmlspecialchars($_POST['message']);
        $phone = htmlspecialchars($_POST['phone']);
        $prenom = htmlspecialchars($_POST['prenom']);
    
        if ($email === false) {
            echo "Adresse email invalide.";
        } else {
            $to = "contact@stompin-bones.fr";
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
            // Construction du corps du message
            $body = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre site.\n\n";
            $body .= "Détails du message :\n";
            $body .= "---------------------\n";
            $body .= "Nom : $prenom $nom\n";
            $body .= "Email : $email\n";
            $body .= "Téléphone : $phone\n";
            $body .= "Objet : $objet\n\n";
            $body .= "Message :\n$message\n\n";
            $body .= "---------------------\n";
            $body .= "Merci d'avoir utilisé notre formulaire de contact.\n";
            $body .= "Nous vous répondrons dans les plus brefs délais.\n";
            $body .= "Bonne journée !";
    
            if (mail($to, $objet, $body, $headers)) {
                $alert = "Merci pour votre message, nous vous recontacterons très prochainement";
                echo "<script>alert('$alert');</script>";
            } else {
                echo "Une erreur s'est produite lors de l'envoi de votre message.";
            }
        }
    }
    
   
};
?>