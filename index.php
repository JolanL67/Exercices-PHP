<?php

//==================================
// DISCLAIMER
// Source des exercices 1 à 23 : https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant
// Source des exercices 24 à 33 : https://openclassrooms.com/forum/sujet/exercices-pour-debutants-en-php-91660
// Source des exercices 34 à 35 : https://openclassrooms.com/forum/sujet/exercices-et-tp-d-entrainement-en-php-85498
// Ce fichier est un énoncé d'exercices pour php, les corrections sont dans le dossier correspondant
//==================================

// Exercice 1, Faite en sorte que la fonction HelloWorld retourne exactement la valeur Hello World!

function helloWorld() {
    return 'Hello World!';
}

echo helloWorld() . "<br />";

// Exercice 2, Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf(). Elle doit retourner Le prof de programmation Web

function quiEstLeMeilleurProf() {
    return 'Le prof de programmation Web';
}

echo quiEstLeMeilleurProf() . "<br />";

// Exercice 3, Créer une fonction from scratch qui s'appelle jeRetourneMonArgument(). Exemple : Arg = "abc" ==> Return abc Arg = 123 ==> Return 123

function jeRetourneMonArgument(int $arg) {
    return $arg;
}

echo jeRetourneMonArgument(123) . "<br />";

// Exercice 4, Créer une fonction from scratch qui s'appelle concatenation().
// Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux.
// Exemple : argument 1 = Antoine Argument 2 = Griezmann; Resultat : AntoineGriezmann

function concatenation(string $arg1, string $arg2) {
    return $arg1 . $arg2;
}

echo concatenation('Antoine', 'Griezmann') . "<br />";

// Exercice 5, Créer une fonction from scratch qui s'appelle concatenationAvecEspace().
// Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux.
// Exemple : argument 1 = Ngolo Argument 2 = Kante; Resultat : Ngolo Kante

function concatenationAvecEspace( string $arg1, string $arg2) {
    return $arg1 . ' ' . $arg2;
}

echo concatenationAvecEspace('Ngolo', 'Kante') . "<br />";

// Exercice 6, Créer une fonction from scratch qui s'appelle somme().
// Elle prendra deux arguments de type int. Elle devra retourner la somme des deux.
// Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 10

function somme(int $arg1, int $arg2) {
    return $arg1 + $arg2;
}

echo somme(5, 5) . "<br />";

// Exercice 7, Créer une fonction from scratch qui s'appelle soustraction().
// Elle prendra deux arguments de type int. Elle devra retourner la soustraction des deux. 
// Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 0

function soustraction(int $arg1, int $arg2) {
    return $arg1 - $arg2;
}

echo soustraction(5, 5) . "<br />";

// Exercice 8, Créer une fonction from scratch qui s'appelle multiplication().
// Elle prendra deux arguments de type int. Elle devra retourner la multiplication des deux. 
// Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 25

function multiplication(int $arg1, int $arg2) {
    return $arg1 * $arg2;
}

echo multiplication(5, 5) . "<br />";

// Exercice 9, Créer une fonction from scratch qui s'appelle estIlMajeure().
// Elle prendra un argument de type int. Elle devra retourner un boolean.
// Si age >= 18 elle doit retourner true si age < 18 elle doit retourner false Exemple : age = 5 ==> false age = 34 ==> true

function estIlMajeure(int $arg) {
    if ($arg >= 18) {
        return true;
    }
    elseif ($arg < 18) {
        return false;
    }
}

echo estIlMajeure(19) . "<br />";
echo estIlMajeure(5) . "<br />";

// Exercice 10, Créer une fonction from scratch qui s'appelle plusGrand().
// Elle prendra deux arguments de type int. Elle devra retourner le plus grand des deux.

function plusGrand(int $arg1, int $arg2) {
    return max($arg1, $arg2);
}

echo plusGrand(2, 18) . "<br />";

