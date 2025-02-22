<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion</title>
  <!--Liens vers icon oeil-->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/connexion.css" />
  <script src="../assets/js/showPassword.js" defer></script>
</head>

<body>
  <?php include "../components/header.php"; ?>
  <main>
    <section>
      <h1 id="login-section">Se connecter</h1>

      <form
        id="login-form"
        action="../pages/verification/checkConnection.php"
        method="POST">
        <div class="form-group">
          <!--pseudo ou l'email-->
          <label for="login">Pseudo <span class="required">*</span></label>
          <input
            type="text"
            id="pseudo"
            name="pseudo"
            placeholder="Entrez votre pseudo"
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
        </div>

        <!--Bouton de connexion-->
        <button type="submit" name="submit" class="button-connexion">
          Se connecter
        </button>
      </form>
    </section>

    <!-- Lien vers la page d'inscription & password oublié -->
    <section>
      <p>
        Vous n'avez pas encore de compte ?
        <a href="inscription.html">Créer un compte</a>
      </p>
    </section>
  </main>
  <?php include "../components/footer.php"; ?>
</body>

</html>