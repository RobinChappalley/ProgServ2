<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau compte</title>
    <link rel="stylesheet" href="../stylesheet.css">
    <script src="../verifications/verification.js"></script>
</head>

<body>
    <header>
        <ul>
            <li><a href="../index.php">Verdo Sàrl</a></li>
            <li><a href="histoire.php">Notre histoire</a></li>
            <li><a href="monCompte.php">Mon compte</a></li>
            <li id="connexion"><a href="connexion.php">Se connecter</a></li>
        </ul>
    </header>
    <main>
        <nav class="accueil">
            <a href="../index.php">&#x27F5;&nbsp;</a>
        </nav>

        <h1>Créer un nouveau compte</h1>
        <form action="../verifications/verification-nouveauCompte.php" method="post">
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Doe" required>
            </div>
            <div>
                <label for="prenom">Prénom </label>
                <input type="text" id="prenom" name="prenom" placeholder="Joe" required>
            </div>
            <div>
                <label for="email">Adresse mail</label>
                <input type="email" id="email" name="email" placeholder="john.doe@example.com" required type="email">
            </div>
            <div>
                <label for="tel">Numéro de téléphone</label>
                <input type="tel" id="tel" name="tel" placeholder="079 123 45 67" required type="tel">
            </div>
            <div>
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" placeholder="123Password$" required oninput="checkPassword()">
            </div>
            <div class="showMDP">
                <input type="checkbox" id="showPassword" onclick="montrerMdp()">
                <label for="showPassword">Afficher le mot de passe</label>
            </div>
            <div id="min_required">
                <p id="length" class="requirement">minimum 8 caractères</p>
                <p id="maxLength" class="requirement">maximum 20 caractères</p>
                <p id="lowercase" class="requirement">au moins 1 minuscule</p>
                <p id="uppercase" class="requirement">au moins 1 majuscule</p>
                <p id="number" class="requirement">au moins 1 chiffre</p>
                <p id="special" class="requirement">au moins 1 caractère spécial !£$€</p>
            </div>
            <div>
                <!-- Bouton pour soumettre le formulaire -->
                <button type="submit" name="submit">Envoyer</button>
            </div>
        </form>

    </main>
    <footer>
        <p>made with &nbsp; &#9829;&nbsp; by Cédrine Tille </p>
    </footer>
</body>

</html>