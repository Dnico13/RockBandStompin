<?php 
require_once 'pdo.php';
function getVideo($pdo)
{
    $query  = $pdo->prepare("SELECT * FROM Video ORDER BY id_video DESC");

    $query->execute();
    $Videos = $query->fetchAll(PDO::FETCH_ASSOC);
    return $Videos;
}