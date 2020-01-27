<?php

if (($_GET["username"] == null) || ($_GET["pass"] == null)) {
    echo "no password or no username entered<br>";
} else {
    session_start();
    $_SESSION["username"] = $_GET["username"];
    $_SESSION["pass"] = $_GET["pass"];
}
header("Location: index.php");
