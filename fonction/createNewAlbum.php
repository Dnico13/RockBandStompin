<?php

Function createNewAlbum($pdo){
    if (($_SERVER['REQUEST_METHOD']== 'POST') && isset($_POST['Submit'])){

        
        $Titre1= htmlspecialchars($_POST['Titre1']);
        $nom= htmlspecialchars($_POST['nom']);
        $Titre2= htmlspecialchars($_POST['Titre2']);
        $Titre3= htmlspecialchars($_POST['Titre3']);
        $Titre4= htmlspecialchars($_POST['Titre4']);
        $Titre5= htmlspecialchars($_POST['Titre5']);
        $Titre6= htmlspecialchars($_POST['Titre6']);
        $Titre7= htmlspecialchars($_POST['Titre7']);
        $Titre8= htmlspecialchars($_POST['Titre8']);
        $Titre9= htmlspecialchars($_POST['Titre9']);
        $Titre10= htmlspecialchars($_POST['Titre10']);
        $Titre11= htmlspecialchars($_POST['Titre11']);
        $Titre12= htmlspecialchars($_POST['Titre12']);
        $Titre13= htmlspecialchars($_POST['Titre13']);
        //$photo = htmlspecialchars($_POST['Photo']);

        $tailleMax= 7000000;
        $repertoire = "photoAlbum/";
        $mimeautorises = ["image/jpeg", "image/png", "image/gif", "image/webp"];
        $allowedFileTypes =["jpeg", "jpg", "png", "gif","webp"];
        $imageok1= true;

        $targetFile1 = $repertoire . basename($_FILES["photo"]["name"]);
        $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));
        
        
        $image_tmp_name1 = $_FILES['photo']['tmp_name'];  
        $image_error1 = $_FILES['photo']['error'];
        
        
        
        if($_FILES["photo"]["size"] > $tailleMax) {
            echo "Le fichier est trop volumineux.";
            $imageok1= false;
        }
        
        $fileMime1 = mime_content_type($_FILES["photo"]["tmp_name"]);
        if (!in_array($fileMime1, $mimeautorises)) {
            echo "Ce type de fichier n’est pas autorisé";
            $imageok1= false;
        }
        
        
        if (!in_array($imageFileType1, $allowedFileTypes)) {
            echo "Seules les images aux formats JPG, JPEG, PNG, GIF et WEBP sont autorisées.";
            $imageok1=false;
        }
        
    
    if ($image_error1 === 0 && $imageok1 === true) {
        
        
        $destination1 = $targetFile1;   
        move_uploaded_file($image_tmp_name1, $destination1);
        
       








        $query  = $pdo->prepare('INSERT INTO Disc (nom, Titre1, Titre2, Titre3, Titre4, Titre5, Titre6, Titre7, Titre8, Titre9, Titre10, Titre11, Titre12, Titre13, Photo) 
        
        VALUES (:nom,:T1,:T2,:T3,:T4,:T5,:T6,:T7,:T8,:T9,:T10,:T11,:T12,:T13,:ph)');

        $query->bindParam(':nom',$nom);
        $query->bindParam(':T1', $Titre1);
        $query->bindParam(':T2', $Titre2);
        $query->bindParam(':T3', $Titre3);
        $query->bindParam(':T4', $Titre4);
        $query->bindParam(':T5', $Titre5);
        $query->bindParam(':T6', $Titre6);
        $query->bindParam(':T7', $Titre7);
        $query->bindParam(':T8', $Titre8);
        $query->bindParam(':T9', $Titre9);
        $query->bindParam(':T10', $Titre10);
        $query->bindParam(':T11', $Titre11);
        $query->bindParam(':T12', $Titre12);
        $query->bindParam(':T13', $Titre13);
        $query->bindParam(':ph', $destination1);
        

        
        
        
        $query->execute();
        
        
        
        
        header('location: ./espaceadmin.php');
        
        
        
        

    } else {
        echo " Il y a eu une erreur lors du téléchargement des images";
    } 
}
}    


// utiliserl es fonction uniqid() et rename()

