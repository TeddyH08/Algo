<?php

echo ("<br><br><br>====== EXO n°11 ======<br><br>");
echo ("Afficher une variable entrée manuellement par l'utilisateur<br>");

?>

<form method="post">
    Variable  :  <input type="text" name="var" /><br />
    <input type="submit" name="submit" value="Envoie!" />
</form>

<?php

echo $_POST['var'];

echo ("<br><br><br>====== EXO n°12 ======<br><br>");
echo ("Demander à l'utilisateur d'entrer un nombre entier et afficher si ce chiffre est pair ou impair<br>");

?>

<form method="post">
    Nombre  :  <input type="number" name="nomb" /><br />
    <input type="submit" name="submit" value="Envoie!" />
</form>

<?php

$v = $_POST['nomb'];
echo $v. "<br>";

if ($v % 2 == 0) {
    echo "votre nombre est pair";
} else {
    echo "Votre nombre est impair";
}

echo ("<br><br><br>====== EXO n°13 ======<br><br>");
echo ("Même exercice que n°12, mais rajouter un message d'erreur si l'utilisateur n'entre pas un nombre entier<br>");

?>

<form method="post">
    Nombre  :  <input type="text" name="text" /><br />
    <input type="submit" name="submit" value="Envoie!" />
</form>

<?php

$v = $_POST['text'];
echo $v. "<br>";

if (is_numeric($v)) {
    if (is_int($v)) {
        if ($v % 2 == 0) {
            echo "votre nombre est pair";
        } else {
            echo "Votre nombre est impair";
        }
    } else {
        echo "Ce n'est pas un entier";
    }
} else {
    echo "Erreur, ce n'est pas un nombre" ;
}

echo ("<br><br><br>====== EXO n°14 ======<br><br>");
echo ("Demander à l'utilisateur d'entrer une année, et afficher si cette année est sextile ou bissextile<br>");




echo ("<br><br><br>====== EXO n°14 ======<br><br>");
echo ("Demander à l'utilisateur d'entrer une date, et afficher si cette date est valide ou non<br>");
/* Code à ajouter ci-dessous */

?>