# PHP-Evaluation
 Some dnd tool to access some monsters or spells card

## Index

[intro](index.php)

Page d'arrivée
[formulaire](login.php) 
Selection utilisateur [fonction `getUsers`](db.php).
Puis on entre son mot de passe.
[authentification](auth.php) pour vérifier les infos données.

## Logout

Une fois log, l'option pour se déconnecter apparait
J'aurais préférer garder le menu déroulant pour pouvoir swith d'un personnage à l'autre, voir d'un user à l'autre mais je n'ai pas eu le temps.
## Fonctions

[getDbConnection](functions/db.php) se connecte à la BDD

[getUsers](functions/db.php) Récupère la table Users
[getCharacters](functions/db.php) Récupère les Characters correspondant à l'utilisateur connecté (ne fonctionne pas tel quel, car n'identifie pas l'utilisateur )

## Les classes 

Elles sont nombreuses mais pas toutes travaillées.
[classe](User.php) est utilisée pour contourner mes diffucltés à pouvoir me connecter à ma BDD. J'aimerai la retravailler avec les données extraites de la BDD.
[classe](spell.php) m'a servi à la même chose quand je n'ai pas reussi à connecter l'utilisateur à ses personnages liés via le user_id.
J'avais penser retravailler ces classes pour qu'elles recoivent les données de la BDD puis les appeler mais manque de temps.

J'avais aussi anticiper d'autres classes pour le cas ou j'aurais le temps de pousser mon projet un peu plus loin.
## Character_selection
[selection](character_selection.php)
Une fois log on arrive sur cette page, et un nouveau menu déroulant affiche les personnages de l'utilisateur.

## Character_board
[présentation des sorts](character_board.php)
Une fois le personnage choisi on arrive sur cette page, et s'affichent les sorts du peersonnage sous forme de cartes .

## Les Templates

J'avais tenter de me lancer dans les templates pour les options du menu SELECT déroulant, mais je n'ai pas pu le faire marcher.

J'avais aussi envisagé utiliser les templates pour les cartes de sort, afin de réunir la methode de création des cartes à part.