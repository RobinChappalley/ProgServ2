<?php
require_once("../config/protection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon com_load_typelib</title>
    <link rel="stylesheet" href="../stylesheet.css">
    

</head>
<body>
<header>
        <ul>
            <li><a href="../index.php">Verdo Sàrl</a></li>
            <?php if ($isConnected): ?>
                <li><a href="monCompte.php">Mon compte</a></li>
                <li><a href="histoire.php">Notre histoire</a></li>
                <li id="deconnexion"><a href="deconnexion.php">Se déconnecter</a></li>
            <?php else: ?>
                <li><a href="histoire.php">Notre histoire</a></li>
                <li id="nouveauCompte"><a href="nouveauCompte.php">Créer un nouveau compte</a></li>
                <li id="connexion"><a href="connexion.php">Se connecter</a></li>
            <?php endif; ?>
        </ul>
    </header>
    <main>
    <nav class="accueil">
        <a href="../index.php">&#x27F5;&nbsp;</a>
    </nav>

    <h1>Informations sur ton compte </h1>
    <div id ="information">
    <?php if ($isConnected): ?>
        <p>Tu retrouves toutes les informations relatives à ton compte ici !</p>
        <div id='donneesUtilisateur'>
            <h2>Mes données  </h2>
            <p><?php echo $id; ?> </p>
            <p><?php echo $prenom; ?></p>
            <p><?php echo $nom; ?> </p>
            <p><?php echo $email; ?></p>
            <p><?php echo $tel; ?></p>
        </div>
            <?php else: ?>
                <p>Il semblerait que tu ne sois pas connecté.e. </p>
                <div>
                    <a href="connexion.php" id="idConnexion">Se connecter</a>
                </div>
            <?php endif; ?>
    </div>

</main>
<footer>
        <p>made with &nbsp; &#9829;&nbsp; by Cédrine Tille </p>
    </footer>
    
</body>
</html>