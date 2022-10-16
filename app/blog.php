<?php
session_start();

//test pour ne pas accéder à la page blog sans être connecté
//$_SESSION['email'] = $_POST['email'];
//if(!isset($_SESSION['email'])){
//    header("Location:./index.php");
//}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Blog World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="content">
        <p>coucou :)</p>
    </div>
</body>
</html>