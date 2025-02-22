<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inscription</title>
  <!--Liens vers icon oeil-->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Lien vers le fichier de styles communs -->
  <link rel="stylesheet" href="../assets/css/style.css" />
  <!-- Lien vers le fichier de styles spécifiques -->
  <link rel="stylesheet" href="../assets/css/inscription.css" />
  <script src="../assets/js/showPassword.js" defer></script>
  <script src="../assets/js/checkpassword.js" defer></script>
</head>

<body>
  <?php include "../components/header.php"; ?>
  <main>
    <section>
      <h1>Inscription</h1>
      <form
        id="inscription-form"
        action="../pages/verification/checkNewAccount.php"
        method="POST">
        <!--pseudo-->
        <div class="form-group">
          <label for="pseudo" class="required">Pseudo*</label>
          <p id="pseudo-message">Au moins 4 caractères</p>
          <input
            type="text"
            id="pseudo"
            name="pseudo"
            placeholder="Doe"
            required />
        </div>

        <div class="form-group">
          <!--email-->
          <label for="email">Email <span class="required">*</span></label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Entrez votre email"
            required />
        </div>

        <div class="form-group">
          <!--password-->
          <label for="password">Mot de passe <span class="required">*</span></label>
          <div class="password-wrapper">
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Entrez votre mot de passe"
              required />
            <i
              class="fa-solid fa-eye icon-toggle-password"
              id="icon-toggle-password"></i>
          </div>
          <div class="password-requirements">
            <p id="length" class="requirement">Au moins 8 caractères</p>
            <p id="uppercase" class="requirement">Au moins une majuscule</p>
            <p id="lowercase" class="requirement">Au moins une minuscule</p>
            <p id="number" class="requirement">Au moins un chiffre</p>
            <p id="special" class="requirement">
              Au moins un caractère spécial
            </p>
          </div>
        </div>

        <!--bouton soumission-->
        <button type="submit" name="submit" class="button-soumission">
          Créer un compte
        </button>
      </form>
    </section>

    <!--Lien vers la page de connexion-->
    <section>
      <p><a href="connexion.html">Je possède déjà un compte</a></p>
    </section>
  </main>
  <?php include "../components/footer.php"; ?>
</body>

</html>