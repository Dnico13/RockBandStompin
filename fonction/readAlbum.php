<?php



function getAlbums($pdo)
{
    $query  = $pdo->prepare("SELECT * FROM Disc ORDER BY id DESC");

    $query->execute();
    $Albums = $query->fetchAll(PDO::FETCH_ASSOC);
    return $Albums;
}