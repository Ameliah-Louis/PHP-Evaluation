<?php

/**
 * @throws PDOException if connection fails
 */
function getDbConnection(): PDO
{
  $dbSettings = parse_ini_file(__DIR__ . '/../db.ini');
  // $host = $dbSettings['DB_HOST'];
  [
    'DB_HOST' => $host,
    // 'DB_PORT' => $port,
    'DB_NAME' => $dbname,
    'DB_CHARSET' => $charset,
    'DB_USER' => $user,
    'DB_PASSWORD' => $password
  ] = $dbSettings;

  // DSN = Data Source Name
  
  try {
    $pdo = new PDO(
      "mysql:host=$host;charset=$charset;dbname=$dbname;",
      $user,
      $password,
      [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );
    return $pdo; 
  }
   catch (PDOException $e) {
    echo "Erreur de connexion à new pdo";
    var_dump($e);
    exit;
  }
}

//  function getFullName(): string
// {
//   return $this->firstname . " " . $this->lastname;
// }

//Ne marche pas mais je dois pas être loin, demander à Lucas.
function getUsers(): array
{
  $pdo = getDbConnection();
  $stmt = $pdo->query("SELECT * FROM users");
  return $stmt->fetchAll();
}

function getCharacters(): array
{
  $pdo = getDbConnection();
  $stmt = $pdo->query("SELECT * FROM characters");
  return $stmt->fetchAll();
}

  // Pour lire les résultats un par un (curseur)
  // while ($product = $stmt->fetch()) {
  //   var_dump($product);
  // }