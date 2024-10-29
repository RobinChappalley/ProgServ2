<?
session_start();
function displayContent()
{
  return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>' . addNavBar() . '
    <div>Ceci est une div sur la page 2</div>
</body>
</html>
';
}
function addNavBar()
{
  return '<nav class="navbar">
    <ul class="nav-list">
      <li><a href="page1.php" class="nav-link">Page 1</a></li>
      <li><a class="nav-link" active="true">Page 2</a></li>
      <li><a href="creation.php" class="nav-link" >Créer un compte</a></li>
      <li><a href="connection.php" class="nav-link">Se connecter</a></li>
    </ul>
  </nav>';
}

echo displayContent();
