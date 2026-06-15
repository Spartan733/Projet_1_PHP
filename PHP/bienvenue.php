<!DOCTYPE html>
<html lang="efr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Bienvenue</title>
</head>
<body>
    <?php
        session_start();
        
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $prenom = htmlspecialchars(trim($_POST["prenom"]));
            $mdp = htmlspecialchars(trim($_POST["mdp"]));
            $_SESSION["prenom"] = $prenom;
            // $_SESSION = $mdp;
        }
    ?>
    <h2>Bonjour <?= $_SESSION["prenom"] ?></h2>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>