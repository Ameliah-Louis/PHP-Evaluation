<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"> 
    <title>Document</title>
</head>
<body>
<!-- Faire le LAYOUT Header -->


<!-- Formulaire de selection du User  -->
<form action="script_de_connexion_BDD" method="post">
    <label for="utilisateur">Choisissez un utilisateur :</label>
    <select name="utilisateur" id="utilisateur">
        <?php
        while ($row = mysqli_fetch_assoc($resultat)) {
            echo "<option value='" . $row['id'] . "'>" . $row['username'] . "</option>";
        }
        ?>
    </select>
    <br>
    <!-- Ajoutez d'autres champs de formulaire comme le mot de passe ici -->
    <input type="password" name="mot_de_passe" placeholder="Mot de passe">
    <input type="submit" value="Se connecter">
</form>





<!-- Affichage des sorts -->
<?php
require_once 'classes/Spell.php';
    //tableau de sorts $spells venant de ma BDD
    $spells = array( 

        new Spell(
            
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
        Effectuez un jet d'attaque séparé pour chaque rayon.</p><br />")
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


<!-- Faire le LAYOUT Footer -->
</body>
</html>






<!-- // echo 'hello',
// require_once "classes/Spell.php",

// $spell = new Spell(
//     $this->id = $id,
//     $this->name = $name,
//     $this->level = $level,
//     $this->school_id = $school_id,
//     $this->spell_property = $spell_property,
//     $this->desc = $desc,
// );
// ?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des sorts</title>
</head>
<body>
<form name="filtres" action="sorts.php" method="post">
<div class="col1">
    <div class="select normal">
    <label><input type="checkbox" id="selectAllF1" checked="checked" onclick="selectF(1)"> Personnage</label> <i title="Ctrl+Click pour sélectionner plusieurs éléments"></i><br>
        <select name="Filtre1[]" id="FormF1" multiple size="3">
            <option value="c" selected="selected">Selmays</option>
            <option value="d" selected="selected">Darkna</option>
            <option value="w" selected="selected">Leowen</option>
        </select>
    </div><div class="select small">Niv Min
        <select name="nivMin">
            <option value=0 selected="selected">0</option>
            <option value=1 >1</option>
            <option value=2 >2</option>
            <option value=3 >3</option>
            <option value=4	>4</option>
            <option value=5 >5</option>
            <option value=6 >6</option>
            <option value=7 >7</option>
            <option value=8 >8</option>
            <option value=9	>9</option>
        </select>
    </div><div class="select small">Niv Max
        <select name="nivMax">
            <option value=0 >0</option>
            <option value=1 >1</option>
            <option value=2	>2</option>
            <option value=3	>3</option>
            <option value=4 >4</option>
            <option value=5 >5</option>
            <option value=6 >6</option>
            <option value=7	>7</option>
            <option value=8	>8</option>
            <option value=9 selected="selected">9</option>
        </select>
    </div>
</div><div class="colupdown">
    <i class="fas fa-chevron-up" onclick="filterUp()"></i><i class="fas fa-chevron-down" onclick="filterDown()" style="display:none"></i>
</div><div class="col">
    <a href="#pied"><i class="fas fa-arrow-circle-down" title="Bas de page"></i></a>
    <input type="submit" name="filtrer" value="FILTRER">
    <i class="fas fa-sync-alt" title="Reset" onclick="reset()"></i>
    <i class="fas fa-search"></i><input id="myfilter" type="text" value="" onkeyup="filter()"><i class="fas fa-times" onclick="clearFilter()"></i>
</div>
</form>

    
</body>
</html> -->