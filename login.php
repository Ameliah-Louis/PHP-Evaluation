<?php

require_once 'classes/ErrorCode.php';
require_once 'functions/db.php';

// En vrai ce if je l'ai copié du cours de la page login mais j'ai pas tout à fais capté l'usage ici -->
//if (isset($_GET['error'])) { ?>
  <!-- <div class="error"> -->
    <?php //echo ErrorCode::getErrorMessage(intval($_GET['error'])); ?>
  <!-- </div> -->
<?php //} 
require_once 'layout/header.php';
?>

<?php 
// echo "<br> \$Users avant le selecteur try catch <br>";
// var_dump($Users);?>
  </div>
  <div>
    <label for="pswd">Mot de passe :</label>
    <input type="password" name="pswd" id="pswd" />
  </div>

  <input type="submit" value="Connexion" />
</form>

<?php

// un essai via bard pour stocker mon objet User de test dans la session quand mon accès BDD n'était pas réglé
// if (isset($_POST['user_name']) && isset($_POST['pswd'])) {

//   $user_name = $_POST['user_name'];
//   $pswd = $_POST['pswd'];

//   $user = new User();
//   $user->setuser_name($user_name);
//   $user->setPassword($pswd);

//   if ($user->checkLogin()) {
//     // L'utilisateur est connecté
//     session_set_userdata("user", $user);
//     header("Location: index.php");
//   } else {
//     // L'utilisateur n'est pas connecté
//     header("Location: auth.php?error=1");
//   }
// }
?>

<?php require_once 'layout/footer.php'; ?>