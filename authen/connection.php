<?php

function createsForm()
{
    return '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mot de passe</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>'.addNavBar().'
    <form action="" method="post" class="form-container">
      <div class="form-group">
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname" class="form-input" />
      </div>
      <div class="form-group">
        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname" class="form-input" />
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" class="form-input" />
      </div>
      <div class="form-group">
        <label for="phonenumber">Numéro de téléphone :</label>
        <input
          type="number"
          name="phonenumber"
          id="phonenumber"
          class="form-input"
        />
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
      <li><a href="#page1" class="nav-link">Page 1</a></li>
      <li><a href="#page2" class="nav-link">Page 2</a></li>
      <li><a href="#login" class="nav-link" active="true">Se connecter</a></li>
      <li><a href="#signup" class="nav-link">Créer un compte</a></li>
    </ul>
  </nav>';
}

echo createsForm();