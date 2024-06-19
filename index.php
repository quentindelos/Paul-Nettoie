<?php
session_start();
require_once('includes/AccessDB.php');
?>

<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="shortcut icon" href="styles/images/favicon.ico" type="image/x-icon">
    <title>Paul'Nettoie</title>
</head>
<body>
    <header>
        <?php include 'templates/header.php'; ?>
    </header>
    <main>
        <p>Hello World!</p>
        <a href="management/">admin</a>
    </main>
    <footer>
        <?php include 'templates/footer.html'; ?>
    </footer>
    <script src="scripts/index.js"></script>
</body>
</html>