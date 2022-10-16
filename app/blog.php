<?php
session_start();
?>
<!--Démarre une session pour que les pages soit connéctées entre elles -->
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
<!--        Titre et logo-->
        <div id="titre" style=" display: flex; padding: 20px 0px 50px 0px; justify-content: center; align-items: center">
            <img id="logo_blog" src="./images/icons/favicon.png" width="50px">
            <h1>BlogWorld</h1>
        </div>

        <div id="post">
<!--            Input pour poster un article-->
            <h2>Poster un article</h2>
            <form id="form" method="post" action="login.php">
<!--                Pseudo -->
                <label for="pseudo">Pseudo :</label>
                <input type="text" name="pseudo" id="pseudo">
                </br>
<!--                Sujet -->
                <label for="sujet">Sujet :</label>
                <input type="text" name="sujet" id="sujet">
                </br>
<!--                Message -->
                <label for="message">Votre message :</label>
                <textarea rows="5" cols="30" name="message" id="message"></textarea>
                </br>
<!--                Envoyer les infos -->
                <input type="submit" value="Poster" name="submit2">
            </form>
            <!--                Récupérer les infos de la base de données-->
            <?php
            $db = new PDO("mysql:host=database:3306;dbname=data", "root", "password");
            $pseudo = $db->query("SELECT * FROM info_post");
            while($info = $pseudo->fetch()){
            ?>
                <div id="post" style="display: inline-block; border: 10px inset #1A689B; border-radius: 10px; padding: 10px;">
                    <h2>Post de :</h2><h3><?= $info['pseudo']; ?></h3>
                    </br>
                    <h3>Sujet</h3>
                    <p><?= $info['sujet']; ?></p>
                    </br>
                    <h3>Message</h3>
                    <p><?= $info['message']; ?></p>
                    </br>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>