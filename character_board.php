
<!-- Affichage des sorts -->
<?php
require_once 'classes/Spell.php';
    //tableau de sorts $spells venant de ma BDD
    $spells = array
    ( 

        new Spell
        (
            
        //a remplacer avec un call BDD
        1,
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
        )
    );
        
        // Boucle pour afficher les cartes de sort
        foreach ($spells as $spell) {
        echo '<div class="spell-card">';
        echo '<div class="spell-name">' . $spell->name . '</div>';
        echo '<div>Niveau : ' . $spell->level . '</div>';
        echo '<div>École : École d\'Abjuration</div>';
        echo '<div class="spell-property">' . $spell->spell_property . '</div>';
        echo '<div class="spell-description">' . $spell->desc . '</div>';
        echo '</div>';
    }
    ?>