// Exercice 11, Créer une fonction from scratch qui s'appelle plusPetit().
// Elle prendra deux arguments de type int. Elle devra retourner le plus petit des deux.

function plusPetit(int $arg1, int $arg2) {
    return min($arg1, $arg2);
}

echo plusPetit(2, 18) . "<br />";

// Exercice 12, Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra trois arguments de type int. 
// Elle devra retourner le plus petit des trois.

function plusPetitv2(int $arg1, int $arg2, int $arg3) {
    return min($arg1, $arg2, $arg3);
}

echo plusPetitv2(18, 15, 65) . "<br />";

// Exercice 13, Créer une fonction from scratch qui s'appelle premierElementTableau(). 
// Elle prendra un argument de type array. Elle devra retourner le premier élement du tableau. Si l'array est vide, il faudra retourner null

function premierElementTableau(array $arg) {

    if (empty($arg)) {
        return null;
    }
    else {
        return $arg[0];
        // array_key_first($arg)
    }
}

echo premierElementTableau(['hi', 'sup', 'you', 'suck']) . "<br />";

// Exercice 14, Créer une fonction from scratch qui s'appelle dernierElementTableau(). 
// Elle prendra un argument de type array. Elle devra retourner le dernier élement du tableau. Si l'array est vide, il faudra retourner null;

function dernierElementTableau(array $arg) {

    if (empty($arg)) {
        return null;
    }
    else {
        return end($arg);
    }
}

echo dernierElementTableau(['hi', 'sup', 'you', 'suck']) . "<br />";

// Exercice 15, Créer une fonction from scratch qui s'appelle lePlusGrand(). 
// Elle prendra un argument de type array. Elle devra retourner le plus grand des élements présent dans l'array. Si l'array est vide, il faudra retourner null;

function lePlusGrand(array $arg) {

    if (empty($arg)) {
        return null;
    }
    else {
        return max($arg);
    }

    // return empty($arg) ? null : max($arg);
}

echo lePlusGrand([1, 23, 26, 12]) . "<br />";


// Exercice 16, Créer une fonction from scratch qui s'appelle lePlusPetit(). 
// Elle prendra un argument de type array. Elle devra retourner le plus petit des élements présent dans l'array. Si l'array est vide, il faudra retourner null;

function lePlusPetit(array $arg) {

    if (empty($arg)) {
        return null;
    }
    else {
        return min($arg);
    }
}

echo lePlusPetit([1, 23, 26, 12]) . "<br />";

// Exercice 17, Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. 
// Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.

function verificationPassword(string $password) {
    if (strlen($password) >= 8 ) {
        return true;
    }
    else {
        return false;
    }
}

echo verificationPassword('KarimLeGoat') . "<br />";

/* Exercice 18, Créer une fonction from scratch qui s'appelle biggestVerificationPassword(). 
Elle prendra un argument de type string. 
Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :
Faire au moins 8 caractères
Avoir au moins 1 chiffre
Avoir au moins une majuscule et une minuscule
*/

function biggestVerificationPassword(string $password) {
    if (preg_match("/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/", $password)) {
        return true;
    }
    else {
        return false;
    }
}

echo biggestVerificationPassword('KarimLeGoat13') . "<br />";
echo biggestVerificationPassword('jolancoucousalut') . "<br />";

/* Exercice 19, Créer une fonction from scratch qui s'appelle capital(). 
Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des pays suivants :
France ==> Paris
Allemagne ==> Berlin
Italie ==> Rome
Maroc ==> Rabat
Espagne ==> Madrid
Portugal ==> Lisbonne
Angleterre ==> Londres
Tout autre pays ==> Inconnu
Il faudra utiliser la structure SWITCH pour faire cette exercice.
*/

