<?php 

function getConcerts($pdo)
{
    $query  = $pdo->prepare("SELECT * FROM Evenement ORDER BY id DESC");

    $query->execute();
    $Concerts = $query->fetchAll(PDO::FETCH_ASSOC);
    return $Concerts;
}