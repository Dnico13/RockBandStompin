<?php
require_once '../pdo.php';



if ($_SERVER['REQUEST_METHOD'] === "POST") {
    try {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);



        if ($query = $pdo->prepare("SELECT * FROM User WHERE email=:Email")) {

            $query->bindParam(":Email", $email);
            if ($query->execute()) {
                $row = $query->fetch(PDO::FETCH_ASSOC);
                var_dump($row);
                //if (password_verify($password, $row['password'])) {
                if ($password === $row['password']) {

                    $_SESSION['role'] = $row['role'];
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
