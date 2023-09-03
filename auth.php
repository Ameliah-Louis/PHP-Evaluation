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
  'username' => $user,
  'pswd' => $password
] = $_POST;

require_once 'functions/db.php';

// Récupération d'une instance de PDO
try {
  $pdo = getDbConnection();
} catch (PDOException) {
  echo "Erreur de connexion à la base de données";
  exit;
}

$stmtUser = $pdo->prepare("SELECT * FROM users WHERE username=:username");
$stmtUser->execute(['username' => $username]);

$user = $stmtUser->fetch();

if ($user === false) {
  echo "Utilisateur non trouvé";
  exit;
}

if ($password === $user['pswd']) {
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