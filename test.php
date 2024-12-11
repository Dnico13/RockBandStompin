<?php
function isIframe($string) {
     Expression régulière pour détecter une balise <iframe>
    $pattern = '/<iframe.*?<\/iframe>/i';
    return preg_match($pattern, $string);
}

 Exemple d'utilisation
$input = '<iframe src="https://example.com"></iframe>';
if (isIframe($input)) {
    echo "C'est une balise iframe.";/
} else {
    echo "Ce n'est pas une balise iframe.";
}
?>
 */   
        
 if (isset($_POST['submit'])) {


        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $objet = $_POST['objet'];
        $detail = $_POST['detail'];
        $message = $_POST['message'];
        $phone = $_POST['phone'];
        $prenom = $_POST['prenom'];

        //$to = "Dnico13@hotmail.com, hugoduvignau33@hotmail.fr, francoiscalavia@gmail.com";
        $to = "contact@stompin-bones.fr";
        $header = "From: $email";
        $body = "Ceci est un message du formulaire de contact de $prenom $nom
                il est joignable au $phone.
                $message";

        if (mail($to, $objet, $detail, $body, $header)) {

            $alert = "Merci pour votre message, nous vous recontacterons tres prochainement";
            echo "<script>alert('$alert');</script>";
        } else {
            echo " Une erreur s'est produite lors de l'envoi de votre message.";
        }
    }