<?php

require_once 'layout/header.php';
require_once 'classes/ErrorCode.php';

?>

<h1>Connexion</h1>

<?php if (isset($_GET['error'])) { ?>
  <div class="error">
    <?php echo ErrorCode::getErrorMessage(intval($_GET['error'])); ?>
  </div>
<?php } ?>

<form action="auth.php" method="post">
  <div>
    <label for="login">Login :</label>
    <input type="text" name="login" id="login" />
  </div>
  <div>
    <label for="pass">Mot de passe :</label>
    <input type="password" name="pass" id="pass" />
  </div>
  <div>
    <label for="character">Personnage :</label>
    <select name="character">
      <option value="">Choisissez un personnage</option>
      <?php
      $query = "SELECT id, nom FROM characters";
      $statement = $pdo->prepare($query);
      $statement->execute();

      while ($row = $statement->fetch()) {
        echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
      }
      ?>
    </select>
  </div>
  <input type="submit" value="Connexion" />
</form>

<?php require_once 'layout/footer.php';