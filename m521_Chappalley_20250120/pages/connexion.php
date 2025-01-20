<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../stylesheet.css">
    <script src="../verifications/verification.js"></script>

</head>

<body>
    <header>
        <ul>
            <li><a href="../index.php">Verdo Sàrl</a></li>
            <li><a href="histoire.php">Notre histoire</a></li>
            <li><a href="monCompte.php">Mon compte</a></li>
            <li id="nouveauCompte"><a href="nouveauCompte.php">Créer un nouveau compte</a></li>
        </ul>
    </header>
    <main>
        <nav class="accueil">
            <a href="../index.php">&#x27F5;&nbsp;</a>
        </nav>

        <h1>Se connecter</h1>
        <form action="../verifications/verification-connexion.php" method="post">
            <div>
                <label for="email">Adresse mail</label>
                <input type="email" id="email" name="email" placeholder="john.doe@example.com" required type="email">
            </div>
            <div>
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" placeholder="123Password$" required>
            </div>
            <div class="showMDP">
                <input type="checkbox" id="showPassword" onclick="montrerMdp()">
                <label for="showPassword">Afficher le mot de passe</label>
            </div>
            <div>
                <!-- Bouton pour soumettre le formulaire -->
                <button type="submit" name="submit">Se connecter</button>
            </div>
        </form>

    </main>
    <footer>
        <p>made with &nbsp; &#9829;&nbsp; by Cédrine Tille </p>
    </footer>

</body>

</html>