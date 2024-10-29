<?php
session_start();
require_once "autoload.php";

use dbconcerns\DbManagerCRUD;
use dbconcerns\Personne;

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
  <body>' . addNavBar() . '
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
          name="submitcreate"
          value="Créer un compte"
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
      <li><a class="nav-link" active="true">Créer un compte</a></li>
      <li><a href="connection.php" class="nav-link">Se connecter</a></li>
    </ul>
  </nav>';
}


if (filter_has_var(INPUT_POST, "submitcreate")) {
  $db = new DbManagerCRUD();
  $db->creeTablePersonnes();
  $personne = new Personne(
    filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_STRING),
    filter_input(INPUT_POST, "lastname", FILTER_DEFAULT),
    filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL),
    filter_input(INPUT_POST, "phonenumber", FILTER_SANITIZE_NUMBER_INT),
    filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING),
    filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING)
  );
  echo $db->ajoutePersonne($personne);
} else {
  echo createsForm();
}
