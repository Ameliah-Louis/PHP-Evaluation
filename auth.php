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

//TODO: Validate form data
[
  'user_name' => $user_name,
  'pswd' => $password
] = $_POST;

require_once 'functions/db.php';

// Récupération d'une instance de PDO
try {
  $pdo = getDbConnection();
} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données";
  var_dump($e);
  exit;
}

$stmtUser = $pdo->prepare("SELECT * FROM users WHERE user_name=:user_name");
$stmtUser->execute(['user_name' => $user_name]);

$user_name = $stmtUser->fetchAll();

if ($user_name === false) {
  echo "Utilisateur non trouvé";
  exit;
}

if ($password === $user_name['pswd']) {
  echo "Login ok";
} else {
  echo "Mot de passe incorrect";
}



// $userHash = $user['passwordHash'];

// if (password_verify($password, $userHash)) {
//   echo "Login ok";
// } else {
//   echo "Mot de passe incorrect";
// }