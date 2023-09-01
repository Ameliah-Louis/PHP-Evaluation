<?php
require_once 'classes/Utils.php';
require_once 'classes/ErrorCode.php';

if (empty($_POST['login']) || empty($_POST['pass'])) {
  Utils::redirect('login.php?error=' . ErrorCode::LOGIN_FIELDS_REQUIRED);
}

[
  'login' => $login,
  'pass' => $password
] = $_POST;

// Authentification
if ($login !== "test" || $password !== "test") {
  Utils::redirect('login.php?error=' . ErrorCode::INVALID_CREDENTIALS);
}

session_start();
$_SESSION['login'] = 'test';
Utils::redirect('index.php');
