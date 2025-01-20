<?php
require_once('../db/Database.php');
session_start();

echo "avant la création";
$db = new Database();
echo "après la création";
if (!$db->initialisation()) {
  echo "Problème d'initialisation <br>";
}

// Get all books registered in database
// $allBooks = $db->getAllBooks();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bibliothèque</title>
  <link rel="stylesheet" href="../../assets/css/index.css">
  <link rel="stylesheet" href="../../assets/css/library.css">
  <link rel="stylesheet" href="../../assets/css/normalize.css">
</head>

<body>
  <?php include __DIR__ . '/../components/header.php'; ?>
  <main>
   
   <!-- truc cool à faire -->
  </main>
  <?php include __DIR__ . '/../components/footer.php'; ?>
</body>

</html>