function capital($capital) {
    switch ($capital) {
        case 'France':
            echo 'Paris' . PHP_EOL;
        break;
        case 'Allemagne':
            echo 'Berlin' . PHP_EOL;
        break;
        case 'Italie':
            echo 'Rome' . PHP_EOL;
        break;
        case 'Maroc':
            echo 'Rabat' . PHP_EOL;
        break;
        case 'Espagne':
            echo 'Madrid' . PHP_EOL;
        break;
        case 'Portugal':
            echo 'Lisbonne' . PHP_EOL;
        break;
        case 'Angleterre':
            echo 'Londres' . PHP_EOL;
        break;
        default:
            echo 'Inconnu' . PHP_EOL;
        break;
    }
}

capital('France');
capital('Allemagne');
capital('Italie');
capital('Maroc');
capital('Espagne');
capital('Suède');

/* Exercice 20, Créer une fonction from scratch qui s'appelle listHTML(). Elle prendra deux arguments :
Un string représentant le nom de la liste
Un array représentant les élements de cette liste
Elle devra retourner une liste HTML. Chaque element de cette liste viendra du tableau passé en paramètre.
Exemple : Paramètre : Titre : Capitale Liste : ["Paris", "Berlin", "Moscou"] Résultat : <h3>Capitale</h3><ul><li>Paris</li><li>Berlin</li><li>Moscou</li></ul>
Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne entre les élements de la liste. Pas d'espace non plus entre le titre et la liste.
Si le titre est null et vide il faut que la fonction retourne null. Si l'array est vide, il faut que la fonction retourne null.
*/

function listHTML(string $listTitle, array $listElement) {

    if (empty($listTitle) || empty($listElement)) {
        return null;
    } else {
        
        echo '<h3>' . $listTitle . '</h3>';
        echo '<ul>';
    
        foreach ($listElement as $element) {
            // var_dump($element);
            echo '<li>' . $element . '</li>';
        }
    
        echo '</ul>';
    }

}

echo listHTML('Capitale', ['Paris', 'Berlin', 'Moscou']) . '<br />';

/* Exercice 21, Créer une fonction from scratch qui s'appelle remplacerLesLettres(). 
Elle prendra un argument de type string. Elle devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 
Exemple :
input : "Bonjour les amis" ==> Output : B0nj0ur l3s am1s
input : "Les cours de programmation Web sont trops cools" ==> Output : L3s c0urs d3 pr0grammat10n W3b s0nt tr0ps c00ls
*/

function remplacerLesLettres(string $arg) {

    return str_replace(
        array('e', 'i', 'o'), 
        array('3', '1', '0'), 
        $arg
    );
}

echo remplacerLesLettres("Les cours de programmation Web sont trops cools") . '<br />';
echo remplacerLesLettres("Bonjour les amis") . '<br />';

// Exercice 22, Créer une fonction from scratch qui s'appelle quelleAnnee(). Elle devra retourner un integer representant l'année actuelle.

function quelleAnnee() {

    return intval(date('Y'));
    // var_dump(intval(date('Y')));
}

echo quelleAnnee() . '<br />';

// Exercice 23, Créer une fonction from scratch qui s'appelle quelleDate(). 
// Elle devra retourner une string representant la date actuelle sous le format suivant DD/MM/YYYY
// Où DD représente le jour actuelle, MM le mois actuel et YYYY l'année actuelle. Les valeurs doivent être numérique et non au format String.

function quelleDate() {

    $date = getdate();

    echo $date['mday'] . '/' . $date['mon'] . '/' . $date['year']  . '<br />';
}

quelleDate();

// Exercice 24, Acronyme : Créez une fonction qui prend en argument un string et qui retourne les initiales de chaque mot en majuscule.

function acronyme(string $arg) {
    
    // On veut que chaque caractère de la chaîne de caractère soit au début d'un mot. Le meilleur moyen d'identifier ces caractères est de regarder les caractères qui sont précédés d'un espace
    // On veut matcher tout ce qui est précédé d'un espace, ou le premier caractère de la chaîne de caractère
    // On veut éviter le possible risque d'une ponctuation après un espacement, ou de multiples espacement, on veut juste matcher des lettres, donc on utilise le groupe [a-z]
    $expr = '/(?<=\s|^)[a-z]/';
    preg_match_all($expr, $arg, $matches);
    // var_dump($matches);

    $result = implode('', $matches[0]);
    // var_dump($result);
    
    $result = strtoupper($result);

    return $result;
}

