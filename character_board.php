<!-- Affichage des sorts -->
<?php

require_once 'layout/header.php';
require_once 'functions/db.php';
require_once 'classes/Spell.php';


// var_dump($_SESSION);
if (isset($_SESSION['user_name'])) {
    $welcomeMessage = "Bienvenue, " . $_SESSION['user_name'] . 'voici la liste des sorts.';
  } else {
    // var_dump($_SESSION);
$welcomeMessage = "Bienvenue, voici la liste des sorts.";
}  ?>
<h1><?php echo $welcomeMessage; ?></h1>

<?php
//tableau de sorts $spells supposé venir de ma BDD et trié par le user_id
//correction de ma jointure mal écrite par BARD en lui donnant ma requete, lui spécifiant les tables visées par la jointure et sur quel id les lier.
// tester avec SELECT * FROM spells JOIN character_has_spell ON spells.id = character_has_spell.spells_id WHERE character_has_spell.characters_id = 2;

// Contournement en dur pour pouvoir tester l'affichage de mes cartes car blocage sur les requetes SQL
// $spells = array
// (     
    //     new Spell
    //         (
        
        //             //a remplacer avec un call BDD
        //             8,
        //             "Eldritch Blast",
        //             0,
        //             8,
        //             "<p>Temps d'incantation : 1 action</p><br />
        //             <p><strong>Portée :</strong> 36 mètres</p><br />
        //             <p><strong>Composantes :</strong> V, S</p><br />
        //             <p><strong>Durée :</strong> instantanée</p><br />",
        //             "<p>Un rayon d'énergie crépitante zigzague jusqu'à une créature à portée. Effectuez une attaque à distance 
        //             avec un sort contre la cible. En cas de réussite, la cible subit 1d10 dégâts de force. <strong>Ce sort crée plus d'un 
        //             rayon lorsque vous montez en niveau :</strong> deux rayons au niveau 5, trois rayons au niveau 11, et quatre rayons au 
        //             niveau 17. Vous pouvez diriger les rayons sur une cible unique et les répartir entre différentes créatures. 
        //             Effectuez un jet d'attaque séparé pour chaque rayon.</p><br />"
        //         ),
        //             new Spell
        //         (
            
            //             //a remplacer avec un call BDD
            //             16,
            //             "Soins",
            //             1,
            //             8,
            //             "<p>Temps d'incantation : 1 action</p><br />
            //             <p>Portée : contact</p><br />
            //             <p>Composantes : V, S</p><br />
            //             <p>Durée : instantanée</p><br />",
            //             "<p>Une créature que vous touchez récupère un nombre de points de vie égal à 1d8 + le modificateur de votre caractéristique d'incantation. Ce sort n'a pas d'effet sur les morts-vivants et les artificiels.
            //             Aux niveaux supérieurs. Lorsque vous lancez ce sort en utilisant un emplacement de sort de niveau 2 ou supérieur, la quantité de points de vie récupérés est augmentée de 1d8 pour chaque niveau d'emplacement au-delà du niveau 1.</p><br />"
            
            //         )
            // );
            // var_dump($_POST);
            // convert the $_POST['a'] to integer if it's valid, or default to 0 (from stackOverflow)
            $int = (is_numeric($_POST['character_id']) ? (int)$_POST['character_id'] : 0);
            // var_dump($int);
            $character_id = $int;
            // var_dump($character_id);
            try {
                $characterSpells = getCharacterSpells($character_id);
                // echo "<br> Spells récupérés <br>";
                // var_dump($characterSpells);
            } catch (PDOException $e) {
                echo "Erreur récup des spells <br>";
                var_dump($e);
                exit;
            }

            $spells = $characterSpells;
            


// exploser méga tableau spells pour obtenir un simple tableau de chaque spell.
            // echo "characters récupérés dans characters <br>";
            // var_dump($characters);
            //Prévoir un template pour le foreach card
            //penser à importer ce template x) en require_once
            // Boucle pour afficher les cartes de sort
            
            echo '<div class="spell-list" style="display: flex;">';
            foreach ($spells as $spell) {
              $spell = new Spell ($id = $spell["id"], $spell_name = $spell["spell_name"], $spell_level = $spell["spell_level"], $schools_id = $spell["schools_id"], $spell_property = $spell["spell_property"], $spell_desc = $spell["spell_desc"]);
        echo '<div class="spell-card">';
        echo '<div class= spell-content>';
        echo '<div class="spell-name">' . $spell->getSpellName() . '</div>';
        echo '<div>Niveau : ' . $spell->getSpellLevel() . '</div>';
        echo '<div class="spell-property">' . $spell->getSpellProperty() . '</div>';
        echo '<div class="spell-description">' . $spell->getSpellDesc() . '</div>';
        echo '</div>';
        echo '</div>';
            }


require_once 'layout/footer.php'  ?>