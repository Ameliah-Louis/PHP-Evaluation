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
    'DB_PORT' => $port,
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
// Requete non préparée car pas d'input, juste un menu déroulant donc pas necessaire.


function getUserCharacters(int $users_id): array
{
  //$users_id = 4; //contournement en dur pour avancer sur la suite malgré mauvaise requete SQL: 'SELECT * FROM characters WHERE users_id = :users_id'
  //correction de la requête avec exemple de la requete pour les sorts comme modèle
  //Requete à préparer car transfert de la data $users_id
  $pdo = getDbConnection();
  $stmt = $pdo->prepare('SELECT * FROM characters JOIN users ON characters.users_id = users.id WHERE users.id = :users_id;');
  $stmt->execute(['users_id' => $users_id]);
  
  return $stmt->fetchAll();
}


// Fonction pour l'admin après implémentation de la gestion des roles, ou alors trouver comment modifier getUserCharacters pour que ça prenne tous les users pour l'admin.
// function getCharacters(): array
// {
//   $pdo = getDbConnection();
//   $stmt = $pdo->prepare('SELECT * FROM characters');

//   return $stmt->fetchAll();
// }


// SPELLS
function getCharacterSpells(int $character_id): array
{
  // $characters_id = 4;
  $pdo = getDbConnection();
  $stmt = $pdo->prepare('SELECT * FROM spells JOIN characters_has_spells ON spells.id = characters_has_spells.spells_id WHERE characters_has_spells.characters_id = :character_id; ');
  $stmt->execute(['character_id' => $character_id]);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

  // Pour lire les résultats un par un (curseur)
  // while ($product = $stmt->fetch()) {
  //   var_dump($product);
  // }