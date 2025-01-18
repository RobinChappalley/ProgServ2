<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/header.css">
</head>

<header>
    <ul class="menu">
        <li><a href="homepage.php">Babel</a></li>
        <li><a href="../about.php">A propos</a></li>
        <li><a href="library.php">Bibliothèque</a></li>

        <?php if (isset($_SESSION['utilisateur'])): ?>
            <?php if ($_SESSION['utilisateur']['pseudo'] === "admin"): ?>
                <!-- Lien admin -->
                <li><a href="dashboardAdmin.php">Tableau de bord</a></li>
                <li><a href="../adminPage.php">Compte admin</a></li>
            <?php else: ?>
                <!-- Lien utilisateur -->
                <li><a href="libraryUser.php">Mes lectures</a></li>
                <li><a href="../dashboardUser.php">Mon compte</a></li>
            <?php endif; ?>
            <li id="deconnexion"><a href="../deconnexion.php">Se déconnecter</a></li>
        <?php else: ?>
            <li id="connexion"><a href="./connexion.html">Se connecter</a></li>
            <li id="nouveauCompte"><a href="./inscription.html">Créer un compte</a></li>
        <?php endif; ?>
    </ul>
</header>
</body>

</html>