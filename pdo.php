<?php




$User= 'ndev2023_stompin';
$Password = 'Stompin-Bones64@';

// connexion a la BDD

try {
    $pdo = new PDO('mysql:host=mysql-ndev2023.alwaysdata.net;dbname=ndev2023_stompin-bones', $User, $Password);
   
} catch (PDOException $e) {
    echo " il y a  un soucis de connexion a la bdd";
}
