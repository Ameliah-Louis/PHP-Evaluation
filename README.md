# PHP-Evaluation
 Some dnd tool to access some monsters or spells card

## Index

[intro](index.php)

Gestion de la session, landing page de login

## Login

[formulaire](login.php) : Formulaire de connexion

A REPRENDRE A MA SAUCE
[Tableaux associatifs](arrays/associative_arrays.php) : Clés personnalisées

[Opérateurs](arrays/operators.php)

[Array destructuring](arrays/destructuring.php)

[Spread operator](arrays/spread_operator.php)

[Rappel boucles](arrays/loops_intro.php)

[Foreach & While sur un tableau d'utilisateurs](arrays/loops.php)

[Quelques fonctions sur les tableaux en PHP](arrays/functions.php)

## Inclusion de fichiers

Dossier [file-inclusion](file-inclusion/)

### Atelier produits

À partir du [fichier de produits](atelier_products/data/products.php), réalisez une page affichant la liste des produits et leurs informations, sous forme de grille dans une page.

Pour chaque produit, affichez également ses tags.

## Fonctions

Atelier products : [getTotalPrice](atelier_products/functions/calculate.php)

[Fonction utilitaire `echoWithBr`](poo/functions/utils.php)

### Arrondi à 0.5

Vous allez réaliser une fonction qui effectue un arrondi à 0.5 supérieur ou inférieur au plus proche suivant la valeur donnée
Exemple :
0.234 => 0
1.56 => 1.5
1.27 => 1.5
1.12 => 1
1.25 => 1.5
...

Vous réfléchirez au nom de cette fonction, à sa signature, et la manière dont vous l'implémentez
Réalisez au moins une dizaine d'exemples qui démontreront le bon fonctionnement de votre fonction

[Solutions](functions/roundAtHalf/)

### Insertion dans un tableau

Réaliser une fonction qui insère un élément dans un tableau. On fournira à la fonction le tableau dans lequel insérer l'élément, l'élément en question, et la position (l'index).

Par exemple, si j'ai le tableau [1, 2, 3] et que je veux insérer l'élément 4 à l'index 2, je me retrouverai avec [1, 2, 4, 3].

Bien sûr les index sont toujours positifs.
On ne travaillera qu'avec des index numériques.
Si on fournit un index plus grand que la taille du tableau, alors on proposera 2 implémentations différentes : la première renverra une erreur car l'index est en-dehors des limites, la seconde agrandira le tableau avec des éléments vides jusqu'à insérer l'élément voulu.

[Solutions](functions/insertIntoArray/)

## Superglobales

[Introduction, tableau $\_GET](superglobals/welcome.php)

[Atelier produits, fiche produit](atelier_products/product.php)

## Formulaires

[Atelier produits, recherche par nom avec méthode GET](atelier_products/search.php)

## Programmation orientée objet

### Introduction

[Classe Product](poo/classes/Product.php) : Structure d'une classe, méthodes, encapsulation, constructeur

[Classe User](poo/classes/User.php) : Constante de classe, interface fluide (type de retour `self` dans les setters)

### Atelier Voitureland

[cars](cars/)

> Objectifs : écriture d'une classe, parcours d'un tableau d'objets, construction dynamique d'une liste `select` basée sur une partie des données présentes dans le tableau (années des voitures)

Réalisez une classe Car qui aura les attributs suivants : name, engine, year, km

Réalisez un tableau de Car que vous déposerez dans un fichier PHP, puis un moteur de recherche pour chercher les voitures par année

Pour l'année dans le moteur de recherche, générez une liste "select" en fonction des années qui se trouvent dans le tableau de voitures

### Atelier Newsletter

[newsletter](poo-newsletter/)

> Objectifs : refactorisation en classes, gestion d'erreurs (exceptions)

Réaliser un petit système de newsletter :

- Une page contenant un formulaire où renseigner son adresse mail
- Développer un système qui détecte si l'adresse email est un spam ou non

### Héritage

Produits rectangulaires et circulaires : [poo-heritage](poo-heritage/)

> Objectifs : Héritage, portée `protected`, mot-clé `static` pour l'interface fluide, abstractions, polymorphisme

### Abstraction, polymorphisme

Users, employés, clients : [poo-users-emp-clients](poo-users-emp-clients/)

> Objectifs : Héritage, classe abstraite, méthode abstraite, [polymorphisme](https://github.com/ld-web/hb-php-r5-2023/blob/master/poo-users-emp-clients/index.php#L26-L39)

> Objectifs : Abstraction, interfaces, polymorphisme

Pressing : [pressing](pressing/)

> Objectifs : Abstraction, interfaces, [select list](pressing/html_functions.php)

## File upload

[file-upload](file-upload/)

> Objectifs : formulaires, [enctype](https://github.com/ld-web/hb-php-r5-2023/blob/master/file-upload/index.php#L27)

## Sessions

[sessions](sessions/)

> Objectifs : Sessions en PHP, retenir de la donnée côté serveur, cookie PHPSESSID

[sessions-auth](sessions-auth/)

> Objectifs : Avant PDO, exemple d'authentification statique, simple, avec enregistrement en session

## PDO

[pdo-intro](pdo-intro/)

> Objectifs : Découverte de la classe PDO pour représenter une connexion à une base de données, DSN, Exceptions

> Objectifs : requêtes non préparées, requêtes préparées
