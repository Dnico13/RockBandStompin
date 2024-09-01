<?php

function createNewPiste($pdo)
{
    if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['Submit'])) {


        $titre = htmlspecialchars($_POST['titre']);
        $balise =htmlspecialchars($_POST['balise']);

        $query  = $pdo->prepare('INSERT INTO Pistes (balise , titre) 
        
        VALUES (:balise, :titre)');

        $query->bindParam(':balise',$balise);
        $query->bindParam(':titre', $titre);

        $query->execute();

        header('location: ./espaceadmin.php');
    } else {
        echo " Il y a eu une erreur lors de l enregistrement des images";
    }
}
    
   
