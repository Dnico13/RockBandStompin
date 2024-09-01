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
        