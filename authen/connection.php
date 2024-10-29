<?php
function createsForm()
{
    return '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Créer un compte</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>'.addNavBar().'
    <form action="" method="post" class="form-container">
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" class="form-input" />
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input
          type="password"
          name="password"
          id="password"
          class="form-input"
        />
      </div>
      <div class="form-group">
        <input
          type="submit"
          name="submit"
          value="Se connecter"
          class="form-button"
        />
      </div>
    </form>
  </body>
</html>
';
}

function addNavBar()
{
    return '<nav class="navbar">
    <ul class="nav-list">
      <li><a href="page1.php" class="nav-link">Page 1</a></li>
      <li><a href="page2.php" class="nav-link">Page 2</a></li>
      <li><a href="creation.php" class="nav-link">Créer un compte</a></li>
      <li><a class="nav-link" active="true">Se connecter</a></li>
    </ul>
  </nav>';
}

echo createsForm();