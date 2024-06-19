<?php
session_start();
if(isset($_SESSION["LOGIN"])){
    header("Location: .");
    exit(); 
}
require_once('../includes/AccessDB.php');
?>

<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="shortcut icon" href="../styles/images/favicon.ico" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <main>
        <p>Se connecter</p>
    </main>
</body>
</html>