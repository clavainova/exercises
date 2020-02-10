<?php

//Base de données
define("BDD_SERVER", "localhost");
define("BDD_DATABASE", "security");
define("BDD_USER", "root");
define("BDD_PWD", "");

//chemins
define('ROOT',str_replace('/index.php','',$_SERVER["SCRIPT_NAME"]));
define('BASEREF', 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["SCRIPT_NAME"]);
define('ASSETS_PATH',ROOT."/assets");
define('STYLESHEET_DIR_PATH',ASSETS_PATH."/css");
define('IMAGES_PATH',ASSETS_PATH."/images");
define("SCRIPTS_PATH",ASSETS_PATH."/js");
define('TEMPLATE',"template");
define('TEMPLATE_PARTS',TEMPLATE.'/template-parts');
define('TEMPLATE_PAGES',TEMPLATE.'/pages');
define('ROUTES',include 'config/routes.php');

//gestion de la session et du cookie de session 
session_start();
if (!array_key_exists('token', $_COOKIE) ) {
    $_SESSION['pseudo'] = 'Nadine';
    $_SESSION['token'] ="2e81680e2d9727b068ebba0c9975425b";
    setcookie("token", $_SESSION['token'], time() + 365*24*3600);
    setcookie('pseudo', $_SESSION['pseudo'], time() + 365*24*3600);     
}
else {    
    $_SESSION['pseudo'] = $_COOKIE['pseudo'];
    $_SESSION['token'] = $_COOKIE['token'];
}

?>