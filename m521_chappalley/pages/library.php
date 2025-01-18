<?php
require_once('../db/Database.php');
session_start();

$db = new Database();
if (!$db->initialisation()) {
  echo "Problème d'initialisation <br>";
}

// Get all books registered in database
$allBooks = $db->getAllBooks();
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
    <div class="form-container">
      <form action="searchbar.php" method="POST">
        <input type="text" id="search" name="search" placeholder="Recherche par titre ou auteur" />
        <input type="submit" name="submit" value="Recherche" />
      </form>
    </div>
    <div class="books-container">
      <?php if (!empty($allBooks)): ?>
        <?php foreach ($allBooks as $book): ?>
          <div class="book-item">
            <a href="bookinfo.php?id=<?= htmlspecialchars($book['id']) ?>">
              <?php
              // Vérifier si le champ cover_image_path est vide ou null
              $coverPath = !empty($book['cover_image_path']) ? '../../' . $book['cover_image_path'] : '../../assets/images/covers/placeholder-mylibrary.jpg';
              ?>
              <img src="<?= htmlspecialchars($coverPath) ?>" alt="book-cover" />
              <h3 class="book-title"><?= htmlspecialchars($book['Title']) ?></h3>
            </a>
            <h4 class="author"><?= htmlspecialchars($book['Author']) ?></h4>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>Aucun livre disponible.</p>
      <?php endif; ?>
    </div>
  </main>
  <?php include __DIR__ . '/../components/footer.php'; ?>
</body>

</html>