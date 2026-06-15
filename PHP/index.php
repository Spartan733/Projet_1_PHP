<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Projet_1</title>
</head>
<body>
    <h1>Bienvenue <br> Veuillez remplir ce formulaire de connexion pour vous connectez</h1>
    <form action="bienvenue.php" method="post">
            <label>Prénom :</label>
            <input type="text" name="prenom" required>

            <label>Mot de passe :</label>
            <input type="password" name="mdp" required>

            <button type="submit">Se conecter</button>
    </form>
</body>
</html>