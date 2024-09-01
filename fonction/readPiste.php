<?php 

function getPistes($pdo)
{
    $query  = $pdo->prepare("SELECT * FROM Pistes ORDER BY id_piste DESC");

    $query->execute();
    $Pistes = $query->fetchAll(PDO::FETCH_ASSOC);
    return $Pistes;
}