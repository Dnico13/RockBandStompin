<?php
require_once '../pdo.php';

function deletePiste($pdo){
    
        $id_video = $_GET['id'];
        //$user_id_int= intval($user_id);
        
        $query  = $pdo->prepare("DELETE FROM Video WHERE id_video= :id");
        $query->bindParam(':id', $id_video);
        
        $query->execute();
        
        
        header('Location: ../espaceadmin.php');
            

    }
        
     

deletePiste($pdo);