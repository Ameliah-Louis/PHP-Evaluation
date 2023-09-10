<?php 
        // echo '<div class="spell-card">';
        // echo '<div class= spell-content>';
        // echo '<div class="spell-name">' . $spell->spell_name . '</div>';
        // echo '<div>Niveau : ' . $spell->spell_level . '</div>';
        // echo '<div class="spell-property">' . $spell->spell_property . '</div>';
        // echo '<div class="spell-description">' . $spell->spell_desc . '</div>';
        // echo '</div>';
        // echo '</div>';

        //gestion du tableau de tableaux car multiples sorts.
echo '<div class="spell-card">';
echo '<div class= spell-content>';
echo '<div class="spell-name">' . $spellData[0] . '</div>';
echo '<div>Niveau : ' . $spellData[1] . '</div>';
echo '<div class="spell-property">' . $spellData[2] . '</div>';
echo '<div class="spell-description">' . $spellData[3] . '</div>';
echo '</div>';
echo '</div>';
