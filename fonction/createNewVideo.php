<?php
require_once './pdo.php';
function createNewVideo($pdo)
{
    if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['Submit'])) {


        
        $balise = htmlspecialchars($_POST['balise_video']);

        $query  = $pdo->prepare('INSERT INTO Video (balise_video) 
        
        VALUES (:balise)');

        $query->bindParam(':balise',$balise);
        

        $query->execute();

        header('location: ./espaceadmin.php');
    } else {
        echo " Il y a eu une erreur lors de l envoi de la balise";
    }
}