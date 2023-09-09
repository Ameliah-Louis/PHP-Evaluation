<?php
// require_once 'classes/Utils.php';
// require_once 'classes/ErrorCode.php';

// // A RETRAVAILLER

// if (empty($_POST['user_name']) || empty($_POST['pass'])) {
//   Utils::redirect('login.php?error=' . ErrorCode::LOGIN_FIELDS_REQUIRED);
// }

// [
//   'user_name' => $user_name,
//   'pass' => $password
// ] = $_POST;

// // Authentification
// if ($user_name !== "test" || $password !== "test") {
//   Utils::redirect('login.php?error=' . ErrorCode::INVALID_CREDENTIALS);
// }

// session_start();
// $_SESSION['user_name'] = $user_name;
// $_SESSION['character'] = $_POST['character'];
// Utils::redirect('index.php');
?>
<?php
// $user_name = $_POST['user_name'];
// $password = $_POST['pswd'];

//TODO: Validate form data
[
  //'id' => $id,
  'user_name' => $user_name,
  'pswd' => $password,
  // 'role_id' => $role_id
] = $_POST;
// var_dump ($_POST);

require_once 'functions/db.php';

// Récupération d'une instance de PDO
try {
  $pdo = getDbConnection();
} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données";
  var_dump($e);
  exit;
}
// var_dump ($user_name);
if (!empty($user_name)) {
  $stmtUser = $pdo->prepare('SELECT * FROM users WHERE user_name=:user_name');
  $stmtUser->execute(['user_name' => $user_name]);
  $currentUser = $stmtUser->fetch();

  // var_dump ($currentUser);
} else {
  echo "user_name est vide";
}

// //décommenter quand $user_name = $stmtUser->fetchAll(); corrigé
// $stmtUser = $pdo->prepare('SELECT * FROM users WHERE user_name=:user_name');
// $stmtUser->execute(['user_name' => $user_name]);
// var_dump ($stmtUser);
// $user_name = $stmtUser->fetchAll();
// // Faire le Hash une fois le soucis ligne 62 corrigé
// var_dump ($user_name);
  

// if ($user_name === false) {
//   var_dump ($user_name);
//   echo "Utilisateur non trouvé";
//   exit;
// }

// if ($password === $user_name['pswd']) {
//   echo "Login ok";
// } else {
//   echo "Mot de passe incorrect";
// }



// $userHash = $user['passwordHash'];

// if (password_verify($password, $userHash)) {
//   echo "Login ok";
// } else {
//   echo "Mot de passe incorrect";
// }
?>
<?php require_once 'character_selection.php' ?>