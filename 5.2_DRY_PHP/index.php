<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Inclusion de code Html -->
    <?php
        include 'titre.php';
    ?>

    <!-- Inclusion de code Php -->
    <?php
        include 'fonctions.php';
        echo uneFonction();
        echo "<br>";
        echo uneAutreFonction();
    ?>

</body>
</html>