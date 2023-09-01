<?php require_once 'layout/header.php';
if (isset($_SESSION['login'])) {
  $welcomeMessage = "Bienvenue, " . $_SESSION['login'];
} else {
  $welcomeMessage = "Bienvenue";
}

// $welcomeMessage = "Bienvenue" . (isset($_SESSION['login']) ? ", " . $_SESSION['login'] : "");
?>




<!-- Formulaire de selection du User  -->
<form action="script_de_connexion_BDD" method="post">
    <label for="user">Choisissez un utilisateur :</label>
    <select name="user" id="user">
        <?php
        while ($row = mysqli_fetch_assoc($resultat)) {
            echo "<option value='" . $row['id'] . "'>" . $row['user_name'] . "</option>";
        }
        ?>
    </select>
    <br>
    <!-- Ajoutez d'autres champs de formulaire comme le mot de passe ici -->
    <input type="password" name="pswrd" placeholder="Mot de passe">
    <input type="submit" value="Se connecter">
</form>





<?php require_once 'layout/footer.php';?>




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