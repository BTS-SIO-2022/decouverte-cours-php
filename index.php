<?php

// J'affiche un commentaire sur une seule ligne en php

/* 
Je suis un commentaire php sur
plusieurs 
lignes
*/

// Pour afficher une chaîne de caractère

echo 'Coucou je fais du php';

// J'affiche du code html

echo '<h2>Je suis un h2 </h2>';

// Une variable c'est une boîte (un espace de mémoire) dans laquelle je viens stocker une information, une donnée. 
$prenom = 'Mathilde'; 

echo $prenom;
echo '<br>';
$prenom = 'Juliette';
echo '<br>';
echo $prenom;

/* en php (comme en java), nous avons différents types de données (Data types)
Les variables en PHP vont pouvoir stocker 8 grands types de données différents :

- Le type « chaine de caractères » ou String en anglais ;
- Le type « nombre entier » ou Integer en anglais ;
- Le type « nombre décimal » ou Float en anglais ;
- Le type « booléen » ou Boolean en anglais ;
- Le type « tableau » ou Array en anglais ;
- Le type « objet » ou Object en anglais ;
- Le type « NULL » qui se dit également NULL en anglais ;
- Le type « ressource » ou Resource en anglais ;
*/

$age = 15;
$nbreDecimal = 15.20;
$test = false;

// Les constantes sont des variables php, qui nous permettent de déclarer des valeurs "inamovibles" et disponibles partout dans mon code

define("URL_MON_SITE", 'https://www.monsite.com');
echo "<br>";
echo URL_MON_SITE;

// Ici j'initialise ma variable nom avec une chaîne de caractère vide, cela me permet d'utiliser ma variable sans avoir d'erreur du type Undefinded Variable.
$nom = '';

// Les tableaux en php 
// Les tableaux nous servent à stocker plusieurs informations, plusieurs données dans une variable 
$fruits = ['cerises', 'pommes', 'bananes', 'citrons' ];
echo '<br>';
echo $fruits[2];

// var_dump et print_r sont des fonctions php qu'on utilise pour le debug (elles ne doivent jamais figurer dans un code en production)
var_dump($fruits);
echo '<br>';
print_r($fruits);
echo '<br>';
$taille = 123;

// gettyype est une fonction php qui me donne sous forme de chaîne de caractères, le type de données qu'on lui a transmis. On l'utilise pour du contrôle
$test = gettype($taille);
var_dump($test);

echo '<br>';
array_push($fruits, 'litchis');
var_dump($fruits);

echo '<br>';
$fruits[] = 'oranges';
var_dump($fruits);

/* Dans un tableau classique, si rien n'est spécifié, l'index commence toujours à 0. Cependant si on le souhaite, nous pouvons modifier l'index, c'est ce qu'on appelle un tableau associatif */

$corbeilleFruits = [
    1 => 'cerises',
    2 => 'bananes', 
    3  => [
        'petit' =>'kiwis', 
        'moyen' => 'pommes', 
        'gros' =>'pastèques'
        ],
    ];

echo '<br>';
echo $corbeilleFruits[3]['petit'];

$panierFruits = array('poires', 'melons');

/* 
En php, on peut réaliser des opérations arithmétiques
Documentation : https://www.php.net/manual/fr/language.operators.arithmetic.php
*/
echo '<br>';
// La négation = 
$positif = 12;
-$positif;
var_dump(-$positif);

// L'identité
echo '<br>';
$positif = '11';
+$positif;
var_dump(+$positif);

echo '<br>';
// L'addition
$addition = 4+4;
var_dump($addition);

echo '<br>';
// Un soustraction
$soustraction = 10-2;
var_dump($soustraction);

echo '<br>';
// Une division 
$division = 25/5;
var_dump($division);

echo '<br>';
// Une multiplication
$chiffreUn = 5;
$chiffreDeux = 9;
$multiplaction = $chiffreUn*$chiffreDeux;
var_dump($multiplaction);

echo '<br>';
// Le modulo
$modulo = 6%5;
var_dump($modulo);

