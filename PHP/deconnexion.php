<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Déconnexion</title>
</head>
<body>
    <div class="deco">
        <?php
            session_start();

            session_destroy();
            echo "Vous étes déconnecté !"
        ?>
    </div>
</body>
</html>