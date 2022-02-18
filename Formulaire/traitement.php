<?php

$v = $_POST['text'];
echo $v. "<br>";

$w = $_POST['calendrier'];
echo $w. "<br>";

$aujourdhui = date("Y-m-d");
$diff = date_diff(date_create($w), date_create($aujourdhui));
echo 'Votre age est '.$diff->format('%y')."<br>";

if ($diff->format('%y') >= 18) {
    header('Location: https://www.simplon-charleville.fr/');
} else {
    header('Location: https://www.gulli.fr/');
}

?>