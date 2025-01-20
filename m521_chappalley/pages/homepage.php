<?php
require_once('./../db/Database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/form-add-book.css">
    <link rel="stylesheet" href="../assets/css/library.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <script src="../../assets/js/checkisbn.js" defer></script>
</head>

<body>
    <?php include __DIR__ . '/../components/header.php'; ?>
    <main>
        <div class="content">
            <?php if (isset($_SESSION['utilisateur'])): ?>
                <h1>Bienvenue <?php echo htmlspecialchars($_SESSION['utilisateur']['pseudo']); ?> !</h1>
                <a href="library.php">Se déconnecter</a>
            <?php else: ?>
                <h1>Bienvenue !</h1>
            <?php endif; ?>
            <!-- INSERER LA LOGIQUE ICI  -->
            <?php if (isset($_SESSION['utilisateur'])): ?>

            <?php endif; ?>
        </div>
    </main>
    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>

</html>