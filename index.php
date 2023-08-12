<?php 

$damage = new Damage();
$spell = new Spell();
?>

<!DOCTYPE html>
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
</html>