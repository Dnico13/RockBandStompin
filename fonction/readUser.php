<?php



function getUsers($pdo)
{
    $query  = $pdo->prepare("SELECT * FROM User WHERE email = :email ");

    $query->execute(['email' => $_SESSION['email']]);
    $Users = $query->fetchAll(PDO::FETCH_ASSOC);
    return $Users;
}
var_dump($Users);