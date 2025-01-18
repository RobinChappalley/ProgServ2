<?php
session_start(); // Démarre la session
session_unset(); // Efface toutes les variables de session
session_destroy(); // Détruit la session
header('Location: ../pages/homepage.php'); // Redirige vers la page d'accueil
exit();
