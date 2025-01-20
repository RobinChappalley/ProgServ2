<?php
require_once("../config/protection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../stylesheet.css">
</head>

<body>

    <header>
        <ul>
            <li><a href="../index.php">Verdo Sàrl</a></li>
            <li><a href="histoire.php">Notre histoire</a></li>
            <?php if (isset($_SESSION['utilisateur'])): ?>
                <?php if ($_SESSION['utilisateur']['pseudo'] === "admin"): ?>
                    <!-- Si l'utilisateur est admin, afficher le lien vers le tableau de bord admin -->
                <?php else: ?>
                    <!-- Si l'utilisateur n'est pas admin, afficher son compte utilisateur -->
                <?php endif; ?>
                <li><a href="monCompte.php">Mon compte</a></li>
                <li id="deconnexion"><a href="deconnexion.php">Se déconnecter</a></li>
            <?php else: ?>
                <li id="connexion"><a href="connexion.php">Se connecter</a></li>
                <li id="nouveauCompte"><a href="nouveauCompte.php">Créer un compte</a></li>
            <?php endif; ?>
        </ul>
    </header>
    <main class="pages">
        <div class="confirmation">
            <?php if (isset($_SESSION['message'])): ?>
                <h1><?php echo $_SESSION['message']; ?></h1>
                <a href="../index.php">Retour à la page d'accueil</a>
            <?php else: ?>
                <h1>Il y a un problème ! </h1>
                <a href="../index.php">Retour à la page d'accueil</a>
            <?php endif; ?>
        </div>

    </main>
    <footer>
        <p>made with &nbsp; &#9829;&nbsp; by Cédrine Tille </p>
    </footer>
</body>

</html>