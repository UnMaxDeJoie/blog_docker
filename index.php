<?php //phpinfo(); die; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coucou</title>
</head>
<body>

<?php
$pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
$query = $pdo->query("SHOW TABLES");

var_dump($query->fetchAll());



?>
</body>
</html>