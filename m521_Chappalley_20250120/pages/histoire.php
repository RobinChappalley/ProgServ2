<?php
require_once("../config/protection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre histoire</title>
    <link rel="stylesheet" href="../stylesheet.css">


</head>

<body>
    <header>
        <ul>
            <li><a href="../index.php">Verdo Sàrl</a></li>
            <li><a href="histoire.php">Notre histoire</a></li>
            <li><a href="monCompte.php">Mon compte</a></li>
            <?php if ($isConnected): ?>
                <li id="deconnexion"><a href="deconnexion.php">Se déconnecter</a></li>
            <?php else: ?>
                <li id="nouveauCompte"><a href="nouveauCompte.php">Créer un nouveau compte</a></li>
                <li id="connexion"><a href="connexion.php">Se connecter</a></li>
            <?php endif; ?>
        </ul>
    </header>
    <main>
        <nav class="accueil">
            <a href="../index.php">&#x27F5;&nbsp;</a>
        </nav>

        <h1>Quelle est notre histoire ? </h1>
        <div id="histoire">
            <p>Créée par des passionnés du digital, Verdo Sàrl est née de la conviction qu'une approche personnalisée et
                raffinée est essentielle pour répondre aux exigences du monde numérique d’aujourd’hui.
                <br><br>Depuis nos débuts, nous avons accompagné des entreprises de divers secteurs dans la construction de leur identité en ligne,
                toujours avec un soin particulier pour les détails et un engagement envers la qualité.
            </p>
        </div>

    </main>
    <footer>
        <p>made with &nbsp; &#9829;&nbsp; by Cédrine Tille </p>
    </footer>

</body>

</html>