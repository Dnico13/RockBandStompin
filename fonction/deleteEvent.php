<?php
require_once '../pdo.php';

function deleteEvent($pdo){
    
        $event_id = $_GET['id'];
        //$user_id_int= intval($user_id);
        
        $query  = $pdo->prepare("DELETE FROM Evenement WHERE Id= :id");
        $query->bindParam(':id', $event_id);
        
        $query->execute();
        
        
        header('Location: ../espaceadmin.php');
            

    }
        
     

deleteEvent($pdo);