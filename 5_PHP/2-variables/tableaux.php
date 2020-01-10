<?php

$tab = array(15, 22);
$tabCrochets = [15, 22];

var_dump($tab);
var_dump($tabCrochets);
?>

<h1>Ajouter un élément</h1>
<?php
$jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
array_push($jours, "Dimanche");
var_dump($jours);
?>

<h1>Supprimer un élément</h1>
<?php
unset($jours[count($jours) - 1]);
//or:
//$jours_slice = array_slice($jours,0,count($jours)-1);
//var_dump($jours_slice);
var_dump($jours);
?>