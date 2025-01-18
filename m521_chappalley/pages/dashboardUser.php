<?php
require_once __DIR__ . '/../config/session.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <!--Liens vers icon oeil-->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/account.css">
    <script src="../assets/js/showInput.js" defer></script>
    <script src="../assets/js/checkUpdatePassword.js" defer></script>
</head>

<body>
    <?php include __DIR__ . '/../components/header.php'; ?>
    <main>
        <div>
            <?php if (isset($_SESSION['utilisateur'])): ?>
                <div>
                    <h1>Bonjour <?php echo htmlspecialchars($pseudo); ?> !</h1>
                    <div id='donneesUtilisateur'>
                        <h2>Voici tes données </h2>
                        <p>Ton pseudo : <?php echo $pseudo; ?></p>
                        <p>Ton email : <?php echo $email; ?></p>
                    </div>

                    <h2>Que veux-tu faire ?</h2>
                </div>
                <div class="content">
                    <ul class="button-form">
                        <li><a href="#" onclick="toggleForm('formChangerMotDePasse')">Changer le mot de passe</a></li>
                        <li><a href="#" onclick="toggleForm('formSupprimerCompte')">Supprimer le compte</a></li>
                    </ul>
                    <!-- Formulaire pour changer le mot de passe -->
                    <form id="formChangerMotDePasse" method="POST" action="../pages/verification/updateAccount.php" style="display: none;">
                        <h2>Changer le mot de passe</h2>
                        <input type="hidden" name="action" value="changerMotDePasse">

                        <label>Ancien mot de passe :</label>
                        <div class="password-wrapper">
                            <input type="password" id="ancienMotDePasse" name="ancienMotDePasse" required /><br>
                            <i
                                class="fa-solid fa-eye icon-toggle-password"
                                id="icon-toggle-password-old"></i>
                        </div>

                        <label>Nouveau mot de passe :</label>
                        <div class="password-wrapper">
                            <input type="password" id="nouveauMotDePasse" name="nouveauMotDePasse" required /><br>
                            <i
                                class="fa-solid fa-eye icon-toggle-password"
                                id="icon-toggle-password-new"></i>
                        </div>
                        <div class="password-requirements">
                            <p id="length" class="requirement">Au moins 8 caractères</p>
                            <p id="uppercase" class="requirement">Au moins une majuscule</p>
                            <p id="lowercase" class="requirement">Au moins une minuscule</p>
                            <p id="number" class="requirement">Au moins un chiffre</p>
                            <p id="special" class="requirement">Au moins un caractère spécial</p>
                        </div>

                        <label>Confirmer le nouveau mot de passe :</label>
                        <div class="password-wrapper">
                            <input type="password" id="confirmerMotDePasse" name="confirmerMotDePasse" required /><br>
                            <i
                                class="fa-solid fa-eye icon-toggle-password"
                                id="icon-toggle-password-confirm"></i>
                        </div>
                        <p id="erreurMotDePasse" style="color: red; display: none;"></p>
                        <button type="submit" name="submit" class="button-soumission">Changer le mot de passe</button>
                    </form>
                    <!-- Formulaire pour supprimer le compte -->
                    <form id="formSupprimerCompte" method="POST" action="../pages/verification/updateAccount.php" style="display: none;">
                        <h2>Supprimer le compte</h2>
                        <input type="hidden" name="action" value="supprimerCompte">
                        <p>Es-tu sûr de vouloir supprimer ton compte ? Cette action est irréversible.</p>
                        <button type="submit" name="submit" class="button-soumission">Oui, supprimer mon compte</button>
                    </form>
                </div>
            <?php else: ?>
                <h1>Il semblerait que tu ne sois pas connecté :/</h1>
            <?php endif; ?>
        </div>
    </main>
    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>

</html>