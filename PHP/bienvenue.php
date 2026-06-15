<!DOCTYPE html>
<html lang="efr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Bienvenue</title>
</head>
<body>
    <div class="bvn">
        <?php
            session_start();

            // $users = [
            //     'prenom' => 'Gabriel',
            //     'mdp' => '1234'
            // ];

            // $prenom_saisi = isset($_POST["prenom"]) ? $_POST["prenom"] : '';
            // $mdp_saisi = isset($_POST["mdp"]) ? $_POST["mdp"] : '';

            // if($prenom_saisi === $users['prenom'] && $mdp_saisi === $users['mdp']) {
            //     echo "Bienvenue " . $users['prenom'];
            // } else {
            //     echo "Identifiant incorrecte !";
            // }

            if(isset($_SESSION["prenom"])){
                echo "Bienvenue, " . $_SESSION["prenom"];
            } 
                // else {
                //     echo "Erreur de connexion, veuillez recommencer !";
                // }

            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $prenom = htmlspecialchars(trim($_POST["prenom"]));
                 $mdp = htmlspecialchars(trim($_POST["mdp"]));
                $_SESSION["prenom"] = $prenom;
                // $_SESSION = $mdp;
            }
        ?>
    </div>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>