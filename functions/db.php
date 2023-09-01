<?php

//Connexion à la BDD
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rpg_project";

$connexion  = new mysqli($servername, $username, $password, $dbname);
// Check err si pas de connexion
if (!$connexion) {
    exit("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

?>