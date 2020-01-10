<?php

$activites = array("Lundi" => "Php", "Mardi" => "Javascript", "Mercredi" => "Typescript", "Jeudi" => "Angular", "Vendredi" => "SQL", "Samedi" => "Python", "Dimanche" => "Tout");

//deux dimensions
$pierre = array("1" => "Php", "2" => "Javascript", "3" => "Python");
$paul = array("1" => "Javascript", "2" => "Css", "3" => "Php");
$jacques = array("1" => "Java", "2" => "Php", "3" => "Javascript");

$preferences = array();
?>

<h1>Modifié</h1>

<?php
$activites["Dimanche"] = "nothing";
var_dump($activites);
?>

<h1>Fusion</h1>
<?php
$preferences = array_merge($pierre, $paul, $jacques);
var_dump($preferences);

$preferencesAssoc = ["Pierre" => $pierre, "Paul" => $paul, "Jacques" => $jacques];
var_dump($preferencesAssoc);

//to find the frequency of values
//$frequency = array_count_values($preferences);
?>