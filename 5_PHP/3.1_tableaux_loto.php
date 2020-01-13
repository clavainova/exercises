<h1>Echauffement : remplir un tableau</h1>
<?php

$numbers = fillTable();
var_dump($numbers);

function fillTable()
{
    $arr = array();
    for ($i = 1; $i < 50; $i++) {
        array_push($arr, $i);
    }
    return $arr;
}
?>

<h1>Tirage</h1>

<?php
function getFiveNum()
{
    $arr = array();
    for ($i = 0; $i < 5; $i++) {
        array_push($arr, rand(1, 49));
    }
    return $arr;
}

$allgen = array();
$loopcount = 10;

for ($i = 0; $i < $loopcount; $i++) {
    $nums = array();
    $nums = getFiveNum();
    $allgen = array_merge($allgen, $nums);
}

// var_dump($allgen);

$values = array_count_values($allgen);
arsort($values);
echo "frequency: ";
$counts = array_count_values($allgen);
arsort($counts);
var_dump($counts);
?>

<h1>Champagne</h1>

<?php
$freq = 0;
$wins = array();
$mynum = [2, 4, 23, 42, 49];
for ($i = 0; $i < count($allgen); $i++) {
    for ($j = 0; $j < count($mynum); $j++) {
        if ($allgen[$i] == $mynum[$j]) {
            array_push($wins, $mynum[$j]);
            $mynum[$j] = 0; //so you can't get two for one number
            $freq++;
        }
    }
}
echo "you got ", $freq, " matches! ", "they were: ";
var_dump($wins);
if ($freq == 5) {
    echo " you win!";
} else {
    echo (" you lose! ");
}
?>