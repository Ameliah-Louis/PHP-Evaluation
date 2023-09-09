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
// var_dump($currentUser);
// var_dump($currentUser['id']);
$user_id = $currentUser['id'];
// var_dump($user_id);
// var_dump($_POST);
try {
      //getCharacters, à refaire il me faut les perso du user uniquement
      $characters = getCharacters($user_id = $currentUser['id']);
      echo "<br> characters récupérés <br>";
      // var_dump($characters);
    } catch (PDOException $e) {
      echo "Erreur récup characters <br>";
      var_dump($e);
      exit;
    }
    // echo "characters récupérés dans characters <br>";
    // var_dump($characters);
    ?>


<form action="character_board.php" method="post">
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