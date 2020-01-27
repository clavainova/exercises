<?php

try {
    unset($_SESSION['username']);
    unset($_SESSION['pass']);
} catch (Exception $e) {
    //session not already started
}

if (($_GET["username"] == null) || ($_GET["pass"] == null)) {
    echo "no password or no username entered<br>";
} else {
    $_SESSION["username"] = $_GET["username"];
    $_SESSION["pass"] = $_GET["pass"];
}

header("Location: index.php");
