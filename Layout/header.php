<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Projet JDR</title>
</head>

<body>
  <nav>
    <ul>
      <li>
        <a href="index.php">Accueil</a>
      </li>
        <?php if (isset($_SESSION['username'])) { ?>
          <li>
            <a href="logout.php">Déconnexion</a>
          </li> </ul> </nav>
        <?php } else { ?>
          </ul> </nav>
        <?php }?>