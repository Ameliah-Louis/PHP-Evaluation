<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Bienvenue</title>
</head>

<body>
  <nav>
    <ul>
      <li>
        <a href="index.php">Accueil</a>
      </li>
      <li>
        <?php if (isset($_SESSION['login'])) { ?>
          <a href="logout.php">Déconnexion</a>
        <?php } else { ?>
          <a href="login.php">Connexion</a>
        <?php } ?>
      </li>
      <li>
        <a href="character_selection.php">Sélection du personnage</a>
      </li>
    </ul>
  </nav>