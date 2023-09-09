<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
  <title>Liste des sorts</title>

</head>
<body>
    <!-- Affichage des sorts -->
    <?php
require_once 'classes/Spell.php';
//tableau de sorts $spells supposé venir de ma BDD et trié par le user_id
$spells = array
(     
    new Spell
        (
            
            //a remplacer avec un call BDD
            8,
            "Eldritch Blast",
            0,
            8,
            "<p>Temps d'incantation : 1 action</p><br />
            <p>Portée : 36 mètres</p><br />
            <p>Composantes : V, S</p><br />
            <p>Durée : instantanée</p><br />",
            "<p>Un rayon d'énergie crépitante zigzague jusqu'à une créature à portée. Effectuez une attaque à distance 
            avec un sort contre la cible. En cas de réussite, la cible subit 1d10 dégâts de force. Ce sort crée plus d'un 
            rayon lorsque vous montez en niveau : deux rayons au niveau 5, trois rayons au niveau 11, et quatre rayons au 
            niveau 17. Vous pouvez diriger les rayons sur une cible unique et les répartir entre différentes créatures. 
            Effectuez un jet d'attaque séparé pour chaque rayon.</p><br />"
        ),
            new Spell
        (
            
            //a remplacer avec un call BDD
            16,
            "Soins",
            1,
            8,
            "<p>Temps d'incantation : 1 action</p><br />
            <p>Portée : contact</p><br />
            <p>Composantes : V, S</p><br />
            <p>Durée : instantanée</p><br />",
            "<p>Une créature que vous touchez récupère un nombre de points de vie égal à 1d8 + le modificateur de votre caractéristique d'incantation. Ce sort n'a pas d'effet sur les morts-vivants et les artificiels.
            Aux niveaux supérieurs. Lorsque vous lancez ce sort en utilisant un emplacement de sort de niveau 2 ou supérieur, la quantité de points de vie récupérés est augmentée de 1d8 pour chaque niveau d'emplacement au-delà du niveau 1.</p><br />"
            
        )
);
    //Prévoir un template pour le foreach card
    //penser à importer ce template x) en require_once
    // Boucle pour afficher les cartes de sort
    echo '<div class="spell-list" style="display: flex;">';
    foreach ($spells as $spell) {
        echo '<div class="spell-card">';
        echo '<div class= spell-content>';
        echo '<div class="spell-name">' . $spell->name . '</div>';
        echo '<div>Niveau : ' . $spell->level . '</div>';
        echo '<div>École : École d\'Abjuration</div>';
        echo '<div class="spell-property">' . $spell->spell_property . '</div>';
        echo '<div class="spell-description">' . $spell->desc . '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    ?>


</body>
</html>