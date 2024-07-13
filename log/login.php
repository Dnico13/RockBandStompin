<?php
session_start();
require_once '../pdo.php';




if (isset($_POST['submit'])) {
    try {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);



        if ($query = $pdo->prepare("SELECT * FROM User WHERE email=:Email")) {

            $query->bindParam(":Email", $email);
            if ($query->execute()) {
                $row = $query->fetch(PDO::FETCH_ASSOC);
                
                if (password_verify($password, $row['password'])) {
               

                    $_SESSION['role'] = $row['role'];
                    $_SESSION['prenom'] = $row['prenom'];
                    setcookie("stompin", $_SESSION['role'], time() + 600, "/");


                    header('location: ../espaceadmin.php');
                } else {
                    echo ("<H3 class='text-center h3 text-danger'> Merci de corriger les erreurs de saisie</H3>");
                }
            }
        }
    } catch (PDOException $e) {
        echo ('une erreur de saisie est apparrue');
    }
}