echo acronyme('je vous aime plus que tout') . '<br />';

// Exercice 25, Créez une fonction qui prend en argument un string et qui inverse cette chaîne de caractères;

function inverseString(string $arg) {

    return strrev($arg);
}

echo inverseString('Karim tu es le GOAT') . '<br />';

// Exercice 26, Bataille Navale
/*
Image : https://user.oc-static.com/files/175001_176000/175985.png
Ci-dessus un tableau de 10 cases sur 10, vous devez créez une fonction qui prend deux arguments, le premier de type char le second de type int, ce seront les coordonnées horizontales et verticales du tableau.
Votre fonction doit retourner trois valeurs différentes:
[1] Si les coordonnées correspondent à une case grise, votre fonction doit afficher touché.
[2] Si les coordonnées correspondent à une case blanche, votre fonction doit afficher loupé.
[3] Si les coordonnées ne correspondent à aucune case, votre fonction doit afficher hors-jeu.
 Contrainte: Vous ne devez pas dépasser 30 lignes, avec un code correctement indenté.
*/

function batailleNavale(string $letters, int $numbers) {

    $plateau = [
        'a' => [1,1,1,1,1,1,1,1,1,1],
        'b' => [1,1,1,1,1,1,1,1,1,1],
        'c' => [1,1,1,1,1,1,1,1,2,1],
        'd' => [1,1,1,1,1,1,1,1,2,1],
        'e' => [1,1,1,1,1,1,1,1,2,1],
        'f' => [1,1,2,2,2,1,1,1,2,1],
        'g' => [1,1,1,1,1,1,1,1,1,1],
        'h' => [1,1,1,1,1,1,1,1,1,1],
        'i' => [1,1,1,1,2,2,1,1,1,1],
        'j' => [1,1,1,1,1,1,1,1,1,1],
    ];

    if (isset($plateau[strtolower($letters)][$numbers - 1])) {
        return $plateau[strtolower($letters)][$numbers - 1] == 2 ? 'Touché' : 'Loupé';
    } else {
        return 'Hors-jeu';
    }
}

echo batailleNavale('A', 1) . PHP_EOL;
echo batailleNavale('F', 3) . PHP_EOL;
echo batailleNavale('F', 4) . PHP_EOL;
echo batailleNavale('I', 6) . PHP_EOL;
echo batailleNavale('D', 9) . PHP_EOL;
echo batailleNavale('C', 1) . PHP_EOL;
echo batailleNavale('K', 1) . PHP_EOL;
echo '<br />';

// Exercice 27, Conjecture de Syracuse : Créez une fonction qui prend comme argument n'importe quel nombre entier supérieur à zéro, 
// si le nombre est pair divisez-le par 2, si le nombre est impair multipliez-le par 3 et ajoutez 1. 
// Au final votre fonction doit retourner une série de nombre, le dernier de ces nombres doit être le chiffre 1.
// N'importe quel nombre entier supérieur à zéro doit subir des opérations, même le chiffre 1. La suite de Syracuse du chiffre 1 est "4 2 1".

function syracuse(int $int) {

    if (!is_int($int) || $int <= 0) {
        return false;
    } else {
        
        $result = '';
        do {
            $int = $int % 2 == 0 ? $int / 2 : $int * 3 + 1;
            $result .= $int . ' ';
        }
        while ($int != 1);

        return $result;
    }

}

echo syracuse(5) . '<br />';
echo syracuse(1) . '<br />';

// Exercice 28, Triangle : Créez une fonction qui prend un argument de type int, cela déterminera la hauteur (en ligne) d'un triangle isocèle rempli d'étoiles
/* Exemple :
       **       
      ****      
     ******     
    ********    
   **********   
  ************  
 ************** 
****************
*/

