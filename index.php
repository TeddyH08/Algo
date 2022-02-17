<?php

echo ("====== EXO n°1 ======<br><br>");
echo ("Prendre une variables en php (la déclaration d'une variable se fait avec un $ en php), affecter une valeur à cette variable et l'afficher <br>");

$variable = 5;
echo $variable;

echo ("<br><br><br>====== EXO n°2 ======<br><br>");
echo ("Prendre deux variables en php, affecter une valeur à chaque variable, afficher le résultat de l'addition, de la soustraction, et de la multiplication de ces deux variables <br>");

$c = 4;
$d = 3;
echo "Addition ". ($c + $d) ."<br>";
echo "Soustraction ". ($c - $d) ."<br>";
echo "Multiplication ". ($c * $d) ."<br>";

echo ("<br><br><br>====== EXO n°3 ======<br><br>");
echo ("Prendre une variable en php et affecter une chaine de caracètere à cette variable et l'afficher <br>");

$chaine = "Salut ma couille";
echo $chaine, "<br>";

echo ("<br><br><br>====== EXO n°4 ======<br><br>");
echo ("Afficher à l'aide des deux variables déjà défini le texte contenu dans les variables à l'aide d'une concaténation (un espace est souhaitée entre les deux variables) <br>");
$a = "coucou";
$b = "petite perruche";
echo $a. ' ' .$b;

echo ("<br><br><br>====== EXO n°5 ======<br><br>");
echo ("Permutter le contenu de la variable a et de la variable b <br>");
$a = 20 ;
$b = 30 ;
$c = $a ;
$a = $b ;
$b = $c ;

echo $a. ' ' .$b;


echo ("<br><br><br>====== EXO n°6 ======<br><br>");
echo ("A partir d'un algorithme, définir dans tout les cas possibles quels chiffre est le plus grand (vous pouvez changer les valeurs des variables a et b pour tester toutes les possiblités) <br>");
$a = 40 ;
$b = 40 ;

if ($a < $b) {
    echo $a. " < " .$b;
} else if ($a > $b) {
    echo $a. " > " .$b;
} else {
    echo $a. " = " .$b;
}


echo ("<br><br><br>====== EXO n°7 ======<br><br>");
echo ("faire une fonction qui prend en parametres deux variables ( a et b par exemple ) et qui définis quel chiffre est le plus grand <br>");
$a = 20 ;
$b = 30 ;

function diffnb($a,$b) {
    if ($a < $b) {
        echo $a. " < " .$b;
    } else if ($a > $b) {
        echo $a. " > " .$b;
    } else {
        echo $a. " = " .$b;
    }
}

diffnb($a,$b);



echo ("<br><br><br>====== EXO n°8 ======<br><br>");
echo ("afficher un nombre aléatoire à partir de la fonction rand() <br>");

$x = rand(0, 100). "<br>";

echo $x;

echo rand(10, 50);

echo ("<br><br><br>====== EXO n°9 ======<br><br>");
echo ("afficher 10 nombre aléatoire à partir de la fonction rand() en utilisant une boucle <br>");

for ($i=0; $i < 10; $i++) { 
    echo rand(0, 100). "<br>";
}


echo ("<br><br><br>====== EXO n°10 ======<br><br>");
echo ("afficher des nombres aléatoires compris entre 1 et 100 et s'arreter quand le dernier chiffre est >90 <br>");

$i = 0;

while ($i <= 90) {
    echo $i = rand(1, 100). "<br>";
}