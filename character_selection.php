



<!-- réutiliser pour faire le menu déroulant de personnages

Formulaire de selection du User 
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
    <!-- <input type="password" name="pswrd" placeholder="Mot de passe">
    <input type="submit" value="Se connecter">
</form> -->