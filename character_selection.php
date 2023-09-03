<!-- réutiliser pour faire le menu déroulant de personnages

Formulaire de selection du User 
<form action="script_de_connexion_BDD" method="post">
    <label for="user">Choisissez un utilisateur :</label>
    <select name="user" id="user">
        <?php
        // while ($row = mysqli_fetch_assoc($resultat)) {
        //     echo "<option value='" . $row['id'] . "'>" . $row['user_name'] . "</option>";
        // }
        ?>
    </select>
    <br>
    <!-- Ajoutez d'autres champs de formulaire comme le mot de passe ici -->
    <!-- <input type="password" name="pswrd" placeholder="Mot de passe">
    <input type="submit" value="Se connecter">
</form> -->
<?php

require_once 'layout/header.php'; ?>

<div>
    <label for="character">Personnage :</label>
    <select name="character">
      <option value="">Choisissez un personnage</option>
      <?php
      $query = "SELECT id, 'character_name' FROM characters";
      $statement = $pdo->prepare($query);
      $statement->execute();

      while ($row = $statement->fetch()) {
        echo '<option value="' . $row['id'] . '">' . $row['character_name'] . '</option>';
      }
      ?>
    </select>
  </div>

  <?php require_once 'layout/footer.php'; ?>