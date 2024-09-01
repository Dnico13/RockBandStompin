<?php
require_once '../pdo.php';

function deletePiste($pdo){
    
        $id_piste = $_GET['id'];
        //$user_id_int= intval($user_id);
        
        $query  = $pdo->prepare("DELETE FROM Pistes WHERE id_piste= :id");
        $query->bindParam(':id', $id_piste);
        
        $query->execute();
        
        
        header('Location: ../espaceadmin.php');
            

    }
        
     

deletePiste($pdo);