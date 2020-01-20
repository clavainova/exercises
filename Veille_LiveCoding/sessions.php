<!DOCTYPE html>
<html>
<body>

<?php
// Start the session
session_start();

// Set session variables
$_SESSION["couleur"] = "lilac";
$_SESSION["animal"] = "chien";
echo "Session variables are set.<br>";

//read them
echo "Favorite color is " . $_SESSION["couleur"] . ".<br>";
echo "Favorite animal is " . $_SESSION["animal"] . ".<br>";

//change them
$_SESSION["couleur"] = "vert";
print_r($_SESSION);

//destroy the session
session_unset();
session_destroy();
?>

</body>
</html>