<?php
// require_once 'classes/Utils.php';
// require_once 'classes/ErrorCode.php';

// // A RETRAVAILLER

// if (empty($_POST['username']) || empty($_POST['pass'])) {
//   Utils::redirect('login.php?error=' . ErrorCode::LOGIN_FIELDS_REQUIRED);
// }

// [
//   'username' => $username,
//   'pass' => $password
// ] = $_POST;

// // Authentification
// if ($username !== "test" || $password !== "test") {
//   Utils::redirect('login.php?error=' . ErrorCode::INVALID_CREDENTIALS);
// }

// session_start();
// $_SESSION['username'] = $username;
// $_SESSION['character'] = $_POST['character'];
// Utils::redirect('index.php');
?>
<?php

//TODO: Validate form data
[
  'username' => $username,
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

$stmtUser = $pdo->prepare("SELECT * FROM users WHERE username=:username");
$stmtUser->execute(['username' => $username]);

$username = $stmtUser->fetch();

if ($username === false) {
  echo "Utilisateur non trouvé";
  exit;
}

if ($password === $username['pswd']) {
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