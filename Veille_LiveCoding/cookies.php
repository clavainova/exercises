<html>
<body>

<?php
//make cookie
$cookie_name = "user";
$cookie_value = "SIMPLON";

//check cookies enabled
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}

//set cookie
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

//pour modifier, définissez à nouveau avec setcookie (); écraser ce qui précède

//pour supprimer :
setcookie("user","",time()-3600);
//date d’expiration dans le passé
    echo "<br><br>Cookie '" . $cookie_name . "' is deleted!<br>";
?>
</body>
</html>