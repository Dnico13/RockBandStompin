<?php
require_once '../pdo.php';

function deleteAlbum($pdo){
    
        $Album_id = $_GET['id'];
        //$user_id_int= intval($user_id);
        
        $query  = $pdo->prepare("DELETE FROM Disc WHERE Id= :id");
        $query->bindParam(':id', $Album_id);
        
        $query->execute();
        
        
        header('Location: ../espaceadmin.php');
            

    }
        
     

deleteAlbum($pdo);