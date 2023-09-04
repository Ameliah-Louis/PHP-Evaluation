<?php

require_once 'layout/header.php';
require_once 'classes/ErrorCode.php';

?>

<?php if (isset($_GET['error'])) { ?>
  <div class="error">
    <?php echo ErrorCode::getErrorMessage(intval($_GET['error'])); ?>
  </div>
<?php } ?>

<?php //$users = $testUser ;  echo "Users avant le selecteur try catch";  var_dump ($users);?>
<form action="auth.php" method="post">
  <div>
    <label for="username">Utilisateur :</label>
    <select name="username">
  <?php
  echo '<option value="">Choisissez un utilisateur</option>';
  try {
    $pdo = getDbConnection();
  } catch (PDOException) {
    echo '</select> <p>Erreur lors de la récupération des produits depuis la BDD</p>';
    exit;
  }
    $query = "SELECT id, username FROM users";
    $statement = $pdo->prepare($query);
    $statement->execute();

    while ($row = $statement->fetch()) {
      echo '<option value="' . $row['id'] . '">' . $row['username'] . '</option>';
    } echo '</select>';
  ?>
  
  <?php 
//   echo '<option value="">Choisissez un utilisateur</option>';
//   try {
//   // $users = getUsers();
//   $users = $testUser ;
// } catch (PDOException $e) {
//   echo "Erreur lors de la récupération des utilisateurs";
//   var_dump($e);
//   exit;
// } ?>
<?php //$users = $testUser ;  echo "<br> Users avant le if while affichant les users";  var_dump ($users);?>

  <?php
  //Ne marche pas pour l'affichage de la list de noms d'users
  // if ($users) {
  //   while ($row = $users->fetch()) {
  //     echo '<option value>' . $row->username . '</option>';
  //   }
  // }
//   foreach ($users as $user) {
//     echo '<option value>' . $user->username . '</option>';
// }
  ?>
</select>
  </div>
  <div>
    <label for="pswd">Mot de passe :</label>
    <input type="password" name="pswd" id="pswd" />
  </div>

  <input type="submit" value="Connexion" />
</form>

<?php

// un essai via bard pour stocker mon objet User de test dans la session
// if (isset($_POST['username']) && isset($_POST['pswd'])) {

//   $username = $_POST['username'];
//   $pswd = $_POST['pswd'];

//   $user = new User();
//   $user->setUsername($username);
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