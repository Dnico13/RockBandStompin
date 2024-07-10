<?php

function createNewEvent($pdo)
{
    if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['Submit'])) {


        $detail1 = htmlspecialchars($_POST['detail1']);
        $nom = htmlspecialchars($_POST['nom']);
        $lieu = htmlspecialchars($_POST['lieu']);
        $detail2 = htmlspecialchars($_POST['detail2']);
        $detail3 = htmlspecialchars($_POST['detail3']);


        $tailleMax = 7000000;
        $repertoire = "./photoAffiche/";
        $mimeautorises = ["image/jpeg", "image/png", "image/gif", "image/webp"];
        $allowedFileTypes = ["jpeg", "jpg", "png", "gif", "webp"];
        $imageok1 = true;

        $targetFile1 = $repertoire . basename($_FILES["affiche"]["name"]);
        $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));


        $image_tmp_name1 = $_FILES['affiche']['tmp_name'];
        $image_error1 = $_FILES['affiche']['error'];



        if ($_FILES["affiche"]["size"] > $tailleMax) {
            echo "Le fichier est trop volumineux.";
            $imageok1 = false;
        }

        $fileMime1 = mime_content_type($_FILES["affiche"]["tmp_name"]);
        if (!in_array($fileMime1, $mimeautorises)) {
            echo "Ce type de fichier n’est pas autorisé";
            $imageok1 = false;
        }


        if (!in_array($imageFileType1, $allowedFileTypes)) {
            echo "Seules les images aux formats JPG, JPEG, PNG, GIF et WEBP sont autorisées.";
            $imageok1 = false;
        }


        if ($image_error1 === 0 && $imageok1 === true) {


            $destination1 = $targetFile1;
            move_uploaded_file($image_tmp_name1, $destination1);



            $query  = $pdo->prepare('INSERT INTO Evenement (event_nom, Lieu, Detail1, Detail2, Detail3, illustration) 
        
            VALUES (:nom,:lieu,:d1,:d2,:d3,:affiche)');

            $query->bindParam(':nom', $nom);
            $query->bindParam(':lieu', $lieu);
            $query->bindParam(':d1', $detail1);
            $query->bindParam(':d2', $detail2);
            $query->bindParam(':d3', $detail3);
            $query->bindParam(':affiche', $destination1);


            $query->execute();

            header('location: ./espaceadmin.php');
        } else {
            echo " Il y a eu une erreur lors du téléchargement des images";
        }
    }
}    


// utiliserl es fonction uniqid() et rename()
