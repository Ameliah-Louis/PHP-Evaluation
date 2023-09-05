<?php

require_once 'layout/header.php';
require_once 'functions/db.php';
require_once 'classes/User.php';


echo 'test getDbConnection <br>';
$testpdoconnect = getDbConnection();

// $testUser = array
//     (
//     // new User 
//     // (
//     //     1,
//     //     "améliah",
//     //     "test",
//     //     0
//     // )
//     );
    try 
    {
      //Accès BDD ne marche pas je contourne donc
      $User = getUsers ();
      var_dump($User);
    } 
    catch (PDOException $e) 
    {
      echo "Erreur récup TestUser <br>";
      var_dump($e);
      exit;
    }
    
    echo "test test test test";
    if (isset($_SESSION['username'])) {
      $welcomeMessage = "Bienvenue, " . $_SESSION['username'];
    } else {
  $welcomeMessage = "Bienvenue, veuillez choisir un utilisateur.";
}  ?>
<h1><?php echo $welcomeMessage; ?></h1>
<?php require_once 'login.php'?>

<?php require_once 'layout/footer.php'; ?>