function triangle(int $hauteur) {
   
    for ($i = 0; $i < $hauteur; $i++)
    {
        echo str_repeat('&nbsp; ',($hauteur-$i));
        for($j = 0; $j <= $i; $j++)
        {
            echo "**";
        }
    echo "<br />";
    }

}

echo triangle(10);

// Exercice 29, Suite de Fibonacci
// « Possédant initialement un couple de lapins, combien de couples obtient-on en douze mois si chaque couple engendre tous les mois un nouveau couple à compter du second mois de son existence ? »
// Creez une fonction qui prend un argument de type int, cela correspondra à la durée en mois de la reproduction des lapins, votre fonction doit retourner le nombre de couples.

function fibonacci(int $months) {
    
    $nouveauCouple = 0;
    $couple = 1;

    if ($months <= 0 || !is_int($months)) {
        return false;
    }
    if ($months == 1) {
        return $nouveauCouple + $couple;
    }
    for ($i = 1; $i < $months; $i++) {
        $result = $couple + $nouveauCouple;
        $nouveauCouple = $couple;
        $couple = $result;
    }
    return $result;

}

echo fibonacci(4) . PHP_EOL;
echo '<br />';

/* Exercice 30, Conjugaison
Créez une fonction qui prend une string en argument, l'argument sera un verbe régulier du premier groupe (finissant par "er"). Votre fonction doit conjuguer ce verbe au présent de l'indicatif.
Contrainte:
La chaîne passée en argument ne doit pas dépasser 15 caractères ni contenir d'espaces.
Vérifiez que la chaîne passée en argument se termine bien par "er".
*/

function conjugaison(string $verbes) {

    if (substr($verbes, -2) == "er") {
        if (strlen($verbes) <= 15) {
            if (preg_match("/ /", $verbes)) {
                echo 'Votre chaîne de caractères contient un espace.';
            } else {
                $verbesConjugaison = preg_replace('/([a-zA-Z])er$/', '$1', $verbes);
                $conjugaison = [
                    'Je ' . $verbesConjugaison . 'e',
                    'Tu ' . $verbesConjugaison . 'es',
                    'Il ' . $verbesConjugaison . 'e',
                    'Nous ' . $verbesConjugaison . 'ons',
                    'Vous ' . $verbesConjugaison . 'ez',
                    'Ils ' . $verbesConjugaison . 'ent',
    
                ];
                foreach ($conjugaison as $verbe) {
                    // var_dump($verbe);
                    echo $verbe . '<br />';
                }
            }
        }
        else {
            echo 'Votre chaîne de caractères ne doit pas dépasser 15 caractères.';
        }
    }
    else {
        echo 'Ce verbe n\'est pas un verbe du 1er groupe.';
    }
}

echo conjugaison('aimttttttttttttttttttter') . '<br />';
echo conjugaison('aimer') . '<br />';
echo conjugaison('ai mer') . '<br />';

/* Exercice 31, Table de multiplication binaire
Créez une fonction qui prend en argument un entier positif non nul, cela correspondra au nombre de lignes et de colonnes d'une table de multiplication. Tous les nombres affichés doivent être des nombres en base binaire. 
Vous devez séparer les nombres sur une ligne par des caractères de tabulation.
Remarque:
Vous pouvez utiliser la fonction decbin() si vous avez du mal à résoudre cet exercice, cependant il est possible et plus interessant de ne pas l'utiliser.
Exemple :
En entrée : 6
En sortie :
1       10       11       100       101       110
10      100      110      1000      1010      1100
11      110      1001     1100      1111      10010
100     1000     1100     10000     10100     11000
101     1010     1111     10100     11001     11110
110     1100     10010    11000     11110     100100
Commencez par la gauche et ajoutez un 0 ou un 1 à chaque case du tableau pour obtenir le nombre que vous souhaitez.
*/

function binaire(int $int) {

}

?>