echo '<br>';
// l'exponentiation 
$expo = 5**8;
var_dump($expo);

// La concaténation 

$prenom = 'Mathilde';
$age = 34;

echo 'Bonjour, je suis '.$prenom.', j\'ai '.$age.' ans, je suis jeune';

// Le caractère d'échappement \ me permet d'utiliser à nouveau un caractère utilisé par php.

/* 
PHP offre quelques raccourcis pour modifier des variables
Par exemple, on peut incrementer la valeur d'une variable, c'est-à-dire augmenter sa valeur (exemple ++ augmenter la valeur de 1)
Documentation : https://www.php.net/manual/fr/language.operators.increment.php
*/
// j'ai des sous à la banque
$economies = 1000;

// Tous les jours, je rajoute un euro d'économie
$economies++;

echo '<br>';
echo $economies;

// Ici je dépense des sous
$economies--;

echo '<br>';
echo $economies;

/* les opérateurs combinés ou opérateurs d'affectation
Ok c'est sympa de rajouter ou d'enlever 1 mais comment je fais si j'ai envie d'ajouter ou soustraire plus que 1 => je vais y arriver grâce aux opérateurs combinés
Documentation : https://www.php.net/manual/fr/language.operators.assignment.php
*/

$economies = 1000;
$loyer = 600;
$salaire = 1500;

// Je veux mettre tout mon salaire dans mes économies

$economies+=$salaire;

echo '<br>';
var_dump($economies);
var_dump($salaire);
echo '<br>';

// Je veux retrancher mon loyer de mon salaire
$salaire-=$loyer;
var_dump($salaire);
echo '<br>';

/* LES CONDITIONS 

Une condition vérifie la validité (vrai ou faux) d'une opération ou d'une instruction afin de réaliser des actions/opérations en conséquence.
Pour réaliser une condition, on va utiliser les structures de contrôle
Documentation : https://www.php.net/manual/fr/language.control-structures.php 

Comment vérifie-t-on la validité d'une opération => pour cela je vais utiliser les opérateurs de comparaison
Documentation : https://www.php.net/manual/fr/language.operators.comparison.php
*/
$string = '1';
$integer = 1;

// Comparaison avec IF et IF/ELSE
if ($string === $integer){
    echo 'coucou';
} else {
    echo 'c\'est des types différents';
}

if(5 < 3){
    echo 'Je sais pas compter';
}else {
    echo 'Ca va je suis pas trop nulle en math';
}

$maturite = 3;
$maceration = 12;

if($maturite === 3){
    echo 'C\'est bientôt le moment de récolter les fruits';
}elseif($maturite > 12){
    echo 'Attention, les fruits sont en train de pourrir';
}elseif($maceration > 6){
    echo 'C\'est l\'heure de goûter la petite liqueur';
}elseif($maceration < 6){
    echo 'Trop tôt pour boire la petite liqueur';
}else{
    echo 'On verra bien';
}

/* LES BOUCLES
Elles nous permettes d'exécuter une MEME série d'opérations/instructions plusieurs fois tant que soit la condition est vrai ou bien tant nous avons d'éléments dans un tableau. Par exemple, si j'ai envie d'écrire 20 <li> dans mon html, je peux les créer via une boucle PHP

En java 
for (int i=1; i < 10; i++){
    system.out.print(i);
}

En php
Dans une boucle FOR, j'ai 3 instructions essentielles : 
- initialisation
-  condition
- incrementation
*/
for($i=1; $i <=20; $i++){
    echo '<li>Je suis un élément li</li>';
}

/* la boucle while permet de boucler tant que la condition définie est vraie */
$economie = 5;

while($economie < 100){
    echo 'Je continue de travailler';
    $economie+=20;
    echo '<br>';
}

// Je veux boucler sur les éléments d'un tableau, pour cela je vais utiliser foreach
var_dump($fruits);

foreach($fruits as $fruit){
    echo $fruit;
    echo '<br>';
}

foreach($fruits as $index => $fruit){
    echo $index.$fruit;
    echo '<br>';
}

?>