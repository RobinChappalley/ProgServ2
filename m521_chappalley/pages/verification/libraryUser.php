<?php
require_once __DIR__ . '/../../config/session.php';
require_once __DIR__ . '/../../db/Database.php';
session_start();
$db = new Database();
$userId = $_SESSION['utilisateur']['id'];

$booksReading = $db->getBooksByState($userId, 1);
$booksReadWant = $db->getBooksByState($userId, 3);
$booksReadDone = $db->getBooksByState($userId, 2);
$booksReadDropped = $db->getBooksByState($userId, 4);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma bibliothèque</title>
    <link rel="stylesheet" href="../../assets/css/mylibrary.css">
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link rel="stylesheet" href="../../assets/css/normalize.css">
</head>

<body>
    <?php include  './../../components/header.php'; ?>
    <main>
        <?php if (isset($_SESSION['utilisateur'])): ?>
            <section class="my-library">
                <h1>Ma bibliothèque</h1>
                <div class="container-all">
                    <div class="container">
                        <details open>
                            <summary class="reading">
                                <h2>En cours</h2>
                            </summary>
                            <div class="details-container">
                                <!-- Les livres avec l'état en cours seront affichés ici -->
                                <?php foreach ($booksReading as $book): ?>
                                    <div class="book-item">
                                        <a href="./../verification/bookinfo.php?id=<?= $book['id']; ?>">
                                            <img src="<?= '../..' . $book['cover_image_path']; ?>" alt="book-cover">
                                            <h3 class="book-title">
                                                <?= htmlspecialchars($book['Title']); ?>
                                            </h3>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="book-item">
                                    <a href="bookinfo.php">
                                        <img src="../assets/images/placeholder-mylibrary.png" alt="book-cover">
                                        <h3 class="book-title">Livre 1</h3>
                                    </a>
                                    <h4 class="author">Auteur 1</h4>
                                </div>
                                <div class="book-item">
                                    <img src="../assets/images/placeholder-mylibrary.png" alt="book-cover">
                                    <h3 class="book-title">Livre 2</h3>
                                    <h4 class="author">Auteur 2</h4>
                                </div>
                                <div class="book-item">
                                    <img src="../assets/images/placeholder-mylibrary.png" alt="book-cover">
                                    <h3 class="book-title">Livre 3</h3>
                                    <h4 class="author">Auteur 3</h4>
                                </div> -->
                            </div>
                        </details>
                    </div>
                    <div class="container">
                        <details>
                            <summary class="read-want">
                                <h2>À lire</h2>
                            </summary>
                            <div class="details-container">
                                <!-- Les livres avec l'état à lire seront affichés ici -->
                                <?php foreach ($booksReadWant as $book): ?>
                                    <div class="book-item">
                                        <a href="./../verification/bookinfo.php?id=<?= $book['id']; ?>">
                                            <img src="<?= '../../' . $book['cover_image_path']; ?>" alt="book-cover">
                                            <h3 class="book-title">
                                                <?= htmlspecialchars($book['Title']); ?>
                                            </h3>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="book-item">
                                    <img src="../assets/images/placeholder-mylibrary.png" alt="book-cover">
                                    <h3 class="book-title">Livre à lire</h3>
                                    <h4 class="author">Auteur inconnu</h4>
                                </div> -->
                            </div>
                        </details>
                    </div>
                    <div class="container">
                        <details>
                            <summary class="read-done">
                                <h2>Terminé</h2>
                            </summary>
                            <div class="details-container">
                                <!-- Les livres avec l'état terminé seront affichés ici -->
                                <?php foreach ($booksReadDone as $book): ?>
                                    <div class="book-item">
                                        <a href="./../verification/bookinfo.php?id=<?= $book['id']; ?>">
                                            <img src="<?= '../..' . $book['cover_image_path']; ?>" alt="book-cover">
                                            <h3 class="book-title">
                                                <?= htmlspecialchars($book['Title']); ?>
                                            </h3>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <img src="../assets/images/placeholder-mylibrary.png" alt="book-cover">
                                <h3 class="book-title">Livre terminé</h3>
                                <h4 class="author">Auteur terminé</h4> -->
                            </div>
                        </details>
                    </div>
                    <div class="container">
                        <details>
                            <summary class="read-dropped">
                                <h2>Abandonné</h2>
                            </summary>
                            <div class="details-container">
                                <!-- Les livres avec l'état abandonné seront affichés ici -->
                                <?php foreach ($booksReadDropped as $book): ?>
                                    <div class="book-item">
                                        <a href="./../verification/bookinfo.php?id=<?= $book['id']; ?>">
                                            <img src="<?= '../..' . $book['cover_image_path']; ?>" alt="book-cover">
                                            <h3 class="book-title">
                                                <?= htmlspecialchars($book['Title']); ?>
                                            </h3>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <img src="../assets/images/placeholder-mylibrary.png" alt="book-cover">
                                <h3 class="book-title">Livre abandonné</h3>
                                <h4 class="author">Auteur abandonné</h4> -->
                            </div>
                        </details>
                    </div>
                </div>
            </section>
        <?php else: ?>
            <h1>Il semblerait que tu ne sois pas connecté :/</h1>
        <?php endif; ?>
    </main>
    <footer>
        <div>
            <p>© 2024 Babel. Projet scolaire Bachelor Ingenierie des médias.</p>
        </div>
    </footer>
</body>

</html>