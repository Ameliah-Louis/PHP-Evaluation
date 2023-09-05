<!-- réutiliser le menu déroulant de Users pour faire celui de personnages -->

<?php

require_once 'layout/header.php'; 
require_once 'functions/db.php';
require_once 'classes/User.php'; ?>

<?php if (isset($_SESSION['user_name'])) {
      $welcomeMessage = "Bienvenue, " . $_SESSION['user_name'];
    } else {
  // ajouter le REDIRECT vers Index pour se log à la place du welcome en dessous;
  $welcomeMessage = "Bienvenue";
}  ?>

<h1><?php echo $welcomeMessage; ?></h1>

<?php
try {
      //getCharacters, à refaire il me faut les perso du user uniquement (cf id des tables intermédiaire)
      $characters = getCharacters();
      //echo "<br> characters récupérés <br>";
    } catch (PDOException $e) {
      echo "Erreur récup characters <br>";
      var_dump($e);
      exit;
    }
    // echo "characters récupérés dans characters <br>";
    // var_dump($characters);
    ?>

<form action="auth.php" method="post">
  <div>
      <label for="character">Personnage :</label>
      <select name="character">
        <option value="">Choisissez un personnage</option>
        <?php echo '<option value="">Choisissez un utilisateur</option>';
        foreach ($characters as $character) {
          echo'<option value="'. $character['id'] . '">'. $character['character_name'] . '</option>'; 
        } echo '</select>';
        ?>
  </div>
  <input type="submit" value="Connexion" />
</form>

<!-- Auth à compléter pour gérer les personnages puis afficher la page perso avec les sorts -->