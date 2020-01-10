<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    //Afficher une variable
    $hello = "Hello";
    $world = "World";
    //Afficher la variable $hello//
    echo $hello, $world;
    echo '<br>';

    //Concaténer des variables avec du texte
    $helloworld = $hello .= $world;
    echo $helloworld;
    echo '<br>';

    //Variables numériques
    $amount = 15.2;
    $tax = $amount * 0.085;
    echo "montant : ", $amount, " ttc : ", $tax;

    ?>
</body>

</html>