<?php
session_start();

if (isset($_POST['submit1']))
    {
//        Quand l'utilisateur appui sur envoyer 'submit' on enregistre les informations dans des variables :
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pseudo = $_POST['pseudo'];

//        On crée la connexion à la base de donnée
        $pdo = new PDO("mysql:host=database:3306;dbname=data", "root", "password");

//        On sélectionne tout '*' dans la base de donnée et on prépare la requête sql
        $sql = "SELECT * FROM info_connexion where email = '$email'";
        $result = $pdo->prepare($sql);
        $result->execute();

//        A partir de là si c'est excécuté le $result est supérieur à 0 et lance ce code:
        if($result->rowCount() > 0){
//            Pour vérifier qu'il n'y a pas plusieurs fois la même adresse mail
            $data =$result->fetchAll();
            if (password_verify($pass, $data[0]["password"])){
                $_SESSION['email'] = $email;
                header('Location: ./blog.php');
                exit();
            }
        }
//        Envoyer toutes les infos dans la base de donnée
        else{
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO info_connexion (email, password, pseudo) VALUES ('$email', '$pass', '$pseudo')";
            $req = $pdo->prepare($sql);
            $req->execute();
            header('Location: ./index.php');
            exit();
        }

    }

if (isset($_POST['submit2'])) {
//        Quand l'utilisateur appui sur envoyer 'submit' on enregistre les informations dans des variables :
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
    $pseudo = $_POST['pseudo'];

//        On crée la connexion à la base de donnée
    $pdo = new PDO("mysql:host=database:3306;dbname=data", "root", "password");

    $sql = "INSERT INTO info_post (sujet, message, pseudo) VALUES ('$sujet', '$message', '$pseudo')";
    $req = $pdo->prepare($sql);
    $req->execute();
}
?>